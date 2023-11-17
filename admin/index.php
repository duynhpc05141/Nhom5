<?php

include "../DAO/article.php";
include "header.php";
include "../DAO/loai.php";
include "../DAO/binh-luan.php";
include "../DAO/thong-ke.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            /** 
         * TODO:Pages 
         * */
        case 'home':

            include "home.php";
            break;
            /** 
             * TODO:Category 
             * */
        case 'category_add':
            if ((isset($_POST['add'])) && ($_POST['add'])) {
                $ten_loai = $_POST['name'];
                loai_insert($ten_loai);
                $alert = '<div class="alert alert-success" role="alert">
                Thêm thành công!
              </div>';
            }
            include "./category/add.php";
            break;
        case 'category_list':
            $list_loai = loai_select_all();
            include "./category/list.php";
            break;
        case 'category_delete':
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                loai_delete($_GET['category_id']);
            }
            $list_loai = loai_select_all();
            include "./category/list.php";
            break;
        case 'category_edit':
            if (isset($_GET['category_id']) && ($_GET['category_id'] > 0)) {
                $edit = loai_select_by_id($_GET['category_id']);
            }
            include "./category/edit.php";
            break;

        case 'category_update':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $name = $_POST['category_name'];
                $id = $_POST['category_id'];
                loai_update($id, $name);
            }
            $list_loai = loai_select_all();
            include "./category/list.php";
            break;
            /** 
             * TODO: Articles 
             * */
        case 'article-add':
            if (isset($_POST['add']) && ($_POST['add'])) {
                $category_id = $_POST['category_id'];
                $content = $_POST['editor1'];
                $name = $_POST['article_name'];
                $image_paths = array(); // Khởi tạo mảng lưu trữ đường dẫn ảnh
                $allowed_image_count = 2; // Số lượng ảnh tối đa được tải lên
                if (empty($content)) {
                    $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Nội dung không được để trống.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
                } else {
                    if (!empty($_FILES['files']['name'][0])) {
                        $file_count = count($_FILES['files']['name']);

                        for ($i = 0; $i < min($file_count, $allowed_image_count); $i++) {
                            $file_name = $_FILES['files']['name'][$i];
                            $file_tmp = $_FILES['files']['tmp_name'][$i];
                            $file_error = $_FILES['files']['error'][$i];

                            // Kiểm tra loại tệp tin
                            $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
                            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
                            if (!in_array(strtolower($file_extension), $allowed_types)) {
                                echo "File " . $file_name . " is not an image.";
                                continue; // Bỏ qua tệp tin không phải là hình ảnh
                            }

                            // Đảm bảo tên tệp tin duy nhất
                            $target_dir = "../img/";
                            $target_file = $target_dir . uniqid() . "_" . basename($file_name);

                            if (move_uploaded_file($file_tmp, $target_file)) {
                                // Xử lý khi tải ảnh lên thành công
                                $image_paths[] = $target_file; // Thêm đường dẫn ảnh vào mảng
                            } else {
                                // Xử lý lỗi khi di chuyển file
                                echo "Sorry, there was an error uploading your file.";
                            }
                        }
                    }

                    if (!empty($image_paths)) {
                        // Chuyển mảng đường dẫn ảnh thành một chuỗi để lưu vào cột trong CSDL
                        $image_paths_string = implode(',', $image_paths);
                        article_insert_from_editor($name, $content, $image_paths_string, $category_id);
                    } else {
                        // Không có file nào được tải lên
                        article_insert_from_editor($name, $content, "", $category_id);
                    }
                }
            }

            include "article/add.php";
            break;
        case 'article-list':
            if (isset($_POST['go']) && ($_POST['go'])) {

                $category_id = $_POST['category_id'];
            } else {

                $category_id = 0;
            };
            $list_loai = loai_select_all();
            $listArticle = article_select_all($category_id);
            include "article/list.php";
            break;
        case 'article-delete':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                article_delete($_GET['id']);
            }
            $listArticle = article_select_all("", 0);
            include "article/list.php";
            break;
        case 'article-edit':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $article = article_select_by_id($_GET['id']);
            }
            $list_loai = loai_select_all();
            include "article/edit.php";
            break;
        case 'article-update':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $category_id = $_POST['category_id'];
                $content = $_POST['editor1'];
                $id = $_POST['article_id'];
                $name = $_POST['article_name'];

                $image_paths = array();

                $file_count = count($_FILES['files']['name']);

                // Chỉ xử lý khi có tải lên ít nhất một ảnh
                if ($file_count > 0) {
                    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');

                    for ($i = 0; $i < $file_count; $i++) {
                        $file_name = $_FILES['files']['name'][$i];
                        $file_tmp = $_FILES['files']['tmp_name'][$i];
                        $file_error = $_FILES['files']['error'][$i];


                        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
                        if (!in_array(strtolower($file_extension), $allowed_types)) {
                            echo "File " . $file_name . " is not an image.";
                            continue;
                        }


                        $target_dir = "../img/";
                        $target_file = $target_dir . uniqid() . "_" . basename($file_name);

                        if (move_uploaded_file($file_tmp, $target_file)) {

                            $image_paths[] = $target_file;
                        } else {

                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                }


                $old_image_paths = article_get_image_paths_by_id($id);


                if (!empty($image_paths)) {
                    $image_paths_string = implode(',', $image_paths);
                } else {

                    $image_paths_string = implode(',', $old_image_paths);
                }


                article_update($id, $name, $content, $image_paths_string, $category_id);
            }

            $listArticle = article_select_all("", 0);



            include "article/list.php";
            break;
        case 'article-review':
            if (isset($_GET['id']) && ($_GET['id'])) {
                $id = $_GET['id'];
            } else {
                $id = 0;
            }
            $reviewArt = article_select_by_id($id);
            include "article/review.php";
            break;
            /** 
             * TODO: Customer
             * */
        case 'customer-add':
            if (isset($_POST['addCus']) && ($_POST['addCus'])) {
                $user = $_POST['user'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $role_id = $_POST['role_id'];

                customer_insert_admin($user, $password, $email, $address, $phone, $role_id);


                $alert = '<div class="alert alert-success" role="alert">
                    Thêm thành công!
                  </div>';
            }
            include "customer/add.php";
            break;
        case 'customer-list':

            $listCustomer = customer_select_all();

            include "customer/list.php";
            break;
        case 'ac-delete':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                customer_delete($_GET['id']);
            }
            $listCustomer = customer_select_all();

            include "customer/list.php";
            break;
        case 'ac-edit':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $customer = customer_select_by_id_admin($_GET['id']);
            }

            include "customer/edit.php";
            break;
        case 'customer-update':
            if (isset($_POST['ac-update']) && ($_POST['ac-update'])) {

                $id = $_POST['id'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $role_id = $_POST['role_id'];
                customer_update($id, $user, $password, $email, $address, $phone, $role_id);
            }

            $listCustomer = customer_select_all();
            include "customer/list.php";
            break;
            /** 
             * TODO: Comment
             * */
        case 'comment':
            $list_comment = comment_select_all(0);
            include "comment/list.php";
            break;
        case 'deletecm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                comment_delete($_GET['id']);
            }
            $list_comment = comment_select_all(0);

            include "comment/list.php";
            break;
            /** 
             * TODO: Static
             * */
        case 'static':
            $listStatic = stactic_all();
            include "static/list.php";
            break;
        case 'chart':
            $listStatic = stactic_all();
            include "static/chart.php";
            break;
            /** 
             * TODO: Bill
             * */
        case 'bill':
            $listBill = loadall_bill(0);
            include "bill/list.php";
            break;
        case 'bill-delete':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                bill_delete($_GET['id']);
            }
            $listBill = loadall_bill(0);
            include "bill/list.php";
            break;
        case 'bill-edit':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $bill = bill_select_by_id($_GET['id']);
            }


            include "bill/edit.php";
            break;
        case 'update-bill':

            if (isset($_POST['update-bill']) && ($_POST['update-bill'])) {
                $id = $_POST['id'];
                $billStatus = $_POST['bill_status'];
                bill_update($id, $billStatus);
            }


            $listBill = loadall_bill(0);
            include "bill/list.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
?>
<script src="https://kit.fontawesome.com/55a9fa42b8.js" crossorigin="anonymous"></script>
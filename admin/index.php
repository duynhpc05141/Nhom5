<?php

include "header.php";
include "../DAO/loai.php";
include "../DAO/binh-luan.php";


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
             * TODO: Product 
             * */
        case 'product-add':
            if (isset($_POST['add']) && ($_POST['add'])) {
                $category_id = $_POST['category_id'];
                $namePro = $_POST['name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                 $filename = $_FILES['img']['name'];
                 $target_dir="img/";
                 $target_file=$target_dir . basename($_FILES["img"]['name']);
                 if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                  //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                  } else {
                  //  echo "Sorry, there was an error uploading your file.";
                  };
                  product_insert($namePro,$price,$filename,$description,$category_id);
                  $listCategory = loai_select_all();
                  
                $alert = '<div class="alert alert-success" role="alert">
                    Thêm thành công!
                  </div>';
            }
            include "product/add.php";
            break;
        case 'product-list':
            if (isset($_POST['go']) && ($_POST['go'])) {
                $keyword=$_POST['keyword'];
                $category_id=$_POST['category_id'];
               
            }else{
                $keyword='';
                $category_id=0;
            };
            $listCategory = loai_select_all();
            $listProduct = product_select_all($keyword,$category_id);
            include "product/list.php";
            break;
        case 'product-delete':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                product_delete($_GET['id']);
            }
            $listProduct = product_select_all("",0);
            include "product/list.php";
            break;
        case 'product-edit':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $product = product_select_by_id($_GET['id']);
            }
            $listCategory = loai_select_all();
            include "product/edit.php";
            break;
        case 'product-update':
            if (isset($_POST['update']) && ($_POST['update'])) {
                $category_id = $_POST['category_id'];
                $id = $_POST['id'];
                $namePro = $_POST['name'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $filename = $_FILES['img']['name'];
                $target_dir="img/";
                $target_file=$target_dir . basename($_FILES["img"]['name']);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                 //  echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                 } else {
                 //  echo "Sorry, there was an error uploading your file.";
                 };
                product_update($id,$namePro,$price,$filename,$description,$category_id);
                
            }
            
            $listProduct = product_select_all("",0);
            include "product/list.php";
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
                 
                 customer_insert_admin($user,$password,$email,$address,$phone,$role_id);
                
                  
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
                customer_update($id,$user,$password,$email,$address,$phone,$role_id);
                
            }
            
            $listCustomer = customer_select_all();
            include "customer/list.php";
            break;
             /** 
             * TODO: Comment
             * */
        case 'comment':
            case 'comment_list':
                extract($_REQUEST);
                if (isset($_REQUEST)) {
                    $list_comment = comment_select_all();
                    include "./comment/list.php";
                }
                break;
            case "comment_detail":
                extract($_REQUEST);
                if (isset( $_GET["article_id"]) && ($_GET["article_id"])) {
                    $list_comment = comment_select_by_article($article_id);
                    include "./comment/detail.php";
                }
                break;

            case 'comment_delete':
                if (isset($_GET['article_id']) && ($_GET['comment_id'] > 0) && ($_GET['article_id'])) {
                    $article_id = $_GET['article_id'];
                    comment_delete($_GET['comment_id']);
                }
                $list_comment = comment_select_by_article($article_id);
                include "./comment/detail.php";
                break;
                 /** 
       * TODO: Static
       * */
      case 'static':
        $listStatic= stactic_all();
         include "static/list.php";
         break;
      case 'chart':
        $listStatic= stactic_all();
         include "static/chart.php";
         break;
                 /** 
       * TODO: Bill
       * */
      case 'bill':
      $listBill=loadall_bill(0);
         include "bill/list.php";
         break;
      case 'bill-delete':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            bill_delete($_GET['id']);
        }
        $listBill=loadall_bill(0);
         include "bill/list.php";
         break;
      case 'bill-edit':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {

         $bill= bill_select_by_id($_GET['id']);
        }
        
        
         include "bill/edit.php";
         break;
      case 'update-bill':

        if (isset($_POST['update-bill']) && ($_POST['update-bill'])) {
            $id = $_POST['id'];
            $billStatus = $_POST['bill_status'];
            bill_update($id, $billStatus);
            
        }
        
        
        $listBill=loadall_bill(0);
         include "bill/list.php";
         break;
     
               
    }
}else{
    include "home.php";
}

include "footer.php";
?>
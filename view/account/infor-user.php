<!DOCTYPE html>
<html>

<head>
  <title> Login Form</title>
  <link rel="stylesheet" href="css/style.css?php echo time(); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <style>
    a {
      text-decoration: none;
    }

    .box {

      margin: 0 auto;
      width: 800px;
      color: #efedef;
      font-family: "Roboto", Arial, Helvetica, sans-serif;
      font-size: 16px;
      font-weight: 300;
      letter-spacing: 0.01em;
      line-height: 1.6em;

    }

    h1 {
      font-size: 40px;
      line-height: 0.8em;
      color: rgba(255, 255, 255, 0.2);
    }

    .made-with {
      background: #fd264f;
      color: #fff;
      display: block;
      font-size: 12px;
      line-height: 1em;
      margin: 0;
      padding: 5px 110px;
      position: fixed;
      top: 20px;
      right: -100px;
      text-align: center;
      text-decoration: none;
      transform: rotate(45deg);
    }

    .documentation {
      color: #fd264f;
    }

    button:focus,
    input:focus,
    textarea:focus,
    select:focus {
      outline: none;
    }

    .tabs {
      display: block;
      display: -webkit-flex;
      display: -moz-flex;
      display: flex;
      -webkit-flex-wrap: wrap;
      -moz-flex-wrap: wrap;
      flex-wrap: wrap;
      margin: 0;
      overflow: hidden;
    }

    .tabs [class^="tab"] label,
    .tabs [class*=" tab"] label {
      color: black;
      cursor: pointer;
      display: block;
      font-size: 1.1em;
      font-weight: 300;
      line-height: 1em;
      padding: 2rem 0;
      text-align: center;
    }

    .tabs [class^="tab"] [type="radio"],
    .tabs [class*=" tab"] [type="radio"] {
      border-bottom: 1px solid rgba(239, 237, 239, 0.5);
      cursor: pointer;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      display: block;
      width: 100%;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    .tabs [class^="tab"] [type="radio"]:hover,
    .tabs [class^="tab"] [type="radio"]:focus,
    .tabs [class*=" tab"] [type="radio"]:hover,
    .tabs [class*=" tab"] [type="radio"]:focus {
      border-bottom: 1px solid #fd264f;
    }

    .tabs [class^="tab"] [type="radio"]:checked,
    .tabs [class*=" tab"] [type="radio"]:checked {
      border-bottom: 2px solid #fd264f;
    }

    .tabs [class^="tab"] [type="radio"]:checked+div,
    .tabs [class*=" tab"] [type="radio"]:checked+div {
      opacity: 1;
    }

    .tabs [class^="tab"] [type="radio"]+div,
    .tabs [class*=" tab"] [type="radio"]+div {
      display: block;
      opacity: 0;
      padding: 2rem 0;
      width: 90%;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    .tabs .tab-2 {
      width: 50%;
    }

    .tabs .tab-2 [type="radio"]+div {
      width: 200%;
      margin-left: 200%;
    }

    .tabs .tab-2 [type="radio"]:checked+div {
      margin-left: 0;
    }

    .tabs .tab-2:last-child [type="radio"]+div {
      margin-left: 100%;
    }

    .tabs .tab-2:last-child [type="radio"]:checked+div {
      margin-left: -100%;
    }


    .user-row {
      margin-bottom: 14px;
    }

    .table-user-information>tbody>tr {
      border-top: 1px solid #ccc;
    }

    .table-user-information>tbody>tr:first-child {
      border-top: 0;
    }

    .table-user-information>tbody>tr>td {
      border-top: 0;
    }

    .panel {
      margin-top: 20px;
    }
  </style>

  <?php

  if (isset($_SESSION['user_name']) && is_array($_SESSION['user_name'])) {
    extract($_SESSION['user_name']);
    $img = './img/' . $avatar;
    if (file_exists($img)) {
      $hinh = '<img src=" ' . $img . '" alt="Hình ảnh đại diện"  img-circle img-responsive>';
    } else {
      $hinh = '0';
    };
  }
  ?>
  <div class="box shadow mb-5 mt-5">

    <div class="tabs">
      <div class="tab-2">
        <label for="tab2-1">Tài khoản</label>
        <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
        <div style="margin-left: 50%;">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title"><?= $user_name ?></h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-3 col-lg-3 " align="center"> <?= $hinh ?> </div>
                      <div class=" col-md-9 col-lg-9 ">
                        <table class="table table-user-information">
                          <tbody>
                            <tr>
                              <td>Email:</td>
                              <td><?= $email ?></td>
                            </tr>
                            <tr>
                              <td>Số điện thoại:</td>
                              <td><?= $user_phone ?></td>
                            </tr>


                            <a href="index.php?act=user_edit" class="genric-btn " style="color: #fc3f00;"><i class="fa-regular fa-pen-to-square"></i></a>


                            </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-2 ">
        <label for="tab2-2">Bài viết yêu thích</label>
        <input id="tab2-2" name="tabs-two" type="radio">
        <div>
          <?php
          foreach ($favofuser as $key) {
            extract($key);
            $anh = '../img/' . $img;
            $image_paths_array = explode(',', $img);


            $anh = '../img/' . $img;
            $image_paths_array = explode(',', $img);
            $image_html_locations = []; // Khởi tạo mảng chứa thẻ hình ảnh hoặc thông báo

            foreach ($image_paths_array as $image_path) {
              $full_image_path = './img/' . trim($image_path);

              if (file_exists($full_image_path)) {
                $image_html_locations[] = '<img width=100px src="' . $full_image_path . '" alt="Hình ảnh bài viết">';
              } else {
                $image_html_locations[] = 'Chưa có ảnh được chọn';
              }
            }
            $detail = "index.php?act=detail&id=" . $article_id;
            echo '
  <ul class="list-group mb-3 mt-2">
  <a href="' . $detail . '">
  <li class="list-group-item d-flex align-center">
  ' . $image_html_locations[0] . '
  <h5 class="m-lg-2">' . $article_name . '</h5>
  <p>' . $created_at . '</p>
  </li>
  </a>
  </ul>
  
  ';
          }

          ?>

        </div>
      </div>
    </div>
  </div>




  <?php
  ob_end_flush();
  ?>
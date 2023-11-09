
<?php

function viewcart($del)
{
  $total = 0;
  $i = 0;
  if (empty($_SESSION['mycart'])) {
    echo '<img src="view\img\emptycart.avif">'; // Hiển thị thông báo nếu giỏ hàng trống
    return;
  }
  if ($del == 1) {
    $delete_th = '<th class="text-center">Xóa</th>';
  } else {
    $delete_th = "";
    $delete_td = "";
  }
  echo '
  <thead>
  <tr>
      <th class="text-center">Hình ảnh</th>
      <th class="text-center">Tên sản phẩm</th>
      <th class="text-center">Đơn giá</th>
      <th class="text-center">Số lượng</th>
      <th class="text-center">Tổng</th>
      ' . $delete_th . '
  </tr>
</thead>
  ';
  foreach ($_SESSION['mycart'] as $cart) {
    $hinh = $cart[2];
    $totalMoney = $cart[3] * $cart[4];
    $total += $totalMoney;
    $deleteCart = '<a href="index.php?act=deleteCa&id=' . $i . '"><input class="btn btn-danger d-none" type="button" ><i class="fa-solid fa-trash-can text-danger"></i></a>';
    if ($del == 1) {
      $delete_th = '<th class="text-center">Xóa</th>';
      $delete_td = '<td class="text-center ">' . $deleteCart . '</td>';
    } else {
      $delete_th = "";
      $delete_td = "";
    }
    echo '
      <tr>
          <td class="text-center"><img src="' . $hinh . '" alt="" width="100px"></td>
          <td class="text-center">' . $cart[1] . '</td>
          <td class="text-center">' . $cart[3] . '</td>
          <td class="text-center">' . $cart[4] . '</td>
          <td class="text-center">' . $totalMoney . '</td>
          ' . $delete_td . '
      </tr>';

    $i += 1;
  }
  echo '<h4>Tổng cộng: ' . $total . '</h4>';
}

function totalOder()
{
  $total = 0;

  foreach ($_SESSION['mycart'] as $cart) {

    $totalMoney = $cart[3] * $cart[4];
    $total += $totalMoney;
  }
  return $total;
}

function order_insert($id_user,$name, $address, $email, $phone, $billMethod, $totalOrder, $dateOrder)
{
    $sql = "INSERT INTO bill(id_user,bill_name,bill_address, bill_email, bill_phone, bill_method, bill_total, date) VALUES ('$id_user','$name', '$address', '$email','$phone','$billMethod' ,'$totalOrder',  '$dateOrder')";
    return pdo_execute_returnLastInsertId($sql);
}


function insert_cart($iduser, $idpro, $img, $name, $price, $quantity, $total, $idBill)
{
  
  $sql = "INSERT INTO cart(iduser, idpro, img, name, price, quantity, total, id_bill) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
  return pdo_execute($sql, $iduser, $idpro, $img, $name, $price, $quantity, $total, $idBill);
}

function loadone_bill($id)
{
  $sql = "SELECT * FROM bill WHERE id = " . $id;
  $bill = pdo_query($sql);
  return $bill;
}

function loadone_cart($idBill)
{
  $sql = "SELECT * FROM cart WHERE id_bill = " . $idBill;
  $bill = pdo_query($sql);
  return $bill ;
}
function loadone_cart_count($idBill)
{
  $sql = "SELECT * FROM cart WHERE id_bill = " . $idBill;
  $bill = pdo_query($sql);
  return  sizeof($bill);
}
function loadall_bill($id_user)
{
  $sql = "SELECT * FROM bill WHERE 1  ";
  if($id_user>0 )$sql .=" AND id_user = ".$id_user ;
  $sql .=" ORDER BY id desc";
  $mybill = pdo_query($sql);
  return $mybill;
}
function getstastus($tt){
  switch ($tt) {
    case '0':
     $tt='Đơn hàng mới';
      break;
    case '1':
     $tt='Đang xử lí';
      break;
    case '2':
      $tt='Đang giao hàng';
      break;
    case '3':
      $tt='Đã giao hàng';
      break;
    
    
    default:
     $tt='Đơn hàng mới';
      break;
     
  }
   return $tt;
}
function bill_update($id, $billStatus) {
  $sql = "UPDATE bill SET bill_status=? WHERE id=?";
  pdo_execute($sql, $billStatus, $id);
}

function bill_delete($id){
  $sql = "DELETE FROM bill WHERE  id=?";
  if(is_array($id)){
      foreach ($id as $ma) {
          pdo_execute($sql, $ma);
      }
  }
  else{
      pdo_execute($sql, $id);
  }
}

function bill_select_by_id($id){
  $sql = "SELECT * FROM bill WHERE id=?";
  return pdo_query_one($sql, $id);
}
?>
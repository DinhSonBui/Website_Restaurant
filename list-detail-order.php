<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết đơn hàng</title>
    <link rel="stylesheet" href="assets/css/list.css" />
    <link
    href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
    rel="stylesheet"
  />
</head>
<body>
<?php require_once "connect.php"; ?>
    <section class="home-content">
      <h1 class="heading">Chi tiết đơn hàng</h1>

      <div class="list-products">
        <div style="overflow-x: auto">
            <table>
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Mã đơn hàng</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền </th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $total =0;
                      if(isset($_GET['code-cart']))
                      {
                          $code_cart = $_GET['code-cart'];
                      }
                      $sql_list_detail_order = $conn -> query("SELECT * FROM tbl_cart_detail WHERE code_cart = $code_cart");
                      
                      while($row_list_detail_order = mysqli_fetch_assoc($sql_list_detail_order)){

                        $sql_product ="Select *  From tbl_products Where id_product = '".$row_list_detail_order['id_product']."'";
                        $result_product =$conn->query($sql_product);
                        if($result_product->num_rows >0){
                            $row_product= $result_product->fetch_array();
                            $total_product = $row_list_detail_order['quantify'] * $row_product['price_product'];
                        } 
                    ?>
                  <tr>
                    <td><?php echo $row_list_detail_order['id_cart_detail'] ?></td>
                    <td><?php echo $row_list_detail_order['code_cart'] ?></td>
                    <td><?php echo $row_product['name_product'] ?></td>
                    <td><?php echo $row_list_detail_order['quantify'] ?></td>
                    <td><?php echo $row_product['price_product'] ?></td>
                    <td><?php echo $total_product ?></td>  
                    <?php $total += $total_product ?>
                  </tr>
                  <?php
                      }
                  ?>
                  <tr>
                      <td colspan='6' style="text-align:center ; color:red; font-size:20px; text-dec">Tổng tiền : <?php echo $total ?>VND</td>
                  </tr>
                </tbody>
            </table>
        </div>    
    </section>
    <a class="back" href="list-order.php"> Quay lại danh sách đơn hàng</a>
</body>
</html>
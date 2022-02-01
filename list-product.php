<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Danh sách thực đơn</title>
    <link rel="stylesheet" href="assets/css/list.css" />
    <link
    href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
    rel="stylesheet"
  />
  </head>
  <body>
  <?php require_once "connect.php"; ?>
    <section class="home-content">
      <h1 class="heading">Danh Sách Menu<span></span></h1>
      <div class="search-box">
        <input type="text" placeholder="Tìm kiếm thực đơn ..." />
        <i class="bx bx-search"></i>
    </div>
    <a class="back" href="add-product.php"
                        >Thêm thực đơn</a
                      >
      <div class="list-products">
        <div style="overflow-x: auto">
            <table>
                <thead>
                  <tr>
                   <th>stt</th>
                   <th>Tên thực đơn</th>
                   <th>Gía thực đơn</th>
                   <th>ảnh thực đơn</th>
                   <th>loại thực đơn</th>
                    <th> edit </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $sql_products = $conn -> query("SELECT tbl_products.id_product, tbl_products.name_product, tbl_products.price_product, tbl_products.img_product, tbl_products.category_product, tbl_category.title_category FROM tbl_products INNER JOIN tbl_category ON tbl_products.category_product = tbl_category.id_category ORDER BY id_product ASC");
            
                      while($row_product = mysqli_fetch_assoc($sql_products)){
                    ?>
                  <tr>
                    <td><?php echo $row_product['id_product'] ?></td>
                    <td><?php echo $row_product['name_product'] ?></td>
                    <td><?php echo $row_product['price_product'] ?></td>
                    <td><?php echo $row_product['img_product'] ?></td>
                    <td><?php echo $row_product['title_category'] ?></td>
                    <td>
                      <a href="delete-product.php?id=<?php echo  $row_product['id_product']; ?>"
                        >Xóa</a
                      >
                      <a href="edit-product.php?id=<?php echo $row_product['id_product']; ?>"
                        >Sửa</a
                      >
                    </td>  
                  </tr>
                  <?php
                      }
                  ?>
                </tbody>
            </table>
        </div>    
    </section>
    <a class="back" href="admin.php"> Quay lại trang chủ</a>

  </body>
</html>

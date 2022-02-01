<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sửa sản phẩm</title>
    <link rel="stylesheet" href="assets/css/add.css">
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php
      require_once "connect.php";
      if(isset($_GET['id']))
      {
          $id = $_GET['id'];
          $sql = "SELECT * FROM tbl_products WHERE id_product= $id";
          $result = $conn->query($sql);
              if($result->num_rows > 0)
              {
                  $row= $result->fetch_array();
                  $name_product = $row['name_product'];
                  $price_product = $row['price_product'];
                  $img_product = $row['img_product'];
                  $category_product = $row['category_product'];
              }
      }
      if(isset($_POST['edit-product'])){
          $new_name_product = $_POST['name-product'];
          $new_price_product = $_POST['price-product'];
          $new_img_product = $_POST['img-product'];
          $new_category_product = $_POST['category-product'];
          $sql = "UPDATE tbl_products SET name_product='$new_name_product', price_product='$new_price_product', img_product='$new_img_product',category_product = '$new_category_product' Where id_product=$id";
          if (mysqli_query($conn, $sql)) {
              echo '<script>alert("Update thành công");</script>';
          } else {
              echo '<script>alert("Update that bại");</script>'. mysqli_error($conn);
          }
          
      }
    ?>
    <a class="back" href="list-product.php"> Quay lại danh sách sản phẩm sau khi sửa</a>
    <h1 class="heading">Sửa <span>sản phẩm</span></h1>
    <div class="search-box">
        <input type="text" placeholder="Tìm kiếm sản phẩm ..." />
        <i class="bx bx-search"></i>
    </div>
    <div class="home-content">
        <div class="container">
            <div class="content">
              <form action="" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Tên sản phẩm</span>
                    <input
                      type="text"
                      value="<?php echo $name_product; ?>"
                      placeholder="Nhập tên sản phẩm mới"
                      required
                      name="name-product"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Gía sản phẩm</span>
                    <input
                      type="text"
                      value="<?php echo $price_product; ?>"
                      placeholder="Nhập giá sản phẩm mới"
                      required
                      name="price-product"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Hình ảnh sản phẩm</span>
                    <input
                      type="text"
                      value="<?php echo $img_product; ?>"
                      placeholder="Nhập hình ảnh sản phẩm mới"
                      required
                      name="img-product"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Loại sản phẩm</span>
                    <input
                      type="text"
                      value="<?php echo $category_product; ?>"
                      placeholder="Nhập loại sản phẩm mới"
                      required
                      name="category-product"
                    />
                  </div>
                </div>
                <div class="button">
                  <input type="submit" name="edit-product" value="Sửa Ngay" />
                </div>
              </form>
            </div>
    </div>
    
  </body>
</html>

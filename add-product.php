<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thêm món ăn</title>
    <link rel="stylesheet" href="assets/css/add.css">
  </head>
  <body>
    <?php
        if(isset($_POST['add-product'])){
          require_once "connect.php";
          $sqlCheckProduct = "SELECT * FROM tbl_products Where name_product = '".$_POST['name-product']."'";
          $resultCheckProduct = $conn->query($sqlCheckProduct); 
          if($resultCheckProduct->num_rows >0)
          {
            echo '<script> alert("món ăn này đã tồn tại, vui lòng nhập tài khoản khác");</script>';
          }
          else{
            $sql = "INSERT INTO tbl_products (name_product,price_product,img_product,category_product)  VALUES ('".$_POST['name-product']."','".$_POST['price-product']."','".$_POST['img-product']."','".$_POST['category-product']."')";
            $result =$conn->query($sql); 
            if($result === TRUE) { 
              echo '<script> alert("Thêm vào thành công !!");</script>'; 
            } 
            else{ 
              echo '<script> alert("Thêm vào không thành công !!");</script>'; 
            } 
            $conn->close(); 
          }
        }
    ?>
    <a class="back" href="list-product.php">Danh sách món ăn sau khi thêm</a>
    <h1 class="heading">Thêm món ăn</h1>
    <div class="home-content">
        <div class="container">
            <div class="content">
              <form action="" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Tên món ăn</span>
                    <input
                      type="text"
                      placeholder="Nhập tên món ăn"
                      required
                      name="name-product"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Gía món ăn</span>
                    <input
                      type="text"
                      placeholder="Nhập giá món ăn"
                      required
                      name="price-product"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Hình ảnh món ăn</span>
                    <input
                      type="text"
                      placeholder="Nhập hình ảnh món ăn"
                      required
                      name="img-product"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Loại món ăn</span>
                    <select name="category-product" id="category-product">
                      <?php
                      require_once "connect.php";
                      $sql_category = "SELECT * FROM tbl_category";
                      $result_category = $conn->query($sql_category);
                        while($row_category = $result_category->fetch_assoc()){
                          print "<option value=".$row_category['id_category'].">".$row_category['title_category']."</option>";
                        }
                      ?>
                    </select>
                    <!-- <input
                      type="text"
                      placeholder="Nhập loại món ăn"
                      required
                      name="category-product"
                    /> -->
                  </div>
                </div>
                <div class="button">
                  <input type="submit" name="add-product" value="Thêm ngay" />
                </div>
              </form>
            </div>
                      </div>
    </div>
  </body>
</html>

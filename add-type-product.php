<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thêm loại món ăn</title>
    <link rel="stylesheet" href="assets/css/add.css">
  </head>
  <body>
    <?php
        if(isset($_POST['add-type-product'])){
          require_once "connect.php";
          $sqlCheckTypeProduct = "SELECT * FROM tbl_category Where title_category = '".$_POST['name-type-product']."'";
          $resultCheckTypeProduct = $conn->query($sqlCheckTypeProduct); 
          if($resultCheckTypeProduct->num_rows >0)
          {
            echo '<script> alert("Loại món ăn này đã tồn tại, vui lòng nhập tài khoản khác");</script>';
          }
          else{
            $sql = "INSERT INTO tbl_category (title_category)  VALUES ('".$_POST['name-type-product']."')";
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
    <a class="back" href="list-type-product.php">Danh sách loại món ăn sau khi thêm</a>
    <h1 class="heading">Thêm loại món ăn</h1>
    <div class="home-content">
        <div class="container">
            <div class="content">
              <form action="" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Tên loại món ăn</span>
                    <input
                      type="text"
                      placeholder="Nhập tên loại món ăn"
                      required
                      name="name-type-product"
                    />
                  </div>
                </div>
                <div class="button">
                  <input type="submit" name="add-type-product" value="Thêm ngay" />
                </div>
              </form>
            </div>

    </div>
  </body>
</html>

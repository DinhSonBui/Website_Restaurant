<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sửa thông tin shop</title>
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
          $sql = "SELECT * FROM tbl_info_shop WHERE id= $id";
          $result = $conn->query($sql);
              if($result->num_rows > 0)
              {
                  $row= $result->fetch_array();
                  $name_shop = $row['name_shop'];
                  $address_shop = $row['address_shop'];
                  $email_shop = $row['email_shop'];
                  $phone_shop = $row['phone_shop'];
                  $description_shop = $row['description_shop'];
                  $img_shop = $row['img_shop'];
              }
      }
      if(isset($_POST['edit-info-shop'])){
          $new_name_shop = $_POST['name_shop'];
          $new_address_shop = $_POST['address_shop'];
          $new_email_shop = $_POST['email_shop'];
          $new_phone_shop = $_POST['phone_shop'];
          $new_description_shop = $_POST['description_shop'];
          $new_img_shop = $_POST['img_shop'];
          $sql = "UPDATE tbl_info_shop SET name_shop='$new_name_shop', address_shop='$new_address_shop', email_shop='$new_email_shop',phone_shop = '$new_phone_shop', description_shop = '$new_description_shop', img_shop = '$new_img_shop' Where id =$id";
          if (mysqli_query($conn, $sql)) {
              echo '<script>alert("Update thành công");</script>';
          } else {
              echo '<script>alert("Update that bại");</script>'. mysqli_error($conn);
          }
          
      }
    ?>
    <a class="back" href="list-info-shop.php"> Quay lại thông tin cửa hàng</a>
    <h1 class="heading">Sửa thông tin cửa hàng</h1>
    <div class="search-box">
    </div>
    <div class="home-content">
        <div class="container">
            <div class="content">
              <form action="" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Tên cửa hàng</span>
                    <input
                      type="text"
                      value="<?php echo $name_shop; ?>"
                      placeholder="Nhập tên cửa hàng"
                      required
                      name="name_shop"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Địa chỉ</span>
                    <input
                      type="text"
                      value="<?php echo $address_shop; ?>"
                      placeholder="Nhập địa chỉ"
                      required
                      name="address_shop"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Email</span>
                    <input
                      type="email"
                      value="<?php echo $email_shop; ?>"
                      placeholder="Nhập mô tả email"
                      required
                      name="email_shop"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Số điện thoại</span>
                    <input
                      type="text"
                      value="<?php echo $phone_shop; ?>"
                      placeholder="Nhập sdt"
                      required
                      name="phone_shop"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Mô tả cửa hàng</span>
                    <input
                      type="text"
                      value="<?php echo $description_shop; ?>"
                      placeholder="Nhập mô tả shop"
                      required
                      name="description_shop"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Hình ảnh cửa hàng</span>
                    <input
                      type="text"
                      value="<?php echo $img_shop; ?>"
                      placeholder="Nhập sdt"
                      required
                      name="img_shop"
                    />
                  </div>
                </div>
                <div class="button">
                  <input type="submit" name="edit-info-shop" value="Sửa Ngay" />
                </div>
              </form>
            </div>
    </div>
    
  </body>
</html>

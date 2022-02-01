<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sửa banner</title>
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
          $sql = "SELECT * FROM tbl_banner WHERE id= $id";
          $result = $conn->query($sql);
              if($result->num_rows > 0)
              {
                  $row= $result->fetch_array();
                  $name_banner = $row['name_banner'];
                  $description_banner = $row['description_banner'];
                  $img_banner = $row['img_banner'];
              }
      }
      if(isset($_POST['edit-banner'])){
          $new_name_banner = $_POST['name_banner'];
          $new_description_banner = $_POST['description_banner'];
          $new_img_banner = $_POST['img_banner'];
          $sql = "UPDATE tbl_banner SET name_banner='$new_name_banner', description_banner='$new_description_banner',img_banner = '$new_img_banner' Where id =$id";
          if (mysqli_query($conn, $sql)) {
              echo '<script>alert("Update thành công");</script>';
          } else {
              echo '<script>alert("Update that bại");</script>'. mysqli_error($conn);
          }
          
      }
    ?>
    <a class="back" href="list-banner.php"> Quay lại danh sách banner sau khi sửa</a>
    <h1 class="heading">Sửa banner</h1>
    <div class="search-box">
        <input type="text" placeholder="Tìm kiếm banner ..." />
        <i class="bx bx-search"></i>
    </div>
    <div class="home-content">
        <div class="container">
            <div class="content">
              <form action="" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Tên banner</span>
                    <input
                      type="text"
                      value="<?php echo $name_banner; ?>"
                      placeholder="Nhập tên banner mới"
                      required
                      name="name_banner"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Mô tả banner</span>
                    <input
                      type="text"
                      value="<?php echo $description_banner; ?>"
                      placeholder="Nhập mô tả banner"
                      required
                      name="description_banner"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Hình ảnh banner</span>
                    <input
                      type="text"
                      value="<?php echo $img_banner; ?>"
                      placeholder="Nhập hình ảnh banner"
                      required
                      name="img_banner"
                    />
                  </div>
                </div>
                <div class="button">
                  <input type="submit" name="edit-banner" value="Sửa Ngay" />
                </div>
              </form>
            </div>
    </div>
    
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Danh sách Banner</title>
    <link rel="stylesheet" href="assets/css/list.css" />
    <link
    href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
    rel="stylesheet"
  />
  </head>
  <body>
  <?php require_once "connect.php"; ?>
    <section class="home-content">
      <h1 class="heading">Danh sách banner</h1>
      <div class="search-box">
        <input type="text" placeholder="Tìm kiếm banner ..." />
        <i class="bx bx-search"></i>
    </div>
    <a class="back" href="add-banner.php"
                        >Thêm banner</a
                      >
      <div class="list-products">
        <div style="overflow-x: auto">
            <table>
                <thead>
                  <tr>
                   <th>stt</th>
                   <th>Tên banner</th>
                   <th>Mô tả banner</th>
                   <th>Hình ảnh banner</th>
                    <th> edit </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $sql_banner = mysqli_query($conn,"SELECT * FROM tbl_banner Order By id ASC");
                      while($row_banner = mysqli_fetch_assoc($sql_banner)){
                    ?>
                  <tr>
                    <td><?php echo $row_banner['id'] ?></td>
                    <td><?php echo $row_banner['name_banner'] ?></td>
                    <td><?php echo $row_banner['description_banner'] ?></td>
                    <td><?php echo $row_banner['img_banner'] ?></td>
                    <td>
                      <a href="edit-banner.php?id=<?php echo $row_banner['id']; ?>"
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

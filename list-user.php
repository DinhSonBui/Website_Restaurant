<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khách hàng</title>
    <link rel="stylesheet" href="assets/css/list.css" />
    <link
    href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
    rel="stylesheet"
    />
</head>
<body>
<?php require_once "connect.php"; ?>
    <section class="home-content">
      <h1 class="heading">Danh sách khách hàng</h1>
      <div class="list-products">
        <div style="overflow-x: auto">
            <table>
                <thead>
                  <tr>
                    <th>Tên đầy đủ</th>
                    <th>Tài khoản</th>
                    <th>email</th>
                    <th>địa chỉ</th>
                    <th>số điện thoại</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      $sql_user = mysqli_query($conn,"SELECT * FROM tbl_user Where username != 'admin' Order By id DESC");
                      while($row_user = mysqli_fetch_assoc($sql_user)){
                    ?>
                    <tr>
                        <td><?php echo $row_user['fullname'] ?></td>
                        <td><?php echo $row_user['username'] ?></td>
                        <td><?php echo $row_user['email'] ?></td>
                        <td><?php echo $row_user['phone'] ?></td>
                        <td><?php echo $row_user['address'] ?></td>
                       
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
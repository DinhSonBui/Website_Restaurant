<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin nhà hàng</title>
    <link rel="stylesheet" href="assets/css/list.css" />
    <link
    href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
    rel="stylesheet"
    />
</head>
<body>
<?php require_once "connect.php"; ?>
    <section class="home-content">
      <h1 class="heading">Thông tin nhà hàng</h1>
      <div class="list-products">
        <div style="overflow-x: auto">
            <table>
                <thead>
                  <tr>
                    <th >Tên cửa hàng</th>
                    <th>email</th>
                    <th>địa chỉ</th>
                    <th>số điện thoại</th>
                    <th colspan="2">Mô tả</th>
                    <th>Hình ảnh</th>
                    <th>Sửa</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      $sql_info_shop = mysqli_query($conn,"SELECT * FROM tbl_info_shop ");
                      while($row_info_shop = mysqli_fetch_assoc($sql_info_shop)){
                    ?>
                    <tr>
                        <td><?php echo $row_info_shop['name_shop'] ?></td>
                        <td><?php echo $row_info_shop['email_shop'] ?></td>
                        <td><?php echo $row_info_shop['phone_shop'] ?></td>
                        <td><?php echo $row_info_shop['address_shop'] ?></td>
                        <td colspan="2" ><?php echo $row_info_shop['description_shop'] ?></td>
                        <td><?php echo $row_info_shop['img_shop'] ?></td>
                        <td>
                            <a href="edit-info-shop.php?id=<?php echo $row_info_shop['id']; ?>"
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
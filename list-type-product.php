<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách loại món ăn</title>
    <link rel="stylesheet" href="assets/css/list.css" />
    <link
    href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
    rel="stylesheet"
  />
</head>
<body>
<?php require_once "connect.php"; ?>
    <section class="home-content">
      <h1 class="heading">Danh sách loại món ăn</h1>
      <div class="search-box">
        <input type="text" placeholder="Tìm kiếm loại món ăn ..." />
        <i class="bx bx-search"></i>
    </div>
    <a class="back" href="add-type-product.php"> Thêm loại món ăn</a>
      <div class="list-products">
        <div style="overflow-x: auto">
            <table>
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên Loại món ăn</th>
                    <th> Edit </th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      $sql_type_product = mysqli_query($conn,"SELECT * FROM tbl_category Order By id_category ASC");
                      while($row_type_product = mysqli_fetch_assoc($sql_type_product)){
                    ?>
                    <tr>
                        <td><?php echo $row_type_product['id_category'] ?></td>
                        <td><?php echo $row_type_product['title_category'] ?></td>
                        <td>
                        <a href="edit-type-product.php?id=<?php echo  $row_type_product['id_category']; ?>">Sửa</a>
                        <a href="delete-type-product.php?id=<?php echo  $row_type_product['id_category']; ?>">Xóa</a>
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
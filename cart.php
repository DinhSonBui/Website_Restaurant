<?php
    include 'connect.php';
    session_start();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
    // session_destroy();
    // var_dump($action);
    // die();
    $query = mysqli_query($conn,"SELECT * FROM tbl_products WHERE id_product = $id");
    if($query)
    {
        $product = mysqli_fetch_assoc($query);
    }
   

    $item = [
        'id' => $product['id_product'],
        'name' => $product['name_product'],
        'image' => $product['img_product'],
        'price' => $product['price_product'],
        'quantify' => 1
    ];
    if($action == 'add'){
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['quantify'] +=1;
        }
        else{
            $_SESSION['cart'][$id] = $item;
        }    
    }

    if($action == 'delete'){
        unset($_SESSION['cart'][$id]);
    }
   
   

    header('Location: index.php');
    // echo "<pre>";
    // print_r($_SESSION['cart']);

    //Thêm mới giỏ hàng
    // Cập nhật giỏ hàng
    // Xóa sản phẩm
?>
<?php
    session_start();
    include('connect.php');
    require('sendmail.php');
    require('Carbon/autoload.php');
    use Carbon\Carbon;
    $now = Carbon::now('Asia/Ho_Chi_Minh');

    $id_user = $_SESSION['id'];
    $code_cart = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_cart(id_user, code_cart,cart_date,cart_status) VALUE ('".$id_user."','".$code_cart."','".$now."',1)";
    print  $insert_cart;
    $cart_query = mysqli_query($conn, $insert_cart);
    if($cart_query)
    {
        foreach($_SESSION['cart'] as $key => $value) {
            $id_product = $value['id'];
            $quantify = $value['quantify'];
            $insert_cart_detail = "INSERT INTO tbl_cart_detail(id_product, code_cart, quantify) VALUE ('".$id_product."','".$code_cart."','".$quantify."')";
            print $insert_cart_detail;
            mysqli_query($conn,$insert_cart_detail );
        }
        $name_user =  $_SESSION['name'];
        $tieude = "Xin chào ".$name_user." ! Qúy khách đã đặt hàng tại Lego-Shop thành công ! "; 
        $noidung ="<p>Cảm ơn quý khách đã đặt hàng tại Lego-Shop, đơn hàng của quý khách là: ".$code_cart." </p>";
        $noidung .= "<p>Đơn hàng sẽ được giao cho quý khách trong ngày hôm nay, hãy chú ý đến điện thoại của quý khách để bên vận chuyển liên lạc giao  hàng.</p>";
        $noidung .="<i>Xin chân thành cảm ơn quý khách.</i>";
       
        $maildathang = $_SESSION['email'];
        $mail = new Mailer();
        $mail->dathangmail($tieude,$noidung,$maildathang,$name_user);
    }
    unset($_SESSION['cart']);
    header('Location: index.php'); 
?>
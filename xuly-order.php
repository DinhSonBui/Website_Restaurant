<?php
    use Carbon\Carbon;
    require('Carbon/autoload.php');
    include('connect.php');
    $now = Carbon ::now('Asia/Ho_Chi_Minh')->toDateString();

    if(isset($_GET['code'])){
        $code_cart = $_GET['code'];
        $sql = "UPDATE tbl_cart SET cart_status = 0 WHERE code_cart = '".$code_cart."'";
        $query = mysqli_query($conn, $sql);

        $sql_lietke_dh = "Select * From tbl_cart_detail,tbl_products Where tbl_cart_detail.id_product = tbl_products.id_product And tbl_cart_detail.code_cart='$code_cart' Order By tbl_cart_detail.id_cart_detail DESC";
        $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);

        $sql_thongke = "SELECT * FROM tbl_thongke Where ngaydat = '$now'";
        $query_thongke = mysqli_query($conn,$sql_thongke);
        $soluongmua = 0;
        $doanhthu = 0;

        while($row = mysqli_fetch_array($query_lietke_dh) ){
            $soluongmua += $row['quantify'];
            $doanhthu += $row['quantify']*$row['price_product'];
        }

        if(mysqli_num_rows($query_thongke) == 0)
        {
            $soluongban = $soluongmua;
            $doanhthu = $doanhthu;
            $donhang = 1;
            $sql_update_thongke = mysqli_query($conn,"Insert Into tbl_thongke (ngaydat,donhang,doanhthu,soluongban) Value('$now','$donhang','$doanhthu','$soluongban')");
        }
        elseif(mysqli_num_rows($query_thongke) != 0)
        {
            while($row_tk = mysqli_fetch_array($query_thongke)){
                $soluongban = $row_tk['soluongban']+ $soluongmua;
                $doanhthu = $row_tk['doanhthu'] + $doanhthu;
                $donhang = $row_tk['donhang']+ 1;
                $sql_update_thongke = mysqli_query($conn,"Update tbl_thongke Set donhang='$donhang', doanhthu='$doanhthu',soluongban='$soluongban' Where ngaydat='$now'");
            }
        }


        header('Location: list-order.php'); 
    }

 ?>
<?php
    use Carbon\Carbon;
    include('connect.php');
    require('Carbon/autoload.php');
    if(isset($_POST['thoigian'])){
        $thoigian = $_POST['thoigian'];
    }else{
        $thoigian ='';
        $subdays = Carbon ::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
    }

    if($thoigian == '7ngay')
    {
        $subdays = Carbon ::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
    }
    else if($thoigian=='28ngay')
    {
        $subdays = Carbon ::now('Asia/Ho_Chi_Minh')->subdays(28)->toDateString();
    }
    else if($thoigian=='90ngay')
    {
        $subdays = Carbon ::now('Asia/Ho_Chi_Minh')->subdays(90)->toDateString();
    }
    else{
        $subdays = Carbon ::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
    }

    
    $now = Carbon ::now('Asia/Ho_Chi_Minh')->toDateString();

    $sql = "Select * From tbl_thongke Where ngaydat Between '$subdays' And '$now' Order By ngaydat ASC";
    $sql_query  = mysqli_query($conn,$sql);
    while($val = mysqli_fetch_array($sql_query))
    {
        $char_data[] = array(
            'date' => $val['ngaydat'],
            'order' => $val['donhang'],
            'sales' => $val['doanhthu'],
            'quantify' => $val['soluongban']
        );
    }
    echo $data = json_encode($char_data);
?>
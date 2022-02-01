<?php
    require('tfpdf/tfpdf.php');
    require_once "connect.php";

    $pdf = new tFPDF();
    $pdf->AddPage("0");
    // $pdf->SetFont('Arial','B',16);
   // Add a Unicode font (uses UTF-8)
    $pdf->AddFont('DejaVu','','DejaVuSans.ttf',true);
    $pdf->SetFont('DejaVu','',16);
    $pdf->SetFillColor(193,229,252); 
    $code_cart = $_GET['code-cart'];
    $sql_list_detail_order ="SELECT * FROM tbl_cart_detail,tbl_products WHERE tbl_cart_detail.id_product = tbl_products.id_product AND code_cart = $code_cart";
    $query_list_detail_order = mysqli_query($conn,$sql_list_detail_order);
    $pdf->Write(10,'                                                          Nhà Hàng Epu - Restaurant ');
    $pdf->Ln(10); 
    $pdf->Write(10,'Hóa đơn của bạn là :');
	$pdf->Ln(10);

	$width_cell=array(15,45,80,30,40,50);

	$pdf->Cell($width_cell[0],10,'ID',1,0,'C',true);
	$pdf->Cell($width_cell[1],10,'Mã đơn hàng',1,0,'C',true);
	$pdf->Cell($width_cell[2],10,'Tên sản phẩm',1,0,'C',true);
	$pdf->Cell($width_cell[3],10,'Số lượng',1,0,'C',true); 
	$pdf->Cell($width_cell[4],10,'Đơn Giá',1,0,'C',true);
	$pdf->Cell($width_cell[5],10,'Thành tiền',1,1,'C',true); 
	$pdf->SetFillColor(235,236,236); 
	$fill=false;
	$i = 0;
	while($row = mysqli_fetch_array($query_list_detail_order)){
		$i++;
	$pdf->Cell($width_cell[0],10,$i,1,0,'C',$fill);
	$pdf->Cell($width_cell[1],10,$row['code_cart'],1,0,'C',$fill);
	$pdf->Cell($width_cell[2],10,$row['name_product'],1,0,'C',$fill);
	$pdf->Cell($width_cell[3],10,$row['quantify'],1,0,'C',$fill);
	$pdf->Cell($width_cell[4],10,number_format($row['price_product']),1,0,'C',$fill);
	$pdf->Cell($width_cell[5],10,number_format($row['quantify'] * $row['price_product']),1,1,'C',$fill);
	$fill = !$fill;

	}
	$pdf->Write(10,'Cảm ơn bạn đã đặt hàng tại website của chúng tôi.');
	$pdf->Ln(10);
    $pdf->Ln(10);

    $pdf->Output();
?>

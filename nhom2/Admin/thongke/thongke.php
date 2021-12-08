<link rel="stylesheet" href="indexcss.css">
<div id="signinContainer2" style="margin-top: 20px;margin-bottom: 20px;">
    <form action="thongke/tttk.php" method="post">
	<div style="text-align: center;">Thống kê Đơn Hàng</div>
	<div style="width:95%; height:240px; margin-left:2.5%">
		<p>Thống kê theo : </p>
		 Mã Sản Phẩm <input type="radio" name="masp" value="matk">
		 Mã Thể Loại<input type="radio" name="masp" value="matl">
		<p>Từ Ngày </p>
		<input type="text" name="bd" placeholder="dd--mm--yyyy">
		<p>Đến Ngày</p>
		<input type="text" name="kt" placeholder="dd--mm--yyyy">
	</div>
	<div style="text-align: center;"><input type="submit" value="Tìm Kiếm"> </div>
	</form>
</div>
<div style="height:auto;width:100%;">
<?php if(isset($_GET['tk'])){
	if(isset($_GET['bool'])){
	$bool= $_GET['bool'];
	if($bool != 0){
	$lenh = $_GET['tk'];
	include('thongke/showtk.php');}
	else 
	echo "<script>alert('Tìm Kiếm Không Hợp Lệ');</script>";
}
}
?>
</div>

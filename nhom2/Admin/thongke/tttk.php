<?php 
$conn=mysqli_connect("localhost","root","","trasua");
$sql ="";
$test = 0;
if(empty($_POST['masp'])&&isset($_POST['bd'])&&isset($_POST['kt'])){
    $test=1;
    $bd = $_POST['bd'];
    $kt = $_POST['kt'];
 $sql="select * from hoadon where ngaylap between '".$bd."' and '".$kt."'";
} else
if(isset($_POST['masp'])&&empty($_POST['bd'])&&empty($_POST['kt'])){
    $test=0;
} else
if(isset($_POST['masp'])&&isset($_POST['bd'])&&isset($_POST['kt'])){
    $test = 2;
    $se = $_POST['masp'];
    $bd = $_POST['bd'];
    $kt = $_POST['kt'];
    if($se == "matl"){
 $sql="SELECT matl, sum(thanhtien) AS 'Tong Tien' FROM hoadon, cthoadon,sanpham WHERE cthoadon.masp= sanpham.masp AND ngaylap >='$bd' AND ngaylap <= '$kt'GROUP BY matl DESC";}
 else {
    $sql="SELECT cthoadon.masp, sum(thanhtien) AS 'Tong Tien' FROM hoadon, cthoadon,sanpham WHERE sanpham.masp = cthoadon.masp AND ngaylap >='$bd' AND ngaylap <= '$kt' GROUP BY masp ASC";}
}
mysqli_query($conn,"SET NAMES,'utf8'");
mysqli_close($conn);
header("location:../index.php?act=tttk&tk=$sql&bool=$test");
?>
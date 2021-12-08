<div>Chao mung den voi thong tin</div>
<?php 
    $conn=mysqli_connect("localhost","root","","trasua");
    if(isset($_GET['hoten'])&&isset($_GET['tendn'])&&isset($_GET['sdt'])&&isset($_GET['email'])&&isset($_GET['gender'])&&isset($_GET['pass']))
    {
        $yname=$_GET['hoten'];
    $uname=$_GET['tendn'];
    $sdt=$_GET['sdt'];
    $email=$_GET['email'];
    $gt=$_GET['gender'];
    $pass=$_GET['pass'];
    $sql="insert into khachhang(Username,Password,TinhTrang,Quyen) values('$uname','$pass','1','0')";
    }
    mysqli_query($conn,"SET NAMES,'utf8'");
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:../index.php?dk=true");
?>
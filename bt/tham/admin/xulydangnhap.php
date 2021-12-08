<?php 
    session_start();
    $conn=mysqli_connect("localhost","root","","trasua");

    $uname=$_POST['tendn'];
    $pass=$_POST['mkhau'];
    $sql="select * from khachhang where Username='$uname' and Password='$pass'";
    mysqli_query($conn,"SET NAMES,'utf8'");
    $ktra =mysqli_query($conn,$sql);
    $arr=mysqli_fetch_array($ktra);
    mysqli_close($conn);
    if(mysqli_num_rows($ktra) > 0){
        $_SESSION["nameuser"]= $arr[0];
        header("location:../index.php?dn=true");
    }
    else 
        header("location:../index.php?dn=false");
?>
<?php
$conn=mysqli_connect("localhost","root","","trasua");
$name = $_POST['newname'];
$des= $_POST['newdes'];
$sql = "INSERT INTO loaisp (maloai, tenloai) VALUES ('$name','$des')";
mysqli_query($conn,$sql);
mysqli_close($conn);
header("location:../index.php?act=ttlsp&newlsp=true");
?>
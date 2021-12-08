<?php 
$reger= "/[^0-9]/gm";
$str= isset($_POST['price']);
    if(isset($_POST['idp'])&&isset($_POST['namep'])&&isset($_POST['price'])&&isset($_POST['con'])&&isset($_POST['nameid'])){
        if (isset($_POST['up']) && isset($_FILES['img'])) {
            $target = 'C:\xampp\htdocs\nhom2/images/' .basename($_FILES["img"]["name"]);
            move_uploaded_file($_FILES["img"]["tmp_name"],$target );
        }  
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Cỡ lớn nhất được upload (bytes)
        $maxfilesize   = 800000;
        ////Những loại file được phép upload
        $allowtypes    = array('jpg', 'png', 'jpeg', 'gif');
        if(isset($_POST["submit"])) {
            //Kiểm tra xem có phải là ảnh bằng hàm getimagesize
            $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
            if($check !== false)
            {
                echo "Đây là file ảnh - " . $check["mime"] . ".";
                $allowUpload = true;
            }
            else
            {
                echo "Không phải file ảnh.";
                $allowUpload = false;
            }
        }
    $conn=mysqli_connect("localhost","root","","trasua");
    $id=mysqli_insert_id($conn);
    $masp=$_POST['idp'];
    $tenp=$_POST['namep'];
    $price=$_POST['price'];
    $anh=$_FILES['img']['name'];
    $dtich=$_POST['con'];
    $idlsp=$_POST['nameid'];
    $sql="INSERT INTO `sanpham`(`masp`, `tensp`, `hinhanh`, `gia`, `dungtich`, `matl`, `soluong`, `id`) VALUES ('$masp','$tenp','images/$anh','$price','$dtich','$idlsp','1','$id')";
    echo $sql;
    mysqli_query($conn,"SET NAMES,'utf8'");
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:../index.php?act=ttsp&newsp=true");
}
else  header("location:../index.php?act=ttsp&nut=them&newsp=false");
?>
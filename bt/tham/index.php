<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>

    <div id="trangchinh">
        <div id="header" >
            <?php require('admin/header.php'); ?>

        </div>
        <div style="position:absolute;height:25px;width:30%;top:21%;left:81%;">
        <div id="fknt">
	        <a href="index.php?act=dn" style="float:left;border:#FF0000 solid 1px;">Đăng Nhập</a>
	        <a href="index.php?act=dk" style="float:left;margin-left:15px;border:#FF0000 solid 1px;">Đăng Ký</a>
	        <a href="index.php?act=tong" style="float:left;margin-left:15px;border:#FF0000 solid 1px;">Tong</a>
        </div>
        </div>
        <div id="mid">
			<?php require ('admin/menu.php');?>
            <div id="leftmenu">
			    <a href='index.php?vitri=f'><div>tất cả</div></a>
			    <a href='index.php?vitri=m'><div>đồ được mua nhiều </div></a>
			    <a href='index.php?vitri=c'><div>đồ được đánh giá cao</div></a>
			    <a href='index.php?vitri=y'><div>đồ mới về</div></a>
            </div>
            <div id=content>
                <?php
                    $conn=mysqli_connect("localhost","root","","trasua");
                    if(!$conn)
                        echo "ket noi khong thanh cong";
                ?>
                <p><?php include ('admin/content.php');
                include ('admin/all.php');
                ?></p>
            </div>
        </div>
        <div id="footer">
            thông tin của shop
        </div>
    </div>
    <?php 
    if(isset($_GET['dk'])){
        if($_GET['dk']=='true'){
            echo "dang ky thanh cong";
        }
        else  
            echo "dang ky k thanh cong";
        
    }
    if(isset($_GET['dn']))
    {
        if($_GET['dn']=='true')
            echo "dang nhap thanh cong";
        else 
             echo "dang nhap khong thanh cong";
    }
    ?>
</body>
</html>
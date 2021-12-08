<link rel="stylesheet" href="indexcss.css">
<div class="cartd">
    <div style="height:30px;width:100%;font-size:1.5vw;text-align:center;">Loại Sản Phẩm</div>
    <div style="height:auto; width: 30%;float:left;margin-left:10px">
    <form action="#" method="post">
        <div style="margin-top:10px;">Mã Loại</div>
        <div style="margin-top:5px;"><input type="text" name="newname" ></div>
        <div style="margin-top:5px;">Tên loại</div>
        <div style="margin-top:5px;"><input type="text" name="newdes" ></div>
        <div style="margin-top:5px;text-align:center;"><input type="submit" value="ADD"></div>
    </form>
    </div>
    <div style="height:auto; width: 65%;float:left;margin-left:20px">
    <div style="height:30px;width:100%">
        <div class="thecart" style="width:10%">#</div>
        <div class="thecart" style="width:30%">Mã Loại</div>
        <div class="thecart" style="width:50%">Tên Loại</div>
        <div style="clear: both"></div>
    </div>
        <?php
        $stt=0;
        $conn=mysqli_connect("localhost","root","","trasua");
        $sql="SELECT * FROM loaisp WHERE 1";
        $result= mysqli_query($conn,$sql);
        while($row1= mysqli_fetch_array($result)){
            $stt++;
            echo '<div style="height:60px;width:100%";border: 1px solid rgb(2, 20, 36);">
            <div class="thecart" style="width:10%">'.$stt.'</div>
            <div class="thecart" style="width:30%">'.$row1[0].'</div>
            <div class="thecart" style="width:50%">'.$row1[1].'</div>
            <div style="clear: both"></div>
            </div>';
        }
    ?>
    </div>

</div>
<?php
if(isset($_GET['newlsp']))
{
    if($_GET['newsp']=="true")
        echo"<script>alert('Thêm loại sản phẩm thành công');</script>";
}
?>
<link rel="stylesheet" href="style.css">
<div>o day co tat ca sp</div>
<div class="all">
    <div id="sanpham">
    <?php 
    $conn=mysqli_connect("localhost","root","","trasua");
    $result=mysqli_query($conn,"select count(masp) from sanpham");
    $total_row=mysqli_fetch_array($result)[0];
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 6;
    $total_page = ceil($total_row / $limit) ;
    ;if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }
    $start = ($current_page - 1) * $limit;
    $result = mysqli_query($conn, "SELECT * FROM sanpham LIMIT $start, $limit");
    while ($row = mysqli_fetch_assoc($result)){
        echo '<li>' . $row['tensp'] . '</li>';
    }  
    ?>
    </div>
    <div id="phantrang">
       <?php
        // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
        if ($current_page > 1 && $total_page > 1){
            echo '<a href="index.php?page='.($current_page-1).'">Prev</a> | ';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++){
            // Nếu là trang hiện tại thì hiển thị thẻ span
            // ngược lại hiển thị thẻ a
            if ($i == $current_page){
                echo '<span>'.$i.'</span> | ';
            }
            else{
                echo '<a href="index.php?page='.$i.'">'.$i.'</a> | ';
            }
        }

        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1){
            echo '<a href="index.php?page='.($current_page+1).'">Next</a> | ';
        }
        mysqli_query($conn,"SET NAMES,'utf8'");
        mysqli_close($conn);
       ?>
    </div>
    
</div>
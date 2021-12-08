<style>
td{
	border:solid 1px #66FFCC;
}

</style>
<a href="includes/ListCart.php">Go to Card</a>
 <?php 
 	session_start();
	//session_destroy();
	if(isset($_SESSION['cart']))
	{
		echo '<pre>';
		var_dump($_SESSION['cart']);
	}
  	require_once('./includes/DataProvider.php');
    $sql="SELECT * FROM `sanpham` ORDER by idCD";
    $query=DataProvider::executeQuery($sql); 
	echo '<table style="border:solid 3px ridge" width="50%" align="center">';
    while ($row=mysqli_fetch_array($query))
	{ 
          
	?> 
        <tr> 
            <td><?php echo $row['idCD'] ?></td> 
            <td><?php echo $row['TenCD'] ?></td> 
            <td><?php echo $row['Gia'] ?></td> 
            <td><a href="includes/AddCart.php?page=products&amp;action=add&amp;id=<?php echo $row['idCD'] ?>">Add to cart</a></td> 
        </tr>
		 
<?php 
          
    }
	echo "</table>"; 
  
?>
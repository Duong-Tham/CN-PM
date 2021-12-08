<style>
	table{
		border:solid 2px #FF0000;
		width:100%;
		vertical-align:middle;
	}
	tr, td{
		border:#00CC00 solid 2px;
		text-align:center;
	}
	th{
		background-color:#66CC00
	}
</style>
<?php 
session_start();
//$cart=[];
if(isset($_SESSION['cart']))
{
	//echo '<pre>';
	//var_dump($_SESSION['cart']);
?>
<table>
	<tr>
		<th>STT</th>
		<th>ID</th>
		<th>Gia</th>
		<th>SL</th>
		<th>Hình ảnh</th>
	</tr>
	<?php 
	$stt=0;
	foreach($_SESSION['cart'] as $key=>$val)
	{
		$stt++;
		echo "<tr>";
		echo "<td>$stt</td>";
	?>
	
		<td><?php echo $key?></td>;
		<td><?php echo $val['price']?></td>
		<td><?php echo $val['qty']?></td>
		<td><?php echo $val['Pic']?></td>
		</tr>
	<?php	
	}
		
	?>
</table>
<?php
}
?>
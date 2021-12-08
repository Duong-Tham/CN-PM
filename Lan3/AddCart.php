<?php 
session_start();
$id=isset($_GET['id'])?$_GET['id']:'';
// kiểm tra xem id có trong database hay không
$conn = new mysqli("localhost","root","","cddb");
$sql="SELECT * FROM sanpham WHERE idCD='$id'";
echo $sql;
$result = mysqli_query($conn,$sql);

// chọn san pham tu database
$product=mysqli_num_rows($result);
//echo $product;
$obj=$result -> fetch_object();
// kiểm tra sản phẩm có trong csdl hay không. Nếu có
if($product>0)
{
	if(isset($_SESSION['cart']) )
	{	//echo 'da ton tai';
		if(isset($_SESSION['cart'][$id]))
		{
			echo 'da ton tai id';
			$_SESSION['cart'][$id]['qty']+=1;
			$_SESSION['cart'][$id]['name']=$obj->TenCD;
			$_SESSION['cart'][$id]['price']=$obj->Gia;
			$_SESSION['cart'][$id]['Pic']=$obj->urlHinh;
		}
		else
		{	
			$_SESSION['cart'][$id]['qty']=1;
			$_SESSION['cart'][$id]['name']=$obj->TenCD;
			$_SESSION['cart'][$id]['price']=$obj->Gia;
			$_SESSION['cart'][$id]['Pic']=$obj->urlHinh;
		}
		$_SESSION['success']='Ton tai gio hang! cap nhat thanh cong:';
		header("Locaton:../Test.php");
	}
	// không tồn tại($_SESSION['cart'])
	else 
	{	//var_dump("chua ton tai");
		//$_SESSION['success']='Ton tai gio hang! cap nhat thanh cong:';
		$_SESSION['cart'][$id]['qty']=1;
		$_SESSION['cart'][$id]['name']=$obj->TenCD;
		$_SESSION['cart'][$id]['price']=$obj->Gia;
		$_SESSION['cart'][$id]['Pic']=$obj->urlHinh;
	}
}
// kiểm tra sản phẩm có trong csdl hay không. Nếu có
else
{
	$_SESSION['success']='Khong ton tai sp trong csdl:';
	header("Locaton:../Test.php");
}

?>
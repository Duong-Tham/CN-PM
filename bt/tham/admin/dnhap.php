<div id="fdnhap">
<form  method="post" action='./admin/xulydangnhap.php'>
	<div>Đăng nhập</div>
	<div>user
		<input type="text" id="ten" name=tendn value=""/>
    </div>
    <div>pass
        <input type="password" id="mk" name="mkhau" value=""/>
    </div>
	<input type="submit" value="đăng nhập"/>
</form>
</div>
<script>
    var nameuser='<?php if(isset($_SESSION["name"])) echo $_SESSION["name"];?>';
    if(nameuser!=""){
        document.getElementById('fdnhap').style.display="none";
        document.getElementById('fknt').innerHTML="User: <h2>"+nameuser+"</h2>";
    }
</script>
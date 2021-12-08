<style>
	.errorer
	{
		color:red;
		height:auto;
	}
</style>
<script src="design.js"></script>
<form method="GET"  action='./admin/thongtin.php' onsubmit="return ktdk();">
		<div style="border: #000000 solid 1px;">              
            <div class="titleAccount"><b>ĐĂNG KÝ</b></div>         
			<p><i class="far fa-user fa-1.5x"></i> Họ tên</p>
			<input type="text" placeholder="Nhập họ tên..."id="yname" value="" name="hoten"/>
			<div class="errorer" id="ht1" ></div>
			<p><i class="fas fa-user-friends fa-1.5x"></i> Tên đăng nhập</p>
			<input type="text" placeholder="Nhập tên đăng nhập..."id="uname" value="" name="tendn"/>
			<div class="errorer" id="un1" ></div>
			<p><input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male</p>
			<div class="errorer" id="gt1" ></div>
			<p><i class="fas fa-user-friends fa-1.5x"></i> SDT</p>
			<input type="text" placeholder="Nhập số điện thoại..."id="sdt" value="" name="sdt"/>
			<div class="errorer" id="sdt1" ></div>
			<p><i class="fas fa-user-friends fa-1.5x"></i> Email</p>
			<input type="text" placeholder="Nhập email..." id="email"value="" name="email"/>
			<div class="errorer" id="em1" ></div>
			<p><i class="fas fa-lock fa-1.5x"></i> Mật khẩu</p>
			<input type="password" placeholder="Nhập mật khẩu..."id="pass" value="" name="pass"/>
			<div class="errorer" id="mk1" ></div>
			<p><i class="fas fa-lock fa-1.5x"></i> Xác nhận mật khẩu</p>
			<input type="password" placeholder="Nhập lại mật khẩu..."id="rpass" value="" id="rpass">
			<div class="errorer" id="rmk1" ></div>
			<p style="text-align:center">
			<input type="reset" value="Nhập lại"/>
			<button type="submit"  > Xác nhận</button>
			</p>
		</div>
	</form>
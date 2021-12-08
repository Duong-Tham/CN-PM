<link rel="stylesheet" href="indexcss.css">
<div id="signinContainer" style="height:490px;">
    <form action="product/tttimpro.php" method="get"> 
        <div style="width:100%; height:0px;text-align:center"><h2>Tìm Kiếm Sản Phẩm</h2></div>
		<div style="width:95%; height:450px; margin-left:2.5%; margin-top:40px">
			<p>Tên Sản Phẩm</p>
			<input type="text" placeholder="Tìm kiếm theo tên sản phẩm..." name="pro"/>
            <p><b>Đơn giá (VNĐ)</b></p>
           <p> Từ
            <input name="price" type="text" placeholder="Nhập đơn giá đầu muốn tìm..." /></p>
            <p> Đến
            <input name="price1" type="text" placeholder="Nhập đơn giá cuối muốn tìm..." /></p>
            <p><b>Dung tích</b></p>
            <input type="text" name="con" placeholder="Nhập đơn giá dung tích muốn tìm..." />
            <p><b>Loại sản phẩm</b></p>
            <input name="idpro" type="text" placeholder="Nhập loại sản phẩm muốn tìm..." />
			<p style="text-align:center">
				<input type="reset" value="Nhập lại"/>
				<input type="submit" value="Tìm Kiếm" />
			</p>
        </div>     
    </form>
</div>
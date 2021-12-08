function ktdk()
    { 
        if(document.getElementById('yname').value=='')
    {
        alert("vui lòng nhập đủ thông tin khách hàng");
        document.getElementById('yname').focus();
        return false;
    }   
    if(document.getElementById('yuser').value=='')
    {
        alert("vui lòng nhập đủ thông tin khách hàng");
        document.getElementById('yuser').focus();
        return false;
    } 
    if(document.getElementById('pass').value=='')
    {
        alert("vui lòng nhập đủ thông tin khách hàng");
        document.getElementById('pass').focus();
        return false;
    } 
    if(document.getElementById('rpass').value=='')
    {
        alert("vui lòng nhập đủ thông tin khách hàng");
        document.getElementById('rpass').focus();
        return false;
    }   
    if(document.getElementById('rpass').value!=document.getElementById('pass').value)
    {
        alert("mật khẩu khác nhau vui lòng nhập lại");
        document.getElementById('pass').focus();
        document.getElementById('rpass').focus();
        return false;    
    }
    return true;
    }
	function ktrapro()
    {
        if(document.getElementById('idp').value=='')
    {
        alert("vui lòng nhập đủ thông tin khách hàng");
        document.getElementById('idp').focus();
        return false;
    }   
    if(document.getElementById('namep').value=='')
    {
        alert("vui lòng nhập tên sản phẩm ");
        document.getElementById('namep').focus();
        return false;
    } 
    if(document.getElementById('price').value=='')
    {
        alert("vui lòng nhập giá của sản phẩm");
        document.getElementById('price').focus();
        return false;
    } 
    if(document.getElementById('con').value=='')
    {
        alert("vui lòng nhập dung tích của sản phẩm");
        document.getElementById('con').focus();
        return false;
    }
    if(document.getElementById('nameid').value=='')
    {
        alert("vui lòng nhập mã thể loại của sản phẩm");
        document.getElementById('nameid').focus();
        return false;
    }
    return true;
    }
    function confirmDelete(link) {
        if (confirm("Are you sure?")) {
            doAjax(link.href, "POST"); 
        }
        return false;
    }

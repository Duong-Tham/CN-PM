function ktdk()
{ 
    if(document.getElementById('yname').value=='')
    {
        document.getElementById('ht1').innerHTML="<div>* Vui long nhap du</div>";
        document.getElementById('yname').focus();
        return false;
    }   
    if(document.getElementById('pass').value=='')
    {
        document.getElementById('mk1').innerHTML="<div>* Vui long nhap du</div>";
        document.getElementById('pass').focus();
        return false;
    } 
    if(document.getElementById('rpass').value=='')
    {
        document.getElementById('rmk1').innerHTML="* <div>Vui long nhap du</div>";
        
        document.getElementById('rpass').focus();
        return false;
    }  
    if(document.getElementById('uname').value=='')
    {
        document.getElementById('un1').innerHTML="* <div>Vui long nhap du</div>";
        document.getElementById('uname').focus();
        return false;
    } 
    if(document.getElementById('email').value!='/^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/gm')
    {
        document.getElementById('em1').innerHTML="<div>* Vui long nhap dung kieu email</div>";
        document.getElementById('email').focus();
        return false;
    }  
    if(document.getElementById('sdt').value!='/^0[3,5,7,9,8]\d{10}/gi')
    {
        document.getElementById('sdt11').innerHTML="<div>* Vui long nhap dung kieu email</div>";
        document.getElementById('sdt').focus();
        return false;
    }  
    if(document.getElementById('rpass').value!=document.getElementById('pass').value)
    {
        document.getElementById('rmk1').innerHTML="* <div>Vui long nhap du</div>";
        document.getElementById('pass').focus();
        document.getElementById('rpass').focus();
        return false;    
    }
    return true;
    }
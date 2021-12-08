<?php
function tong2so()
{
    if(isset($_GET['txtsoA'])&& isset($_GET['txtsoB'])&& isset($_GET['pheptinh']))
    {
        $soa=$_GET['txtsoA'];
        $sob=$_GET['txtsoB'];
        $pth = $_GET['pheptinh'];
        global $kq ;
        switch($pth)
        {
            case 1:  
                $kq = $soa+$sob;
                break;
            case 2:
                $kq = $soa-$sob;
                break;
            case 3:  
                $kq = $soa*$sob;
                break;
            case 4: 
                $kq = $soa/$sob;
                break;
        }        
    }
}
tong2so();
?>
<div>
    <form action="index.php" method="GET">
        <div style="background-color: #33FF33;border: #000000 solid 1px;">
            <div>
                SO A <input  type="text" name="txtsoA" value="<?php if(isset($_GET['txtsoA'])) echo $_GET['txtsoA']; ?>"/>
            </div>
            <div>
                SO B <input  type="text" name="txtsoB" value="<?php if(isset($_GET['txtsoB'])) echo $_GET['txtsoB']; ?>"/>
            </div>
            <div>PHEP TINH
                <select name="pheptinh" id="option">
                    <option name="1" value="1" selected>+</option>
                    <option value="2" >-</option>
                    <option value="3">*</option>
                    <option value="4">/</option>
                </select>
            </div>
            <div>
                KET QUA <input  type="text" value="<?php echo +$kq ?>" />
            </div>
            <div align="center">
                <input type="submit" value="Tinh">
            </div>
            <input type="hidden" name="act" value="tong">
        </div>
    </form>
</div>
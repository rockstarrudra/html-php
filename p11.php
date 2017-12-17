<?php
$y="";
$x="";
if(isset($_POST["btnSubmit"]))
{
$x=$_POST["txtNo"];
$y=$x*$x;
}

?>
<form name="frm1" method="POST">
<table border="2" width="40%"  height="30%" cellspacing="10" cellpadding="10">
<tr>
<td colspan="1">No</td>
<td><input type="text" name="txtNo" value="<?php echo $x;?>"></td>
</tr>

    
<tr>
<th colspan="2"><input type="submit" value="Square" name="btnSubmit"></th>
</tr>

<tr>
<td>Ans</td>
<td> <input type="text" name="txtAns" value="<?php echo $y;?>"> </td>
</tr>

</table>
</form>

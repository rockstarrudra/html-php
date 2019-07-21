<?php
$y="";
$x="";
$ans="";
if(isset($_POST["btnSubmit"]))
{
$x=$_POST["txtNo"];
$y=$_POST["txtNo1"];
    if($x>$y)
    {
         $ans=" $x is max";
    }
    else
    {
         $ans="$y is max";
    }
}
?>
<form name="frm1" method="POST">
<table border="2" width="40%"  height="30%" cellspacing="10" cellpadding="10">
<tr>
<td colspan="1">No</td>
<td><input type="text" name="txtNo" value="<?php echo $x;?>"></td>
</tr>

<tr>
<td colspan="1">No2</td>
<td><input type="text" name="txtNo1" value="<?php echo $y; ?>"></td>
</tr>
    
<tr>
<th colspan="2"><input type="submit" value="MAX BETWN 2" name="btnSubmit"></th>
</tr>

<tr>
<td>Ans</td>
<td> <input type="text" name="txtAns" value="<?php echo $ans;?>"> </td>
</tr>

</table>
</form>

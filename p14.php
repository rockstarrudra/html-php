<?php
$x="";
$y="";
$ans="";
$b=1;
$i=0;
if(isset($_POST["btnSubmit"]))
{
$x=$_POST["txtNo"];
for ($i=1; $i<=$x ; $i++) 
{ 
	$ans.=" $i\n";
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
<th colspan="2"><input type="submit" value="Ans" name="btnSubmit"></th>
</tr>

<tr>
<td>Ans</td>
<td> <textarea name="txtAns" ><?php echo $ans;?></textarea> </td>
</tr>

</table>
</form>
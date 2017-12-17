<?php
$ans="";
$a=5;
$b=10;

for($i=1; $i<=$b; $i++)
	{
		$ans.="\n $a*$i= ".($a*$i);
	}
?>
<form name="frm1" method="POST">
<table border="2" width="40%"  height="30%" cellspacing="10" cellpadding="10">

<tr>
<td> <textarea name="txtAns" rows=10 cols=auto ><?php echo $ans;?></textarea> </td>
</tr>

</table>
</form>
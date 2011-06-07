<?php
$passion = array("Ultimate Dream Job!!","Life Changing Experience!!","Passion Raised to Infinity!!","Fire! Fire! Fire!","Olympus Shall Fall!!","Uroboros is mine and the right to become a God!!","I will save Cocoon!!","I will become a Legend!!","I'm gonna be Hokage!!","I'm gonna be crowned as the new Champion!!","Dedication!!","Excitement!!","Intensity!!","I don't fear death!!","I will complete my Focus!!","This is for our fallen brothers!!","Liquid!!!!!","Snaaaaakee!!!!");

$rand_keys = array_rand($passion);
$rand_passion = $passion[$rand_keys];
?>
<form name="passion_form" action="passion.php" method="post">
	<table align="center">
	<tr><td>
	<b>How Passionate I am for the IGN:</b> <input type="submit" name="passion_btn" value="Show me some PASSION!">
	</td></tr>
	</table>
</form>

<table align="center" height="80%">
	<tr><td valign="middle" align="center">
	<font size="+5"><b><?=$rand_passion?></b></font>
	</td></tr>
</table>
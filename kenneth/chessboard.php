<?php
require_once("func_select.php");

$knight_moves = getdata("SELECT * FROM detour");

?>
<table align="center">
<tr>
<td colspan="2">
	<table>
	  <tr>
		<td width="100" align="center">A</td>
		<td width="100" align="center">B</td>
		<td width="100" align="center">C</td>
		<td width="100" align="center">D</td>
		<td width="100" align="center">E</td>
		<td width="100" align="center">F</td>
		<td width="100" align="center">G</td>
		<td width="100" align="center">H</td>
	  </tr>
	</table> 
</td>	
</tr>
<tr>
<td>
	<table>
	  <tr>
		<td height="100" valign="top">8</td>
	  </tr>
	  <tr>
		<td height="100" valign="top">7</td>
	  </tr>
	  <tr>
		<td height="100" valign="top">6</td>
	  </tr>
	  <tr>
		<td height="100" valign="top">5</td>
	  </tr>
	  <tr>
		<td height="100" valign="top">4</td>
	  </tr>
	  <tr>
		<td height="100" valign="top">3</td>
	  </tr>
	  <tr>
		<td height="100" valign="top">2</td>
	  </tr>
	  <tr>
		<td height="100" valign="top">1</td>
	  </tr>
	 </table> 
</td>
<td>
	<table width="800" border="1" cellspacing="2" cellpadding="2" style="border-collapse:collapse">
	  <tr>
	  	<? for($i=1; $i<=8; $i++){ 
			if($i==1){ $from_pos = 'A8'; }
			if($i==2){ $from_pos = 'B8'; }
			if($i==3){ $from_pos = 'C8'; }
			if($i==4){ $from_pos = 'D8'; }
			if($i==5){ $from_pos = 'E8'; }
			if($i==6){ $from_pos = 'F8'; }
			if($i==7){ $from_pos = 'G8'; }
			if($i==8){ $from_pos = 'H8'; }
		?>
		<td width="100" height="100" align="center">
			<? 
			if($start){
				$row8 = getdata("SELECT detour_id FROM detour WHERE from_pos = '$from_pos'");
				for($j=1; $j<=count($row8); $j++){
					print_r("<b>".$row8[$j][detour_id]."</b><br>");
				}	
			}
			?>
		</td>
		<? } ?>
	  </tr>
	  <tr>
	  	<? for($i=1; $i<=8; $i++){ 
			if($i==1){ $from_pos = 'A7'; }
			if($i==2){ $from_pos = 'B7'; }
			if($i==3){ $from_pos = 'C7'; }
			if($i==4){ $from_pos = 'D7'; }
			if($i==5){ $from_pos = 'E7'; }
			if($i==6){ $from_pos = 'F7'; }
			if($i==7){ $from_pos = 'G7'; }
			if($i==8){ $from_pos = 'H7'; }
		?>
		<td width="100" height="100" align="center">
			<? 
			if($start){
				$row7 = getdata("SELECT detour_id FROM detour WHERE from_pos = '$from_pos'");
				for($j=1; $j<=count($row7); $j++){
					print_r("<b>".$row7[$j][detour_id]."</b><br>");
				}
			}	
			?>
		</td>
		<? } ?>
	  </tr>
	  <tr>
	  	<? for($i=1; $i<=8; $i++){ 
			if($i==1){ $from_pos = 'A6'; }
			if($i==2){ $from_pos = 'B6'; }
			if($i==3){ $from_pos = 'C6'; }
			if($i==4){ $from_pos = 'D6'; }
			if($i==5){ $from_pos = 'E6'; }
			if($i==6){ $from_pos = 'F6'; }
			if($i==7){ $from_pos = 'G6'; }
			if($i==8){ $from_pos = 'H6'; }
		?>
		<td width="100" height="100" align="center">
			<? 
			if($start){
				$row6 = getdata("SELECT detour_id FROM detour WHERE from_pos = '$from_pos'");
				for($j=1; $j<=count($row6); $j++){
					print_r("<b>".$row6[$j][detour_id]."</b><br>");
				}	
			}	
			?>
		</td>
		<? } ?>
	  </tr>
	  <tr>
	  	<? for($i=1; $i<=8; $i++){ 
			if($i==1){ $from_pos = 'A5'; }
			if($i==2){ $from_pos = 'B5'; }
			if($i==3){ $from_pos = 'C5'; }
			if($i==4){ $from_pos = 'D5'; }
			if($i==5){ $from_pos = 'E5'; }
			if($i==6){ $from_pos = 'F5'; }
			if($i==7){ $from_pos = 'G5'; }
			if($i==8){ $from_pos = 'H5'; }
		?>
		<td width="100" height="100" align="center">
			<? 
			if($start){
				$row5 = getdata("SELECT detour_id FROM detour WHERE from_pos = '$from_pos'");
				for($j=1; $j<=count($row5); $j++){
					print_r("<b>".$row5[$j][detour_id]."</b><br>");
				}
			}	
			?>
		</td>
		<? } ?>
	  </tr>
	  <tr>
	  	<? for($i=1; $i<=8; $i++){ 
			if($i==1){ $from_pos = 'A4'; }
			if($i==2){ $from_pos = 'B4'; }
			if($i==3){ $from_pos = 'C4'; }
			if($i==4){ $from_pos = 'D4'; }
			if($i==5){ $from_pos = 'E4'; }
			if($i==6){ $from_pos = 'F4'; }
			if($i==7){ $from_pos = 'G4'; }
			if($i==8){ $from_pos = 'H4'; }
		?>
		<td width="100" height="100" align="center">
			<? 
			if($start){
				$row4 = getdata("SELECT detour_id FROM detour WHERE from_pos = '$from_pos'");
				for($j=1; $j<=count($row4); $j++){
					print_r("<b>".$row4[$j][detour_id]."</b><br>");
				}
			}	
			?>
		</td>
		<? } ?>
	  </tr>
	  <tr>
	  	<? for($i=1; $i<=8; $i++){ 
			if($i==1){ $from_pos = 'A3'; }
			if($i==2){ $from_pos = 'B3'; }
			if($i==3){ $from_pos = 'C3'; }
			if($i==4){ $from_pos = 'D3'; }
			if($i==5){ $from_pos = 'E3'; }
			if($i==6){ $from_pos = 'F3'; }
			if($i==7){ $from_pos = 'G3'; }
			if($i==8){ $from_pos = 'H3'; }
		?>
		<td width="100" height="100" align="center">
			<?
			if($start){ 
				$row3 = getdata("SELECT detour_id FROM detour WHERE from_pos = '$from_pos'");
				for($j=1; $j<=count($row3); $j++){
					print_r("<b>".$row3[$j][detour_id]."</b><br>");
				}
			}	
			?>
		</td>
		<? } ?>
	  </tr>
	  <tr>
	  	<? for($i=1; $i<=8; $i++){ 
			if($i==1){ $from_pos = 'A2'; }
			if($i==2){ $from_pos = 'B2'; }
			if($i==3){ $from_pos = 'C2'; }
			if($i==4){ $from_pos = 'D2'; }
			if($i==5){ $from_pos = 'E2'; }
			if($i==6){ $from_pos = 'F2'; }
			if($i==7){ $from_pos = 'G2'; }
			if($i==8){ $from_pos = 'H2'; }
		?>
		<td width="100" height="100" align="center">
			<? 
			if($start){
				$row2 = getdata("SELECT detour_id FROM detour WHERE from_pos = '$from_pos'");
				for($j=1; $j<=count($row2); $j++){
					print_r("<b>".$row2[$j][detour_id]."</b><br>");
				}	
			}	
			?>
		</td>
		<? } ?>
	  </tr>
	  <tr>
	  	<? for($i=1; $i<=8; $i++){ 
			if($i==1){ $from_pos = 'A1'; }
			if($i==2){ $from_pos = 'B1'; }
			if($i==3){ $from_pos = 'C1'; }
			if($i==4){ $from_pos = 'D1'; }
			if($i==5){ $from_pos = 'E1'; }
			if($i==6){ $from_pos = 'F1'; }
			if($i==7){ $from_pos = 'G1'; }
			if($i==8){ $from_pos = 'H1'; }
		?>
		<td width="100" height="100" align="center">
			<? 
			if($start){
				$row1 = getdata("SELECT detour_id FROM detour WHERE from_pos = '$from_pos'");
				for($j=1; $j<=count($row1); $j++){
					print_r("<b>".$row1[$j][detour_id]."</b><br>");
				}
			}	
			?>
		</td>
		<? } ?>
	  </tr>
	</table>
	
	<br>
	<form name="chess_form" action="knight.php" method="post">
	<table align="center">
	<tr><td>
	<b>Starting Position:</b> <input type="text" name="start" value="<?=$start?>" size="5" maxlength="2">&nbsp;&nbsp;
	<input type="submit" name="chess_btn" value="Let's Ride!">
	</td></tr>
	</table>
	</form>
</td>
</tr>
</table>
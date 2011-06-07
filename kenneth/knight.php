<?php
session_start();
require_once("func_select.php");
$db = db_connect();

$sql_truncate = "TRUNCATE TABLE `detour`";
mysql_query($sql_truncate,$db);

if($start){

		$next = getdata("SELECT * FROM moves WHERE start = '$start'");
		$choices = explode(",",$next[1][allowed]);
		
		$rand_keys = array_rand($choices, 1);
		
		$rand_pos = $choices[$rand_keys];
									
		$sql_initial = "INSERT INTO detour(from_pos,to_pos) 
					VALUES ('$start','$rand_pos')"; 
									
		$result_initial = mysql_query($sql_initial,$db);    
		echo mysql_error();			 
		
		if($result_initial){ $boxes_crossed = 1; }
		
		$latest_pos = $rand_pos;
		
		$paths = "'".$start."','".$latest_pos."'";
		
		
}

while($boxes_crossed <= 63) {

		$next = getdata("SELECT * FROM moves WHERE start = '$latest_pos'");
		$choices = explode(",",$next[1][allowed]);
		
		//$rand_keys = array_rand($choices, 1);
		//$rand_pos = $choices[$rand_keys];
		
		$detour = getdata("SELECT max(detour_id) as n FROM detour");
				
		do { // generate another position if box is already occupied
				
				$rand_keys = array_rand($choices, 1);
				$rand_pos = $choices[$rand_keys];
						
				$filled = getdata("SELECT * FROM detour,moves WHERE detour.to_pos = moves.start AND detour.detour_id = '".$detour_id[1][n]."' 
				AND moves.allowed LIKE '$rand_pos' and detour.to_pos IN(".$paths.")");
					
				/*foreach($choices as $key){
					if($key IS IN $paths){ // if possition chosen was already filled, choose another position
						$rand_keys = array_rand($choices, 1);
						continue;
					} else { // if position chosen was empty, break loop and mark the box
						$boxes_crossed++;
						break;
					}
					$rand_pos = $choices[$rand_keys];
				}*/
				
				
			}
		while ($filled);	

		$sql = "INSERT INTO detour(from_pos,to_pos) 
					VALUES ('$latest_pos','$rand_pos')"; 
									
		$result = mysql_query($sql,$db);    
		echo mysql_error();	
		
		if($result){
			$boxes_crossed++;
		}
				
		$latest_pos = $rand_pos;
				
		$paths .= ",'".$latest_pos."'";	
		
}

@mysql_close($db);	

header("Location: chessboard.php?start=$start");

?>
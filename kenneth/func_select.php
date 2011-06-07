<?php
session_start();
require_once("config.php");

/* The function getdata() get all the data in a table. */
function getdata($query){
    $db = db_connect();
    if (!$db){
      echo "Error connecting to database.</center>\n";
	    exit;
    }
		$count = 1;
    $result = @mysql_query($query,$db);
		echo mysql_error();
		$num_rows = @mysql_num_rows($result);

    if ($num_rows > 0)
		{
	  while ($myrow = @mysql_fetch_array($result)){
		   foreach($myrow as $key => $value){
			    if (!is_numeric($key)){
		 		   $row[$key]=stripslashes($value);
			 		}
		   }
		$array1[$count] = $row;
		$count++;
		}
		return $array1;
		}
		else return $array1;
		
		
	}// end of function getdata

	 
/* The function getdata_one() get the equivalent data of an id */
function getdata_one($what,$table,$field,$id){
    $db = db_connect();
    if (!$db){
      echo "Error connecting to database.</center>\n";
	    exit;
    }
		
		$query = "select $what from $table where $field='$id'";
		$result = mysql_query($query,$db);
		$myrow = mysql_fetch_array($result);
				
		return $myrow;
	}// end of function getdata_one


/*  Function to connect to the database */
	function db_connect(){
					
					global $db_host ,$db_name, $db_username, $db_password;

					$result = @mysql_connect($db_host,$db_username,$db_password);
					if (!$result) return false;
					if (!@mysql_select_db($db_name,$result)) return false;
					return($result);
				 					
	}
	
?>
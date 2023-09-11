<?php
header("Access-Control-Allow-Origin: *");
	
include "conn.php";

$query="select `backendurl` from `apiurls_table` WHERE `id`='1'";
$result=mysqli_query($mysqli,$query);

if ($result-> num_rows > 0){
	while ($row=$result-> fetch_assoc()) {
		$backendlink = $row["backendurl"];
		echo $backendlink;
	}
}
else{
	echo "0 result";
}

?>
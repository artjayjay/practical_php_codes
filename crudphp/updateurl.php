<?php
header("Access-Control-Allow-Origin: *");
if(isset($_POST["myid"])=="secret")	{
    include "conn.php";
	
 	$newlink=$_POST["myurl"];
 	$idnumber=1;
	$stmt = $mysqli->prepare("UPDATE apiurls_table SET backendurl=? WHERE id=?");
    $stmt->bind_param("si", $newlink, $idnumber);
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "failed";
    }
    $stmt->close();
}else{
    echo "access denied";
}
?>
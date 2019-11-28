<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "crud";

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
	echo "Connection failed: ".$e->getMessage();
}

// ========================= check user if exist or not (for removed account).
$usrSessID = $_SESSION['id'];
$usrRemovedAcc->bindParam(':usrSessID',$usrSessID,PDO::PARAM_INT);
$usrRemovedAcc->execute();
$$usrRemovedAccAccount = $usrRemovedAcc->rowCount();
if (isset($usrSessID)) {
 	if ($$usrRemovedAccAccount < 1) {
 		session_destroy();
 	}
 } 
?>
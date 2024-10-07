<?php
$con = new mysqli("localhost", "root", "", "db_comemp");
$txtid = $_POST['Id'];
$sql = "DELETE FROM tblemp WHERE emp_ID=". $txtid;
$con->query($sql);
echo json_encode("Information delete success...!");
?>
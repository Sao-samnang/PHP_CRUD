<?php
$con = new mysqli("localhost", "root", "", "db_comemp");
$txtName = $_POST['txt-name'];
$txtCountry = $_POST['txt-country'];
$txtCity = $_POST['txt-city'];
$txtDepart = $_POST['txt-dept'];
$txtDesignation = $_POST['txt-designation'];
$sql = "INSERT INTO tblemp VALUES('','" . $txtName . "','" . $txtCountry . "','" . $txtCity . "','" . $txtDepart . "','" . $txtDesignation . "')";
$con->query($sql);
echo json_encode("Add information success...!");
?>
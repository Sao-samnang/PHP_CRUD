<?php
$con = new mysqli("localhost", "root", "", "db_comemp");
$txtName = $_POST['txt-name'];
$txtCountry = $_POST['txt-country'];
$txtCity = $_POST['txt-city'];
$txtDepart = $_POST['txt-dept'];
$txtDesignation = $_POST['txt-designation'];
$txtid=$_POST['txt-id'];
$sql = "UPDATE tblemp SET emp_name='".$txtName."', country='".$txtCountry."', City='".$txtCity."', Department='".$txtDepart."', Designation='".$txtDesignation."' WHERE emp_ID=".$txtid;
$con->query($sql);
echo json_encode("Update information success...!");
?>
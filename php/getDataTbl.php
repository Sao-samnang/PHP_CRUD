<?php
$con = new mysqli("localhost", "root", "", "db_comemp");
$sql="select *from tblemp order by emp_ID desc limit 10";
$res=$con->query($sql);
$data=array();
while($row=$res->fetch_array()){
    $data[]=array(
        'emp_ID'=>$row[0],
        'emp_name'=>$row[1],
        'Country'=>$row[2],
        'City'=>$row[3],
        'Department'=>$row[4],
        'Designation'=>$row[5],
    );
}
echo json_encode($data);
?>
<?php
session_start();
include('connection.php');
$conn->query("UPDATE tbl_customers SET S_Name = '$_POST[S_Name]',S_LastName = '$_POST[S_LastName]',S_Address = '$_POST[S_Address]',S_SunjectName = '$_POST[S_SunjectName]' WHERE c_no=$_SESSION[c_no];");
?>
<!-- UPDATE `tbl_customers` SET `S_Name` = '11111', `S_LastName` = '444', `S_Address` = '1', `S_SunjectName` = 'fgh1' WHERE `tbl_customers`.`c_no` = 1; -->
<?php
include '../class/common.php';
if(isset($_GET['editDeg']))
{
	$id = $_GET['edit_id'];
	$degin_name = $_GET['degin_name'];
	$emp_salary = $_GET['emp_salary'];

	$con->updateDegination($id,$degin_name,$emp_salary);

	echo '<h1>updated</h1>';

	header("Location: http://localhost/employee/cp/dashboard1.php?action=degination_list");
}
?>
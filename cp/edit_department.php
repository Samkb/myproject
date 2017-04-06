<?php
//Edit section
include '../class/common.php';
if(isset($_GET['editDept']))
{
	$id = $_GET['edit_id'];
	$dept_name = $_GET['dept_name'];
	
	$con->updateDepartment($id,$dept_name);

	echo '<h1>updated</h1>';

	header("Location: http://localhost/employee/cp/dashboard1.php?action=department_list");
}
?>

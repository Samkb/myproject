<?php
include '../class/common.php';
if(isset($_GET['editEmp']))
{
	$id = $_GET['edit_id'];
	$emp_fname = $_GET['emp_fname'];
	$emp_midname = $_GET['emp_midname'];
	$emp_lastname = $_GET['emp_lastname'];
	$emp_gender = $_GET['emp_gender'];
	$emp_address = $_GET['emp_address'];
	$martial_status = $_GET['martial_status'];
	$contact_no = $_GET['contact_no'];
	$emp_dob = $_GET['emp_dob'];
	$date_hired = $_GET['date_hired'];
	$emp_position = $_GET['emp_position'];
	$emp_email = $_GET['emp_email'];
	$shift_start = $_GET['shift_start'];
	$shift_end = $_GET['shift_end'];
	$emp_salary = $_GET['emp_salary'];
	$emp_username = $_GET['emp_username'];
	$emp_userpassword = $_GET['emp_userpassword'];
	$image = $_GET['image'];
	

	$con->updateEmployee($id,$emp_fname,$emp_midname,$emp_lastname,$emp_gender,$emp_address,$martial_status,$contact_no,$emp_dob,$date_hired,$emp_position,$emp_email,$shift_start,$shift_end,$emp_salary,$emp_username,$emp_userpassword,$image);

	echo '<h1>updated</h1>';

	header("Location: http://localhost/employee/cp/dashboard1.php?action=employee_list");
}
?>

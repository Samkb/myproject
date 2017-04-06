<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'db_employeemanagements');

class DB_con
{
	function __construct()
	{
		$conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
		mysql_select_db(DB_NAME, $conn);
	}
	

//login

	public function userLogin($user, $pass)
	{
		$checkdata="select * from tbl_login where email='".$user."' and password='".$pass."'";
		$result=mysql_query($checkdata);
		if($row=mysql_num_rows($result)>0)
		{
			$setUser=mysql_fetch_array($result);
			session_start();
			$_SESSION['loggedin']='yes';
			$_SESSION['username']=$setUser['username'];	
			return true;		
			
		}
		else
		{
			return false;
		}
		
	}



	public function userEmployee($user, $pass)
	{
		$checkdata="select * from tbl_employee where emp_username='".$user."' and emp_userpassword='".$pass."'";
		$result=mysql_query($checkdata);
		if($row=mysql_num_rows($result)>0)
		{
			$setUser=mysql_fetch_array($result);
			session_start();
			$_SESSION['loggedine']='yes';
			$_SESSION['username']=$setUser['username'];	
			$_SESSION['id']=$setUser['emp_id'];	
			return true;		
			
		}
		else
		{
			return false;
		}
		
	}

	/////DEPARTMENT//////

//select department
	public function selectDepartment()
	{
		$res=mysql_query("SELECT * FROM tbl_department");
		return $res;
	}
	//insert department

	public function insertDepartment($dept_name)
	{
		$res = mysql_query("INSERT tbl_department(dept_name) VALUES('$dept_name')");
		return $res;
	}
//delete Department
	public function deleteDepartment($id)
	{
		$res = mysql_query("DELETE FROM tbl_department WHERE id=".$id);
		return $res;
	}
//update Department
	public function updateDepartment($id,$dept_name)
	{
		$res = mysql_query("UPDATE tbl_department SET dept_name='$dept_name' WHERE id=".$id);
		return $res;
	}


/////DEGINATION//////

//select Degination
	public function selectDegination()
	{
		$res=mysql_query("SELECT * FROM tbl_degination");
		return $res;
	}
	//Update Degination
	public function updateDegination($id,$degin_name,$emp_salary)
	{
		$res = mysql_query("UPDATE tbl_degination SET degin_name='".$degin_name."', emp_salary = ".$emp_salary." WHERE id=".$id);
		return $res;
	}

	

//insert Degination
	public function insertDegination($degin_name,$emp_salary)
	{
		$res = mysql_query("INSERT tbl_degination(degin_name,emp_salary) VALUES('$degin_name','$emp_salary')");
		return $res;
	}

	//delete Degination
	public function deleteDegination($id)
	{
		$res = mysql_query("DELETE FROM tbl_degination WHERE id=".$id);
		return $res;
	}

/////HOLIDAYS//////

//select holidays
	public function selectHoliday()
	{
		$res=mysql_query("SELECT * FROM tbl_holiday");
		return $res;
	}


	//delete holidays
	public function deleteHoliday($id)
	{
		$res = mysql_query("DELETE FROM tbl_holiday WHERE id=".$id);
		return $res;
	}

	//insert holidays
	public function insertHoliday($holiday_name,$date)
	{
		$res = mysql_query("INSERT tbl_holiday(holiday_name,date) VALUES('$holiday_name','$date')");
		return $res;
	}



	/////EMPLOYEE//////

//select employee
	public function selectEmployee()
	{
		$res=mysql_query("SELECT * FROM tbl_employee");
		return $res;
	}


	//delete employee
	public function deleteEmployee($emp_id)
	{
		$res = mysql_query("DELETE FROM tbl_employee WHERE emp_id=".$emp_id);
		return $res;
	}

	//insert employee
	public function insertEmployee($emp_fname,$emp_midname,$emp_lastname,$emp_gender,$emp_address,$martial_status,$contact_no,$emp_dob,$date_hired,$emp_position,$emp_email,$shift_start,$shift_end,$emp_salary,$emp_username,$emp_userpassword,$image)
	{
		$res = mysql_query("INSERT tbl_employee(emp_fname,emp_midname,emp_lastname,emp_gender,emp_address,martial_status,contact_no,emp_dob,date_hired,emp_position,emp_email,shift_start,shift_end,emp_salary,emp_username,emp_userpassword,image) VALUES('$emp_fname','$emp_midname','$emp_lastname','$emp_gender','$emp_address','$martial_status','$contact_no','$emp_dob','$date_hired','$emp_position','$emp_email','$shift_start','$shift_end','$emp_salary','$emp_username','$emp_userpassword','$image')");
		return $res;
	}

	//update employee
	public function updateEmployee($emp_id,$emp_fname,$emp_midname,$emp_lastname,$emp_gender,$emp_address,$martial_status,$contact_no,$emp_dob,$date_hired,$emp_position,$emp_email,$shift_start,$shift_end,$emp_salary,$emp_username,$emp_userpassword,$image)
	{
		$res = mysql_query("UPDATE tbl_department SET emp_fname='$emp_fname', emp_midname='$emp_midname', emp_lastname='$emp_lastname', emp_gender='$emp_gender', emp_address='$emp_address', martial_status='$martial_status', contact_no='$contact_no', emp_dob='$emp_dob', date_hired='$date_hired', emp_position='$emp_position', emp_email='$emp_email', shift_start='$shift_start', shift_end='$shift_end', emp_salary='$emp_salary', emp_username='$emp_username', emp_userpassword='$emp_userpassword', image='$image' WHERE emp_id=".$emp_id);
		return $res;
	}



	public function insertAttendance($emp_id,$present)
	{
		
		$res = mysql_query("INSERT  tbl_attendance(emp_id,status) VALUES('$emp_id','$present')");
		return $res;
	}

	////LEAVE//////

	//insert leave
	public function insertLeave($employee_name,$reason,$leave_type,$date_from,$date_to)
	{
		$res = mysql_query("INSERT tbl_leave(employee_name,reason,leave_type,date_from,date_to) VALUES('$employee_name','$reason','$leave_type','$date_from','$date_to')");
		return $res;
	}

	public function selectLeave()
	{
		$res=mysql_query("SELECT * FROM tbl_leave");
		return $res;
	}



}

$con =new DB_con();
?>
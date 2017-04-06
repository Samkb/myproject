<?php

// data insert code starts here.
if(isset($_POST['addEmp']))
{

@move_uploaded_file($_FILES['image']['tmp_name'],'../images/'.$_FILES['image']['name']);
$image=$_FILES['image']['name'];



	$emp_fname = addslashes($_POST['first_name']);
	$emp_midname = addslashes($_POST['mid_name']);
	$emp_lastname = addslashes($_POST['last_name']);
	$emp_gender = $_POST['gender'];
	$emp_address = addslashes($_POST['address_name']);
	$martial_status = $_POST['martial_st'];
	$contact_no = addslashes($_POST['telephone']);
	$emp_dob = addslashes($_POST['dob']);	
	$date_hired = addslashes($_POST['join_date']);
	$emp_position = addslashes($_POST['position']);
	$emp_email = addslashes($_POST['email']);	
	$shift_start = addslashes($_POST['shift_start']);
	$shift_end = addslashes($_POST['shift_end']);
	$emp_salary = addslashes($_POST['salary']);	
	$emp_username = addslashes($_POST['emp_username']);
	$emp_userpassword = addslashes($_POST['emp_password']);







	$res=$con->insertEmployee($emp_fname,$emp_midname,$emp_lastname,$emp_gender,$emp_address,$martial_status,$contact_no,$emp_dob,$date_hired,$emp_position,$emp_email,$shift_start,$shift_end,$emp_salary,$emp_username,$emp_userpassword,$image);

	if($res)
	{
		?>
		<script> alert('Record inserted...');</script>
		<?php
	}
	else
	{
		?>
		<script>alert('error inserting record...');</script>
		<?php
	}
}
// data insert code ends here.

?>




<div class="content-wrapper" style="min-height: 704px;">
	
	<section class="content">
		<div class="row">
			<div class="col-md-6 col-md-offset-2">
				<div class="box box-success" style="margin-top: 80px;">
					<div class="box-header">	
						<h3 class="box-title">New Employee</h3>
					</div>
					<div class="box-body">
						<form method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data">
						<input name="_token" type="hidden" value="B0kzhrnIhfrwcyJNVCjGvE6wFDmM5hTDFjStiq0E">
							<div class="form-group">
								<label for="first_name">First Name</label>
								<input class="form-control" name="first_name" type="text" id="first_name">
							</div>
							<div class="form-group">
								<label for="mid_name">Middle Name</label>
								<input class="form-control" name="mid_name" type="text" id="mid_name">
							</div>
							<div class="form-group">
								<label for="last_name">Last Name</label>
								<input class="form-control" name="last_name" type="text" id="last_name">
							</div>
							<div class="form-group">
								<label for="gender">Gender</label>
								<div class="radio-inline">
									<input type="radio" name="gender" value="male"> Male<br>
									<input type="radio" name="gender" value="female"> Female<br>
								</div>
							</div>
							<div class="form-group">
								<label for="address_name">Address</label>
								<input class="form-control" name="address_name" type="text" id="address_name">
							</div>
							<div class="form-group">
								<label for="martial_status">Martial Status</label>
								<div class="radio-inline">
									<input type="radio" name="martial_st" value="married"> Marrried <br>
									<input type="radio" name="martial_st" value="unmarried"> Unmarried<br>
								</div>
							</div>

							<div class="form-group">
								<label for="dob">Date Of Birth</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input name="dob" type="date" id="dob">
								</div>
							</div>

							<div class="form-group">
								<label for="telephone">Telephone</label>
								<input class="form-control" name="telephone" type="number" id="telephone">
							</div>
							<div class="form-group">
								<label for="position">Position</label>
								<input class="form-control" name="position" type="text" id="position">
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control" name="email" type="email" id="email">
							</div>

							<div class="form-group">
								<label for="join_date">Join Date</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input name="join_date" type="date" id="join_date">
								</div>
							</div>
							<label for="shift_start">Shift Start</label>
							<div class="input-group">
								<input class="form-control timepicker" name="shift_start" type="time" id="shift_start">
								<div class="input-group-addon">
									<i class="fa fa-clock-o"></i>
								</div>
							</div>

							<label for="shift_end">Shift End</label>
							<div class="input-group">
								<input class="form-control timepicker" name="shift_end" type="time" id="shift_end">
								<div class="input-group-addon">
									<i class="fa fa-clock-o"></i>
								</div>
							</div>
							<div class="form-group">
								<label for="salary">Salary</label>
								<input class="form-control" name="salary" type="text" id="salary">
							</div>
							<div class="form-group">
								<label for="image">Image</label>
								<input name="image" type="file" id="image">
							</div>
							
							<div class="form-group">
								<label for="emp_username">Username</label>
								<input class="form-control" name="emp_username" type="text" id="emp_username">
							</div>
							<div class="form-group">
								<label for="emp_password">Password</label>
								<input class="form-control" name="emp_password" type="text" id="emp_password">
							</div>
																			
							<div class="pull-right">
								<input class="btn btn-success btn-flat" type="submit" value="Save" name="addEmp">
								<a href="dashboard1.php?action=employee_list" type="button" class="btn btn-default btn-flat">Cancel</a>
							</div>						
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
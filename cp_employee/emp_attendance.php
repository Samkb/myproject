<?php

// data insert code starts here.
if(isset($_POST['add_attendance']))
{

	$present = $_POST['abc'];
	$emp_id = $_SESSION['id'];

	$res=$con->insertAttendance($emp_id,$present);
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
	<
	<section class="content">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-success">
					<div class="box-header">	
						<h3 class="box-title" style="margin-top: 60px;">Attendance</h3>
					</div>
					<div class="box-body">
						<form method="POST" ><input name="_token" type="hidden" value="B0kzhrnIhfrwcyJNVCjGvE6wFDmM5hTDFjStiq0E">
						
								<!-- <div class="btn btn-success"> -->
								<!-- <label for="first_name" style="font-size: 20px;">PRESENT </label>
									<input type="checkbox" name="abc" value="present" style="zoom:1.5;"> 
								</div>
						 -->
						 <button type="button" class="btn btn-success glyphicon glyphicon-ok"><i class="">Check In </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						 <button type="button" class="btn btn-danger glyphicon glyphicon-remove">Check Out</button>
								<!-- 	<div class="pull-right">
										<input class="btn btn-success btn-flat" type="submit" value="Submit" name="add_attendance">
										<a href="" type="reset" class="btn btn-default btn-flat">Cancel</a>
									</div>	 -->
						
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
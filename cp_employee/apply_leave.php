<?php

// data insert code starts here.
if(isset($_POST['app_leave']))
{

	$employee_name = addslashes($_POST['emp_name']);
	$reason = addslashes($_POST['comment']);
	$leave_type = addslashes($_POST['leave_type']);
	$date_from = addslashes($_POST['date_from']);
	$date_to = addslashes($_POST['date_to']);

	$res=$con->insertLeave($employee_name,$reason,$leave_type,$date_from,$date_to);
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
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-success">
					<div class="box-header">	
						<h3 class="box-title"  style="margin-top: 60px;">Apply Leave</h3>

					</div>
					<div class="box-body">
						<form method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="B0kzhrnIhfrwcyJNVCjGvE6wFDmM5hTDFjStiq0E">
							<div class="col-md-6">
								
									<div class="form-group">
										<label for="first_name" >Employee Name </label>

										<input class="form-control" name="emp_name" type="text" id="emp_name" >
										
									<label for="sel1">Leave Type (select one):</label>
									<select class="form-control" id="sel1" name="leave_type">
										<option>Sick Leave</option>
										<option>Casual Leave</option>
										<option>Annual Leave</option>
										<option>Other Leave</option>
									</select>
									<label for="Date_from">Date From</label>
									<input class="form-control" name="date_from" type="date" id="date_from">
									<label for="date_to">Date To</label>
									<input class="form-control" name="date_to" type="date" id="date_to">
									<label for="reason">Reason</label>
									<input type="textarea" name="comment" rows="6" cols="50"  style="width: 100%; height: 50px;" placeholder="Enter text here...">




								</div>


								<div class="pull-right">
									<input class="btn btn-success btn-flat" type="submit" value="Apply Leave" name="app_leave">
									<a href="#" type="button" class="btn btn-default btn-flat">Cancel</a>
								</div>	

							</div>

						</form>

					</div>
				</div>
			</div>


		</div>
	</section>

</div>

<?php

// data insert code starts here.
if(isset($_POST['addDep']))
{

	$dept_name = addslashes($_POST['dept_name']);

	$res=$con->insertDepartment($dept_name);
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
	<section class="content-header">
		<h1>
			Accounts
		</h1>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-success">
					<div class="box-header">	
						<h3 class="box-title">New Leave</h3>
					</div>
					<div class="box-body">
						<form method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="B0kzhrnIhfrwcyJNVCjGvE6wFDmM5hTDFjStiq0E">
							<div class="col-md-6">
								<div class="form-group">
									<label for="first_name">Employee Name </label>

									<input class="form-control" name="emp_name" type="text" id="emp_name">
									<label for="sel1">Leave Type (select one):</label>
									<select class="form-control" id="sel1">
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
									<textarea rows="6" cols="50" name="comment" form="usrform" style="width: 100%;"> Enter text here...</textarea>
								</div>


								<div class="pull-right">
									<input class="btn btn-success btn-flat" type="submit" value="Save" name="addDep">
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
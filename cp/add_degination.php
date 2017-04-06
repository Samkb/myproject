
<?php

// data insert code starts here.
if(isset($_POST['addDegin']))
{

	$degin_name = addslashes($_POST['degin_name']);
	$emp_salary = addslashes($_POST['emp_salary']);

	$res=$con->insertDegination($degin_name,$emp_salary);
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
	<!-- <section class="content-header">
		<h1>
			Accounts
		</h1>
	</section> -->
	<section class="content">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-success" style="margin-top: 140px;">
					<div class="box-header">	
						<h3 class="box-title">New Degination</h3>
					</div>
					<div class="box-body">
						<form method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="B0kzhrnIhfrwcyJNVCjGvE6wFDmM5hTDFjStiq0E">
							<div class="col-md-6">
								<div class="form-group">
									<label for="degin_name">Degination Name</label>
									<input class="form-control" name="degin_name" type="text" id="degin_name">
									<label for="emp_salary">Employee Salary</label>
									<input class="form-control" name="emp_salary" type="text" id="emp_salary">
								</div>
																
								<div class="pull-right">
									<input class="btn btn-success btn-flat" type="submit" value="Save" name="addDegin">
									<a href="dashboard1.php?action=degination_list" type="button" class="btn btn-default btn-flat">Cancel</a>
								</div>	
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
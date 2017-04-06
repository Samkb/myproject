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
						<h3 class="box-title">New Department</h3>
					</div>
					<div class="box-body">
						<form method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="B0kzhrnIhfrwcyJNVCjGvE6wFDmM5hTDFjStiq0E">
							<div class="col-md-6">
								<div class="form-group">
									<label for="first_name">Department Name</label>
									<input class="form-control" name="dept_name" type="text" id="dept_name">
								</div>
								
								
								<div class="pull-right">
									<input class="btn btn-success btn-flat" type="submit" value="Save" name="addDep">
									<a href="dashboard1.php?action=department_list" type="button" class="btn btn-default btn-flat">Cancel</a>
								</div>	
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
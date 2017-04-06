<?php

// data insert code starts here.
if(isset($_POST['addHolidays']))
{

	$holiday_name = addslashes($_POST['holiday_name']);
	$date = addslashes($_POST['date']);

	$res=$con->insertHoliday($holiday_name,$date);
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
						<h3 class="box-title">Add Holidays</h3>
					</div>
					<div class="box-body">
						<form method="POST" action="#" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="B0kzhrnIhfrwcyJNVCjGvE6wFDmM5hTDFjStiq0E">
							<div class="col-md-6">
								<div class="form-group">
									<label for="holiday_name">Holidays Name</label>
									<input class="form-control" name="holiday_name" type="text" id="holiday_name">
									<label for="date">Date</label>
									<input class="form-control" name="date" type="date" id="date">
								</div>
																
								<div class="pull-right">
									<input class="btn btn-success btn-flat" type="submit" value="Save" name="addHolidays">
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
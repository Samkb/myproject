<?php
//Delete section
if(isset($_GET['delete_id']))
{
	$emp_id=$_GET['delete_id'];
	$res=$con->deleteEmployee($emp_id);
	if($res)
	{
		?>
		<script>alert('Record Deleted ...')window.location='dashboard1.php?action=employee_list'</script>
		<?php
	}
	else
	{
		?>
		<script>alert('Record cant Deleted !!!')window.location='dashboard1.php?action=employee_list'</script>
		<?php
	}
}


?>




<section class="wrapper">

	<div class="row">
		<div class="col-md-12">
			<a href="dashboard1.php?action=add_employee" type="button" class="btn btn-success btn-flat margin" style="margin-top: 32px;">Add New Employee</a>
			<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title">Employee List</h3>
					<div class="box-tools">
						<form method="GET" action="dashboard1.php?action=add_employee" accept-charset="UTF-8">
							<div class="input-group input-group-sm" style="width: 150px;">
								<input class="form-control pull-right" placeholder="Search" name="term" type="text">
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<br>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tbody><tr>
							<!-- <th> Photo</th> -->
							<th>ID</th>
							<th>Name</th>
							<th>Contact</th>
							<th>Email Address</th>
							<th>Position</th>
							<th>Shift Start</th>
							<th>Shift End</th>
							<th>Gender</th>



						</tr>
						<?php
						$sql=$con->selectEmployee();
						while($row=mysql_fetch_array($sql))
						{
							?>
							<tr>
								<!-- <td><?php //echo $row[''];?></td> -->
								<td><?php echo $row['emp_id'];?></td>
								<td><a href="#"><?php echo $row['emp_fname'];?></a></td>
								<td><a href="#"><?php echo $row['contact_no'];?></a></td>
								<td><a href="#"><?php echo $row['emp_email'];?></a></td>
								<td><a href="#"><?php echo $row['emp_position'];?></a></td>
								<td><a href="#"><?php echo $row['shift_start'];?></a></td>
								<td><a href="#"><?php echo $row['shift_end'];?></a></td>
								<td><a href="#"><?php echo $row['emp_gender'];?></a></td>


								<td>
									<div class="btn-group">
										<!-- Edit function -->
										<a type="button" class="btn btn-default btn-flat btn-sm" title="Edit" data-toggle="modal" data-target="#<?php echo $row['emp_id'];?>"><i class="fa fa-pencil"></i></a> 
										<div id="<?php echo $row['emp_id'];?>" class="modal fade" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<a href="javascript:void(0);"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
															<h4 class="modal-title">Edit Employee Record</h4></a>
														</div>
														<div class="modal-body">
															<!-- Edit form -->
															<form method="GET" action="edit_employee.php">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="first_name">First Name</label>
																		<input class="form-control" name="first_name" value="<?php echo $row['emp_fname'];?>" type="text" id="first_name">
																	</div>
																	<div class="form-group">
																		<label for="mid_name">Middle Name</label>
																		<input class="form-control" name="mid_name" value="<?php echo $row['emp_midname'];?>" type="text" id="mid_name">
																	</div>
																	<div class="form-group">
																		<label for="last_name">Last Name</label>
																		<input class="form-control" name="last_name" value="<?php echo $row['emp_lastname'];?>" type="text" id="last_name">
																	</div>
																	<div class="form-group">
																		<label for="gender">Gender</label>
																		<div class="radio-inline">
																			<input class="" type="radio" name="gender" value="<?php echo $row['emp_gender'];?>"> Male<br>
																			<input class="" type="radio" name="gender" value="<?php echo $row['emp_gender'];?>"> Female<br>
																		</div>
																	</div>
																	<div class="form-group">
																		<label for="address_name">Address</label>
																		<input class="form-control" name="address_name" value="<?php echo $row['emp_address'];?>" type="text" id="address_name">
																	</div>
																	<div class="form-group">
																		<label for="martial_status">Martial Status</label>
																		<div class="radio-inline">
																			<input type="radio" name="martial_st" value="<?php echo $row['martial_status'];?>"> Marrried <br>
																			<input type="radio" name="martial_st" value="<?php echo $row['martial_status'];?>"> Unmarried<br>
																		</div>
																	</div>

																	<div class="form-group">
																		<label for="dob">Date Of Birth</label>
																		<div class="input-group">
																			<div class="input-group-addon">
																				<i class="fa fa-calendar"></i>
																			</div>
																			<input name="dob" type="date" id="dob" value="<?php echo $row['emp_dob'];?>">
																		</div>
																	</div>

																	<div class="form-group">
																		<label for="telephone">Telephone</label>
																		<input class="form-control" name="telephone" value="<?php echo $row['contact_no'];?>" type="number" id="telephone">
																	</div>
																	<div class="form-group">
																		<label for="position">Position</label>
																		<input class="form-control" name="position" value="<?php echo $row['emp_position'];?>" type="text" id="position">
																	</div>

																	<div class="form-group">
																		<label for="email">Email</label>
																		<input class="form-control" name="email" value="<?php echo $row['emp_email'];?>" type="email" id="email">
																	</div>

																	<div class="form-group">
																		<label for="join_date">Join Date</label>
																		<div class="input-group">
																			<div class="input-group-addon">
																				<i class="fa fa-calendar"></i>
																			</div>
																			<input name="join_date" type="date" id="join_date" value="<?php echo $row['date_hired'];?>">
																		</div>
																	</div>
																	<label for="shift_start">Shift Start</label>
																	<div class="input-group">
																		<input class="form-control" name="shift_start" value="<?php echo $row['shift_start'];?>" type="time" id="shift_start" >
																		<div class="input-group-addon">
																			<i class="fa fa-clock-o"></i>
																		</div>
																	</div>

																	<label for="shift_end">Shift End</label>
																	<div class="input-group">
																		<input class="form-control" name="shift_end" value="<?php echo $row['shift_end'];?>" type="time" id="shift_end">
																		<div class="input-group-addon">
																			<i class="fa fa-clock-o"></i>
																		</div>
																	</div>
																	<div class="form-group">
																		<label for="salary">Salary</label>
																		<input class="form-control" name="salary" value="<?php echo $row['emp_salary'];?>" type="text" id="salary">
																	</div>
																	<div class="form-group">
																		<label for="image">Image</label>
																		<input class="form-control" name="image" type="file" value="<?php echo $row['image'];?>" id="image">
																	</div>

																	<div class="form-group">
																		<label for="emp_username">Username</label>
																		<input class="form-control" name="emp_username" value="<?php echo $row['emp_username'];?>" type="text" id="emp_username">
																	</div>
																	<div class="form-group">
																		<label for="emp_password">Password</label>
																		<input class="form-control" name="emp_password" value="<?php echo $row['emp_userpassword'];?>" type="text" id="emp_password">
																	</div>
																	<input type="hidden" name="edit_id" value="<?php echo $row['emp_id'];?>">


																	<div class="pull-right">
																		<input class="btn btn-success btn-flat" type="submit" value="Save" name="editEmp">
																		<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">Close</button>
																	</div>	
																</div>

																<div class="modal-footer">
																	
																</div>
															</form>
														</div>
														
													</div>
												</div>
											</div>
											<!-- Delete function -->
											<a type="button" class="btn btn-default btn-flat btn-sm" title="Delete" data-toggle="modal" data-target="#deleteModal31"><i class="glyphicon glyphicon-trash"></i></a> 
											<div id="deleteModal31" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<a href="javascript:void(0);" onclick="if( confirm('Are you sure want to delete'))window.location='dashboard1.php?action=employee_list&delete_id=<?php echo $row['emp_id']; ?>"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
																<h4 class="modal-title">Confirm Delete</h4></a>
															</div>
															<div class="modal-body">

																<p>Are you sure you want to delete this item? </p>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">Close</button>
																<a href="javascript:void(0);"  onclick="window.location='dashboard1.php?action=employee_list&delete_id=<?php echo $row['emp_id']; ?>';">
																	<input class="btn btn-success btn-flat" type="submit" value="Yes">
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</td>
									</tr>

									<?php

								}
								?>

							</tbody>
						</table>
					</div>
					<div class="box-footer clearfix">
						<div class="row">
							<div class="col-xs-12">
								Showing 1 to 20 of 20 entries
								<div class="pull-right">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
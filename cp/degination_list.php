<?php
//Delete section
if(isset($_GET['delete_id']))
{
	$id=$_GET['delete_id'];
	$res=$con->deleteDegination($id);
	if($res)
	{
		?>
		<script>alert('Record Deleted ...')window.location='dashboard1.php?action=degination_list'</script>
		<?php
	}
	else
	{
		?>
		<script>alert('Record cant Deleted !!!')window.location='dashboard1.php?action=degination_list'</script>
		<?php
	}
}




?>


<section class="wrapper">

	<div class="row">
		<div class="col-md-12">
			<a href="dashboard1.php?action=add_degination" type="button" class="btn btn-success btn-flat margin" style="margin-top: 32px;">Add Degination</a>
			<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title">Degination List</h3>
					<div class="box-tools">
						<form method="GET" action="dashboard1.php?action=add_degination" accept-charset="UTF-8">
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
							<th>Id</th>
							<th>Degination Name</th>
							<th>Employee Salary</th>
							

						</tr>
						<?php
						$sql=$con->selectDegination();
						while($row=mysql_fetch_array($sql))
						{
							?>
							<tr>
								<td><?php echo $row['id'];?></td>
								<td><a href="#"><?php echo $row['degin_name'];?></a></td>
								<td><a href="#"><?php echo $row['emp_salary'];?></a></td>

								<td>
									<div class="btn-group">
										<!-- Edit function -->
										<a type="button" class="btn btn-default btn-flat btn-sm" title="Edit" data-toggle="modal" data-target="#<?php echo $row['id'];?>"><i class="fa fa-pencil"></i></a> 
										<div id="<?php echo $row['id'];?>" class="modal fade" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<a href="javascript:void(0);"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
															<h4 class="modal-title">Edit Degination</h4></a>
														</div>
														<div class="modal-body">
															<!-- Edit form -->
															<form method="GET" action="edit_degination.php">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="first_name">Degination Name</label>
																		<input class="form-control" name="degin_name" value="<?php echo $row['degin_name'];?>" type="text" id="degin_name">
																		<label for="first_name">Employee Salary</label>
																		<input class="form-control" name="emp_salary" value="<?php echo $row['emp_salary'];?>" type="text" id="emp_salary">

																	</div>
																	<input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">


																	<div class="pull-right">
																		<input class="btn btn-success btn-flat" type="submit" value="Save" name="editDeg">
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
															<a href="javascript:void(0);" onclick="if( confirm('Are you sure want to delete'))window.location='dashboard1.php?action=degination_list&delete_id=<?php echo $row['id']; ?>"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
																<h4 class="modal-title">Confirm Delete</h4></a>
															</div>
															<div class="modal-body">

																<p>Are you sure you want to delete this item? </p>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">Close</button>
																<a href="javascript:void(0);"  onclick="window.location='dashboard1.php?action=degination_list&delete_id=<?php echo $row['id']; ?>';">
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
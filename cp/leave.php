


<section class="wrapper">

	<div class="row">
		<div class="col-md-12">
			<!-- <a href="dashboard1.php?action=add_leave" type="button" class="btn btn-success btn-flat margin" style="margin-top: 32px;">New Leave</a> -->
			<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title">Leave List</h3>
					<div class="box-tools">
						<form method="GET" action="dashboard1.php?action=add_department" accept-charset="UTF-8">
							<div class="input-group input-group-sm" style="width: 150px;">
								<input class="form-control pull-right" placeholder="Search" name="term" type="text">
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tbody><tr>
							<th>Leave ID</th>
							<th>Employee Name</th>
							<th>Leave Type</th>
							<th>Date From</th>
							<th>Date To</th>
							<th>Reasons</th>

						</tr>
						<?php
						$sql=$con->selectLeave();
						while($row=mysql_fetch_array($sql))
						{
							?>
							<tr>
								<td><?php echo $row['id'];?></td>
								<td><a href="#"><?php echo $row['employee_name'];?></a></td>								
								<td><a href="#"><?php echo $row['leave_type'];?></a></td>
								<td><a href="#"><?php echo $row['date_from'];?></a></td>
								<td><a href="#"><?php echo $row['date_to'];?></a></td>
								<td><a href="#"><?php echo $row['reason'];?></a></td> 
								
								<td>
									<div class="btn-group">
										


										<a type="button" class="btn btn-success" title="Edit" data-toggle="modal" data-target="#<?php echo $row['id'];?>">Accept</i></a> 
										<div id="<?php echo $row['id'];?>" class="modal fade" role="dialog">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<a href="javascript:void(0);" onclick="if( confirm('Are you sure want to delete'))window.location='dashboard1.php?action=department_list&delete_id=<?php echo $row['id']; ?>"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
															<h4 class="modal-title">Edit Department</h4></a>
														</div>
														<div class="modal-body">
															<!-- Edit form -->
															<form method="GET">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="first_name">Department Name</label>
																		<input class="form-control" name="dept_name" value="<?php echo $row['dept_name'];?>" type="text" id="dept_name">
																	</div>
																	<input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">


																	<div class="pull-right">
																		<input class="btn btn-success btn-flat" type="submit" value="Save" name="editDep">
																		<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">Close</button>
																	</div>	
																</div>

																<div class="modal-footer">
																	<!-- <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">Close</button> -->
																	<a href="#">
																		<!-- <input class="btn btn-success btn-flat" type="submit" value="Yes"> -->
																	</a>
																</div>
															</form>
														</div>
														
													</div>
												</div>
											</div>




											<a type="button" class="btn btn-danger" title="Delete" data-toggle="modal" data-target="#deleteModal31">Decline</i></a> 
											<div id="deleteModal31" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<a href="javascript:void(0);" onclick="if( confirm('Are you sure want to delete'))window.location='dashboard1.php?action=department_list&delete_id=<?php echo $row['id']; ?>"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
																<h4 class="modal-title">Confirm Delete</h4></a>
															</div>
															<div class="modal-body">

																<p>Are you sure you want to delete this item? </p>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">Close</button>
																<a href="javascript:void(0);"  onclick="window.location='dashboard1.php?action=department_list&delete_id=<?php echo $row['id']; ?>';">
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
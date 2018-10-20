<!DOCTYPE html>
<html>
    
<!-- Mirrored from dreamguys.co.in/smarthr/blue/salary.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 15:26:41 GMT -->
<?php include ('head.php') ?>

    <body>
        <div class="main-wrapper">
            <?php include ('header.php') ?>
            <?php include ('sidebar.php') ?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Employee Salary</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Add Salary</a>
						</div>
					</div>
					<div class="row filter-row">
					   <div class="col-sm-3 col-md-2 col-xs-6">  
							<div class="form-group form-focus">
								<label class="control-label">Employee Name</label>
								<input type="text" class="form-control floating" />
							</div>
					   </div>
					   <div class="col-sm-3 col-md-2 col-xs-6">  
							<div class="form-group form-focus select-focus">
								<label class="control-label">Role</label>
								<select class="select floating"> 
									<option value=""> -- Select -- </option>
									<option value="">Employee</option>
									<option value="1">Manager</option>
								</select>
							</div>
					   </div>
					   <div class="col-sm-3 col-md-2 col-xs-6"> 
							<div class="form-group form-focus select-focus">
								<label class="control-label">Leave Status</label>
								<select class="select floating"> 
									<option value=""> -- Select -- </option>
									<option value="0"> Pending </option>
									<option value="1"> Approved </option>
									<option value="2"> Rejected </option>
								</select>
							</div>
					   </div>
					   <div class="col-sm-3 col-md-2 col-xs-6">  
							<div class="form-group form-focus">
								<label class="control-label">From</label>
								<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
							</div>
						</div>
					   <div class="col-sm-3 col-md-2 col-xs-6">  
							<div class="form-group form-focus">
								<label class="control-label">To</label>
								<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
							</div>
						</div>
						<div class="col-sm-3 col-md-2 col-xs-6">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th style="width:30%;">Employee</th>
											<th>Employee ID</th>
											<th>Email</th>
											<th>Joining Date</th>
											<th>Role</th>
											<th>Salary</th>
											<th>Payslip</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<a href="profile.php" class="avatar">J</a>
												<h2><a href="profile.php">John Doe <span>Web Designer</span></a></h2>
											</td>
											<td>FT-0001</td>
											<td>johndoe@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Designer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td>$59698</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">R</a>
												<h2><a href="profile.php">Richard Miles <span>Web Developer</span></a></h2>
											</td>
											<td>FT-0002</td>
											<td>richardmiles@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td>$72000</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">J</a>
												<h2><a href="profile.php">John Smith <span>Android Developer</span></a></h2>
											</td>
											<td>FT-0003</td>
											<td>johnsmith@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Android Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td>$48200</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">M</a>
												<h2><a href="profile.php">Mike Litorus <span>IOS Developer</span></a></h2>
											</td>
											<td>FT-0004</td>
											<td>mikelitorus@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">IOS Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td>$59698</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">W</a>
												<h2><a href="profile.php">Wilmer Deluna <span>Team Leader</span></a></h2>
											</td>
											<td>FT-0005</td>
											<td>wilmerdeluna@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Team Leader <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td>$43000</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">J</a>
												<h2><a href="profile.php">Jeffrey Warden <span>Web Developer</span></a></h2>
											</td>
											<td>FT-0006</td>
											<td>jeffreywarden@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td>$45000</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">B</a>
												<h2><a href="profile.php">Bernardo Galaviz <span>Web Developer</span></a></h2>
											</td>
											<td>FT-0007</td>
											<td>bernardogalaviz@example.com</td>
											<td>1 Jan 2014</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Web Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td>$38400</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">L</a>
												<h2><a href="profile.php">Lesley Grauer <span>Team Leader</span></a></h2>
											</td>
											<td>FT-0008</td>
											<td>lesleygrauer@example.com</td>
											<td>1 Jun 2015</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Team Leader <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td>$75500</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">J</a>
												<h2><a href="profile.php">Jeffery Lalor <span>Team Leader</span></a></h2>
											</td>
											<td>FT-0009</td>
											<td>jefferylalor@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Team Leader <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td>$73550</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">L</a>
												<h2><a href="profile.php">Loren Gatlin <span>Android Developer</span></a></h2>
											</td>
											<td>FT-0010</td>
											<td>lorengatlin@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Android Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td>$55000</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">T</a>
												<h2><a href="profile.php">Tarah Shropshire <span>Android Developer</span></a></h2>
											</td>
											<td>FT-0011</td>
											<td>tarahshropshire@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Android Developer <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Software Engineer</a></li>
														<li><a href="#">Software Tester</a></li>
														<li><a href="#">Frontend Developer</a></li>
														<li><a href="#">UI/UX Developer</a></li>
													</ul>
												</div>
											</td>
											<td>$92400</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				<div class="notification-box">
					<div class="msg-sidebar notifications msg-noti">
						<div class="topnav-dropdown-header">
							<span>Messages</span>
						</div>
						<div class="drop-scroll msg-list-scroll">
							<ul class="list-box">
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">R</span>
											</div>
											<div class="list-body">
												<span class="message-author">Richard Miles </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item new-message">
											<div class="list-left">
												<span class="avatar">J</span>
											</div>
											<div class="list-body">
												<span class="message-author">John Doe</span>
												<span class="message-time">1 Aug</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">T</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Tarah Shropshire </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">M</span>
											</div>
											<div class="list-body">
												<span class="message-author">Mike Litorus</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">C</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Catherine Manseau </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">D</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Domenic Houston </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">B</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Buster Wigton </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">R</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Rolland Webber </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">C</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Claire Mapes </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">M</span>
											</div>
											<div class="list-body">
												<span class="message-author">Melita Faucher</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">J</span>
											</div>
											<div class="list-body">
												<span class="message-author">Jeffery Lalor</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">L</span>
											</div>
											<div class="list-body">
												<span class="message-author">Loren Gatlin</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.php">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">T</span>
											</div>
											<div class="list-body">
												<span class="message-author">Tarah Shropshire</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="chat.php">See all messages</a>
						</div>
					</div>
				</div>
            </div>
			<div id="add_salary" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add Staff Salary</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="row"> 
									<div class="col-md-6"> 
										<div class="form-group">
											<label>Select Staff</label>
											<select class="select"> 
												<option>John Doe</option>
												<option>Richard Miles</option>
											</select>
										</div>
									</div>
									<div class="col-md-6"> 
										<label>Net Salary</label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="row"> 
									<div class="col-md-6"> 
										<h4 class="text-primary">Earnings</h4>
										<div class="form-group">
											<label>Basic</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>DA(40%)</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>HRA(15%)</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Conveyance</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Allowance</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Medical  Allowance</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text">
										</div>  
									</div>
									<div class="col-md-6">  
										<h4 class="text-primary">Deductions</h4>
										<div class="form-group">
											<label>TDS</label>
											<input class="form-control" type="text">
										</div> 
										<div class="form-group">
											<label>ESI</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>PF</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Leave</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Prof. Tax</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Labour Welfare</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Fund</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text">
										</div>
									</div>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Create Salary</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="edit_salary" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add Staff Salary</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="row"> 
									<div class="col-md-6"> 
										<div class="form-group">
											<label>Select Staff</label>
											<select class="select"> 
												<option>John Doe</option>
												<option>Richard Miles</option>
											</select>
										</div>
									</div>
									<div class="col-md-6"> 
										<label>Net Salary</label>
										<input class="form-control" type="text" value="$4000">
									</div>
								</div>
								<div class="row"> 
									<div class="col-md-6"> 
										<h4 class="text-primary">Earnings</h4>
										<div class="form-group">
											<label>Basic</label>
											<input class="form-control" type="text" value="$6500">
										</div>
										<div class="form-group">
											<label>DA(40%)</label>
											<input class="form-control" type="text" value="$2000">
										</div>
										<div class="form-group">
											<label>HRA(15%)</label>
											<input class="form-control" type="text" value="$700">
										</div>
										<div class="form-group">
											<label>Conveyance</label>
											<input class="form-control" type="text" value="$70">
										</div>
										<div class="form-group">
											<label>Allowance</label>
											<input class="form-control" type="text" value="$30">
										</div>
										<div class="form-group">
											<label>Medical  Allowance</label>
											<input class="form-control" type="text" value="$20">
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text">
										</div>  
									</div>
									<div class="col-md-6">  
										<h4 class="text-primary">Deductions</h4>
										<div class="form-group">
											<label>TDS</label>
											<input class="form-control" type="text" value="$300">
										</div> 
										<div class="form-group">
											<label>ESI</label>
											<input class="form-control" type="text" value="$20">
										</div>
										<div class="form-group">
											<label>PF</label>
											<input class="form-control" type="text" value="$20">
										</div>
										<div class="form-group">
											<label>Leave</label>
											<input class="form-control" type="text" value="$250">
										</div>
										<div class="form-group">
											<label>Prof. Tax</label>
											<input class="form-control" type="text" value="$110">
										</div>
										<div class="form-group">
											<label>Labour Welfare</label>
											<input class="form-control" type="text" value="$10">
										</div>
										<div class="form-group">
											<label>Fund</label>
											<input class="form-control" type="text" value="$40">
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text" value="$15">
										</div>
									</div>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Save & Update</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_salary" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Salary</h4>
						</div>
						<form>
							<div class="modal-body card-box">
								<p>Are you sure want to delete this?</p>
								<div class="m-t-20 text-left">
									<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
									<button type="submit" class="btn btn-danger">Delete</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/js/select2.min.js"></script>
		<script type="text/javascript" src="assets/js/moment.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/salary.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 15:26:41 GMT -->
</html>
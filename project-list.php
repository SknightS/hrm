<!DOCTYPE html>
<html>
    
<!-- Mirrored from dreamguys.co.in/smarthr/blue/project-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 15:26:48 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Project - HRMS admin template</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="assets/img/logo.png" width="40" height="40" alt="">
					</a>
                </div>
                <div class="page-title-box pull-left">
					<h3>Focus Technologies</h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul class="nav navbar-nav navbar-right user-menu pull-right">
					<li class="dropdown hidden-xs">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-purple pull-right">3</span></a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span>Notifications</span>
							</div>
							<div class="drop-scroll">
								<ul class="media-list">
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">
													<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
												</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="m-0"><span class="notification-time">4 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="m-0"><span class="notification-time">6 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">L</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="m-0"><span class="notification-time">8 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">G</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="m-0"><span class="notification-time">12 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="m-0"><span class="notification-time">2 days ago</span></p>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.php">View all Notifications</a>
							</div>
						</div>
					</li>
					<li class="dropdown hidden-xs">
						<a href="javascript:;" id="open_msg_box" class="hasnotifications"><i class="fa fa-comment-o"></i> <span class="badge bg-purple pull-right">8</span></a>
					</li>	
					<li class="dropdown">
						<a href="profile.php" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							<span class="user-img"><img class="img-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
							<span>Admin</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="profile.php">My Profile</a></li>
							<li><a href="edit-profile.php">Edit Profile</a></li>
							<li><a href="settings.php">Settings</a></li>
							<li><a href="login.php">Logout</a></li>
						</ul>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="profile.php">My Profile</a></li>
						<li><a href="edit-profile.php">Edit Profile</a></li>
						<li><a href="settings.php">Settings</a></li>
						<li><a href="login.php">Logout</a></li>
					</ul>
				</div>
            </div>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li> 
								<a href="index.php">Dashboard</a>
							</li>
							<li class="submenu">
								<a href="#" class="noti-dot"><span> Employees</span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="employees.php">All Employees</a></li>
									<li><a href="holidays.php">Holidays</a></li>
									<li><a href="leaves.php"><span>Leave Requests</span> <span class="badge bg-primary pull-right">1</span></a></li>
									<li><a href="attendance.php">Attendance</a></li>
									<li><a href="departments.php">Departments</a></li>
									<li><a href="designations.php">Designations</a></li>
								</ul>
							</li>
							<li> 
								<a href="clients.php">Clients</a>
							</li>
							<li class="active"> 
								<a href="projects.php">Projects</a>
							</li>
							<li> 
								<a href="tasks.php">Tasks</a>
							</li>
							<li class="submenu">
								<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="voice-call.php">Voice Call</a></li>
									<li><a href="video-call.php">Video Call</a></li>
									<li><a href="incoming-call.php">Incoming Call</a></li>
								</ul>
							</li>
							<li> 
								<a href="contacts.php">Contacts</a>
							</li>
							<li> 
								<a href="leads.php">Leads</a>
							</li>
							<li class="submenu">
								<a href="#"><span> Accounts </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="estimates.php">Estimates</a></li>
									<li><a href="invoices.php">Invoices</a></li>
									<li><a href="payments.php">Payments</a></li>
									<li><a href="expenses.php">Expenses</a></li>
									<li><a href="provident-fund.php">Provident Fund</a></li>
									<li><a href="taxes.php">Taxes</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><span> Payroll </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="salary.php"> Employee Salary </a></li>
									<li><a href="salary-view.php"> Payslip </a></li>
								</ul>
							</li>
							<li> 
								<a href="worksheet.php">Timing Sheet</a>
							</li>
							<li> 
								<a href="tickets.php">Tickets</a>
							</li>
							<li> 
								<a href="events.php">Events</a>
							</li>
							<li> 
								<a href="inbox.php">Email</a>
							</li>
							<li> 
								<a href="chat.php">Chat <span class="badge bg-primary pull-right">5</span></a>
							</li>
							<li> 
								<a href="assets.php">Assets</a>
							</li>
							<li> 
								<a href="activities.php">Activities</a>
							</li>
							<li> 
								<a href="users.php">Users</a>
							</li>
							<li class="submenu">
								<a href="#"><span> Reports </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="expense-reports.php"> Expense Report </a></li>
									<li><a href="invoice-reports.php"> Invoice Report </a></li>
								</ul>
							</li>
							<li> 
								<a href="settings.php">Settings</a>
							</li>
							<li class="submenu">
								<a href="#"><span> Pages </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="login.php"> Login </a></li>
									<li><a href="register.php"> Register </a></li>
									<li><a href="forgot-password.php"> Forgot Password </a></li>
									<li><a href="profile.php"> Profile </a></li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-4">
							<h4 class="page-title">Projects</h4>
						</div>
						<div class="col-sm-8 text-right m-b-20">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i> Create Project</a>
							<div class="view-icons">
								<a href="projects.php" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
								<a href="project-list.php" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
							</div>
						</div>
					</div>
					<div class="row filter-row">
						<div class="col-sm-3 col-xs-6">  
							<div class="form-group form-focus">
								<label class="control-label">Project Name</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">  
							<div class="form-group form-focus">
								<label class="control-label">Employee Name</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6"> 
							<div class="form-group form-focus select-focus">
								<label class="control-label">Role</label>
								<select class="select floating"> 
									<option value="">Select Roll</option>
									<option value="">Web Developer</option>
									<option value="1">Web Designer</option>
									<option value="1">Android Developer</option>
									<option value="1">Ios Developer</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>Project</th>
											<th>Project Id</th>
											<th>Leader</th>
											<th>Team</th>
											<th>Deadline</th>
											<th>Priority</th>
											<th>Status</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2><a href="project-view.php">Food and Drinks</a></h2>
											</td>
											<td>PRO-0001</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.php">School Guru</a></h2>
											</td>
											<td>PRO-0002</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-warning"></i> Medium <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.php">Penabook</a></h2>
											</td>
											<td>PRO-0003</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Low <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.php">Harvey Clinic</a></h2>
											</td>
											<td>PRO-0004</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.php">Food and Drinks</a></h2>
											</td>
											<td>PRO-0005</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.php">School Guru</a></h2>
											</td>
											<td>PRO-0006</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.php">Penabook</a></h2>
											</td>
											<td>PRO-0007</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.php">Harvey Clinic</a></h2>
											</td>
											<td>PRO-0008</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.php">Food and Drinks</a></h2>
											</td>
											<td>PRO-0009</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.php">School Guru</a></h2>
											</td>
											<td>PRO-0010</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.php">Penabook</a></h2>
											</td>
											<td>PRO-0011</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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
			<div id="create_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Create Project</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Project Name</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Client</label>
											<select class="select">
												<option value="">Global Technologies</option>
												<option value="1">Delta Infotech</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Start Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>End Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" style="" type="text"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label>Rate</label>
											<input placeholder="$50" class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>&nbsp;</label>
											<select class="select">
												<option>Hourly</option>
												<option>Fixed</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Priority</label>
											<select class="select">
												<option>High</option>
												<option>Medium</option>
												<option>Low</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Project Leader</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Team Leader</label>
											<div class="project-members">
												<a href="#" data-toggle="tooltip" title="Jeffery Lalor">
													<img src="assets/img/user.jpg" class="avatar" alt="Jeffery Lalor" height="20" width="20">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Team</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Team Members</label>
											<div class="project-members">
												<a href="#" data-toggle="tooltip" title="John Doe">
													<img src="assets/img/user.jpg" class="avatar" alt="John Doe" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="Richard Miles">
													<img src="assets/img/user.jpg" class="avatar" alt="Richard Miles" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="John Smith">
													<img src="assets/img/user.jpg" class="avatar" alt="John Smith" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="Mike Litorus">
													<img src="assets/img/user.jpg" class="avatar" alt="Mike Litorus" height="20" width="20">
												</a>
												<span class="all-team">+2</span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here"></textarea>
								</div>
								<div class="form-group">
									<label>Upload Files</label>
									<input class="form-control" type="file">
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Create Project</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="edit_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Edit Project</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Project Name</label>
											<input class="form-control" value="School Guru" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Client</label>
											<select class="select">
												<option>Global Technologies</option>
												<option>Delta Infotech</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Start Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>End Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" style="" type="text"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label>Rate</label>
											<input placeholder="$50" class="form-control" value="$5000" type="text">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>&nbsp;</label>
											<select class="select">
												<option>Hourly</option>
												<option selected>Fixed</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Priority</label>
											<select class="select">
												<option selected>High</option>
												<option>Medium</option>
												<option>Low</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Project Leader</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Team Leader</label>
											<div class="project-members">
												<a href="#" data-toggle="tooltip" title="Jeffery Lalor">
													<img src="assets/img/user.jpg" class="avatar" alt="Jeffery Lalor" height="20" width="20">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Team</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Team Members</label>
											<div class="project-members">
												<a href="#" data-toggle="tooltip" title="John Doe">
													<img src="assets/img/user.jpg" class="avatar" alt="John Doe" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="Richard Miles">
													<img src="assets/img/user.jpg" class="avatar" alt="Richard Miles" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="John Smith">
													<img src="assets/img/user.jpg" class="avatar" alt="John Smith" height="20" width="20">
												</a>
												<a href="#" data-toggle="tooltip" title="Mike Litorus">
													<img src="assets/img/user.jpg" class="avatar" alt="Mike Litorus" height="20" width="20">
												</a>
												<span class="all-team">+2</span>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea rows="4" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
								</div>
								<div class="form-group">
									<label>Upload Files</label>
									<input class="form-control" type="file">
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Save Changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Project</h4>
						</div>
						<div class="modal-body card-box">
							<p>Are you sure want to delete this?</p>
							<div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
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

<!-- Mirrored from dreamguys.co.in/smarthr/blue/project-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 15:26:48 GMT -->
</html>
<!DOCTYPE html>
<html>

<?php include ('head.php') ?>
    <body>
        <div class="main-wrapper">
            <?php include ('header.php') ?>
            <?php include ('sidebar.php') ?>
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
							<li> 
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
									<li><a class="active" href="estimates.php">Estimates</a></li>
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
						<div class="col-sm-8">
							<h4 class="page-title">Edit Estimate</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<form>
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label>Client <span class="text-danger">*</span></label>
											<select class="select">
												<option>Please Select</option>
												<option selected>Barry Cuda</option>
												<option>Tressa Wexler</option>
											</select>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Project <span class="text-danger">*</span></label>
											<select class="select">
												<option>Select Project</option>
												<option selected>Food and Drinks</option>
												<option>School Guru</option>
											</select>
										</div>
									</div>
									
									<div class="col-sm-3">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control" type="email" value="barrycuda@example.com">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Tax</label>
											<select class="select">
												<option>Select Tax</option>
												<option>VAT</option>
												<option selected>GST</option>
												<option>No Tax</option>
											</select>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Client Address</label>
											<textarea class="form-control" rows="3">5754 Airport Rd, Coosada, AL, 36020</textarea>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Billing Address</label>
											<textarea class="form-control" rows="3">5754 Airport Rd, Coosada, AL, 36020</textarea>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Estimate Date <span class="text-danger">*</span></label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text" value="2017/09/20"></div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Expiry Date <span class="text-danger">*</span></label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text" value="2017/09/27"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="table-responsive">
											<table class="table table-hover table-white">
												<thead>
													<tr>
														<th style="width: 20px">#</th>
														<th class="col-sm-2">Item</th>
														<th class="col-md-6">Description</th>
														<th style="width:100px;">Unit Cost</th>
														<th style="width:80px;">Qty</th>
														<th>Amount</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
												<tr>
													<td>1</td>
													<td>
														<input class="form-control" type="text" value="Vehicle Module" style="min-width:150px">
													</td>
													<td>
														<input class="form-control" type="text" value="Create, edit delete functionlity" style="min-width:150px">
													</td>
													<td>
														<input class="form-control" style="width:100px" type="text" value="112">
													</td>
													<td>
														<input class="form-control" style="width:80px" type="text" value="1">
													</td>
													<td>
														<input class="form-control" readonly="" style="width:120px" type="text" value="112">
													</td>
													<td><a href="javascript:void(0)" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a></td>
												</tr>
												<tr>
													<td>2</td>
													<td>
														<input class="form-control" type="text" value="Vehicle Module" style="min-width:150px">
													</td>
													<td>
														<input class="form-control" type="text" value="Create, edit delete functionlity" style="min-width:150px">
													</td>
													<td>
														<input class="form-control" style="width:100px" type="text" value="112">
													</td>
													<td>
														<input class="form-control" style="width:80px" type="text" value="1">
													</td>
													<td>
														<input class="form-control" readonly="" style="width:120px" type="text" value="112">
													</td>
													<td><a href="javascript:void(0)" class="text-danger font-18" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
												</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table table-hover table-white">
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td class="text-right">Total</td>
														<td style="text-align: right; width: 230px">112</td>
													</tr>
													<tr>
														<td colspan="5" style="text-align: right">Tax</td>
														<td style="text-align: right;width: 230px">
															<input class="form-control text-right" value="0" readonly="" type="text">
														</td>
													</tr>
													<tr>
														<td colspan="5" style="text-align: right">
															Discount %
														</td>
														<td style="text-align: right; width: 230px">
															<input class="form-control text-right" value="0" type="text">
														</td>
													</tr>
													<tr>
														<td colspan="5" style="text-align: right; font-weight: bold">
															Grand Total
														</td>
														<td style="text-align: right; font-weight: bold; font-size: 16px;width: 230px">
															$ 112
														</td>
													</tr>
												</tbody>
											</table>                               
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Other Information</label>
													<textarea class="form-control" rows="4"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
								<button class="btn btn-primary">Save & Send</button> <button class="btn btn-primary">Save</button>
							</form>
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
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/js/moment.min.js"></script>
		<script type="text/javascript" src="assets/js/select2.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/edit-estimate.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 15:26:48 GMT -->
</html>
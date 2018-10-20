<!DOCTYPE html>
<html>

<?php include ('head.php') ?>
    <body>
        <div class="main-wrapper" id="wrapper">
            <?php include ('header.php') ?>
            <?php include ('sidebar.php') ?>
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li> 
								<a href="index.php"><i class="fa fa-home"></i> Back to Home</a>
							</li>
							<li class="menu-title">Settings</li>
							<li> 
								<a href="settings.php">Company Settings</a>
							</li>
							<li> 
								<a href="localization.php">Localization</a>
							</li>
							<li class="active"> 
								<a href="theme-settings.php">Theme Settings</a>
							</li>
							<li> 
								<a href="roles-permissions.php">Roles & Permissions</a>
							</li>
							<li> 
								<a href="email-settings.php">Email Settings</a>
							</li>
							<li> 
								<a href="invoice-settings.php">Invoice Settings</a>
							</li>
							<li> 
								<a href="salary-settings.php">Salary Settings</a>
							</li>
							<li> 
								<a href="notifications-settings.php">Notifications</a>
							</li>
							<li> 
								<a href="change-password.php">Change Password</a>
							</li>
							<li> 
								<a href="leave-type.php">Leave Type</a>
							</li>
						</ul>
					</div>
                </div>
            </div>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
                            <form class="form-horizontal">
								<h4 class="page-title">Theme Settings</h4>
								<div class="form-group">
									<label class="col-lg-3 control-label">Website Name</label>
									<div class="col-lg-9">
										<input name="website_name" class="form-control" value="Focus Technologies" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Light Logo</label>
									<div class="col-lg-5">
										<input class="form-control" type="file">
										<span class="help-block">Recommended image size is 40px x 40px</span>
									</div>
									<div class="col-lg-4">
										<div class="img-thumbnail pull-right"><img src="assets/img/logo2.png" alt="" width="40" height="40"></div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Dark Logo</label>
									<div class="col-lg-5">
										<input class="form-control" type="file">
										<span class="help-block">Recommended image size is 140px x 40px</span>
									</div>
									<div class="col-lg-4">
										<div class="img-thumbnail pull-right"><img src="assets/img/logo3.png" class="img-responsive" alt="" width="140" height="40"></div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Favicon</label>
									<div class="col-lg-5">
										<input class="form-control" type="file">
										<span class="help-block">Recommended image size is 16px x 16px</span>
									</div>
									<div class="col-lg-4">
										<div class="settings-image img-thumbnail pull-right"><img src="assets/img/favicon.png" class="img-responsive" width="16" height="16" alt=""></div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Theme Color</label>
									<div class="col-lg-9">
										<div class="themes-list">
											<a href="https://dreamguys.co.in/smarthr/orange/index.php" class="theme-orange"></a>
											<a href="https://dreamguys.co.in/smarthr/purple/index.php" class="theme-purple"></a>
											<a href="index.php" class="theme-blue active"></a>
											<a href="https://dreamguys.co.in/smarthr/maroon/index.php" class="theme-maroon"></a>
											<a href="https://dreamguys.co.in/smarthr/light/index.php" class="theme-light"></a>
											<a href="https://dreamguys.co.in/smarthr/dark/index.php" class="theme-dark"></a>
											<a href="https://dreamguys.co.in/smarthr/rtl/index.php" class="theme-rtl">RTL</a>
										</div>
									</div>
								</div>
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
		<script type="text/javascript" src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/theme-settings.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 15:26:46 GMT -->
</html>
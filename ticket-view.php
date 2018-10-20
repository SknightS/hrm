<!DOCTYPE html>
<html>

<?php include ('head.php') ?>
    <body>
        <div class="main-wrapper">
            <?php include ('header.php') ?>
            <?php include ('sidebar.php') ?>
            <div class="page-wrapper">
				<div class="chat-main-row">
					<div class="chat-main-wrapper">
						<div class="col-xs-8 message-view task-view">
							<div class="chat-window">
								<div class="chat-header">
									<div class="navbar">
										<div class="pull-left ticket-view-details">
											<div class="ticket-header">
												<span>Status: </span> <span class="label label-warning">New</span> <span class="m-l-15 text-muted">Client: </span>
												<a href="#">Delta Infotech</a>    
												<span class="m-l-15 text-muted">Created: </span>
												<span>5 May 2017 07:21 AM </span> 
												<span class="m-l-15 text-muted">Created by:</span>
												<span><a href="profile.php">John Doe</a></span>
											</div>
										</div>
										<a class="task-chat profile-rightbar pull-right" href="#task_window"><i class="fa fa fa-comment"></i></a>
									</div>
								</div>
								<div class="chat-contents">
									<div class="chat-content-wrap">
										<div class="chat-wrap-inner">
											<div class="chat-box">
												<div class="task-wrapper">
													<div class="panel">
														<div class="panel-body">
															<div class="project-title">
																<div class="m-b-20">
																	<span class="h5 panel-title ">Laptop Issue</span>
																	<div class="pull-right ticket-priority"><span>Priority:</span>
																		<div class="btn-group">
																			<a href="#" class="label label-danger dropdown-toggle" data-toggle="dropdown">Highest <span class="caret"></span></a>
																			<ul class="dropdown-menu dropdown-menu-right">
																				<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Highest priority</a></li>
																				<li><a href="#"><i class="fa fa-dot-circle-o text-info"></i> High priority</a></li>
																				<li><a href="#"><i class="fa fa-dot-circle-o text-primary"></i> Normal priority</a></li>
																				<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low priority</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin libero vitae est consectetur, a molestie tortor consectetur. Aenean tincidunt interdum ipsum, id pellentesque diam suscipit ut. Vivamus massa mi, fermentum eget neque eget, imperdiet tristique lectus. Proin at purus ut sem pellentesque tempor sit amet ut lectus. Sed orci augue, placerat et pretium ac, hendrerit in felis. Integer scelerisque libero non metus commodo, et hendrerit diam aliquet. Proin tincidunt porttitor ligula, a tincidunt orci pellentesque nec. Ut ultricies maximus nulla id consequat. Fusce eu consequat mi, eu euismod ligula. Aliquam porttitor neque id massa porttitor, a pretium velit vehicula. Morbi volutpat tincidunt urna, vel ullamcorper ligula fermentum at. </p>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin libero vitae est consectetur, a molestie tortor consectetur. Aenean tincidunt interdum ipsum, id pellentesque diam suscipit ut. Vivamus massa mi, fermentum eget neque eget, imperdiet tristique lectus. Proin at purus ut sem pellentesque tempor sit amet ut lectus. Sed orci augue, placerat et pretium ac, hendrerit in felis. Integer scelerisque libero non metus commodo, et hendrerit diam aliquet. Proin tincidunt porttitor ligula, a tincidunt orci pellentesque nec. Ut ultricies maximus nulla id consequat. Fusce eu consequat mi, eu euismod ligula. Aliquam porttitor neque id massa porttitor, a pretium velit vehicula. Morbi volutpat tincidunt urna, vel ullamcorper ligula fermentum at. </p>
														</div>
													</div>
													<div class="panel">
														<div class="panel-body">
															<h5 class="panel-title m-b-20">Uploaded image files</h5>
															<div class="row">
																<div class="col-md-3 col-sm-6">
																	<div class="thumbnail">
																		<div class="thumb">
																			<img src="assets/img/placeholder.png" class="img-responsive" alt="">
																		</div>
																		<div class="caption text-center">
																			 demo.png
																		</div>
																	</div>
																</div>
																<div class="col-md-3 col-sm-6">
																	<div class="thumbnail">
																		<div class="thumb">
																			<img src="assets/img/placeholder.png" class="img-responsive" alt="">
																		</div>
																		<div class="caption text-center">
																			 demo.png
																		</div>
																	</div>
																</div>
																<div class="col-md-3 col-sm-6">
																	<div class="thumbnail">
																		<div class="thumb">
																			<img src="assets/img/placeholder.png" class="img-responsive" alt="">
																		</div>

																		<div class="caption text-center">
																			 demo.png
																		</div>
																	</div>
																</div>
																<div class="col-md-3 col-sm-6">
																	<div class="thumbnail">
																		<div class="thumb">
																			<img src="assets/img/placeholder.png" class="img-responsive" alt="">
																		</div>
																		<div class="caption text-center">
																			 demo.png
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="panel">
														<div class="panel-body">
															<h5 class="panel-title m-b-20">Uploaded files</h5>
															<ul class="files-list">
																<li>
																	<div class="files-cont">
																		<div class="file-type">
																			<span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
																		</div>
																		<div class="files-info">
																			<span class="file-name text-ellipsis"><a href="#">Ticket_document.xls</a></span>
																			<span class="file-author"><a href="#">John Doe</a></span> <span class="file-date">May 5th at 8:21 PM</span>
																			<div class="file-size">Size: 14.8Mb</div>
																		</div>
																		<ul class="files-action">
																			<li class="dropdown">
																				<a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
																				<ul class="dropdown-menu">
																					<li><a href="javascript:void(0)">Download</a></li>
																					<li><a href="#" data-toggle="modal" data-target="#share_files">Share</a></li>
																					<li><a href="javascript:void(0)">Delete</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</li>
																<li>
																	<div class="files-cont">
																		<div class="file-type">
																			<span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
																		</div>
																		<div class="files-info">
																			<span class="file-name text-ellipsis"><a href="#">Issue_report.xls</a></span>
																			<span class="file-author"><a href="#">John Doe</a></span> <span class="file-date">May 5th at 5:41 PM</span>
																			<div class="file-size">Size: 14.8Mb</div>
																		</div>
																		<ul class="files-action">
																			<li class="dropdown">
																				<a href="#" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
																				<ul class="dropdown-menu">
																					<li><a href="javascript:void(0)">Download</a></li>
																					<li><a href="#" data-toggle="modal" data-target="#share_files">Share</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="notification-popup hide">
													<p>
														<span class="task"></span>
														<span class="notification-text"></span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-4 message-view task-chat-view" id="task_window">
							<div class="chat-window">
								<div class="chat-header">
									<div class="navbar">
										<div class="task-assign">
											<span class="assign-title">Assigned to </span> 
											<a href="#" data-toggle="tooltip" data-placement="bottom" title="John Doe">
												<img src="assets/img/user.jpg" class="avatar" alt="" height="20" width="20">
											</a>
											<a href="#" class="followers-add" title="Add Assignee" data-toggle="modal" data-target="#assignee"><i class="material-icons">add</i></a>
										</div>
										<ul class="nav navbar-nav pull-right chat-menu">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<ul class="dropdown-menu">
													<li><a href="#" title="Edit" data-toggle="modal" data-target="#edit_ticket">Edit Ticket</a></li>
													<li><a href="#" title="Delete" data-toggle="modal" data-target="#delete_ticket">Delete Ticket</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<div class="chat-contents task-chat-contents">
									<div class="chat-content-wrap">
										<div class="chat-wrap-inner">
											<div class="chat-box">
												<div class="chats">
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.php" class="avatar">
																<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<span class="task-chat-user">John Doe</span> <span class="chat-time">8:35 am</span>
																	<p>I'm just looking around.</p>
																	<p>Will you tell me something about yourself? </p>
																</div>
															</div>
														</div>
													</div>
													<div class="completed-task-msg"><span class="task-success"><a href="#">John Doe</a> closed this ticket.</span> <span class="task-time">Today at 9:27am</span></div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.php" class="avatar">
																<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<span class="task-chat-user">John Doe</span> <span class="file-attached">attached 3 files <i class="fa fa-paperclip" aria-hidden="true"></i></span> <span class="chat-time">Dec 17, 2014 at 4:32am</span>
																	<ul class="attach-list">
																		<li><i class="fa fa-file"></i> <a href="#">project_document.avi</a></li>
																		<li><i class="fa fa-file"></i> <a href="#">video_conferencing.psd</a></li>
																		<li><i class="fa fa-file"></i> <a href="#">landing_page.psd</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.php" class="avatar">
																<img alt="Jeffery Lalor" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<span class="task-chat-user">Jeffery Lalor</span> <span class="file-attached">attached file <i class="fa fa-paperclip" aria-hidden="true"></i></span> <span class="chat-time">Yesterday at 9:16pm</span>
																	<ul class="attach-list">
																		<li class="pdf-file"><i class="fa fa-file-pdf-o"></i> <a href="#">Document_2016.pdf</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.php" class="avatar">
																<img alt="Jeffery Lalor" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<span class="task-chat-user">Jeffery Lalor</span> <span class="file-attached">attached file <i class="fa fa-paperclip" aria-hidden="true"></i></span> <span class="chat-time">Today at 12:42pm</span>
																	<ul class="attach-list">
																		<li class="img-file">
																			<div class="attach-img-download"><a href="#">logo2.png</a></div>
																			<div class="task-attach-img"><img src="assets/img/logo2.png" alt=""></div>
																		</li>
																		<li class="img-file">
																			<div class="attach-img-download"><a href="#">avatar-1.jpg</a></div>
																			<div class="task-attach-img"><img src="assets/img/user.jpg" alt=""></div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="task-information"><span class="task-info-line"><a class="task-user" href="#">John Doe</a> <span class="task-info-subject">marked ticket as reopened</span></span><div class="task-time">1:16pm</div></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="chat-footer">
									<div class="message-bar">
										<div class="message-inner">
											<a class="link attach-icon" href="#" data-toggle="modal" data-target="#drag_files"><img src="assets/img/attachment.png" alt=""></a>
											<div class="message-area"><div class="input-group">
												<textarea class="form-control" placeholder="Type message..."></textarea>
												<span class="input-group-btn">
													<button class="btn btn-primary" type="button"><i class="fa fa-send"></i></button>
												</span>
												</div>
											</div>
										</div>
									</div>
									<div class="project-members task-followers">
										<span class="followers-title">Followers</span>
										<a href="#" data-toggle="tooltip" title="Richard Miles">
											<img src="assets/img/user.jpg" class="avatar" alt="Richard Miles" height="20" width="20">
										</a>
										<a href="#" data-toggle="tooltip" title="John Smith">
											<img src="assets/img/user.jpg" class="avatar" alt="John Smith" height="20" width="20">
										</a>
										<a href="#" data-toggle="tooltip" title="Mike Litorus">
											<img src="assets/img/user.jpg" class="avatar" alt="Mike Litorus" height="20" width="20">
										</a>
										<a href="#" data-toggle="tooltip" title="Wilmer Deluna">
											<img src="assets/img/user.jpg" class="avatar" alt="Wilmer Deluna" height="20" width="20">
										</a>
										<a href="#" class="followers-add" data-toggle="modal" data-target="#task_followers"><i class="material-icons">add</i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="edit_ticket" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-content modal-lg">
							<div class="modal-header">
								<h4 class="modal-title">Edit Ticket</h4>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Ticket Subject</label>
												<input class="form-control" type="text" value="Laptop Issue">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Ticket Id</label>
												<input class="form-control" type="text" readonly="" value="TKT-0001">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Assign Staff</label>
												<select class="select">
													<option>-</option>
													<option selected>Mike Litorus</option>
													<option>John Smith</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Client</label>
												<select class="select">
													<option>-</option>
													<option >Delta Infotech</option>
													<option selected>International Software Inc</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Priority</label>
												<select class="select">
													<option>High</option>
													<option selected>Medium</option>
													<option>Low</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>CC</label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Assign</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Ticket Assignee</label>
												<div class="project-members">
													<a title="John Smith" data-toggle="tooltip" href="#">
														<img width="20" height="20" alt="John Smith" class="avatar" src="assets/img/user.jpg">
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Add Followers</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Ticket Followers</label>
												<div class="project-members">
													<a title="Richard Miles" data-toggle="tooltip" href="#">
														<img width="20" height="20" alt="Richard Miles" class="avatar" src="assets/img/user.jpg">
													</a>
													<a title="John Smith" data-toggle="tooltip" href="#">
														<img width="20" height="20" alt="John Smith" class="avatar" src="assets/img/user.jpg">
													</a>
													<a title="Mike Litorus" data-toggle="tooltip" href="#">
														<img width="20" height="20" alt="Mike Litorus" class="avatar" src="assets/img/user.jpg">
													</a>
													<a title="Wilmer Deluna" data-toggle="tooltip" href="#">
														<img width="20" height="20" alt="Wilmer Deluna" class="avatar" src="assets/img/user.jpg">
													</a>
													<span class="all-team">+2</span>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control"></textarea>
											</div>
											<div class="form-group">
												<label>Upload Files</label>
												<input class="form-control" type="file">
											</div>
										</div>
									</div>
									<div class="m-t-20 text-center">
										<button class="btn btn-primary">Edit Ticket</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="delete_ticket" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content modal-md">
							<div class="modal-header">
								<h4 class="modal-title">Delete Ticket</h4>
							</div>
							<form>
								<div class="modal-body card-box">
									<p>Are you sure want to delete this ticket?</p>
									<div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
										<button type="submit" class="btn btn-danger">Delete</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div id="assignee" class="modal custom-modal fade center-modal" role="dialog">
					<div class="modal-dialog">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title">Assign to this ticket</h3>
							</div>
							<div class="modal-body">
								<div class="input-group m-b-30">
									<input placeholder="Search to add" class="form-control search-input input-lg" type="text">
									<span class="input-group-btn">
										<button class="btn btn-primary btn-lg">Search</button>
									</span>
								</div>
								<div>
									<ul class="media-list media-list-linked chat-user-list">
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left"><span class="avatar">R</span></div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">Richard Miles</div>
													<span class="designation">Web Developer</span>
												</div>
											</a>
										</li>
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left"><span class="avatar">J</span></div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">John Smith</div>
													<span class="designation">Android Developer</span>
												</div>
											</a>
										</li>
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left">
													<span class="avatar">
														<img src="assets/img/user.jpg" alt="Jeffery Lalor">
													</span>
												</div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">Jeffery Lalor</div>
													<span class="designation">Team Leader</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="m-t-50 text-center">
								<button class="btn btn-primary btn-lg">Add</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="task_followers" class="modal custom-modal fade center-modal" role="dialog">
					<div class="modal-dialog">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title">Add followers to this ticket</h3>
							</div>
							<div class="modal-body">
								<div class="input-group m-b-30">
									<input placeholder="Search to add" class="form-control search-input input-lg" id="btn-input" type="text">
									<span class="input-group-btn">
										<button class="btn btn-primary btn-lg">Search</button>
									</span>
								</div>
								<div>
									<ul class="media-list media-list-linked chat-user-list">
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left"><span class="avatar">R</span></div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">Richard Miles</div>
													<span class="designation">Web Developer</span>
												</div>
											</a>
										</li>
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left"><span class="avatar">J</span></div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">John Smith</div>
													<span class="designation">Android Developer</span>
												</div>
											</a>
										</li>
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left">
													<span class="avatar">
														<img src="assets/img/user.jpg" alt="Jeffery Lalor">
													</span>
												</div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">Jeffery Lalor</div>
													<span class="designation">Team Leader</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="m-t-50 text-center">
									<button class="btn btn-primary btn-lg">Add User</button>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/js/select2.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/ticket-view.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 15:26:48 GMT -->
</html>
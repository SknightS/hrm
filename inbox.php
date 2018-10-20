<!DOCTYPE html>
<html>
    

       <?php include ('head.php') ?>

    <body>
        <div class="main-wrapper">

                <?php include ('header.php')?>

            <?php include ('sidebar.php')?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h4 class="page-title">Inbox</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card-box">
								<div class="email-header">
									<div class="row">
										<div class="col-sm-9 col-md-8 col-xs-8 top-action-left">
											<div class="pull-left">
												<div class="btn-group">
													<a class="btn btn-default dropdown-toggle" href="#" data-toggle="dropdown">Select <i class="fa fa-angle-down "></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">All</a></li>
														<li><a href="#">None</a></li>
														<li class="divider"></li>
														<li><a href="#">Read</a></li>
														<li><a href="#">Unread</a></li>
													</ul>
												</div>
												<div class="btn-group">
													<a class="btn btn-default dropdown-toggle" href="#" data-toggle="dropdown">Actions <i class="fa fa-angle-down "></i></a>
													<ul class="dropdown-menu">
														<li><a href="#">Reply</a></li>
														<li><a href="#">Forward</a></li>
														<li><a href="#">Archive</a></li>
														<li class="divider"></li>
														<li><a href="#">Mark As Read</a></li>
														<li><a href="#">Mark As Unread</a></li>
														<li class="divider"></li>
														<li><a href="#">Delete</a></li>
													</ul>
												</div>
												<div class="btn-group">
													<a aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><i class="fa fa-folder"></i> <i class="fa fa-angle-down"></i></a>
													<ul role="menu" class="dropdown-menu dropdown-menu-right">
														<li><a href="#">Social</a></li>
														<li><a href="#">Forums</a></li>
														<li><a href="#">Updates</a></li>
														<li class="divider"></li>
														<li><a href="#">Spam</a></li>
														<li><a href="#">Trash</a></li>
														<li class="divider"></li>
														<li><a href="#">New</a></li>
													</ul>
												</div>
												<div class="btn-group">
													<a aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><i class="fa fa-tags"></i> <i class="fa fa-angle-down"></i></a>
													<ul role="menu" class="dropdown-menu dropdown-menu-right">
														<li><a href="#">Work</a></li>
														<li><a href="#">Family</a></li>
														<li><a href="#">Social</a></li>
														<li class="divider"></li>
														<li><a href="#">Primary</a></li>
														<li><a href="#">Promotions</a></li>
														<li><a href="#">Forums</a></li>
													</ul>
												</div>
											</div>
											<div class="pull-left hidden-xs">
												<input type="text" placeholder="Search Messages" class="form-control search-message">
											</div>
										</div>
										<div class="col-sm-3 col-md-4 col-xs-4 top-action-right">
											<div class="text-right">
												<span class="text-muted hidden-xs">Showing 10 of 112 </span>
												<a title="Refresh" data-toggle="tooltip" class="btn btn-default"><i class="fa fa-refresh"></i></a>
												<div class="btn-group">
													<a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
													<a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="email-content">
									<table class="table table-inbox table-hover">
										<thead>
											<tr>
												<th colspan="6">
													<input type="checkbox" class="checkbox-all">
												</th>
											</tr>
											</thead>
										<tbody>
											<tr class="unread clickable-row" data-href="mail-view.php">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
												<td class="name hidden-xs">John Doe</td>
												<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
												<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
												<td class="mail-date">13:14</td>
											</tr>
											<tr class="unread clickable-row" data-href="mail-view.php">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
												<td class="name hidden-xs">Envato Account</td>
												<td class="subject">Important account security update from Envato</td>
												<td class="hidden-xs"></td>
												<td class="mail-date">8:42</td>
											</tr>
											<tr class="clickable-row" data-href="mail-view.php">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
												<td class="name hidden-xs">Twitter</td>
												<td class="subject">HRMS Bootstrap Admin Template</td>
												<td class="hidden-xs"></td>
												<td class="mail-date">30 Nov</td>
											</tr>
											<tr class="unread clickable-row" data-href="mail-view.php">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
												<td class="name hidden-xs">Richard Parker</td>
												<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
												<td class="hidden-xs"></td>
												<td class="mail-date">18 Sep</td>
											</tr>
											<tr class="clickable-row" data-href="mail-view.php">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
												<td class="name hidden-xs">John Smith</td>
												<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
												<td class="hidden-xs"></td>
												<td class="mail-date">21 Aug</td>
											</tr>
											<tr class="clickable-row" data-href="mail-view.php">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
												<td class="name hidden-xs">me, Robert Smith (3)</td>
												<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
												<td class="hidden-xs"></td>
												<td class="mail-date">1 Aug</td>
											</tr>
											<tr class="unread clickable-row" data-href="mail-view.php">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
												<td class="name hidden-xs">Codecanyon</td>
												<td class="subject">Welcome To Codecanyon</td>
												<td class="hidden-xs"></td>
												<td class="mail-date">Jul 13</td>
											</tr>
											<tr class="clickable-row" data-href="mail-view.php">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
												<td class="name hidden-xs">Richard Miles</td>
												<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
												<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
												<td class="mail-date">May 14</td>
											</tr>
											<tr class="unread clickable-row" data-href="mail-view.php">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
												<td class="name hidden-xs">John Smith</td>
												<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
												<td class="hidden-xs"></td>
												<td class="mail-date">11/11/16</td>
											</tr>
											<tr class="clickable-row" data-href="mail-view.php">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
												<td class="name hidden-xs">Mike Litorus</td>
												<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
												<td class="hidden-xs"></td>
												<td class="mail-date">10/31/16</td>
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
            </div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <?php include ('footer.php') ?>
    </body>
</html>
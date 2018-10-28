<!DOCTYPE html>
<html>

<?php include ('head.php') ?>

<body>
<div class="main-wrapper">
    <?php include ('header.php') ?>
    <?php include ('sidebar.php') ?>
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xs-4">
                    <h4 class="page-title">Employee shift</h4>
                </div>
                <div class="col-xs-8 text-right m-b-30">
                    <a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_shift"><i class="fa fa-plus"></i> Add shift</a>
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

                                <th>shift</th>

                                <th>Start Date</th>
                                <th>End Date</th>
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

                                <td>A</td>

                                <td>2018-01-10</td>
                                <td>2018-01-20</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" data-toggle="modal" data-target="#edit_shift" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_shift" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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

                                <td>B</td>

                                <td>2018-01-30</td>
                                <td>2018-02-10</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" data-toggle="modal" data-target="#edit_shift" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_shift" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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

                                <td>C</td>

                                <td>2018-02-10</td>
                                <td>2018-02-20</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" data-toggle="modal" data-target="#edit_shift" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_shift" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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

                                <td>D</td>

                                <td>2018-02-20</td>
                                <td>2018-02-28</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" data-toggle="modal" data-target="#edit_shift" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_shift" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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

                                <td>G</td>

                                <td>2018-03-10</td>
                                <td>2018-03-20</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" data-toggle="modal" data-target="#edit_shift" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_shift" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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

                                <td>R</td>

                                <td>2018-03-30</td>
                                <td>2018-04-10</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" data-toggle="modal" data-target="#edit_shift" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_shift" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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

                                <td>W</td>

                                <td>2018-04-10</td>
                                <td>2018-04-20</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" data-toggle="modal" data-target="#edit_shift" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_shift" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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

                                <td>Q</td>

                                <td>2018-04-20</td>
                                <td>2018-04-30</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" data-toggle="modal" data-target="#edit_shift" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_shift" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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

                                <td>T</td>

                                <td>2018-05-10</td>
                                <td>2018-05-20</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" data-toggle="modal" data-target="#edit_shift" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_shift" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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

                                <td>Y</td>

                                <td>2018-05-20</td>
                                <td>2018-05-30</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" data-toggle="modal" data-target="#edit_shift" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_shift" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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

                                <td>T</td>

                                <td>2018-06-10</td>
                                <td>2018-06-10</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" data-toggle="modal" data-target="#edit_shift" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_shift" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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
        <div class="nshiftification-box">
            <div class="msg-sidebar nshiftifications msg-nshifti">
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
                <div class="topnav-dropdown-foshifter">
                    <a href="chat.php">See all messages</a>
                </div>
            </div>
        </div>
    </div>
    <div id="add_shift" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h4 class="modal-title">Add Staff shift</h4>
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
                                <label>shift Hour</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <label>shift</label>
                                <select class="select">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>F</option>
                                </select>

                            </div>
                            <div class="col-md-6">



                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary">Create shift</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="edit_shift" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h4 class="modal-title">Add Staff shift</h4>
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
                                <label>shift</label>
                                <select class="select">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>F</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Basic</label>
                                    <input class="form-control" type="text" value="$6500">
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>shift</label>
                                    <select class="select">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                        <option>F</option>
                                    </select>
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
    <div id="delete_shift" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content modal-md">
                <div class="modal-header">
                    <h4 class="modal-title">Delete shift</h4>
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
<script type="text/javascript" src="assets/js/boshiftstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/dataTables.boshiftstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="assets/js/select2.min.js"></script>
<script type="text/javascript" src="assets/js/moment.min.js"></script>
<script type="text/javascript" src="assets/js/boshiftstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
</body>

</html>
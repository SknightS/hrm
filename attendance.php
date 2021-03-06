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
						<div class="col-sm-8">
							<h4 class="page-title">Attendance Sheet</h4>
						</div>
					</div>
					<div class="row filter-row">
						<div class="col-sm-3 col-xs-6">  
							<div class="form-group form-focus">
								<label class="control-label">Employee Name</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6"> 
							<div class="form-group form-focus select-focus">
								<label class="control-label">Select Month</label>
								<select class="select floating"> 
									<option>-</option>
									<option>Jan</option>
									<option>Feb</option>
									<option>Mar</option>
									<option>Apr</option>
									<option>May</option>
									<option>Jun</option>
									<option>Jul</option>
									<option>Aug</option>
									<option>Sep</option>
									<option>Oct</option>
									<option>Nov</option>
									<option>Dec</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6"> 
							<div class="form-group form-focus select-focus">
								<label class="control-label">Select Year</label>
								<select class="select floating"> 
									<option>-</option>
									<option>2017</option>
									<option>2016</option>
									<option>2015</option>
									<option>2014</option>
									<option>2013</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0">
									<thead>
										<tr>
											<th>Employee</th>
											<th>1</th>
											<th>2</th>
											<th>3</th>
											<th>4</th>
											<th>5</th>
											<th>6</th>
											<th>7</th>
											<th>8</th>
											<th>9</th>
											<th>10</th>
											<th>11</th>
											<th>12</th>
											<th>13</th>
											<th>14</th>
											<th>15</th>
											<th>16</th>
											<th>17</th>
											<th>18</th>
											<th>19</th>
											<th>20</th>
											<th>22</th>
											<th>23</th>
											<th>24</th>
											<th>25</th>
											<th>26</th>
											<th>27</th>
											<th>28</th>
											<th>29</th>
											<th>30</th>
											<th>31</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>John Doe</td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><div class="half-day"><span class="first-off"><i class="fa fa-check text-success"></i></span> <span class="first-off"><i class="fa fa-close text-danger"></i></span></div></td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><div class="half-day"><span class="first-off"><i class="fa fa-close text-danger"></i></span> <span class="first-off"><i class="fa fa-check text-success"></i></span></div></td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
										</tr>
										<tr>
											<td>Richard Miles</td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
										</tr>
										<tr>
											<td>John Smith</td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
										</tr>
										<tr>
											<td>Mike Litorus</td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
										</tr>
										<tr>
											<td>Wilmer Deluna</td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
										</tr>
										<tr>
											<td>Jeffrey Warden</td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
										</tr>
										<tr>
											<td>Bernardo Galaviz</td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
										</tr>
										<tr>
											<td>Lesley Grauer</td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
										</tr>
										<tr>
											<td>Jeffery Lalor</td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
										</tr>
										<tr>
											<td>Loren Gatlin</td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
										</tr>
										<tr>
											<td>Tarah Shropshire</td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
										</tr>
										<tr>
											<td>Richard Miles</td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-close text-danger"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
											<td><i class="fa fa-check text-success"></i> </td>
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
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/js/select2.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>
    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/blue/attendance.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Oct 2018 15:26:36 GMT -->
</html>
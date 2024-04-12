<?php
session_start();
require("config.php");

 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Data Tables</title>
		
		
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		
		<link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/select.bootstrap4.min.css">
		<link rel="stylesheet" href="assets/plugins/datatables/buttons.bootstrap4.min.css">
		
		
        <link rel="stylesheet" href="assets/css/style.css">
		
		
    </head>
    <body>
	
		
				<?php include("header.php"); ?>
		
            <div class="page-wrapper">
                <div class="content container-fluid">

					
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">User</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">User</li>
								</ul>
							</div>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Default Datatable</h4>
									<p class="card-text">
										This is the most basic example of the datatables with zero configuration. Use the <code>.datatable</code> class to initialize datatables.
									</p>
								</div>
								<div class="card-body">

									<table id="basic-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                   <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mt-0 mb-1">Buttons example</h4>
                                        <p class="sub-header">
                                            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                                            that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                                        </p>


                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
													<td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                    </div> 
                                </div> 
                            </div>
                        </div>
                      
					
					
					<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mt-0 mb-1">Multi item selection</h4>
                                        <p class="sub-header">
                                            This example shows the multi option. Note how a click on a row will toggle its selected state without effecting other rows,
                                            unlike the os and single options shown in other examples.
                                        </p>

                                        <table id="selection-datatable" class="table dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                   <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Team</td>
                                                    <td>Customer Support</td>
                                                    <td>India</td>
                                                    <td>27</td>
                                                    <td>2024/02/12</td>
                                                    <td>112,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    
                                    </div> 
                                </div>
                            </div>
                    </div>
                    
					
					
					
				
				</div>			
			</div>
			

		
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
		<script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.select.min.js"></script>
		
		<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
		<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
		<script src="assets/plugins/datatables/buttons.flash.min.js"></script>
		<script src="assets/plugins/datatables/buttons.print.min.js"></script>
		
		
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>

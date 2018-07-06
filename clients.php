<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>WOA</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="">
        

       <!-- Base Css Files -->
        <link href="assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" /> 
        <link href="assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" /> 
        <link href="assets/libs/pace/pace.css" rel="stylesheet" />
        <link href="assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
        <link href="assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="assets/libs/prettify/github.css" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <link href="assets/libs/jquery-datatables/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
                <link href="assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
                <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="assets/css/style-responsive.css" rel="stylesheet" />

      

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via  -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="assets/img/favicon.ico">
       <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
       <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
       <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
       <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
       <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
       <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
       <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
       <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
       <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
       <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
       <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
       <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
       <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      
    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
        	<!-- Modal Task Progress -->	
	
		
	<!-- Modal Logout -->
	<div class="md-modal md-just-me" id="logout-modal">
		<div class="md-content">
			<h3><strong>Logout</strong> Confirmation</h3>
			<div>
				<p class="text-center">Are you sure want to logout?</p>
				<p class="text-center">
				<button class="btn btn-danger md-close">No</button>
				<a href="login.php" class="btn btn-success md-close">Yes, I'm sure</a>
				</p>
			</div>
		</div>
	</div>        <!-- Modal End -->	
	<!-- Begin page -->
	<div id="wrapper">
		
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href="#"><img src="assets/img/logo.png" alt="Logo"></a></h1>
        </div>
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                
                <ul class="nav navbar-nav navbar-right top-navbar">
                   
                   
                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="images/users/user-35.jpg"></span> Jane <strong>Doe</strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a href="#">Account Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                            <li><a href="#"><i class="icon-lock-1"></i> Lock me</a></li>
                            <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
		    <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
              
               
                <!-- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                      <a href="#" class="rounded-image profile-image"><img src="images/users/user-100.jpg"></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="profile-text">Hello <b>Jane</b></div>
                        <!--<div class="profile-buttons">
                          <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a>
                          <a href="#connect" class="open-right"><i class="fa fa-comments"></i></a>
                          <a href="javascript:;" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a>
                        </div>-->
                    </div>
                </div>
                <!-- Divider -->
                
               
                <div class="clearfix"></div>
                <!-- Divider -->
                <div id="sidebar-menu">
                     <ul>
					<li>
					<a href="dashboard.php"><i class='icon-home-3'></i><span>Dashboard</span></a>
					</li>
					<li>
					<a href="orders.php"><i class='icon-doc-1'></i><span>Orders</span></a>
					</li>
					<li>
					<a href="vehicles.php"><i class='fa fa-car'></i><span>Vehicles</span></a>
					</li>
					<li>
					<a href="drivers.php"><i class='icon-person'></i><span>Drivers</span></a>
					</li>
					<li>
					<a href="#"><i class='fa  fa-map-marker'></i><span>Order Locations</span></a>
					</li>
					<li>
					<a href="clients.php" class="active"><i class='fa fa-users'></i><span>Manage Clients</span></a>
					</li>
					</ul>           
					<div class="clearfix"></div>
                </div>
            <div class="clearfix"></div>
            
            <br><br><br>
        </div>
           
        </div>
        <!-- Left Sidebar End -->		    
		<!-- Start right content -->
        <div class="content-page">
        	<ol class="breadcrumb">
	<li><a href="#">Home</a></li><li class="active">Manage Clients</li></ol>			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
				
				
			<!-- start datatable -->
			<div class="row">
				
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header">
								<h2>Our <strong>Clients</strong></h2>
								
							</div>
							<div class="widget-content">
							<br>					
								<div class="table-responsive">
									<form class='form-horizontal' role='form'>
									<table id="datatables-2" class="table table-striped table-bordered" cellspacing="0" width="100%">
									        <thead>
									            <tr>
									                <th>Client</th>
									                <th>Region</th>
									                <th>Area</th>
									                <th></th>
									            </tr>
									        </thead>
									 
									        <!--<tfoot>
									             <tr>
									                <th>Name</th>
									                <th>Region</th>
									                <th>Area</th>
									                <th></th>
									            </tr>
									        </tfoot>-->
									 
									        <tbody>
									            <tr>
									                <td>Client company name</td>
									                <td>KZN</td>
									                <td>Richard's Bay</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									           <tr>
									                <td>Client company name</td>
									                <td>Gauteng</td>
									                <td>Randburg</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									            <tr>
									                <td>Client company name</td>
									                <td>Western Cape</td>
									                <td>Cape Town</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									            <tr>
									                <td>Client company name</td>
									                <td>KZN</td>
									                <td>Richard's Bay</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									           <tr>
									                <td>Client company name</td>
									                <td>KZN</td>
									                <td>Richard's Bay</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									           <tr>
									                <td>Client company name</td>
									                <td>Gauteng</td>
									                <td>Randburg</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									            <tr>
									                <td>Client company name</td>
									                <td>Western Cape</td>
									                <td>Cape Town</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									            <tr>
									                <td>Client company name</td>
									                <td>KZN</td>
									                <td>Richard's Bay</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
												<tr>
									                <td>Client company name</td>
									                <td>KZN</td>
									                <td>Richard's Bay</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									           <tr>
									                <td>Client company name</td>
									                <td>Gauteng</td>
									                <td>Randburg</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									            <tr>
									                <td>Client company name</td>
									                <td>Western Cape</td>
									                <td>Cape Town</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									            <tr>
									                <td>Client company name</td>
									                <td>KZN</td>
									                <td>Richard's Bay</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
												<tr>
									                <td>Client company name</td>
									                <td>KZN</td>
									                <td>Richard's Bay</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									           <tr>
									                <td>Client company name</td>
									                <td>Gauteng</td>
									                <td>Randburg</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									            <tr>
									                <td>Client company name</td>
									                <td>Western Cape</td>
									                <td>Cape Town</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									            <tr>
									                <td>Client company name</td>
									                <td>KZN</td>
									                <td>Richard's Bay</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
												<tr>
									                <td>Client company name</td>
									                <td>KZN</td>
									                <td>Richard's Bay</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									           <tr>
									                <td>Client company name</td>
									                <td>Gauteng</td>
									                <td>Randburg</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									            <tr>
									                <td>Client company name</td>
									                <td>Western Cape</td>
									                <td>Cape Town</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									            <tr>
									                <td>Client company name</td>
									                <td>KZN</td>
									                <td>Richard's Bay</td>
									                <td><a href="clients-edit.php"><i class="glyphicon glyphicon-pencil"></i></a></td>
									            </tr>
									           
									        </tbody>
									    </table>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- end datatable -->	
				

				            <!-- Footer Start -->
            <footer>
                <div id="morris-bar-home" class="morris-chart" style="height: 170px; display: none;"></div>
                <div class="footer-links pull-right">
                	
                </div>
            </footer>
            <!-- Footer End -->			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->

	</div>
	
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/libs/jquery-detectmobile/detect.js"></script>
	<script src="assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
	<script src="assets/libs/ios7-switch/ios7.switch.js"></script>
	<script src="assets/libs/fastclick/fastclick.js"></script>
	<script src="assets/libs/jquery-blockui/jquery.blockUI.js"></script>
	<script src="assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
	<script src="assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
	<script src="assets/libs/nifty-modal/js/classie.js"></script>
	<script src="assets/libs/nifty-modal/js/modalEffects.js"></script>
	<script src="assets/libs/sortable/sortable.min.js"></script>
	<script src="assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
	<script src="assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/libs/bootstrap-select2/select2.min.js"></script>
	<script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script> 
	<script src="assets/libs/pace/pace.min.js"></script>
	<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/libs/jquery-icheck/icheck.min.js"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="assets/libs/prettify/prettify.js"></script>

	<script src="assets/js/init.js"></script>
	<!-- Page Specific JS Libraries -->
	<script src="assets/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
	<script src="assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
	<script src="assets/js/pages/datatables.js"></script>
	</body>
</html>
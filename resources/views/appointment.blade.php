<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Welly - Hospital Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="./vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
		<a href="dashboard" class="brand-logo" style="color:black;">
                <h1>ABC Laboratory</h1>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            
                        </div>
                        <ul class="navbar-nav header-right">
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
									<!-- <div class="header-info">
										<span class="text-black">Hello,<strong>Franklin</strong></span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div> -->
                                    <img src="images/profile/17.jpg" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="logout" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    
                    <li><a href="/appoint" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Make an Appointment</span>
						</a>
					</li>
                    <li><a href="/appointtest" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Available test</span>
						</a>
					</li>
					<li><a href="/showtest" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Show Appointments</span>
						</a>
					</li>
					<li><a href="/contact" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Contact</span>
						</a>
					</li>
					<li><a href="/profile" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Profile</span>
						</a>
					</li>
                    
                    
                </ul>
				
				<div class="copyright">
					<p><strong>ABC - Laboratory</strong> © 2024 All Rights Reserved</p>
					<p>Made with ♥ by CL-BSCSD-27-18</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Dashboard</h2>
						<p class="mb-0">Hospital Admin Dashboard Template</p>
						
					</div>
					<a href="showtest" class="btn btn-outline-primary"><i class="las la-cog scale5 mr-3"></i>Show My Appointments</a>
				</div>
                    <form action="{{route('createappointment')}}" method="POST">
                        @csrf
                        <div class="form-group">
						<?php $test = DB::table('test')->get();?>
						@if(Session::has('success'))
						<div class="alert-success">{{Session::get('success')}}</div>
						@endif

						@if(Session::has('fail'))
						<div class="alert-danger">{{Session::get('fail')}}</div>
						@endif
						<div class="form-group">
                            <label for="technician_id">Test</label>
                            <select class="form-control" id="technician_id" name="test" required style="border:2px solid; width:350px;">
								@foreach($test as $test)
								<option value="{{ $test->id }}">{{ $test->name }}</option>
								@endforeach
                            </select>
                        </div>
						
                        <label for="patient_id" style="display:none;">Patient ID:</label>
                        <input type="text" class="form-control" id="patient_id" name="patient_id" value="{{ session('loginId') }}" required style="border:2px solid; width:350px; display:none;">
                        </div>

                        <div class="form-group">
                        <label for="technician_id">Email</label>
                        <input type="text" class="form-control" id="technician_id" name="email" required style="border:2px solid; width:350px;">
                        </div>


                        <div class="form-group">
                        <label for="appointment_date">Appointment Date:</label>
                        <input type="text" class="form-control" id="appointment_date" name="date" required style="border:2px solid; width:350px;">
                        </div>

						<div class="form-group">
							<label for="appointment_time">Appointment Time:</label>
							<select class="form-control" id="appointment_time" name="time" required  style="border:2px solid; width:350px;">
								@for ($i = 10; $i <= 17; $i++)
									@php
										$hour = str_pad($i, 2, '0', STR_PAD_LEFT);
									@endphp
									<option value="{{ $hour }}:00">{{ $hour }}:00</option>
									<option value="{{ $hour }}:30">{{ $hour }}:30</option>
								@endfor
							</select>
						</div>
                        <button type="submit" class="btn btn-outline-primary">Create Appointment</button>
                    </form>
				
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Chart piety plugin files -->
    <script src="./vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="./js/dashboard/dashboard-1.js"></script>
	<script>
		// $(function () {
		// 	$('#datetimepicker1').datetimepicker({
		// 		inline: true,
		// 	});
		// });
		$(function () {
        $('#appointment_date').datetimepicker({
            format: 'DD-MM-YYYY',
            inline: false,
            useCurrent: false,
        });
    });
	</script>
</body>
</html>
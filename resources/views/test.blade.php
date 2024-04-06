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
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
			</div>
		</div>
		<!--**********************************
            Chat box End
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
					<a href="javascript:void(0)" class="btn btn-outline-primary"><i class="las la-cog scale5 mr-3"></i>Make An Appointment</a>
				</div>
                    <?php
                        $appointmentId = Session::get('appid');
                        $appointment = DB::table('appointments')
                            ->where('appointments.id', $appointmentId)
                            ->join('patient', 'appointments.patientid', '=', 'patient.id')
                            ->join('test', 'appointments.testtid', '=', 'test.id')
                            ->select('patient.id as patient_id', 'test.id as test_id','patient.name as patient_name', 'test.name as test_name', 'test.price', 'appointments.date', 'appointments.time')
                            ->first();
                    ?>
                    @if($appointment)
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display min-w850">
                                <thead>
                                    <tr>
                                    <th>Patient Name</th>
                                    <th>Test</th>
                                    <th>Appointment Date</th>
                                    <th>Appointment Time</th>
                                    <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>{{ $appointment->patient_name }}</td>
                                    <td>{{ $appointment->test_name }}</td>
                                    <td>{{ $appointment->date }}</td>
                                    <td>{{ $appointment->time }}</td>
                                    <td>{{ $appointment->price }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>  
                    </div>
                   

                    <div class="payment-form">
                    <h2>Card Payment</h2>
                    <form id="payment-form" method="post" action="{{route('confirmapp')}}">
                        <?php $appId = Session::get('appid'); ?>
                        @csrf
                        <label for="card-number">Card Number:</label>
                        <input type="text" name="patient_id" value="{{ $appointment->patient_id}}" style="display:none;">
                        <input type="text" name="appointment_no" value="{{ $appointment->test_id }}" style="display:none;">
                        <input type="text" name="price" value="{{ $appointment->price }}" style="display:none;">
                        <input type="text" id="card-number" name="card_no" class="form-control" placeholder="Card Number" required style="border:2px solid; width:350px; ">
                        <label for="expiry-date">Expiry Date:</label>
                        <input type="text" id="expiry-date" class="form-control" placeholder="MM/YY" name="expdate" required style="border:2px solid; width:350px; ">
                        <label for="cvv">CVV:</label>
                        <input type="text" id="cvv" class="form-control" placeholder="CVV" required  name="cvv" style="border:2px solid; width:350px; " maxlength="3">
                        <button type="submit" id="pay-button" class="btn btn-outline-primary">Pay Now</button>
                    </form>
                    </div>
                    @else
                    <p>no appoinment</p>
                    @endif
				
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
                <p>Copyright © Designed &amp; 2024</p>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
     $(document).ready(function () {
        $('#expiry-date').on('input', function () {
            let value = $(this).val();
            // Remove any non-numeric characters
            value = value.replace(/\D/g, '');
            // Limit the input to 4 characters
            value = value.slice(0, 4);
            // Add a '/' after the second character
            if (value.length > 2) {
                value = value.substring(0, 2) + '/' + value.substring(2);
            }
            $(this).val(value);
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#card-number').on('input', function () {
            let value = $(this).val();
            // Remove any non-numeric characters
            value = value.replace(/\D/g, '');
            // Add spaces after every four characters
            value = value.replace(/(\d{4})(?=\d)/g, '$1 ');
            // Remove any extra spaces at the end
            value = value.slice(0, 19);
            $(this).val(value);
        });
    });
</script>
</body>
</html>
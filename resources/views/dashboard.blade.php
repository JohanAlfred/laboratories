<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ABC - Hospital Pateint Dashboard</title>
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
            <a href="" class="brand-logo" style="color:black;">
                ABC Laboratory
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
									<!-- <div class="header-info">
										<span class="text-black">Hello,<strong>Franklin</strong></span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div> -->
                                    <img src="images/profile/17.jpg" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./page-login.html" class="dropdown-item ai-icon">
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
					<li><a href="/showtest" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Tests</span>
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
				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">76</h2>
										<span>Appointment</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0)">
										<path d="M32.04 4.08H31.24V2.04C31.24 0.8 30.4 0 29.2 0C28 0 27.16 0.8 27.16 2.04V4.08H13.88V2.04C13.88 0.8 13.08 0 11.84 0C10.6 0 9.80002 0.8 9.80002 2.04V4.08H7.96002C4.08002 4.08 0.800018 7.36 0.800018 11.24V32.88C0.800018 36.76 4.08002 40.04 7.96002 40.04H32.04C35.92 40.04 39.2 36.76 39.2 32.88V11.24C39.2 7.36 35.92 4.08 32.04 4.08ZM7.96002 8.16H32.04C33.68 8.16 35.12 9.6 35.12 11.24V14.08H4.88002V11.24C4.88002 9.6 6.32002 8.16 7.96002 8.16ZM32.04 35.92H7.96002C6.32002 35.92 4.88002 34.48 4.88002 32.84V18.16H35.08V32.84C35.12 34.48 33.68 35.92 32.04 35.92Z" fill="#007A64"/>
										<path d="M16.12 20.6H14.48C13.44 20.6 12.84 21.4 12.84 22.24V24.08C12.84 25.12 13.64 25.72 14.48 25.72H16.12C17.16 25.72 17.76 24.92 17.76 24.08V22.44C17.96 21.44 17.16 20.6 16.12 20.6Z" fill="#007A64"/>
										<path d="M25.52 20.6H23.88C22.84 20.6 22.24 21.4 22.24 22.24V24.08C22.24 25.12 23.04 25.72 23.88 25.72H25.52C26.56 25.72 27.16 24.92 27.16 24.08V22.44C27.16 21.44 26.32 20.6 25.52 20.6Z" fill="#007A64"/>
										<path d="M16.12 28.56H14.48C13.44 28.56 12.84 29.36 12.84 30.2V31.84C12.84 32.88 13.64 33.48 14.48 33.48H16.12C17.16 33.48 17.76 32.68 17.76 31.84V30.2C17.96 29.4 17.16 28.56 16.12 28.56Z" fill="#007A64"/>
										</g>
										<defs>
										<clipPath id="clip0">
										<rect width="40" height="40" fill="white"/>
										</clipPath>
										</defs>
									</svg>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 50%; height:4px;" role="progressbar">
									<span class="sr-only">50% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">124,551</h2>
										<span>Total Patient</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M28.0053 2.00495C25.0652 1.92104 22.2028 2.90688 20.0059 4.76001C17.8089 2.90688 14.9465 1.92104 12.0064 2.00495C10.2879 1.99938 8.58941 2.3549 7.03328 3.04589C5.47716 3.73689 4.10208 4.74618 3.00704 6.00112C1.10117 8.19152 -0.89469 12.1574 0.427219 18.6225C2.53907 28.9417 18.358 37.4115 19.0259 37.7601C19.3237 37.9174 19.659 38 19.9999 38C20.3408 38 20.676 37.9174 20.9738 37.7601C21.6478 37.4058 37.4667 28.936 39.5725 18.6225C40.8944 12.1574 38.9006 8.201 36.9947 6.00112C35.9009 4.74722 34.5275 3.73852 32.9732 3.04756C31.4188 2.35659 29.7222 2.00052 28.0053 2.00495ZM35.6608 17.9006C34.1709 25.1899 23.3456 31.9715 20.0099 33.908C16.6741 31.9715 5.84885 25.1918 4.35895 17.9006C3.33302 12.8869 4.73692 9.97454 6.09683 8.41322C6.81663 7.59033 7.71988 6.92874 8.74167 6.47597C9.76346 6.0232 10.8784 5.79049 12.0064 5.79458C13.2101 5.70905 14.4167 5.9205 15.5084 6.40832C16.6002 6.89614 17.5399 7.64369 18.236 8.57806C18.4065 8.87653 18.6585 9.12614 18.9656 9.3008C19.2727 9.47546 19.6237 9.56876 19.9819 9.57095H20.0059C20.3619 9.56861 20.7109 9.47734 21.0178 9.30634C21.3247 9.13534 21.5786 8.89067 21.7537 8.59701C22.4489 7.65541 23.391 6.90174 24.4873 6.4103C25.5836 5.91887 26.7961 5.70665 28.0053 5.79458C29.1347 5.78937 30.2512 6.02153 31.2744 6.47434C32.2977 6.92716 33.2022 7.58934 33.9229 8.41322C35.2788 9.97454 36.6827 12.8869 35.6568 17.9006H35.6608Z" fill="#007A64"/>
									</svg>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 90%; height:4px;" role="progressbar">
									<span class="sr-only">90% Complete</span>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- <div class="row">
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">	
								<div class="card">
									<div class="card-header d-sm-flex d-block pb-0 border-0">
										<div class="mr-auto pr-3">
											<h4 class="text-black fs-20 mb-0">Patient Percentage</h4>
										</div>
										<div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mb-sm-0 mb-3 mt-sm-0">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#Daily" role="tab">
														Daily
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#Weekly" role="tab">
														Weekly
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#Monthly" role="tab">
														Monthly
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="Daily" role="tabpanel">
												<div class="d-flex flex-wrap align-items-center px-4 bg-light">
													<div class="mr-auto d-flex align-items-center py-3">
														<span class="heart-ai bg-primary mr-3">
															<i class="fa fa-heart-o" aria-hidden="true"></i>
														</span>
														<div>
															<p class="fs-18 mb-2">Total Patient</p>
															<span class="fs-26 text-primary font-w600">562,084</span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/1.png" alt=""></li>
														<li><img src="images/users/2.png" alt=""></li>
														<li><img src="images/users/3.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/5.png" alt=""></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C"/>
																</svg>
																64%
															</span>
															<span>New Patient</span>
														</div>
														<div class="d-flex  mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84"/>
																</svg>
																73%
															</span>
															<span>Recovered</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232"/>
																</svg>
																48%
															</span>
															<span>In Treatment</span>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="Weekly" role="tabpanel">
												<div class="d-flex flex-wrap align-items-center px-4  bg-light">
													<div class="mr-auto py-3 d-flex align-items-center">
														<span class="heart-ai bg-primary mr-3">
															<i class="fa fa-heart-o" aria-hidden="true"></i>
														</span>
														<div>
															<p class="fs-18 mb-2">Total Patient</p>
															<span class="fs-26 text-primary font-w600">786,360</span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/2.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/1.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/3.png" alt=""></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar2"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C"/>
																</svg>
																40%
															</span>
															<span>New Patient</span>
														</div>
														<div class="d-flex  mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84"/>
																</svg>
																81%
															</span>
															<span>Recovered</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232"/>
																</svg>
																50%
															</span>
															<span>In Treatment</span>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="Monthly" role="tabpanel">
												<div class="d-flex flex-wrap align-items-center px-4  bg-light">
													<div class="mr-auto py-3 d-flex align-items-center">
														<span class="heart-ai bg-primary mr-3">
															<i class="fa fa-heart-o" aria-hidden="true"></i>
														</span>
														<div>
															<p class="fs-18 mb-2">Total Patient</p>
															<span class="fs-26 text-primary font-w600">356,730</span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/2.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/1.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/3.png" alt=""></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar3"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C"/>
																</svg>
																90%
															</span>
															<span>New Patient</span>
														</div>
														<div class="d-flex  mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84"/>
																</svg>
																75%
															</span>
															<span>Recovered</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232"/>
																</svg>
																30%
															</span>
															<span>In Treatment</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-12 col-md-6">	
								<div class="card">
									<div class="card-header d-block border-0 pb-0">
										<div class="d-flex mb-3">
											<h3 class="fs-20 text-black mb-0">Patient Overview</h3>
											<div class="dropdown ml-auto">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item text-black" href="javascript:;">Info</a>
													<a class="dropdown-item text-black" href="javascript:;">Details</a>
												</div>
											</div>
										</div>
										<div class="d-flex">
											<div class="d-flex mr-auto align-items-center">
												<svg width="12" height="54" viewBox="0 0 12 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="12" height="54" fill="#BDA25C"/>
												</svg>
												<div class="ml-2">
													<p class="mb-1">New</p>
													<span class="text-black font-w500">451</span>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<svg width="12" height="54" viewBox="0 0 12 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="12" height="54" fill="#209F84"/>
												</svg>
												<div class="ml-2">
													<p class="mb-1">Recovered</p>
													<span class="text-black font-w500">623</span>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div id="chartTimeline"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-12 col-md-6">	
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0">Visitors</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													<path d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													<path d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0">
										<ul class="users-sm mb-3">
											<li><img src="images/users/6.png" alt=""></li>
											<li><img src="images/users/7.png" alt=""></li>
											<li><img src="images/users/8.png" alt=""></li>
											<li><img src="images/users/9.png" alt=""></li>
											<li><img src="images/users/10.png" alt=""></li>
										</ul>
										<div class="d-flex align-items-center">
											<svg class="mr-3" width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M28.8124 0.990788C29.6459 1.71558 29.734 2.97884 29.0092 3.81236L20.2578 13.8765C18.859 15.4851 16.4444 15.7141 14.7681 14.397L10.6176 11.1359L3.37074 17.9564C2.56639 18.7134 1.30064 18.6751 0.543606 17.8707C-0.213427 17.0664 -0.175071 15.8006 0.629276 15.0436L7.8761 8.22306C9.317 6.86692 11.5329 6.76809 13.0888 7.99059L17.2394 11.2517L25.9908 1.18764C26.7156 0.354128 27.9788 0.265993 28.8124 0.990788Z" fill="#007A64"/>
											</svg>
											<div>
												<p class="fs-12 mb-0">Customer</p>
												<span class="fs-22 text-black font-w600">765 Person</span>
											</div>
										</div>
										<div id="lineChart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">	
								<div class="card rated-doctors">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0 mr-auto">Top Rated Doctors</h3>
										<a href="javascript:void(0)" class="btn-link">More >></a>
									</div>
									<div class="card-body">
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#1</span>
												<img src="images/users/1.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Samantha Queque</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">315 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#2</span>
												<img src="images/users/2.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Samuel Jr.</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">221 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#3</span>
												<img src="images/users/3.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Jennifer Ruby</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">181 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#4</span>
												<img src="images/users/4.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Abdul Aziz Lazis</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">315 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#5</span>
												<img src="images/users/5.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Alex Siauw</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">176 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-0 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#6</span>
												<img src="images/users/1.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Abdul Aziz Lazis</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">315 reviews</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">	
								<div class="card appointment-schedule">
									<div class="card-header pb-0 border-0">
										<h3 class="fs-20 text-black mb-0">Appointment Schedule</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link p-2 bg-light" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-6 col-xxl-12 col-md-6">
												<div class="appointment-calender">
													<input type='text' class="form-control d-none" id='datetimepicker1' />
												</div>
											</div>
											<div class="col-xl-6 col-xxl-12  col-md-6 height415 dz-scroll" id="appointment-schedule">
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Wednesday, June 3th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Tuesday,  June 16th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Saturday, June 27th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Wednesday, June 3th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">	
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0 mr-2">Revenue Summary</h3>
										<div class="dropdown mt-sm-0 mt-3">
											<button type="button" class="btn bg-light text-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												2020
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="javascript:void(0);">2020</a>
												<a class="dropdown-item" href="javascript:void(0);">2021</a>
												<a class="dropdown-item" href="javascript:void(0);">2022</a>
											</div>
										</div>
									</div>
									<div class="card-body pt-0">
										<div id="chartBar"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">	
								<div class="card patient-activity">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0">Recent Patient Activity</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0" >
										<div class="table-responsive height720 dz-scroll" id="patient-activity">
											<table class="table table-responsive-sm">
												<tbody>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/6.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Roby Romeo</a></h6>
																	<span class="fs-14">41 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Allergies & Asthma</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-primary font-w600 mb-2 d-block text-nowrap">Recovered</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/7.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Angela Nurhayati</a></h6>
																	<span class="fs-14">21 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Sleep Problem</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-danger font-w600 mb-2 text-nowrap d-block">New Patient</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/8.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">James Robinson</a></h6>
																	<span class="fs-14">41 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Dental Care</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-warning font-w600 mb-2 text-nowrap d-block">In Treatment</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/9.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Thomas Jaja</a></h6>
																	<span class="fs-14">7 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Diabetes</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-danger font-w600 mb-2 text-nowrap d-block">New Patient</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/10.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Cindy Brownleee</a></h6>
																	<span class="fs-14">71 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Covid-19 Suspect</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-warning font-w600 text-nowrap mb-2 d-block">In Treatment</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/11.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Oconner Jr.</a></h6>
																	<span class="fs-14">17 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Dental Care</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-primary font-w600 mb-2 text-nowrap d-block">Recovered</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/7.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Angela Nurhayati</a></h6>
																	<span class="fs-14">21 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Sleep Problem</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-danger font-w600 mb-2 text-nowrap d-block">New Patient</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/8.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">James Robinson</a></h6>
																	<span class="fs-14">41 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Dental Care</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-warning font-w600 mb-2 d-block text-nowrap">In Treatment</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/9.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Thomas Jaja</a></h6>
																	<span class="fs-14">7 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Diabetes</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-danger font-w600 mb-2 d-block text-nowrap">New Patient</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer text-center border-0">
										<a href="patient.html" class="btn-link">See More >></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
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
		$(function () {
			$('#datetimepicker1').datetimepicker({
				inline: true,
			});
		});
	</script>
</body>
</html>
<?php
include('common/sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parinari Project</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- radial chart.css -->
    <link rel="stylesheet" href="files\assets\pages\chart\radial\css\radial.css" type="text/css" media="all">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\feather\css\feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="files\assets\css\jquery.mCustomScrollbar.css">
</head>
<!-- Menu sidebar static layout -->

<body>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">

                            <!-- statustic-card start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-yellow text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5" >New Customer</p>
                                                <h4 class="m-b-0">
                                                
                                                </h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-user f-50 text-c-yellow"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Income</p>
                                                <h4 class="m-b-0">$5,852</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-credit-card f-50 text-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-pink text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Ticket</p>
                                                <h4 class="m-b-0">42</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-book f-50 text-c-pink"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-blue text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Orders</p>
                                                <h4 class="m-b-0">$5,242</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- statustic-card start -->

                            <!-- statustic-card start -->
                            <div class="col-xl-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-header-left ">
                                            <h5>Monthly View</h5>
                                            <span class="text-muted">For more details about usage, please refer <a
                                                    href="https://www.amcharts.com/online-store/"
                                                    target="_blank">amCharts</a> licences.</span>
                                        </div>
                                    </div>
                                    <div class="card-block-big">
                                        <div id="monthly-graph" style="height:250px"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card feed-card">
                                    <div class="card-header">
                                        <h5>Feeds</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-bell bg-simple-c-blue feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">You have 3 pending tasks. <span
                                                        class="text-muted f-right f-13">Just Now</span></h6>
                                            </div>
                                        </div>
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-shopping-cart bg-simple-c-pink feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">New order received <span
                                                        class="text-muted f-right f-13">Just Now</span></h6>
                                            </div>
                                        </div>
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-file-text bg-simple-c-green feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">You have 3 pending tasks. <span
                                                        class="text-muted f-right f-13">Just Now</span></h6>
                                            </div>
                                        </div>
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-shopping-cart bg-simple-c-pink feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">New order received <span
                                                        class="text-muted f-right f-13">Just Now</span></h6>
                                            </div>
                                        </div>
                                        <div class="row m-b-30">
                                            <div class="col-auto p-r-0">
                                                <i class="feather icon-file-text bg-simple-c-green feed-icon"></i>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">You have 3 pending tasks. <span
                                                        class="text-muted f-right f-13">Just Now</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- statustic-card start -->

                            <!-- income start -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Total Leads</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <p class="text-c-green f-w-500"><i class="feather icon-chevrons-up m-r-5"></i>
                                            18% High than last month</p>
                                        <div class="row">
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Overall</p>
                                                <h5>76.12%</h5>
                                            </div>
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Monthly</p>
                                                <h5>16.40%</h5>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted m-b-5">Day</p>
                                                <h5>4.56%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="tot-lead" height="150"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Total Vendors</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <p class="text-c-pink f-w-500"><i class="feather icon-chevrons-down m-r-15"></i>
                                            24% High than last month</p>
                                        <div class="row">
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Overall</p>
                                                <h5>68.52%</h5>
                                            </div>
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Monthly</p>
                                                <h5>28.90%</h5>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted m-b-5">Day</p>
                                                <h5>13.50%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="tot-vendor" height="150"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Invoice Generate</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <p class="text-c-green f-w-500"><i class="feather icon-chevrons-up m-r-15"></i>
                                            20% High than last month</p>
                                        <div class="row">
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Overall</p>
                                                <h5>68.52%</h5>
                                            </div>
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Monthly</p>
                                                <h5>28.90%</h5>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted m-b-5">Day</p>
                                                <h5>13.50%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="invoice-gen" height="150"></canvas>
                                </div>
                            </div>
                            <!-- income end -->

                            <!-- ticket and update start -->
                            <div class="col-xl-6 col-md-12">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>Recent Tickets</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>Status</th>
                                                        <th>Subject</th>
                                                        <th>Department</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><label class="label label-success">open</label></td>
                                                        <td>Website down for one week</td>
                                                        <td>Support</td>
                                                        <td>Today 2:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-primary">progress</label></td>
                                                        <td>Loosing control on server</td>
                                                        <td>Support</td>
                                                        <td>Yesterday</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-danger">closed</label></td>
                                                        <td>Authorizations keys</td>
                                                        <td>Support</td>
                                                        <td>27, Aug</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-success">open</label></td>
                                                        <td>Restoring default settings</td>
                                                        <td>Support</td>
                                                        <td>Today 9:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-primary">progress</label></td>
                                                        <td>Loosing control on server</td>
                                                        <td>Support</td>
                                                        <td>Yesterday</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-success">open</label></td>
                                                        <td>Restoring default settings</td>
                                                        <td>Support</td>
                                                        <td>Today 9:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-danger">closed</label></td>
                                                        <td>Authorizations keys</td>
                                                        <td>Support</td>
                                                        <td>27, Aug</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-success">open</label></td>
                                                        <td>Restoring default settings</td>
                                                        <td>Support</td>
                                                        <td>Today 9:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><label class="label label-primary">progress</label></td>
                                                        <td>Loosing control on server</td>
                                                        <td>Support</td>
                                                        <td>Yesterday</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="text-right m-r-20">
                                                <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="card latest-update-card">
                                    <div class="card-header">
                                        <h5>Latest Updates</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="latest-update-box">
                                            <div class="row p-t-20 p-b-30">
                                                <div class="col-auto text-right update-meta">
                                                    <p class="text-muted m-b-0 d-inline">2 hrs ago</p>
                                                    <i class="feather icon-twitter bg-info update-icon"></i>
                                                </div>
                                                <div class="col">
                                                    <h6>+ 1652 Followers</h6>
                                                    <p class="text-muted m-b-0">You’re getting more and more followers,
                                                        keep it up!</p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta">
                                                    <p class="text-muted m-b-0 d-inline">4 hrs ago</p>
                                                    <i class="feather icon-briefcase bg-simple-c-pink update-icon"></i>
                                                </div>
                                                <div class="col">
                                                    <h6>+ 5 New Products were added!</h6>
                                                    <p class="text-muted m-b-0">Congratulations!</p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta">
                                                    <p class="text-muted m-b-0 d-inline">1 day ago</p>
                                                    <i class="feather icon-check bg-simple-c-yellow  update-icon"></i>
                                                </div>
                                                <div class="col">
                                                    <h6>Database backup completed!</h6>
                                                    <p class="text-muted m-b-0">Download the <span
                                                            class="text-c-blue">latest backup</span>.</p>
                                                </div>
                                            </div>
                                            <div class="row p-b-0">
                                                <div class="col-auto text-right update-meta">
                                                    <p class="text-muted m-b-0 d-inline">2 day ago</p>
                                                    <i class="feather icon-facebook bg-simple-c-green update-icon"></i>
                                                </div>
                                                <div class="col">
                                                    <h6>+2 Friend Requests</h6>
                                                    <p class="text-muted m-b-10">This is great, keep it up!</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <tr>
                                                                <td class="b-none">
                                                                    <a href="#!" class="align-middle">
                                                                        <img src="files\assets\images\avatar-2.jpg"
                                                                            alt="user image"
                                                                            class="img-radius img-40 align-top m-r-15">
                                                                        <div class="d-inline-block">
                                                                            <h6>Jeny William</h6>
                                                                            <p class="text-muted m-b-0">Graphic Designer
                                                                            </p>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="b-none">
                                                                    <a href="#!" class="align-middle">
                                                                        <img src="files\assets\images\avatar-1.jpg"
                                                                            alt="user image"
                                                                            class="img-radius img-40 align-top m-r-15">
                                                                        <div class="d-inline-block">
                                                                            <h6>John Deo</h6>
                                                                            <p class="text-muted m-b-0">Web Designer</p>
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ticket and update end -->

                            <!-- latest activity end -->
                            <div class="col-xl-8 col-md-12">
                                <div class="card latest-activity-card">
                                    <div class="card-header">
                                        <h5>Latest Activity</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="latest-update-box">
                                            <div class="row p-t-20 p-b-30">
                                                <div class="col-auto text-right update-meta">
                                                    <p class="text-muted m-b-0 d-inline">just now</p>
                                                    <i class="feather icon-sunrise bg-simple-c-blue update-icon"></i>
                                                </div>
                                                <div class="col">
                                                    <h6>John Deo</h6>
                                                    <p class="text-muted m-b-15">The trip was an amazing and a life
                                                        changing experience!!</p>
                                                    <img src="files\assets\images\mega-menu\01.jpg" alt=""
                                                        class="img-fluid img-100 m-r-15 m-b-10">
                                                    <img src="files\assets\images\mega-menu\03.jpg" alt=""
                                                        class="img-fluid img-100 m-r-15 m-b-10">
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta">
                                                    <p class="text-muted m-b-0 d-inline">5 min ago</p>
                                                    <i class="feather icon-file-text bg-simple-c-blue update-icon"></i>
                                                </div>
                                                <div class="col">
                                                    <h6>Administrator</h6>
                                                    <p class="text-muted m-b-0">Free courses for all our customers at A1
                                                        Conference Room - 9:00 am tomorrow!</p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta">
                                                    <p class="text-muted m-b-0 d-inline">3 hours ago</p>
                                                    <i class="feather icon-map-pin bg-simple-c-blue update-icon"></i>
                                                </div>
                                                <div class="col">
                                                    <h6>Jeny William</h6>
                                                    <p class="text-muted m-b-15">Happy Hour! Free drinks at <span
                                                            class="text-c-blue">Cafe-Bar all </span>day long!</p>
                                                    <div id="markers-map" style="height:200px;width:100%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <a href="#!" class=" b-b-primary text-primary">View all Activity</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card per-task-card">
                                    <div class="card-header">
                                        <h5>Your Tasks</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="row per-task-block text-center">
                                            <div class="col-6">
                                                <div data-label="45%"
                                                    class="radial-bar radial-bar-45 radial-bar-lg radial-bar-primary">
                                                </div>
                                                <h6 class="text-muted">Finished</h6>
                                                <p class="text-muted">642</p>
                                                <button class="btn btn-primary btn-round btn-sm">Manage</button>
                                            </div>
                                            <div class="col-6">
                                                <div data-label="30%"
                                                    class="radial-bar radial-bar-30 radial-bar-lg radial-bar-primary">
                                                </div>
                                                <h6 class="text-muted">Remaining</h6>
                                                <p class="text-muted">495</p>
                                                <button
                                                    class="btn btn-primary btn-outline-primary btn-round btn-sm">Manage</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card feed-card">
                                    <div class="card-header">
                                        <h5>Upcoming Deadlines</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="row m-b-25">
                                            <div class="col-auto p-r-0">
                                                <img src="files\assets\images\mega-menu\01.jpg" alt=""
                                                    class="img-fluid img-50">
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">New able - Redesign</h6>
                                                <p class="text-c-pink m-b-0">2 Days Remaining</p>
                                            </div>
                                        </div>
                                        <div class="row m-b-25">
                                            <div class="col-auto p-r-0">
                                                <img src="files\assets\images\mega-menu\02.jpg" alt=""
                                                    class="img-fluid img-50">
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">New Admin Dashboard</h6>
                                                <p class="text-c-pink m-b-0">Proposal in 6 Days</p>
                                            </div>
                                        </div>
                                        <div class="row m-b-25">
                                            <div class="col-auto p-r-0">
                                                <img src="files\assets\images\mega-menu\03.jpg" alt=""
                                                    class="img-fluid img-50">
                                            </div>
                                            <div class="col">
                                                <h6 class="m-b-5">Logo Design</h6>
                                                <p class="text-c-green m-b-0">10 Days Remaining</p>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <a href="#!" class="b-b-primary text-primary">View all Feeds</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- latest activity end -->
                        </div>
                    </div>
                </div>

                <div id="styleSelector">

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="files\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="files\bower_components\modernizr\js\css-scrollbars.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="files\bower_components\chart.js\js\Chart.js"></script>
    <!-- Google map js -->
    <script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="files\assets\pages\google-maps\gmaps.js"></script>
    <!-- gauge js -->
    <script src="files\assets\pages\widget\gauge\gauge.min.js"></script>
    <script src="files\assets\pages\widget\amchart\amcharts.js"></script>
    <script src="files\assets\pages\widget\amchart\serial.js"></script>
    <script src="files\assets\pages\widget\amchart\gauge.js"></script>
    <script src="files\assets\pages\widget\amchart\pie.js"></script>
    <script src="files\assets\pages\widget\amchart\light.js"></script>
    <!-- Custom js -->
    <script src="files\assets\js\pcoded.min.js"></script>
    <script src="files\assets\js\vartical-layout.min.js"></script>
    <script src="files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="files\assets\pages\dashboard\crm-dashboard.min.js"></script>
    <script type="text/javascript" src="files\assets\js\script.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


<!--     <script type="text/javascript">
     function updateCounter(){
                fetch('https://api.countapi.xyz/update/parinari/parinariwebside/?amount=1')
                    .then(res => res.json())
                    .then(data => counterElement.innerHTML = data.value);
            }

          updateCounter();
        
          counterElement =document.getElementById('count')[0];


    </script> -->
    <!-- <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script> -->
</body>

</html>
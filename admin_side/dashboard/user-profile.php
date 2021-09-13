<?php
include('common/sidebar.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parinari Project </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- webside ka logo icon -->
    <!--<link rel="icon" href=" parinamri logo" type="image/x-icon"> -->

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\font-awesome\css\font-awesome.min.css">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css"
        href="files\assets\pages\advance-elements\css\bootstrap-datetimepicker.css">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css"
        href="files\bower_components\bootstrap-daterangepicker\css\daterangepicker.css">
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\datedropper\css\datedropper.min.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css"
        href="files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\feather\css\feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="files\assets\css\jquery.mCustomScrollbar.css">
</head>

<body>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>User Profile</h4>
                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">User Profile</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">User Profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->

                    <!-- Page-body start -->
                    <div class="page-body">
                        <!--profile cover start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cover-profile">
                                    <div class="profile-bg-img">
                                        <img class="profile-bg-img img-fluid"
                                            src="files\assets\images\user-profile\bg-img1.jpg" alt="bg-img">
                                        <div class="card-block user-info">
                                            <div class="col-md-12">
                                                <div class="media-left">
                                                    <a href="#" class="profile-image">
                                                        <img class="user-img img-radius"
                                                            src="files\assets\images\user-profile\user-img.jpg"
                                                            alt="user-img">
                                                    </a>
                                                </div>
                                                <div class="media-body row">
                                                    <div class="col-lg-12">
                                                        <div class="user-title">
                                                            <h2>Soeng Souy</h2>
                                                            <span class="text-white">Customer</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--profile cover end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- tab header start -->
                                <div class="tab-header card">
                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#personal"
                                                role="tab">Personal Info</a>
                                            <div class="slide"></div>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!-- tab header end -->
                                <!-- tab content start -->
                                <div class="tab-content">
                                    <!-- tab panel personal start -->
                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                        <!-- personal card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">About Me</h5>
                                                <button id="edit-btn" type="button"
                                                    class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                                    <i class="icofont icofont-edit"></i>
                                                </button>
                                            </div>
                                            <div class="card-block">
                                                <div class="view-info">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="general-info">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-xl-6">
                                                                        <div class="table-responsive">
                                                                            <table class="table m-0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Full Name</th>
                                                                                        <td>Josephine Villa</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Gender</th>
                                                                                        <td>Female</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Birth Date</th>
                                                                                        <td>October 25th, 1990</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Marital Status
                                                                                        </th>
                                                                                        <td>Single</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Address no1</th>
                                                                                        <td>New York, USA</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Address no2</th>
                                                                                        <td>New York, USA</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                    <div class="col-lg-12 col-xl-6">
                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Email</th>
                                                                                        <td><a href="#!"><span
                                                                                                    class="__cf_email__"
                                                                                                    data-cfemail="4206272f2d02273a232f322e276c212d2f">[email&#160;protected]</span></a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Mobile Number
                                                                                        </th>
                                                                                        <td>(0123) - 4567891</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Twitter</th>
                                                                                        <td>@xyz</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of general info -->
                                                        </div>
                                                        <!-- end of col-lg-12 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of view-info -->
                                                <div class="edit-info">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="general-info">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon"><i
                                                                                                    class="icofont icofont-user"></i></span>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                placeholder="Full Name">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-radio">
                                                                                            <div class="group-add-on">
                                                                                                <div
                                                                                                    class="radio radiofill radio-inline">
                                                                                                    <label>
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            name="radio"
                                                                                                            checked=""><i
                                                                                                            class="helper"></i>
                                                                                                        Male
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="radio radiofill radio-inline">
                                                                                                    <label>
                                                                                                        <input
                                                                                                            type="radio"
                                                                                                            name="radio"><i
                                                                                                            class="helper"></i>
                                                                                                        Femal </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <input id="dropper-default"
                                                                                            class="form-control"
                                                                                            type="date"
                                                                                            placeholder="Select Your Birth Date">
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon">
                                                                                                <i class="icofont icofont-location-pin"></i>
                                                                                            </span>
                                                                                            <textarea class="form-control" placeholder="Address1"></textarea>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span class="input-group-addon">
                                                                                                <i class="icofont icofont-location-pin"></i>
                                                                                            </span>
                                                                                            <textarea class="form-control" placeholder="Address2"></textarea>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                    <div class="col-lg-6">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon"  id="basic-addon1">@</span>
                                                                                            <input type="email"
                                                                                                class="form-control"
                                                                                                placeholder="enter a email">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon"><i
                                                                                                    class="icofont icofont-mobile-phone"></i></span>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                placeholder="Mobile Number">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="input-group">
                                                                                            <span
                                                                                                class="input-group-addon"><i
                                                                                                    class="icofont icofont-social-twitter"></i></span>
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                placeholder="Twitter Id">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                               
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                </div>
                                                                <!-- end of row -->
                                                                <div class="text-center">
                                                                    <a href="#!"
                                                                        class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                                                    <a href="#!" id="edit-cancel"
                                                                        class="btn btn-default waves-effect">Cancel</a>
                                                                </div>
                                                            </div>
                                                            <!-- end of edit info -->
                                                        </div>
                                                        <!-- end of col-lg-12 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of edit-info -->
                                            </div>
                                            <!-- end of card-block -->
                                        </div>
                                        <!-- personal card end-->
                                    
                                    <!-- review tag start-->
                                    <div class="tab-pane" id="review" role="tabpanel">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Review</h5>
                                            </div>
                                            <div class="card-block">
                                                <ul class="media-list">
                                                    <li class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object img-radius comment-img"
                                                                    src="files\assets\images\avatar-1.jpg"
                                                                    alt="Generic placeholder image">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="media-heading">Sortino media<span
                                                                    class="f-12 text-muted m-l-5">Just
                                                                    now</span></h6>
                                                            <div class="stars-example-css review-star">
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                            </div>
                                                            <p class="m-b-0">Cras sit amet nibh libero,
                                                                in gravida
                                                                nulla. Nulla vel metus scelerisque ante
                                                                sollicitudin
                                                                commodo. Cras purus odio, vestibulum in
                                                                vulputate at,
                                                                tempus viverra turpis.</p>
                                                                <div class="m-b-25">
                                                                    <span><a href="#!"
                                                                            class="m-r-10 f-12">Reply</a></span><span><a
                                                                            href="#!" class="f-12">Edit</a>
                                                                    </span>
                                                                </div>
                                                            <hr>
                                                        </div>
                                                    </li>
                                                </ul>
                                               
                                            </div>
                                            <!-- review tag start-->
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- tab content end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
            <!-- Main body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Required Jquery -->
    <script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script>
    <script type="text/javascript" src="files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="files\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="files\bower_components\modernizr\js\css-scrollbars.js"></script>

    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="files\assets\pages\advance-elements\moment-with-locales.min.js"></script>
    <script type="text/javascript" src="files\bower_components\bootstrap-datepicker\js\bootstrap-datepicker.min.js">
    </script>
    <script type="text/javascript" src="files\assets\pages\advance-elements\bootstrap-datetimepicker.min.js">
    </script>
    <!-- Date-range picker js -->
    <script type="text/javascript" src="files\bower_components\bootstrap-daterangepicker\js\daterangepicker.js">
    </script>
    <!-- Date-dropper js -->
    <script type="text/javascript" src="files\bower_components\datedropper\js\datedropper.min.js"></script>
    <!-- data-table js -->
    <script src="files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
    <script src="files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
    <script src="files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
    <script src="files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
    <!-- ck editor -->
    <script src="files\assets\pages\ckeditor\ckeditor.js"></script>
    <!-- echart js -->
    <script src="files\assets\pages\chart\echarts\js\echarts-all.js" type="text/javascript"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js">
    </script>
    <script type="text/javascript"
        src="files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js">
    </script>
    <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <script src="files\assets\pages\user-profile.js"></script>
    <script src="files\assets\js\pcoded.min.js"></script>
    <script src="files\assets\js\vartical-layout.min.js"></script>
    <script src="files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="files\assets\js\script.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>
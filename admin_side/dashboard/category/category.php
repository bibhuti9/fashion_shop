
<?php

include('../common/sidebar.php');
include('../common/function.php');
include('../common/conn.php');

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
        <!-- Favicon icon -->
        <link rel="icon" href="..\files\assets\images\favicon.ico" type="image/x-icon">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap\css\bootstrap.min.css">
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="..\files\assets\icon\themify-icons\themify-icons.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="..\files\assets\icon\icofont\css\icofont.css">
        <!-- feather Awesome -->
        <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">
        <!-- Data Table Css -->
        <link rel="stylesheet" type="text/css"
            href="..\files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="..\files\assets\pages\data-table\css\buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css"
            href="..\files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">
        <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">
        <script src="js/sweetalert.js"></script>
        <?php

        if(isset($_POST['csubmit'])){
            $data = array(
                "cat_name" => $_POST['cname'],
            );
            add_data('tbl_category',$data,$con);
        ?>
           <script src="js/jquery.min.js"></script>
            <script>
                $("document").ready(()=>{
                    swal("DONE","Data inserted successfully.","success")
                    .then((value) => {
                window.location.assign('categorydisplay.php');
                        
                    });
                });
            
            </script>
        <?php
        } 
        ?>
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
                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index_admin.php"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">E-commers</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">category</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            <!-- Left column start -->
                            <div class="col-lg-12 col-xl-12">
                                <form method="post">
                                <!-- Flying Word card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Category Form</h5>
                                        

                                    </div>

                                    <div class="card-block">
                                        
                                        
                                            <div class="form-group row">
                                                <div class="col-sm-12 m-b-5">
                                                    <input type="text" name="cname" class="form-control"
                                                        placeholder="Enter category Name" required="">
                                                </div>
                                            </div>
                                           
                                       
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-sm-12 text-right">
                                                <button type="submit" name="csubmit" class="btn btn-primary m-r-10">Add
                                                 </button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Flying Word card end -->
                            </div>
                             </form>
                            <!-- Left column end -->
                            <!-- Right column start -->
                            
                            <!-- Right column end -->
                        </div>
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->
            <div id="styleSelector">

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>


     <script type="text/javascript" src="..\files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="..\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="..\files\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="..\files\bower_components\modernizr\js\css-scrollbars.js"></script>

    <!-- Select 2 js -->
    <script type="text/javascript" src="..\files\bower_components\select2\js\select2.full.min.js"></script>
    <script type="text/javascript" src="..\files\assets\js\jquery.quicksearch.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js">
    </script>
    <script type="text/javascript"
        src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js">
    </script>
    <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <!-- Custom js -->

    <script src="..\files\assets\js\pcoded.min.js"></script>
    <script src="..\files\assets\js\vartical-layout.min.js"></script>
    <script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="..\files\assets\js\script.js"></script>
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
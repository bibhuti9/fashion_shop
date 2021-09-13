    <?php
    include('common/sidebar.php');
    include('common/conn.php');
    include('common/function.php');
    ?>
<?php
    $query="select * from tbl_user as u,tbl_product as p,tbl_order as o where u.user_id=o.user_id  and o.p_id=p.p_id";
    $val=mysqli_query($con,$query) or die('Data is not fetch');
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
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="files\assets\icon\themify-icons\themify-icons.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="files\assets\icon\icofont\css\icofont.css">
        <!-- feather Awesome -->
        <link rel="stylesheet" type="text/css" href="files\assets\icon\feather\css\feather.css">
        <!-- Data Table Css -->
        <link rel="stylesheet" type="text/css"
            href="files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="files\assets\pages\data-table\css\buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css"
            href="files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
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
                                            <h4>customer and admin Table </h4>
                                            <span>sustomer and admin all  information  show </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index_admin1.php"> <i class="feather icon-home"></i>
                                                </a>
                                            </li>
                                             <li class="breadcrumb-item"><a href="#!">customer Table</a>
                                            </li>
                                         </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->

                        <!-- Page-body start -->
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Customer and Admin Information Table</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>user Name</th>
                                                            <th>Email</th>
                                                            <th>Mobile</th>
                                                            <th>Product Name </th>
                                                            <th>Total Price</th>
                                                            <th>Order Date</th>
                                                            <th>Quantity</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                            
                                                            if(mysqli_num_rows($val)>0){
                                                                while($row=mysqli_fetch_assoc($val)){
                                                         ?>
                                                                    <tr>
                                                                        <td><?php echo $row['name'] ?></td>
                                                                        <td><?php echo $row['email'] ?></td>
                                                                        <td><?php echo $row['mobile'] ?></td>
                                                                        <td><?php echo $row['p_name'] ?></td>
                                                                         <td><?php echo ($row['qty'] * $row['p_price']) ?></td>
                                                                        <td><?php echo $row['date'] ?></td>
                                                                        <td><?php echo $row['qty'] ?></td>
                                                                         <td>
                                                                        <label class="text-success">customer </label>
                                                                    </td>
                                                        </tr>            
                                                         <?php           
                                                                }
                                                            }
                                                        ?>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                            <th>user Name</th>
                                                            <th>Email</th>
                                                            <th>Mobile</th>
                                                            <th>Product Name </th>
                                                            <th>Total Price</th>
                                                            <th>Order Date</th>
                                                            <th>Quantity</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Zero config.table end -->
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
        <!-- Required Jquery -->
        <script type="text/javascript" src="files\bower_components\jquery\js\jquery.min.js"></script>
        <script type="text/javascript" src="files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
        <script type="text/javascript" src="files\bower_components\popper.js\js\popper.min.js"></script>
        <script type="text/javascript" src="files\bower_components\bootstrap\js\bootstrap.min.js"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js">
        </script>
        <!-- modernizr js -->
        <script type="text/javascript" src="files\bower_components\modernizr\js\modernizr.js"></script>
        <script type="text/javascript" src="files\bower_components\modernizr\js\css-scrollbars.js"></script>

        <!-- data-table js -->
        <script src="files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
        <script src="files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
        <script src="files\assets\pages\data-table\js\jszip.min.js"></script>
        <script src="files\assets\pages\data-table\js\pdfmake.min.js"></script>
        <script src="files\assets\pages\data-table\js\vfs_fonts.js"></script>
        <script src="files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
        <script src="files\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
        <script src="files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
        <script src="files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
        <script src="files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
        <!-- i18next.min.js -->
        <script type="text/javascript" src="files\bower_components\i18next\js\i18next.min.js"></script>
        <script type="text/javascript" src="files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js">
        </script>
        <script type="text/javascript"
            src="files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js">
        </script>
        <script type="text/javascript" src="files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
        <!-- Custom js -->
        <script src="files\assets\pages\data-table\js\data-table-custom.js"></script>

        <script src="files\assets\js\pcoded.min.js"></script>
        <script src="files\assets\js\vartical-layout.min.js"></script>
        <script src="files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
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






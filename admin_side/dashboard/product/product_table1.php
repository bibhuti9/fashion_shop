<?php

include('../common/sidebar.php');
include('../common/function.php');

include('../common/conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fashion project </title>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="#">
      <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="#">
      <!-- Favicon icon -->
        <!-- Fashion project logo -->
         <!-- Favicon icon  end-->
      <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap\css\bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="..\files\assets\icon\themify-icons\themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="..\files\assets\icon\icofont\css\icofont.css">
          <!-- Font awesome star css -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\font-awesome\css\font-awesome.min.css">
    <!-- Font awesome star css -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\jquery-bar-rating\css\fontawesome-stars.css">
      <!-- feather Awesome -->
      <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">
      <!-- Select 2 css -->
      <link rel="stylesheet" href="..\files\bower_components\select2\css\select2.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">
      <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">
      

     
  </head>

  <body>
    
          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
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
                                                    <h4>Product</h4>
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
                                                    <li class="breadcrumb-item"><a href="#!">E-Commerce</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Product</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                         <div class="col-lg-12">
                                         <a href="product_add.php"> <button type="submit" name="btnadd" class="btn btn-primary waves-effect waves-light f-left d-inline-block md-trigger" ><h5 style="color:#fff;"><i class="icofont icofont-plus m-r-4"></i> Add Product</h5></button></a>
                                       </div>
                                       
                                    </div>

                                </div>
                                <!-- Page-header end -->
                                    <!-- Page body start -->
                                   
                                    <div class="page-body">
                                    
                                        <!-- Product list start -->
                                        <div class="row">
                                         <?php
                                          $q="select * from tbl_product p INNER JOIN tbl_brand b INNER JOIN tbl_category c INNER JOIN tbl_subcategory s INNER JOIN tbl_color co INNER JOIN tbl_size si ON b.b_id=p.b_id AND p.c_id=c.cat_id AND p.scat_id=s.scat_id AND co.color_id=p.color_id AND si.size_id=p.size_id";
                                          $query=mysqli_query($con,$q);
                                          foreach($query as $row)
                                          { 
                                        
                                          ?>
                                          
                                            <div class="col-xl-2" onclick="window.location.assign('product_view.php?pid='+<?=$row['p_id']?>)">
                                                <div class="card prod-view">
                                                    <div class="prod-item text-center">
                                                        <div class="prod-img">
                                                            <?php
                                                                 $imgData = get_edit_data('tbl_images','p_id',$row['p_id'],$con);
                                                            ?>
                                                            <a href="#!" >
                                                                <img src="<?=$imgData['im_path']?>" class="img-fluid o-hidden" alt="" 
                                                                style="width: 150px; height: 150px;"
                                                                >
                                                            </a>
                                                            <!-- <div class="p-new"><a href="product_view.php?pid=<?=$row['p_id']?>">View</a></div> -->
                                                        </div>
                                                        <div class="prod-info">
                                                            <a href="#!" class="txt-muted"><h4><?=$row['p_name']?></h4></a>
                                                            <div class="m-b-8">
                                                                <label class="label label-success">3.5 <i class="fa fa-star"></i></label><a class="text-muted f-w-600">14 Ratings &amp;  3 Reviews</a>
                                                            </div>
                                                            <span class="prod-price"><i class="icofont icofont-cur-ruppe"></i><?=$row['p_price']?><small class="old-price"><i class="icofont icofont-cur"></i>1850</small></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                            
                                        </div>
                                       
                                       
                                        <!-- Product list end -->
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
<!-- Required Jquery -->
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
<script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>

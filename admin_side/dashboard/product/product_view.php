<?php
include('../common/sidebar.php');
include('../common/function.php');

include('../common/conn.php');
?>

<?php

// if(isset($_POST['delete']))
// {
//     unlink("C:\xampp\htdocs\mypro\Parinari_project1\admin_side\dashboard\product\photo\Screenshot (13).png");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->

    <link rel="icon" href="..\files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- star theme css -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\jquery-bar-rating\css\bars-1to10.css">
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\jquery-bar-rating\css\bars-horizontal.css">
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\jquery-bar-rating\css\bars-movie.css">
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\jquery-bar-rating\css\bars-pill.css">
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\jquery-bar-rating\css\bars-reversed.css">
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\jquery-bar-rating\css\bars-square.css">
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\jquery-bar-rating\css\css-stars.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\slick-carousel\css\slick.css">
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\slick-carousel\css\slick-theme.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">
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
                                                    <h4>Product detail</h4>
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
                                                    <li class="breadcrumb-item"><a href="#!">Product Detail</a>
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
                                            <div class="col-md-12">
                                                <!-- Product detail page start -->
                                                <div class="card product-detail-page">
                                                    <div class="card-block">
                                                        <div class="row">
                                                               <?php
                                                                $id=$_GET['pid'];
                                                                $q="select * from tbl_product AS tbl_product1 INNER JOIN tbl_category c INNER JOIN tbl_brand b INNER JOIN tbl_subcategory s INNER JOIN tbl_color col INNER JOIN tbl_size size ON  b.b_id=tbl_product1.b_id AND tbl_product1.scat_id=s.scat_id AND tbl_product1.c_id=c.cat_id AND col.color_id=tbl_product1.color_id AND size.size_id=tbl_product1.size_id WHERE tbl_product1.p_id='$id'";
                                                                $query=mysqli_query($con,$q);
                                                                while($row=mysqli_fetch_array($query))
                                                                {
                                                                    $pname=$row['p_name'];
                                                                    $pprice=$row['p_price'];
                                                                    $brand=$row['b_name'];
                                                                    $category=$row['cat_name'];
                                                                    $date1=$row['date'];
                                                                    $des=$row['p_descri'];
                                                                    $subcategory=$row['scat_name'];
                                                                    $size=$row['size_name'];
                                                                    $color=$row['color_name'];
                                                                    $colorcode=$row['color_code'];
                                                                    
                                                                   
                                                                }
                                                                
                                                            
                                                                ?>

                                                            <div class="col-lg-5 col-xs-12">
                                                                <div class="port_details_all_img row">
                                                                    <div class="col-lg-12 m-b-15">
                                                                        <div id="big_banner">
                                                                          <?php 

                                                                            $query="SELECT * FROM `tbl_images` WHERE p_id ='$id'";
                                                                            $val=mysqli_query($con,$query);
                                                                            // $data=get_id_data('tbl_images','p_id ','29',$cn);
                                                                             while($tmp = mysqli_fetch_assoc($val)){
                                                                                 $img=$tmp['im_path'];
                                                                            ?>
                                                                            <div class="port_big_img">
                                                                                <img class="img img-fluid" src="<?= $tmp['im_path']; ?>" alt="">
                                                                            </div>
                                                                        <?php
                                                                            }
                                                                        ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div id="small_banner">
                                                                            <?php 
                                                                             $query="SELECT * FROM `tbl_images` WHERE p_id = '$id'";
                                                                            $val=mysqli_query($con,$query);
                                                                            // $data=get_id_data('tbl_images','p_id ','29',$cn);
                                                                             while($tmp = mysqli_fetch_assoc($val)){
                                                                            ?>
                                                                            <div>
                                                                                <img class="img img-fluid" src="<?php echo $tmp['im_path'] ;?>" alt="">
                                                                            </div>
                                                                             <?php
                                                                            }
                                                                        ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7 col-xs-12 product-detail" id="product-detail">
                                                                <div class="row">
                                                                    <div>
                                                                        <div class="col-lg-12">
                                                                            
                                                                            <span class="f-right">Availablity : <a href="#!"> In Stock </a> </span>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <h4 class="pro-desc"><?=$pname?></h4>
                                                                        </div>
                                                                        <table>
                                                                        <tr>
                                                                            <td>Category&emsp;</td>
                                                                            <td>:&emsp; <?=$category?></td>
                                                                        </tr>
                                                                         <tr>
                                                                            <td>SubCategory&emsp;</td>
                                                                            <td>:&emsp; <?=$subcategory?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Brand&emsp;</td>
                                                                            <td>:&emsp; <?=$brand?> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Size&emsp;</td>
                                                                            <td>:&emsp; <?=$size?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Color&emsp;</td>
                                                                            <td>:&emsp;<?=$color?></td>
                                                                            <td style="height:20px;background-color:<?=$colorcode?>;width:20px; border-radius:50%;border:none;">
                                                                            </td>

                                                                            </td>
                                                                           
                                                                         </tr>
                                                                         <tr>
                                                                            <td>Issue Date&emsp;</td>
                                                                            <td>:&emsp; <?=$date1?></td>
                                                                        </tr>
                                                                        </table><BR>
                                                                        <!-- <div class="stars stars-example-css m-t-15 detail-stars col-lg-12">
                                                                            <select id="product-view" class="rating-star" name="rating" autocomplete="off">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                            </select>
                                                                        </div> -->
                                                                        <div class="col-lg-12">
                                                                            <span class="text-primary product-price"><i class="icofont icofont-cur-dollar"></i><?=$pprice?></span> <!-- <span class="done-task txt-muted">$90.59</span> -->
                                                                            <hr>
                                                                            <p> <?=$des?>&emsp;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                                                                            </p>
                                                                            <hr>
                                                                           
                                                                        </div>
                                                                       
                                                                        <div class="col-lg-12 col-sm-12 mob-product-btn">
                                                                            <input type="hidden" class="delete_id_value" value="<?=$id?>"/>
                                                                          
                                                                            <a href="product_edit.php?pid=<?=$id?>" class="" data-toggle="tooltip" title="" data-original-title="Edit" ><button type="button" class="btn btn-primary waves-effect waves-light m-r-20"><i class="icofont icofont-ui-edit" style="color: #fff"> Update </i></button></a>
                                                                            
                                                                            <a href="#" class="" data-toggle="tooltip" title="" data-original-title="Delete" id="deletebtn"><button type="button" class="btn btn-primary waves-effect waves-light m-r-20"><i class="icofont icofont-ui-delete" style="color: #fff"> Delete</i></button></a>
                                                                    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                       
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <!-- Product detail page end -->
                                            </div>
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

    <!-- barrating js -->
    <script type="text/javascript" src="..\files\bower_components\jquery-bar-rating\js\jquery.barrating.min.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\rating\rating.js"></script>
    <!-- slick js -->
    <script type="text/javascript" src="..\files\bower_components\slick-carousel\js\slick.min.js"></script>
    <!-- product detail js -->
    <script type="text/javascript" src="..\files\assets\pages\product-detail\product-detail.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <script src="..\files\assets\js\pcoded.min.js"></script>
    <script src="..\files\assets\js\vartical-layout.min.js"></script>
    <script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="..\files\assets\js\script.js"></script>
 <script src="js/sweetalert.js"></script>
 <script>
            $(document).ready(function () {

                
                $('#deletebtn').click(function (e) { 
                    
                    e.preventDefault();
                       var deleteid = $(this).closest("div").find('.delete_id_value').val();
                       var deleteimg = $(this).closest("div").find('.delete_id_image').val();
                        console.log(deleteid);
                        console.log(deleteimg);

                    swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary Data!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                        })
                        .then((willDelete) => {
                        if (willDelete) {

                            $.ajax({
                                type: "POST",
                                url: "/fashion_shop/admin_side/dashboard/code.php",
                                data: {
                                    "delete_btn_set_product":1,
                                    "delete_id":deleteid,
                                    "delete_img":deleteimg,
                                    "tbl_product":'tbl_product',
                                    "p_id":'p_id',
                                },
                                
                                success: function (response) {

                                    swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                    }).then((result)=>{
                                        window.location.assign('product_table1.php');
                                    });
                                    
                                }
                            });
                            
                        } 
                        });

                    
                    
                });
            });
                    
         </script>
        

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

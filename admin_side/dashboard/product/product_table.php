
<?php

include('../common/sidebar.php');
include('../common/function.php');

include('../common/conn.php');


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Parinari Project</title>
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
                                            <h4>Product Table</h4>
                                           
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
                                             <li class="breadcrumb-item"><a href="#!">Product Table</a>
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
                                            <!-- <h5>Customer and Admin Information Table</h5> -->
                                           <a href="product_add.php"> <button type="submit" name="btnadd" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" ><h5 style="color:#fff;"><i class="icofont icofont-plus m-r-4"></i> Add Product</h5></button></a>
                                        </div>
                                        <div class="card-block">
                                                        <div class="table-responsive">
                                                            <div class="table-content">
                                                                <div class="project-table">
                                                                   <table id="simpletable"
                                                                         class="table table-striped table-bordered nowrap">
                                                                        <thead class="thead-dark">
                                                                            <tr>
                                                                               <th>Id</th>
                                                                               <th>Category Name</th>
                                                                               <th>SubCategory Name</th>
                                                                                <th>Product Name</th>
                                                                                <th>Price</th>
                                                                                <th>image</th>
                                                                                <th>Brand</th>
                                                                                <th>Decription</th>
                                                                                <th>Stock</th>
                                                                                 <th>Date</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                                $q="select * from tbl_product p  INNER JOIN tbl_brand b INNER JOIN tbl_category c INNER JOIN tbl_subcategory s ON  b.b_id=p.b_id AND p.c_id=c.cat_id AND p.scat_id=s.scat_id";
                                                                                $query=mysqli_query($con,$q);
                                                                                foreach($query as $row)
                                                                                {
                                                    
                                                                                ?>
                                                                                <tr>

                                                                                    <td>
                                                                                      <?php echo $row['p_id']?>
                                                                                    </td>
                                                                                    <td>
                                                                                      <?php echo $row['cat_name']?>
                                                                                    </td>
                                                                                    <td>
                                                                                      <?php echo $row['scat_name']?>
                                                                                    </td>
                                                                                    <td>
                                                                                      <?php echo $row['p_name']?>
                                                                                    </td>
                                                                                     <td>
                                                                                      <?php echo $row['p_price']?>
                                                                                    </td>
                                                                                    <td>
                                                                                   
                                                                                     <?php
                                                                                       
                                                                                        $imgData = get_edit_data('tbl_images','p_id',$row['p_id'],$con);
                                                                                     ?>
                                                                                     <img src="<?=$imgData['im_path']?>" style="height:100px;width:100px;" >   
                                                                                    </td>
                                                                                    <td>
                                                                                        <?php echo $row['b_name']?>
                                                                                    </td>
                                                                                    <td>
                                                                                        <?php echo $row['p_descri']?>
                                                                                    </td>
                                                                                   
                                                                                    <td>
                                                                                        <label class="text-danger">Out Of Stock</label>
                                                                                    </td>
                                                                                    <td><?php echo $row['date']?></td>
                                                                                    <td class="action-icon">
                                                                                    <input type="hidden" class="delete_id_value" value="<?=$row['p_id']?>" />
                                                                                    <a href="product_edit.php?pid=<?=$row['p_id']?>" class="" data-toggle="tooltip" title="" data-original-title="Edit" ><i class="icofont icofont-ui-edit" style="color: blue"> Update</i></a>&emsp;&emsp;
                                                                                    <a href="#" class="" data-toggle="tooltip" title="" data-original-title="Delete" id="deleteproductbtn"><i class="icofont icofont-delete-alt" style="color:red"> Delete</i></a>
                                                                                    </td>
                                                                                    
                                                                                </tr>
                                                                                
                                                                                <?php
                                                                                }
                                                                            
                                                                            ?>
                                                                            
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
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
        <script type="text/javascript" src="..\files\bower_components\jquery\js\jquery.min.js"></script>
        <script type="text/javascript" src="..\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
        <script type="text/javascript" src="..\files\bower_components\popper.js\js\popper.min.js"></script>
        <script type="text/javascript" src="..\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="..\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js">
        </script>
        <!-- modernizr js -->
        <script type="text/javascript" src="..\files\bower_components\modernizr\js\modernizr.js"></script>
        <script type="text/javascript" src="..\files\bower_components\modernizr\js\css-scrollbars.js"></script>

        <!-- data-table js -->
        <script src="..\files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
        <script src="..\files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
        <script src="..\files\assets\pages\data-table\js\jszip.min.js"></script>
        <script src="..\files\assets\pages\data-table\js\pdfmake.min.js"></script>
        <script src="..\files\assets\pages\data-table\js\vfs_fonts.js"></script>
        <script src="..\files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
        <script src="..\files\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
        <script src="..\files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
        <script src="..\files\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
        <script src="..\files\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
        <!-- i18next.min.js -->
        <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
        <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js">
        </script>
        <script type="text/javascript"
            src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js">
        </script>
        <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
        <!-- Custom js -->
        <script src="..\files\assets\pages\data-table\js\data-table-custom.js"></script>

        <script src="..\files\assets\js\pcoded.min.js"></script>
        <script src="..\files\assets\js\vartical-layout.min.js"></script>
        <script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="..\files\assets\js\script.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

        <script>
            $(document).ready(function () {

                var table=$('#simpletable').DataTable();
                //$('#deletebtn').click(function (e) { 
                     table.on('click','#deleteproductbtn', function (e) {
                    e.preventDefault();
                        var deleteid = $(this).closest("tr").find('.delete_id_value').val();
                        console.log(deleteid);

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
                                url: "delete.php",
                                data: {
                                    "delete_btn_set":1,
                                    "delete_id":deleteid,
                                },
                                
                                success: function (response) {

                                    swal("Poof! Your imaginary file has been deleted!", {
                                    icon: "success",
                                    }).then((result)=>{
                                        location.reload();
                                    });
                                    
                                }
                            });
                            
                           
                        } 
                        });

                    
                    
                });
            });
                    
         </script>

        

            <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
            </script>

        


       
      

    
   




    
    </body>






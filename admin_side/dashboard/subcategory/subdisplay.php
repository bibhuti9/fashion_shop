<?php
 include('../common/sidebar.php');
 include('../common/conn.php');
 include('../common/function.php');

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Parinari Project</title>
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

         if(isset($_POST['updatesubcategory'])){
         $id=$_POST['eedit_id'];
         $scname=$_POST['eedit_scname']; 
         $data = array(
        'scat_name' => $scname,
        );
        update_data('tbl_subcategory','scat_id',$id,$data,$con);
        ?>
           <script src="js/jquery.min.js"></script>
            <script>
                $("document").ready(()=>{
                    swal("DONE","Data Update successfully.","success")
                    .then((value) => {
                window.location.assign('subdisplay.php');
                        

                        
                    });
                });
            
            </script> 
            <?php
             } 
             ?>  
            
    </head>

    <body>


     <!-- Edit modal -->
                    <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="editsubCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editsubCategoryModal">Edit SubCategory</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form  method="POST">
                        <div class="modal-body">
                            <input type="hidden" name="eedit_id" id="s_id">
                            <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" name="eedit_cname" id="s_cname" class="form-control" disabled= >
                                
                            </div>
                            <div class="form-group">
                            <label for="">SubCategory Name</label>
                            <input type="text" name="eedit_scname" id="s_scname" class="form-control" placeholder="Enter CategoryName">
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="updatesubcategory">Update</button>
                        </div>
                </form>
                    </div>
                </div>
                </div>

        <!-- Edit modal -->

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
                                            <h4>SubCategory Form </h4>
                                           
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
                                             <li class="breadcrumb-item"><a href="#!">SubCategory Table</a>
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
                                           <a href="Subcategory.php"> <button type="submit" name="btnadd" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" ><h5 style="color:#fff;"><i class="icofont icofont-plus m-r-4"></i> Add Subcategory</h5></button></a>
                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                            <form method="post">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                             <th>id</th>
                                                             <th> Category Name</th>
                                                            <th> SubCategory Name</th>
                                                            
                                                            <th>Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                         
                                                        $q="select scat_id,cat_name,scat_name from tbl_subcategory s INNER JOIN tbl_category c ON s.cat_id=c.cat_id";
                                                        $query=mysqli_query($con,$q);
                                                        while($row=mysqli_fetch_array($query))
                                                        {

                            
                                                        ?>
                                                         <tr>  
                                                            <td><?php echo $row['scat_id']?></td>
                                                            <td><?php echo $row['cat_name']?></td>
                                                            <td><?php echo $row['scat_name']?></td>
                                                            <td>
                                                             <input type="hidden" class="delete_id_value" value="<?=$row['scat_id']?>" />
                                                            <a href="#!"  data-toggle="tooltip" title="" data-original-title="Edit" id="editsubbtn"><i class="icofont icofont-ui-edit"></i> Update</a>&emsp;&emsp;
                                                            <a href="#"  data-toggle="tooltip" title="" data-original-title="Delete" id="deletesubbtn"><i class="icofont icofont-delete-alt"></i> Delete</a>
                                                            </td>
                                                
                                                            
                                                        </tr>
                                                       

                                                        <?php
                                                         } 
                                                        ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                             <th>id</th>
                                                            <th> Category Name</th>
                                                            <th> SubCategory Name</th>
                                                            <th>Action</th>
                                                            
                                                        
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                </form>
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
               // $('.editsubbtn').click(function (e) { 
                    table.on('click','#editsubbtn', function (e) {
                    e.preventDefault();
                    $('#editsubCategoryModal').modal('show');  
                    $tr =$(this).closest('tr');
                    var data=$tr.children("td").map(function(){
                     return $(this).text();

                    }).get();
                    console.log(data);
                    $('#s_id').val(data[0]); 
                    $('#s_cname').val(data[1]); 
                    $('#s_scname').val(data[2]);              
                        });
                    });
                
         </script>

          <script>
            $(document).ready(function () {

                var table=$('#simpletable').DataTable();
                //$('#deletebtn').click(function (e) { 
                     table.on('click','#deletesubbtn', function (e) {
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
                                url: "/fashion_shop/admin_side/dashboard/code.php",
                                data: {
                                    "delete_btn_set_subcategory":1,
                                    "delete_id":deleteid,
                                    "tbl_subcategory":'tbl_subcategory',
                                    "scat_id":'scat_id',
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



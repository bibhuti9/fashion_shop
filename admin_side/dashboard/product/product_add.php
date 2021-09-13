<?php
include('../common/sidebar.php');
include('../common/function.php');
include('../common/conn.php');

// $query="select * from tbl_category";
// mysqli_query($con,$query) or die("Data is not fetch");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Parinari Project </title>
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
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\icofont\css\icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">

    <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">

    <script src="js/sweetalert.js"></script>
        <?php

        if(isset($_POST['p_submit'])){
            $data = array(
                "p_name" => $_POST['p_name'],
                "c_id" => $_POST['categoury'],
                "b_id" => $_POST['brand'],
                "p_price" => $_POST['price'],
                "p_descri" =>$_POST['p_des'],
                "scat_id" =>$_POST['sub_categoury1'],
                "date" =>$_POST['date1'],
                "size_id" =>$_POST['size'],
                "color_id" =>$_POST['color'],
                "type" => $_POST['p_type']
                //  "p_name" => $_GET['p_name'],
                // "c_id" => $_GET['categoury'],
                // "b_id" => $_GET['brand'],
                // "p_price" => $_GET['price'],
                // "p_descri" =>$_GET['p_des'],
                // "scat_id" =>$_GET['sub_categoury1'],
                // "date" =>$_GET['date1'],
                // "size_id" =>$_GET['size'],
                // "color_id" =>$_GET['color'],
                // "type" => $_GET['p_type']

            );
            add_data('tbl_product',$data,$con);
            $q="select max(p_id) as p_id from `tbl_product`";
            $val=mysqli_query($con,$q) or die('Data is not Fetch');
            while($tmp=mysqli_fetch_assoc($val))
            {
                $total=$tmp['p_id'];
            }
             
                // $path = "photo/".$_FILES['img']['name'];
                // $tmpPath = $_FILES['img']['tmp_name'];
                // move_uploaded_file($tmpPath,$path);
                 foreach($_FILES['img']['tmp_name'] as $key => $image){
                    $imageName = $_FILES['img']['name'][$key];

                    $imageTmpName = $_FILES['img']['tmp_name'][$key];

                    $directory = 'photo/'.$imageName;

                    $result = move_uploaded_file($imageTmpName,$directory);
                 $data = array(
                 'p_id' => $total,
                'im_path' => $directory,
                 );
                add_data('tbl_images',$data,$con);
                

                    
                 }
                
            
            


        ?>
           <script src="js/jquery.min.js"></script>
            <script>
                $("document").ready(()=>{
                    swal("DONE","Data inserted successfully.","success")
                    .then((value) => {
                window.location.assign('product_table1.php');
                        
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
                                    <div class="d-inline">
                                        <h4>Product Form</h4>
                                        <span>Fill below form & Find your Product</span>
                                    </div>
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
                                        <li class="breadcrumb-item"><a href="#!">Product Form</a>
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
                                <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Select Cetegoury For The Product * </h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                             <th>
                                                                     <label class="col-lable">Men</label>
                                                                        <input type="radio" class="form-control" 
                                                                          name="p_type" value="men" onchange="SetProductType('men')" checked="">
                                                             </th>
                                                             <th>
                                                                     <label class="col-lable">Kids</label>
                                                                        <input type="radio" class="form-control" 
                                                                          name="p_type" value="kids" onchange="SetProductType('kids')" placeholder="Enter Product Name">
                                                             </th>
                                                             <th>
                                                                     <label class="col-lable">Women</label>
                                                                        <input type="radio" class="form-control" 
                                                                          name="p_type" onchange="SetProductType('women')" value="women">
                                                             </th>
                                                        </tr>
                                                    </thead>
                                                   
                                                   
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Zero config.table end -->
                                </div>


                                <script type="text/javascript">
                                    function SetProductType(p_type){
                                        console.log(p_type);
                                        document.getElementById("p_type").value=p_type;
                                    }
                                </script>

                            </div>



                        <div class="row">
                            <!-- Left column start -->
                            <div class="col-lg-12 col-xl-12">
                                <!-- Flying Word card start -->
                                <div class="card"> 
                                    <div class="card-block">
                                        <h4 class="sub-title">Product Details</h4>
                                        <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" >
                                            <div class="form-group row">
                                                <div class="col-sm-12 m-b-5">
                                                 <label class="col-lable">Product Name</label>
                                                    <input type="text" class="form-control" 
                                                      name="p_name"  placeholder="Enter Product Name"  required>

                                                      <!-- Select The Product Type -->
                                                      <input type="text" class="form-control" 
                                                      name="p_type" value="men" id="p_type" hidden>

                                                  </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 m-b-5">
                                                 <label class="col-lable">Product Price</label>
                                                    <input type="text" class="form-control"
                                                      name="price"  placeholder="Enter Product Pricre" required>
                                                </div>
                                            </div> 
                                            <div class="form-group row">  
                                                <div class="col-sm-12 m-b-5">
                                                <label class="col-lable">Product Brand</label>
                                                <select name="brand" class="form-control " >
                                                        <option value="opt1">Brand</option>
                                                        
                                                        <?php  
                                                            $query="select * from tbl_brand";
                                                         $val=mysqli_query($con,$query) or die("<script>alert('Data is not fetch on categpries');</script>");
                                                            if(mysqli_num_rows($val)>0){
                                                                while($cat=mysqli_fetch_assoc($val)){
                                                        ?>
                                                                    <option value="<?php echo $cat['b_id'] ?>" name="colour"><?php echo $cat['b_name']?></option>
                                                        <?php           
                                                                }
                                                            }
                                                        ?> 
                                                      </select>
                                                      </div>
                                            </div>
                                         
                                        <div class="card-block" style="padding:0">
                                                 
                                                <div class="form-group row" style="display: flex">
                                                 <div class="col-sm-6 m-b-5">
                                                    <h4 class="sub-title">  Category </h4>
                                                     <select onchange="get_sub_cat(this.value)" name="categoury" class="form-control">
                                                        <option value="opt1">Category</option>
                                                        
                                                        <?php  
                                                            $query="select * from tbl_category";
                                                         $val=mysqli_query($con,$query) or die("<script>alert('Data is not fetch on categpries');</script>");
                                                            if(mysqli_num_rows($val)>0){
                                                                while($cat=mysqli_fetch_assoc($val)){
                                                        ?>
                                                                    <option value="<?php echo $cat['cat_id'] ?>" onchange="get_sub_cat('<?php echo $cat['cat_id'] ?>')"  name="cat"><?php echo $cat['cat_name']?></option>
                                                        <?php           
                                                                }
                                                            }
                                                        ?> 
                                                      </select>
                                                  </div>

                                                   <div class="col-sm-6 m-b-5">
                                                         <h4 class=" sub-title"> Sub_Category </h4>
                                                          <select name="sub_categoury1" id="sub_categoury" class="form-control ">
                                                        <option value="opt1">Sub_Category</option>
                                                    </select>
                                                  </div>          
                                            </div>  
                                        </div>
                                         <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <input type="date" name="date1" class="form-control" required="">
                                                </div>
                                                <div class="col-sm-4">
                                                   <select name="color" class="form-control">
                                                        <option value="opt1">Color</option>
                                                        
                                                        <?php  
                                                            $query="select * from tbl_color";
                                                         $val=mysqli_query($con,$query) or die("<script>alert('Data is not fetch on categpries');</script>");
                                                            if(mysqli_num_rows($val)>0){
                                                                while($cat=mysqli_fetch_assoc($val)){
                                                        ?>
                                                                    <option value="<?php echo $cat['color_id'] ?>" name="color_name"><?=$cat['color_name']?></option>            
                                                        <?php           
                                                                }
                                                            }
                                                        ?> 
                                                      </select>
                                                </div>
                                                <div class="col-sm-4">
                                                   <select name="size" class="form-control " required>
                                                        <option value="opt1">Size</option>
                                                        
                                                        <?php  
                                                            $query="select * from tbl_size";
                                                         $val=mysqli_query($con,$query) or die("<script>alert('Data is not fetch on categpries');</script>");
                                                            if(mysqli_num_rows($val)>0){
                                                                while($cat=mysqli_fetch_assoc($val)){
                                                        ?>
                                                       <option value="<?php echo $cat['size_id'] ?>" name="size_name"><?=$cat['size_name']?>
                                                        </option>
                                                         <?php           
                                                                }
                                                            }
                                                        ?> 
                                                      </select>
                                                </div>
                                            
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label class="col-lable">Product Image</label>
                                                    <input type="file" name="img[]" class="form-control"  required multiple/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                 <label class="col-lable">Product Description</label>
                                                    <textarea rows="5" cols="5" name="p_des" class="form-control"
                                                        placeholder="Product_Description" required></textarea>
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12 text-right">
                                                            <button type="submit" name="p_submit" class="btn btn-primary m-r-10">Submit
                                                                Details</button>
                                                            <button type="submit" class="btn btn-default">Reset</button>
                                                        </div>
                                                     </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                          </div>
                     </div>
                                <!-- Flying Word card end -->
                 </div>
                            <!-- Left column end -->                       
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

    <!-- Validation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\form-validation\validate.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="..\files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="..\files\assets\pages\form-validation\form-validation.js"></script>

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
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script type="text/javascript">
        
        function get_sub_cat(cat_id){
            console.log(cat_id);
            $.ajax({
                url:'get_sub_cat.php',
                type:'get',
                data:'cat_id='+cat_id,
                success:function(data){
                    const sub_cat_div= document.getElementById("sub_categoury");
                    sub_cat_div.style.visibility="visible";
                    sub_cat_div.innerHTML=data;
                }
            });
        }

        function get_inner_sub_cat(sub_cat_id){
            $.ajax({
                url:'get_inner_sub_cat.php',
                type:'get',
                data:'sub_cat_id='+sub_cat_id,
                success:function(data){
                    inner_sub_cat_div.style.visibility="visible";
                    const inner_inner_sub=document.getElementById("inner_inner_sub");
                    inner_inner_sub.innerHTML=data;
                }
            })
        }
        
    </script>

      
</body>

</html>
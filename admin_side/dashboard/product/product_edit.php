<?php

session_start();
include('../common/sidebar.php');
include('../common/function.php');
include('../common/conn.php');


// $query="select * from tbl_category";
// mysqli_query($con,$query) or die("Data is not fetch");


?>

<?php
    $id=$_GET['pid'];
    $q="select * from tbl_product AS tbl_product1 INNER JOIN tbl_images i INNER JOIN tbl_brand b ON tbl_product1.p_id=i.p_id AND b.b_id=tbl_product1.b_id WHERE tbl_product1.p_id='$id'";
    $query=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($query))
    {
        $pname=$row['p_name'];
        $pprice=$row['p_price'];
        $brand=$row['b_id'];
        $category=$row['c_id'];
        $date1=$row['date'];
        $des=$row['p_descri'];
        $sub=$row['scat_id'];
        $img=$row['im_path'];
    }

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
    <!-- Select 2 css -->
    <link rel="stylesheet" href="..\files\bower_components\select2\css\select2.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">
     <script src="js/sweetalert.js"></script>
        <?php
        if(isset($_POST['edit_p_submit'])){
           // $q="UPDATE `tbl_product` SET `p_name`='{$_POST['edit_p_name']}',`p_price`='{$_POST['edit_price']}',`c_id`='{$_POST['edit_categoury']}',`b_id`='{$_POST['edit_brand']}',`scat_id`='{$_POST['edit_subcategoury']}',`p_descri`='{$_POST['edit_p_des']}',`date`='{$_POST['edit_date1']}' WHERE p_name='{$_GET['name']}'";
           // mysqli_query($con,$q);
            $data = array(
                "p_name" => $_POST['edit_p_name'],
                "c_id" => $_POST['edit_categoury'],
                "b_id" => $_POST['edit_brand'],
                "p_price" => $_POST['edit_price'],
                "p_descri" =>$_POST['edit_p_des'],
                "scat_id" =>$_POST['edit_subcategoury'],
                "date" =>$_POST['edit_date1'],
               


            );
            update_data('tbl_product','p_id',$id,$data,$con);
            
            if(empty($_FILES['edit_img']['tmp_name'][0])!=1){
                // $path = "photo/".$_FILES['edit_img']['name'];
                // $tmpPath = $_FILES['edit_img']['tmp_name'];
                // move_uploaded_file($tmpPath,$path);
                 foreach($_FILES['edit_img']['tmp_name'] as $key => $image){
                    $imageName = $_FILES['edit_img']['name'][$key];
                    $imageTmpName = $_FILES['edit_img']['tmp_name'][$key];
                    $directory = 'photo/'.$imageName;
                    $result = move_uploaded_file($imageTmpName,$directory);
                    $data = array('im_path' => $directory,);
                    update_data('tbl_images','p_id',$id,$data,$con);
                }              
            }
?>

    <script src="js/jquery.min.js"></script>
    <script>
        $("document").ready(()=>{
            swal("DONE","Data Update successfully.","success")
            .then((value) => {
        window.location.assign('product_table1.php');
                
            });
        });
    </script>
<?php } ?>
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
                                        <h4>Product Edit</h4>
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
                                        <li class="breadcrumb-item"><a href="#!">Product Edit</a>
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
                                <!-- Flying Word card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Product Edit</h5>
                                    </div>
                                    <div class="card-block">
                                        <h4 class="sub-title">Product Details</h4>
                                        <form  method="POST" enctype="multipart/form-data" >
                                            <div class="form-group row">
                                                <div class="col-sm-12 m-b-5">
                                                <label class="col-lable">Product Name</label>
                                                    <input type="text" class="form-control" 
                                                      name="edit_p_name" value="<?php echo "$pname"?>"  placeholder="Enter Product Name" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-12 m-b-5">
                                                <label class="col-lable">Product Price</label>
                                                    <input type="text" class="form-control"
                                                      name="edit_price" value="<?php echo "$pprice"?>"  placeholder="Enter product_pricre">
                                                </div>
                                            </div> 
                                             <div class="form-group row">
                                                <div class="col-sm-12 m-b-5">
                                                <label class="col-lable">Brand</label>
                                                <select name="edit_brand" class="form-control ">
                                                        <option value="opt1">Brand</option>
                                                        
                                                        <?php  
                                                            $query="select * from tbl_brand";
                                                         $val=mysqli_query($con,$query) or die("<script>alert('Data is not fetch on categpries');</script>");
                                                            if(mysqli_num_rows($val)>0){
                                                                while($cat=mysqli_fetch_assoc($val)){
                                                        ?>
                                                                    <option value="<?php echo $cat['b_id'] ?>"
                                                                        <?php
                                                                            if($brand == $cat['b_id'])
                                                                            {
                                                                                echo "selected";

                                                                            }
                                                                        ?>
                                                                    ><?php echo $cat['b_name']?></option>
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
                                                     <select  name="edit_categoury" class="form-control ">
                                                        <option value="opt1">Category</option>
                                                        
                                                        <?php  
                                                            $query="select * from tbl_category";
                                                         $val=mysqli_query($con,$query) or die("<script>alert('Data is not fetch on categpries');</script>");
                                                            if(mysqli_num_rows($val)>0){
                                                                while($cat=mysqli_fetch_assoc($val)){
                                                        ?>
                                                                    <option value="<?php echo $cat['cat_id'] ?>"  name="cat"
                                                                        <?php
                                                                            if($category == $cat['cat_id'])
                                                                            {
                                                                                echo "selected";

                                                                            }
                                                                        ?>
                                                                    ><?php echo $cat['cat_name']?></option>
                                                        <?php           
                                                                }
                                                            }
                                                        ?> 
                                                      </select>
                                                  </div>

                                                   <div class="col-sm-6 m-b-5">
                                                         <h4 class=" sub-title"> Sub_Category </h4>
                                                         
                                                     
                                                        <select  name="edit_subcategoury" class="form-control ">
                                                        <option value="opt1">SubCategory</option>
                                                        
                                                        <?php  
                                                            $query="select * from tbl_subcategory";
                                                            $val=mysqli_query($con,$query) or die("<script>alert('Data is not fetch on categpries');</script>");
                                                            if(mysqli_num_rows($val)>0){
                                                                while($cat=mysqli_fetch_assoc($val)){
                                                        ?>
                                                                    <option value="<?php echo $cat['scat_id'] ?>"  name="scat"
                                                                        <?php
                                                                            if($sub == $cat['scat_id'])
                                                                            {
                                                                                echo "selected";

                                                                            }
                                                                        ?>
                                                                    ><?php echo $cat['scat_name']?></option>
                                                        <?php           
                                                                }
                                                            }
                                                        ?> 
                                                      </select>
                                                  </div> 

                                                    
                                            </div>  
                                        </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6">
                                                    <input type="date" name="edit_date1"  value="<?php echo "$date1"?>" class="form-control">
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label class="col-lable">Product_image</label>
                                                    <input type="file" name="edit_img[]"  class="form-control" multiple/>
                                                    <?php
                                                                                       
                                                      $imgData = get_edit_data('tbl_images','p_id',$_GET['pid'],$con);
                                                     ?>
                                                    
                                                    <img src="<?=$imgData['im_path']?>" style="height:100px;width:100px;" > 
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                <label class="col-lable">Product Description</label>
                                                    <input rows="5" cols="5" name="edit_p_des" value="<?php echo "$des"?>" class="form-control"
                                                        placeholder="Product_Description">
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12 text-right">
                                                            <button type="submit" name="edit_p_submit" class="btn btn-primary m-r-10">Update
                                                           </button>
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

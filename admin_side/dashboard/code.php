
<?php

include('common/function.php');

include('common/conn.php');




if(isset($_POST['delete_btn_set_category']))
{
    $del_id=$_POST['delete_id'];
    $tbl=$_POST['tbl_category'];
     delete_data($tbl,'cat_id',$del_id,$con);
}

if(isset($_POST['delete_btn_set_color']))
{
    $del_id=$_POST['delete_id'];
    $col=$_POST['color_id'];
    $tbl=$_POST['tbl_color'];
     delete_data($tbl,$col,$del_id,$con);
}

if(isset($_POST['delete_btn_set_size']))
{
    $del_id=$_POST['delete_id'];
    $col=$_POST['size_id'];
    $tbl=$_POST['tbl_size'];
     delete_data($tbl,$col,$del_id,$con);
}

if(isset($_POST['delete_btn_set_subcategory']))
{
    $del_id=$_POST['delete_id'];
    $col=$_POST['scat_id'];
    $tbl=$_POST['tbl_subcategory'];
     delete_data($tbl,$col,$del_id,$con);
}

if(isset($_POST['delete_btn_set_product']))
{
    $del_id=$_POST['delete_id'];
    $col=$_POST['p_id'];
    $tbl=$_POST['tbl_product'];
    $img=$_POST['delete_img'];
    delete_data($tbl,$col,$del_id,$con);
}

if(isset($_POST['delete_btn_set_brand']))
{
    $del_id=$_POST['delete_id'];
    $col=$_POST['b_id'];
    $tbl=$_POST['tbl_brand'];
     delete_data($tbl,$col,$del_id,$con);
}


?>


<?php
	$con=mysqli_connect('localhost','root','','db_fashion') or die("data base is not connection") ; 
	$query="select * from tbl_subcategory where cat_id={$_GET['cat_id']}";
	$val=mysqli_query($con,$query) or die("<script>alert('Data is not fetch on sub categpries');</script>");
	if(mysqli_num_rows($val)>0){
		  echo "<option >Sub_Category</option>";
		while($sub_cat=mysqli_fetch_assoc($val)){
?>
			<option value="<?php echo $sub_cat['scat_id'] ?>" type="radio" name="sub_cat"><?php echo $sub_cat['scat_name']?></option>
<?php			
		}
	}else{	
		echo "No Sub categories";
	}
?>
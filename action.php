<?php
include ('config/dbConn.php');
if (isset($_POST["category"])) {
	$category_query="SELECT * FROM categories";
	$run_query=mysqli_query($con,$category_query);
	echo "

       <div class='nav nav-pills nav-stacked'>
				<li class='active'><a href='#'><h4>Categories</h4></a></li>
	";
	if (mysqli_num_rows($run_query)>0) {
		while ($row=mysqli_fetch_array($run_query)) {
			$cid= $row["cart_id"];
			$cat_title=$row["cart_title"];
			 echo "
            <li><a  class='category' href='#' cid='$cid'>$cat_title</a></li>
			 ";  
		}
		echo "</div>";
	}
}


 if (isset($_POST["brand"])) {
	$brand_query="SELECT * FROM brand";
	$run_query=mysqli_query($con,$brand_query);
	echo "
	
       <div class='nav nav-pills nav-stacked'>
				<li class='active'><a href='#'><h4>Brand</h4></a></li>
	";
	if (mysqli_num_rows($run_query)>0) {
		while ($row=mysqli_fetch_array($run_query)) {
			$bid= $row["brand_id"];
			$brand_title=$row["brand_title"];
			 echo "
            <li><a href='#' class='selectBrand' bid='$bid'>$brand_title</a></li>
			 ";  
		}
		echo "</div>";
	}
}

if (isset(($_POST["getProduct"]))) {
 	$product_query="SELECT * FROM products ORDER BY RAND() LIMIT 0,9";
 	$run_query= mysqli_query($con, $product_query);
 	 if (mysqli_num_rows($run_query)>0) {
 	 	while ($row=mysqli_fetch_array($run_query)) {
 	 		$pro_id =$row['product_id'];
 	 		$pro_cat =$row['product_cat'];
 	 		$pro_brand=$row['product_brand'];
 	 		$pro_title =$row['product_title'];
 	 		$product_price =$row['product_price'];
 	 		$pro_image=$row['product_image'];
 	 		 echo "
          <div class='col-md-4'>
						<div class='panel panel-info'>
							<div class='panel-heading'>$pro_title</div>
							<div class='panel-body'>
								<img class='img-responsive' src='products_images/$pro_image' style='width:150px; height:150px;'  class='img-rounded'id='Panel_Image'>
								
							</div>
							<div class='panel-heading'>$.$product_price.00
								<button pid='$pro_id' style= 'float: right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button></div>
						</div>
						
					</div>

 	 		 ";
 	 	}
 	 	
 	 }
 	}



 if (isset($_POST["get_selected_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"] )) {

 	if (isset($_POST["get_selected_Category"])) {
 		$id=$_POST["cat_id"];
 	    $sql= "SELECT * FROM products WHERE product_cat='$id'";

 	 	}elseif (isset($_POST["selectBrand"])) {
 	 		$id=$_POST["brand_id"];
         	$sql= "SELECT * FROM products WHERE product_brand='$id'";
 	 	} 
 	 	else{
 	 		$keyword= $_POST["keyword"];
 	 		$sql= "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
 	 	}
 		

 	$run_query= mysqli_query($con,$sql);
 	while ($row=mysqli_fetch_array($run_query)) {
 	 		$pro_id =$row['product_id'];
 	 		$pro_cat =$row['product_cat'];
 	 		$pro_brand=$row['product_brand'];
 	 		$pro_title =$row['product_title'];
 	 		$product_price =$row['product_price'];
 	 		$pro_image=$row['product_image'];
 	 		 echo "
          <div class='col-md-4'>
						<div class='panel panel-info'>
							<div class='panel-heading'>$pro_title</div>
							<div class='panel-body'>
								<img  class='img-responsive' src='products_images/$pro_image' style='width:150px; height:150px; padding_left:50px;' class='img-rounded'id='Panel_Image'>
								
							</div>
							<div class='panel-heading'>$.$product_price.00
								<button pid='$pro_id' style= 'float: right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button></div>
						</div>
						
					</div>

 	 		 ";
 	 	}

 }

 if (isset($_POST["userLogin"])) {
 	$email = mysqli_real_escape_string($con,$_POST["userEmail"]);
 	$password= md5($_POST["userPassword"]);
 	$sql="SELECT * FROM user_info WHERE email='$email' AND password='$password'";
	$run_query=mysqli_query($con,$sql);
 	$count=mysqli_num_rows($run_query);

 	if ($count==1) {
 		$row=mysqli_fetch_array($run_query);
 		$_SESSION["uid"]=$row["user_id"];
 		$_SESSION["name"]=$row["firstname"];
 		 echo "true";
 	}
 }
  
?>
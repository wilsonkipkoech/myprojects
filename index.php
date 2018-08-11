 <?php include('config/dbConn.php');?>
 <?php include('action.php'); ?>
<?php  include('layouts/header.php'); ?>
<?php include('layouts/nav.php'); ?>

<?php

session_start();

if (isset($_SESSION["uid"])) {

	header("location:profile.php");
}
?>



 


<div class="container-fluid" style="padding-top: 80px;">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-2">
 	 <div id="get_category">
</div>

			<!--<div class="nav nav-pills nav-stacked" ">
				<li class="active"><a href="#"><h4>Categories</h4></a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
			</div>-->
			 <div id="get_brand">
</div>
			<!--<div class="nav nav-pills nav-stacked">
				<li class="active"><a href="#" ><h4>Brand</h4></a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
				<li><a href="#">Categories</a></li>
			</div>-->
		</div>
		<div class="col-md-8">
			<div class="panel panel-info">

				<div class="panel-heading">Products</div>
				<div class="panel-body">
					<div id="get_product">
						
					</div>
					<!--<div class="col-md-4">
						<div class="panel panel-info">
							<div class="panel-heading">SHIRT</div>
							<div class="panel-body">
								<img class="img-responsive" src="products_images/better-way-meme.jpg" class="img-rounded" id="Panel_Image">
								
							</div>
							<div class="panel-heading">$.500.00
								<button style="float: right;" class="btn btn-danger btn-xs">AddToCart</button></div>
						</div>
						
					</div>-->
				</div>
				<div class="panel-footer">&Copy; Wilz 2018</div>

			</div>
			
			
		</div>
		<div class="col-md-1"></div>

	</div>
</div>


<?php include('layouts/footer.php'); ?>



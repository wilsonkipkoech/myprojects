 <?php include('config/dbConn.php');?>
 <?php include('action.php'); ?>

<?php  include('layouts/header.php'); ?>
<?php
 session_start();
 if (isset($_SESSION["udi"])) {
 	header("location:index.php");
 }

 ?>


<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">WILZBUZEKI</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>HOME</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Products</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Products</a></li>
			 <li style="width:200px;left: 10px;top: 10px;"><input type="text" class="form-control" id="search"></li>
			 <li style="top: 10px;left:20px;"><button class="btn btn-primary" id="search-btn">Search</button></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart <span class="badge">0</span></a>
			<div class="dropdown-menu" style="width:400px;">
				<div class="panel panel-success">
					<div class="panel-heading">
					  <div  class="row">
					  	<div class="col-md-3">SI .No</div>
					  	<div class="col-md-3">Product Image</div>
					  	<div class="col-md-3">Product Name</div>
					  	<div class="col-md-3">Price in $.</div>
					  </div>
					  </div>
					<div class="panel-body"></div>
					<div class="panel-footer"></div>
				</div>
				</div>
			</li>
			<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=" glyphicon glyphicon-modal-user">Sign Up</span></a>
				<ul class="dropdown-menu">
					<li ><a href="#" style="text-decoration: none; color: blue"><span class="glyphicon glyphicon-shopping-cart">Cart </span></a></li>
					<li class="divider"></li>
					<li><a href=""></a>Change Password</li>
					<li class="divider"></li>
					<li><a href=""></a>Logout</li>
				</ul>

			</li>>
			
		</ul>

	</div>
</div>

 


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



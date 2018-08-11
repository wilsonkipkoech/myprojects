<?php include('config/dbConn.php');?>
<?php  include('layouts/header.php'); ?>
<?php include('layouts/nav.php'); ?>




<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">WILZBUZEKI</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>HOME</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Products</a></li>
		</ul>
	</div>
</div>

<div class="container-fluid" style="padding-top: 70px;">
	<div class="row">
		<div class="col-md-2"></div>
	  <div  class="col-md-8" id="signup_msg">
		<!-- Alert mesage from sign up-->
		</div>
		<div class="col-md-2"></div>
					</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-primary">
				<div class="panel-heading">REGISTER CUSTOMERS</div>
				<div class="panel-body">
					<form method="post">
					<div class="row">
						<div class="col-md-6">
							<label for="f_name">FirstName</label>
							<input type="text" id="f_name" name="firstname" class="form-control">
						</div>
						<div class="col-md-6">
							<label for="f_name">LastName</label>
							<input type="text" id="l_name" name="lastname" class="form-control">
						</div>
					</div>
				</div>
				<div class="row" style="padding: 0px 20px 10px 20px;">
					<div class="col-md-12">
						<label for="Email">EMAIL</label>
						<input type="text" id="email" name="email" class="form-control">
					</div>
					<div class="col-md-12">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control">
					</div>
					<div class="col-md-12">
						<label for="re_password">Re-Enter Password</label>
						<input type="password" id="re_password" name="re_password" class="form-control">
					</div>
					<div class="col-md-12">
						<label for="mobile">Mobile</label>
						<input type="text" id="mobile" name="mobile" class="form-control">
					</div>
					<div class="col-md-12">
						<label for="address">Address</label>
						<input type="text" id="address" name="address" class="form-control">
					</div>
					<div class="row">
						<div class="col-md-12" style="padding-top: 20px;">
							<input style="float: right;" value="Sign-Up" type="button" id="signup_button" name="signup" class="btn btn-success btn-lg">
						</div>
					</div>

				</div>
				</form>
				<div class="panel-footer">kjhkjghfjh</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

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
			<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=" glyphicon glyphicon-modal-user"></span>SigIn</a>
			<ul class="dropdown-menu">
				<div style="width: 300px;">
					<div class="panel panel-primary">
						<div class="panel-heading">LogIn</div>
						<div class="panel-heading">
							<label for="Email">Email</label>
							<input type="email" class="form-control" id="email" required />
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" required/>
							<p><br></p>
							<a href="#" style="color: white; list-style-type: none">Forgotten Password</a><input type="submit" class="btn btn-success" style="float: right;" id="login" value="Login">
						</div>
						<div class="panel-footer" id="e__msg"></div>
					</div>
				</div>
				
			</ul>
			</li>
			<li><a href="#"><span class="glyphicon glyphicon-modal-user"></span>Sigup</a></li>
		</ul>

	</div>
</div>
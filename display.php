<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="userprofile.css">
		<title>Profile page</title>
	</head>
	<body>
		<!--STARTING THE NAV-->
		<nav class="navbar navbar-expand-lg navbar-light bg-primary ">
			<a class="navbar-brand" href="#"><i class="fa fa-user" style="font-size:24px"></i>USER PROFILE</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				</ul>
				<ul class="navbar-nav navbar-light">
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php $sql="select * from `crud`";
							$result=mysqli_query($con,$sql);
							$row=mysqli_fetch_assoc($result);
							$username=$row['username'];
							?><?php echo $username;?><i class="fa fa-user-circle-o"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="home.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<!--END OF TOP NAV-->
		<?php
										$sql="select * from `crud`";
										$result=mysqli_query($con,$sql);
										if($result)
										{
										while ($row=mysqli_fetch_assoc($result)) {
											$username=$row['username'];
											$id=$row['id'];
											$gender=$row['gender'];
											$age=$row['age'];
											$father=$row['father'];
											$dateofbirth=$row['dateofbirth'];
											$contactno=$row['contactno'];
											$email=$row['email'];
											$adress=$row['adress'];
											echo
			'<div class="container">
				<div class="container profile">
						<div class="row my-2">
								<div class="col-md-3"></div>
								<div class="col-md-6 card">
										<h5 align="center">'.$username.'</h5>
										<div class="card-body">
												<div class="row">
														<div class="col-md-12">
																<h6 class="mb-0" style="float:left;">Gender:</h6><span class="col-sm-6 text-right" style="float: right;"><small class="">'.$gender.'</small></span></h6>
														</div>
												</div>
										</div>
										
										<div class="card-body">
												<div class="row">
														<div class="col-md-12">
																<h6 class="mb-0" style="float:left;">Age:</h6><span class="col-sm-6 text-right" style="float: right;"><small class="">'.$age.'</small></span></h6>
														</div>
												</div>
										</div>
										<div class="card-body">
												<div class="row">
														<div class="col-md-12">
																<h6 class="mb-0" style="float:left;">Date of birth:</h6><span class="col-sm-6 text-right" style="float: right;"><small class="">'.$dateofbirth.'</small></span></h6>
														</div>
												</div>
										</div>
										<div class="card-body">
												<div class="row">
														<div class="col-md-12">
																<h6 class="mb-0" style="float:left;">Father/Guardian:</h6><span class="col-sm-6 text-right" style="float: right;"><small class="">'.$father.'</small></span></h6>
														</div>
												</div>
										</div>
										<div class="card-body">
												<div class="row">
														<div class="col-md-12">
																<h6 class="mb-0" style="float:left;">Contact no:</h6><span class="col-sm-6 text-right" style="float: right;"><small class="">'.$contactno.'</small></span></h6>
														</div>
												</div>
										</div>
										<div class="card-body">
												<div class="row">
														<div class="col-md-12">
																<h6 class="mb-0" style="float:left;">Email:</h6><span class="col-sm-6 text-right" style="float: right;"><small class="">'.$email.'</small></span></h6>
														</div>
												</div>
										</div>
										<div class="card-body">
												<div class="row">
														<div class="col-md-12">
																<h6 class="mb-0" style="float:left;">Adress:</h6><span class="col-sm-6 text-right" style="float: right;"><small class="">'.$adress.'</small></span></h6>
														</div>
												</div>
										</div>
										<a href="user.php? updateid='.$id.'"><button class="btn btn-primary" style="width:100%" >Edit</button></a>
								</div>
								<div class="col-md-3"></div>
						</div>
				</div>
		</div>
	</div>';
									}
									}
	?>
	
	<footer class="page-footer bg-primary">
		<div class="footer-copyright text-center py-3"><p style="color:white;">© 2021 Design and developed for Assignment:UserProfile</p>
	</div>
</footer>
</body>
</html>
<?php
include'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

                                               $username=$row['username'];
											   $gender=$row['gender'];
											   $age=$row['age'];
											   $father=$row['father'];
											   $dateofbirth=$row['dateofbirth'];
											   $contactno=$row['contactno'];
											   $email=$row['email'];
											   $adress=$row['adress'];
if(isset($_POST['submit']))
{
   $username=$_POST['username'];
   $age=$_POST['age'];
   $gender=$_POST['gender'];
   $dateofbirth=$_POST['dateofbirth'];
   $father=$_POST['father'];
   $contactno=$_POST['contactno'];
   $email=$_POST['email'];
   $adress=$_POST['adress'];
   $sql="update `crud` set gender='$gender',username='$username',age='$age',dateofbirth='$dateofbirth',father='$father',contactno='$contactno',email='$email',adress='$adress',id='$id' where id=$id";

   /*$sql="insert into `crud` (gender,username,age,dateofbirth,father,contactno,email,adress)
   values('$gender','$username','$age','$dateofbirth','$father','$contactno','$email','$adress')";*/
   $result=mysqli_query($con,$sql);

   if($result)
   {
       echo "updated scueessfully";
       header('location:display.php');
   }
   else
   {
   	die(mysqli_error($con));
   }
}
 
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
		<title>Edit profile</title>
	</head>
	<body>
		<!--STARTING THE NAV-->
		<nav class="navbar navbar-expand-lg navbar-light bg-primary ">
			<a class="navbar-brand" href="#"><i class="fa fa-user" style="font-size:24px"></i>USER PROFILE-<small>Edit profile</small></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				</ul>
				<ul class="navbar-nav navbar-light">
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo $username;?><i class="fa fa-user-circle-o"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="home.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<!--END OF TOP NAV-->
	<div class="container">
		<div class="row py-3 my-5">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8 card py-4">
				<form method="post">
					<div class="form-row py-2">
						<div class="form-group col-md-4">
							<label>User Name</label>
							<input type="text" class="form-control" name="username" autocomplete="off" value="<?php echo $username;?>">
						</div>
						<div class="form-group col-md-4">
							<label for="inputPassword4">Contact No</label>
							<input type="phone" class="form-control" name="contactno" autocomplete="off" value="<?php echo $contactno;?>">
						</div>
						<div class="form-group col-md-4">
							<label for="inputState">Gender</label>
							<select class="form-control" name="gender" autocomplete="off">
								<option selected value="<?php echo $gender;?>">chose</option>
								<option>male</option>
								<option>female</option>
							</select>
						</div>
					</div>
					<div class="form-row py-2">
						<div class="form-group col-md-4">
							<label>Age</label>
							<input type="number" class="form-control" name="age" autocomplete="off"value="<?php echo $age;?>">
						</div>
						<div class="form-group col-md-4">
							<div class="md-form md-outline input-with-post-icon datepicker">
								<label for="example">Date of birth</label>
								<input placeholder="Select date" type="date"  class="form-control" name="dateofbirth" autocomplete="off" value="<?php echo $dateofbirth;?>">
							</div>
						</div>
						<div class="form-group col-md-4">
							<label>Email</label>
							<input type="text" class="form-control" name="email" autocomplete="off"value="<?php echo $email;?>">
						</div>
					</div>
					<div class="form-row py-3">
						<div class="form-group col-md-4">
							<label>Father/Guardian Name</label>
							<input type="text" class="form-control" name="father" autocomplete="off" value="<?php echo $father;?>">
						</div>
						<div class="form-group col-md-8">
							<label >Adress</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="adress"autocomplete="off"><?php echo $adress;?></textarea>						</div>
					</div>
					<button class="btn btn-success" style="width:100%;" name="submit">Submit Changes</button>
				</form>
				
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
	</div>
	<footer class="page-footer bg-primary">
		<div class="footer-copyright text-center py-3"><p style="color:white;">© 2021 Design and developed for Assignment: UserProfile</p>
	</div>
</footer>
</body>
</html>
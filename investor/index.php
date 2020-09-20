<?php
	session_start();

	include('includes/config.php');
		if(isset($_POST['login']))
			{
			$status='1';
			$email=$_POST['email'];
			$password=md5($_POST['password']);
			$sql ="SELECT * FROM member WHERE email=:email and password=:password and status=(:status)";
			$query= $dbh -> prepare($sql);
			$query-> bindParam(':email', $email, PDO::PARAM_STR);
			$query-> bindParam(':password', $password, PDO::PARAM_STR);
			$query-> bindParam(':status', $status, PDO::PARAM_STR);
			$query-> execute();
			//fetchall is used to fetch multiple rows in the database
		//	$results=$query->fetchAll(PDO::FETCH_OBJ);
			$results=$query->fetch(PDO::FETCH_OBJ);
				if($query->rowCount() > 0)
				{
					
					$_SESSION['alogin']=$_POST['email'];
					
			//		($_SESSION['staffID'] = $results->id);
					($_SESSION['name'] = $results->fullname);
					($_SESSION['email'] = $results->email);
					($_SESSION['category'] = $results->category);
					($_SESSION['unit_value'] = $results->unit_value);
					($_SESSION['roi'] = $results->roi);
					($_SESSION['phone'] = $results->phone);
					($_SESSION['unit'] = $results->unit);
					($_SESSION['images'] = $results->images);
					($_SESSION['timestamp'] = time());

					echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
					} else{
					
			echo "<script>alert('Invalid Details Or Account Not Confirmed');</script>";

			}

			}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/style.css">

</head>

<body>
	<div class="login-page bk-img">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold mt-4x" style="color:#fff">Login</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form method="post">

									<label for="" class="text-uppercase text-sm">Your Email</label>
									<input type="text" placeholder="Username" name="email" class="form-control mb" required>

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb" required>
									<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>
								</form>
								<br>
								<p>Don't Have an Account? <a href="register.php" >Signup</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

</body>

</html>
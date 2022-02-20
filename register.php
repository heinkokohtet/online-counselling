<?php ob_start(); 

session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Counselling Platform</title>

<!------------CSS-------------->
<link rel="stylesheet" href="bootstrapmincss/bootstrapmin.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<!------------JS-------------->
<script src="bootstrapjs/jquerymin.js"></script>
<script src="bootstrapjs/poppermin.js"></script>
<script src="bootstrapjs/bootstrapmin.js"></script>

<script>
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>

<!------------CSS-------------->
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<!------------nav-------------->
<?php include("header.php")?>


<!-- Start content -->

<div class="container-fluid">
	<div class="row">
  		<div class="col col-sm-6" id="register">

  		<?php 
  		$password_error="";
  		$email_error="";

  		$username=$password=$confirm_password=$email=$address=$ph_number="";

  		if ($_SERVER['REQUEST_METHOD']=="POST"){

  			$username=$_POST["username"];
  			$password=md5($_POST["password"]);
        	$confirm_password=md5($_POST["confirm_password"]);
  			$email=$_POST["email"];
  			$address=$_POST["address"];
  			$ph_number=$_POST["ph_number"];

  		//Check password
  		if($password!=$confirm_password){
  			$password_error="Password and Confirm Password do not match!";
  		}

  		// Validate email
  		if(filter_var($email, FILTER_VALIDATE_EMAIL)===false) {
  			$email_error="Please provide valid email address!";
  		}

  		if(($password_error=="") AND ($email_error==""))
  		{
  			//insert into database
  			//echo "Insert Ready";

  		//Connect with db
  			include("database_connect.php");


  		// insert register user data to database
  			$insert_query=mysqli_query($con, "INSERT INTO user(username,password,email,address,ph_number,role_id) VALUES ('$username', '$password','$email', 
  				'$address', '$ph_number',2)");

  			if(!$insert_query)
  			{
  				echo mysqli_error($con);
  			} else{
  				echo "<div class='alert alert-success' role='alert'>Your Registeration is Successful! !</div>";
  			

  				header("Refresh:2;url=login.php");

  			}

  		}

  		}

  		?>
  			
  			<h2 class="mt-0">Client Register</h2>

				
			<form action="register.php" method="post">
  				<div class="form-group">
    				<label >User Name</label>
    				<input type="text" name="username"class="form-control" placeholder="Enter Your Full Name"
    				required="true" value="<?php echo $username;?>">
  				</div>

  				<div class="form-group">
    				<label >Password</label>
    				<input type="password" name="password" class="form-control" 
    				id="floatingPassword" placeholder="Password" required="true" value="<?php echo $password;?>"/>
    				<span class="error" style="color: red"> <?php echo $password_error;?></span>
  				</div>

  				<div class="form-group">
    				<label >Confirm Password</label>
    				<input type="password" name="confirm_password" class="form-control" 
    				id="floatingPassword" placeholder="Retype Your Password" required="true" value="<?php echo $confirm_password;?>">
  				</div>

  				<div class="form-group">
    				<label >Email</label>
    				<input type="text" name="email" class="form-control" 
    				placeholder="Enter Your Email" required="true" value="<?php echo $email;?>">
    				<p class="error" style="color: red"><?php echo $email_error;?></p>
  				</div>

  				<div class="form-group">
    				<label >Ph_number</label>
    				<input type="text" name="ph_number" class="form-control" 
    				placeholder="Enter Your Contact no." required="true" value="<?php echo 
    				$ph_number;?>">
  				</div>

  				<div class="form-group">
    				<label >Address</label>
    				<textarea class="form-control" placeholder="Enter Your Address" required="true" name="address"><?php echo $address;?></textarea>
  				</div>
          <button type="reset" class="btn btn-outline-danger">reset</button>
  				<button type="submit" class="btn btn-outline-info">Submit</button>
  				
			</form>
		
  		</div>
  		
	</div>

	<?php include("footer.php")?>	

</div>
</body>
</html>
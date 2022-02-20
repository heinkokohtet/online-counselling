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

  		$fav_color=$hobby=$career=$feeling=$date="";

  		if ($_SERVER['REQUEST_METHOD']=="POST"){

  			$fav_color=$_POST["fav_color"];
  			$hobby=$_POST["hobby"];
  			$career=$_POST["career"];
  			$feeling=$_POST["feeling"];
  			$date=$_POST["date"];

  		//Connect with db
  			include("database_connect.php");
				
				$insert_query=mysqli_query($con, "INSERT INTO userdetail(fav_color,hobby,career,feeling,date) VALUES ('$fav_color', '$hobby','$career', 
  				'$feeling', '$date')");

				if(!$insert_query)
				{
					echo mysqli_error($con);
				} else{
					echo "<div class='alert alert-success' role='alert'>Your Appointment is Successful! !</div>";
  				header("Refresh:2;url=index.php");
				}

  		

  		}

  		?>
  			
  			<h2 class="mt-0">Appointment</h2>

				
			<form action="userdetail.php" method="post">
  				<div class="form-group">
    				<label >fav_color</label>
    				<input type="text" name="fav_color"class="form-control" placeholder="Enter Your Color"
    				required="true" value="<?php echo $fav_color;?>">
  				</div>

  				<div class="form-group">
    				<label >Hobby</label>
    				<input type="text" name="hobby"class="form-control" placeholder="Enter Your Hobby"
    				required="true" value="<?php echo $hobby;?>">
  				</div>

  				<div class="form-group">
    				<label >Career</label>
    				<input type="text" name="career"class="form-control" placeholder="Enter Your Hobby"
    				required="true" value="<?php echo $career;?>">
  				</div>

  				<div class="form-group">
    				<label >Feeling</label>
    				<input type="text" name="feeling"class="form-control" placeholder="Enter Your feeling"
    				required="true" value="<?php echo $feeling;?>">
  				</div>

  				<div class="form-group">
    				<label >Date</label>
    				<input type="text" name="date"class="form-control" placeholder="Enter Your date"
    				required="true" value="<?php echo $date;?>">
  				</div>
          <button type="reset" class="btn btn-outline-danger">close</button>
  				<button type="submit" class="btn btn-outline-info">Submit</button>
  				
			</form>
		
  		</div>
  		
	</div>

	<?php include("footer.php")?>	

</div>
</body>
</html>
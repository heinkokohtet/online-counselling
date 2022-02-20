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
    var x = document.getElementById("floatingPassword");
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
  			<h2 class="mt-0">Login</h2>

        <!--login--->
      <?php 

      if ($_SERVER['REQUEST_METHOD']=="POST"){

        $full_name=$_POST["full_name"];
        $pw=md5($_POST["password"]);

      
        //Connect with db
        include("database_connect.php");

      //Check full name and PW
      $result=mysqli_query($con,"Select * From counselor where full_name='$full_name' and password='$pw'");
      $rowcount=mysqli_num_rows($result);
      echo "result is".$rowcount;

        if($rowcount>0){

            while($row=mysqli_fetch_array($result)) {

              $db_counselor_id=$row["counselor_id"];
              $db_full_name=$row["full_name"];
              $db_role_id=$row["role_id"];
            }

          $_SESSION["login_counselor_id"]=$db_counselor_id;
          $_SESSION["login_full_name"]=$db_full_name;
          $_SESSION["login_counselor_role"]=$db_role_id;
          header("location:index.php");

        }else{
          header("location:login.php");
         

        }

      }
      
      ?>
				
			<!--login Form-->

      <form action="counselor_login.php" method="post">
          <div class="form-group">
            <label >Full Name</label>
            <input type="text" name="full_name"class="form-control" placeholder="Name"
            required="true">
          </div>

          <div class="form-group">
            <label >Password</label>
            <input type="password" name="password" class="form-control" 
            placeholder="Password" required="true">
          </div>
          <button type="submit" class="btn btn-outline-info">Submit</button>
      </form>
		
  		</div>
  		
	</div>

 

	<?php include("footer.php")?>	

</div>
</body>
</html>
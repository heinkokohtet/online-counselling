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

<div class="card-group">


<?php


//connect with database
include("database_connect.php");

 
//reterive data from database
$result=mysqli_query($con,"Select * from counselor");

while ($row=mysqli_fetch_array($result)){
  $counselor_id=$row["counselor_id"];
  $full_name=$row['full_name'];
  $ph_number=$row['ph_number'];
  $address=$row['address'];
  $about=$row['about'];

  ?>


<div class="col col-sm-4">
  
  <div class="card">

    <div class="card-body">

      <h5 class="card-title"><?php echo$full_name; ?></h5>

      <p class="card-text"><small class="text-muted">
       <?php echo$ph_number; ?></small></p>

       <p class="card-text"><small class="text-muted">
       <?php echo$address; ?></small></p>

       <p class="card-text"><small class="text-muted">
       <?php echo$about; ?></small></p>

      <p class="card-text">
        <a href="userdetail.php?counselor_id=<?php echo $counselor_id;?>" 
        class="btn btn-outline-info">Appointment</a>
      </p>  
    </div>
  </div>

</div>

  <?php

}

?>
</div>

<!-- End content -->




<!-- FOOTER -->
<?php include("footer.php")?> 


</body>
</html>                            
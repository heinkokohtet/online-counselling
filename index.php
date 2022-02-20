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
<header>
    <h1>FInd a counsellor or therapist near you</h1>
    <img src="image/banner.jpg" class="img-fluid" alt="Responsive image">
</header>

<div class="container-fluid">
    <div class="row no-gutters bg-light position-relative">
  <div class="col-md-6 mb-md-0 p-md-4">
    <img src="image/leftc.jpg" class="w-100" alt="...">
  </div>
  <div class="col-md-6 position-static p-4 pl-md-0">
    <h2 class="mt-5">What is Counselling?</h2>
    <p class="mt-0">A talking therapy that involves a trained therapist listening to you and helping you find ways to deal with emotional issues leading to positive ways.” Whatever your problems may be, by exploring your situation in a safe and non-judgmental professional environment, we can search together for new possibilities. Therapy offers a space where you can be heard, a space where you can speak, feel and think freely, perhaps for the first time.</p>
    
   
  </div>
</div>
</div><br>
<!-- End content -->

<!-- FOOTER -->
<?php include("footer.php")?> 


</body>
</html>                            
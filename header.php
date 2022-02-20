<?php ob_start(); 

//session_start();


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


<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="image/logo.jpg" style="width:100px; height:60px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active px-3">
        <a class=" nav-link w3-bar-item w3-button w3-hover-none w3-border-white  w3-hover-border-orange w3-hover-text-orange" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active px-3">
        <a class=" nav-link w3-bar-item w3-button w3-hover-none w3-border-white  w3-hover-border-orange w3-hover-text-orange" href="#">About<span class="sr-only">(current)</span></a>
      </li>


      <?php

      if(!isset($_SESSION["login_username"]) && !isset($_SESSION["login_full_name"])){
        ?>

        <li class="nav-item active px-3">
          <a class=" nav-link w3-bar-item w3-button w3-hover-none w3-border-white w3-hover-border-orange w3-hover-text-orange" href="login.php" >Login<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active px-3">
          <a class=" nav-link w3-bar-item w3-button w3-hover-none w3-border-white w3-hover-border-orange w3-hover-text-orange" href="register.php" >Register <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active px-3">
          <a class=" nav-link w3-bar-item w3-button w3-hover-none w3-border-white w3-hover-border-orange w3-hover-text-orange" href="counselor_register.php" >For counselor<span class="sr-only">(current)</span></a>
        </li>


      <?php }else {
        if(isset($_SESSION["login_username"])){
          ?>

         <li class="nav-item active px-3">
            <a class=" nav-link w3-bar-item w3-button w3-hover-none w3-border-white w3-hover-border-orange w3-hover-text-orange" href="counselor_view.php" >Counselor list<span class="sr-only">(current)</span></a>
          </li>

          <a href="#" class="nav-link text-success"><b>
            <?php echo $_SESSION["login_username"] ?></b></a>

          <li class="nav-item active px-3">
            <a class=" nav-link w3-bar-item w3-button w3-hover-none w3-border-white w3-hover-border-orange w3-hover-text-orange" href="logout.php" >Logout<span class="sr-only">(current)</span></a>
          </li>

        <?php }else{ ?>

          <li class="nav-item active px-3">
            <a class=" nav-link w3-bar-item w3-button w3-hover-none w3-border-white w3-hover-border-orange w3-hover-text-orange" href="userview.php" >User list<span class="sr-only">(current)</span></a>
          </li>
          
          <!-- echo $_SESSION["login_full_name"]["full_name"]; -->
          <a href="#" class="nav-link text-success"><b><?php echo $_SESSION["login_full_name"] ?></b></a>

          <li class="nav-item active px-3">
            <a class=" nav-link w3-bar-item w3-button w3-hover-none w3-border-white w3-hover-border-orange w3-hover-text-orange" href="logout1.php" >Logout<span class="sr-only">(current)</span></a>
          </li>

        <?php } ?>



      <?php } ?>




    </ul>
  </div>
</nav>
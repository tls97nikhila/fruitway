<?php
  session_start();
  if(isset($_SESSION['emailid'])){
    header('location:jsontojquery.php');
  }
  if(isset($_GET['logout'])) {
    unset($_SESSION['emailid']);
    session_destroy();
    header('location:home.php');
  }
  if(isset($_SESSION['emailidb'])){
    header('location:buyerdashboard.php');
  }
  if(isset($_GET['logout'])) {
    unset($_SESSION['emailidb']);
    session_destroy();
    header('location:home.php');
  }
?>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>


<body>
  <div class="container-fluid"><center><h1 style="font-size: 40px;">Online Fruit Portal</h1></center>
  </div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Fruit Vendoring Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="#">buy</a></li>
      <li><a href="#">sell</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Register here
       <span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../regform_seller.html">Seller</a></li>
          <li><a href="../regform_buyer.html">Buyer</a></li>
          
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
       <span class="glyphicon glyphicon-log-in"></span> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../login_seller.html">Seller</a></li>
          <li><a href="../login_buyer.html">Buyer</a></li>
          
        </ul>
      </li>
    </ul>
  </div>
</nav>
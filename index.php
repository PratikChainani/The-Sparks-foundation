<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="images/logo.jpg" type="image/png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--stylesheet-->
  <link rel="stylesheet" href="./css/style.css">

  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Basic Banking System</title>
  <style>
    * {
      font-family: Poppins;
    }

    a:link {
      color: white;
    }

    a:hover {
      color: white;
      text-decoration: none;
    }

    h5 {
      color: teal
    }
  </style>
</head>

<body>
  <nav>
    <div class="container-fluid nav-wrapper #00838f yellow darken-3 z-depth-5" style="height: 80px; width:100%;">
      <a href="index.php" class="brand-logo"><img src="images/logo.jpg" style="height:80px;width:90px;" /></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="./php/transfermoney.php">View all Customers</a></li>
        <li><a href="./php/transactionhistory.php">Transactions</a></li>
      </ul>
    </div>
  </nav>

  <!--heading / title 
  -->
 
  <div class=" head mt-0" style="background-image: url(images/bank1.jpg);
    background-size: cover; height: 900px; width:100%">
    <h1 class="center" style="color:blue;text-align: center;"><b>Welcome to TSF Bank</b></h1>
  </div>


  <footer class="center footer" style=" background: green; color:white; margin-bottom: 0; bottom: 0; padding: 10px;">
    <h6 class="info"><b>GRIP Feb 2021 © The Sparks Foundation -> By Pratik Chainani </b></h6>
  </footer>

      <!--<b>Get Started</b></button>-- 
        <button onclick="location.href='./php/transfermoney.php'" type="button"  class="waves-light #ffab00 white accent-4 btn-large" style="color:black; margin-left:650px;">-->
  


  <!--<footer class="center footer" style=" background: brown; color:white; margin-bottom: 0; bottom: 0; padding: 10px;">
    <h6 class="info">The Sparks Foundation -> Pratik Chainani </h6>
  </footer> 

  <script src="./js/main.js"></script>
  <!-- Optional JavaScript© -- >

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
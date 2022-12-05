<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php';
?>
<!doctype html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fandom Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/fan.css">
  </head>
  
<body>
<div class="container">
  <div class="row m-2">
    <div class="col m-2">
      <h1>FANDOM WEBSITE</h1> 
    </div>
  </div>
  <div class="row">
    <div class="col">
  <a class="active" href="/index.php">HOME</a>
</div>
    <div class="col">
      <a href="/rules.php">RULES</a>
    </div>
     <div class="col">
      <a href="/join.php">JOIN</a>
    </div>
     <div class="col">
      <a href="/contactUs.php">CONTACT US</a>
    </div>
     <div class="col">
      <a href="/learnFandom.php">SCHEDULES</a>
    </div>
    <div class="col">
      <a href="/forum/forumHome.php">FORUM</a>
    </div>
    <div class="col">
      <a href="/media.php">MEDIA</a>
    </div>
  </div>
</div>
</body>

  <body class="content">
    <div class="container"> 
      <div class="row m-3">
    <div class="col">
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    exit;
}
?>
 
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="/signIn/resetPassword.php" class="btn btn-warning">Reset Your Password</a>
        <a href="/signIn/logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>     
</div>
    </div>
  </body>
      
<footer>
  <div class="container">
  <div class="row m-2">
    <div class="col">
      <p>THIS IS A FANDOM WEBSITE. ALL RIGHTS RESERVED. ALL ORIGINAL MATERIAL BELONGS TO THE ORIGINAL CREATORS. THIS WEBSITE FALLS UNDER FAIR USE, WHICH TAKES CONTENT AND IS ABLE TO MODIFY OR TRANSFORM IT FOR ENTERTAINMENT OR COMMENTARY PURPOSES. THANK YOU.</p>
    </div>
  </div>
</div>
</footer>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
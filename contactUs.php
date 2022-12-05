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
      <a href="/media.php">MEDIA</a>
    </div>
    <div class="col">
      <a href="/forum/forum.php">FORUM</a>
    </div>
  </div>
</div>
</body>

  <body class="content">
    <div class="container"> 
      <div class="row m-3">
    <div class="col">
<p>Hello! If you would like to contact us for any reason, please let us know here by filling out the form. Thank you!</p>
      <form method="post" action="/redirectContactUs.php">
  <label for="fname">First name:</label>
            <br>
  <input type="text" name="fName" value=""><br>
            <br>
  <label for="lname">Last name:</label>
            <br>
  <input type="text" name="lName" value=""><br>
            <br>
  <label for="email">Email Address:</label>
            <br>
  <input type="text" name="email" value=""><br>
            <br> 
          <select name="reason">
  <option value="question">Question</option>
  <option value="comment">Comment</option>
          </select>
            <br>
            <br>
<label for="message">Message:</label>
            <br>
<textarea name="message" rows="2" cols="40">
</textarea> 
        <br>
        <input type="submit" name="submit" value="submit"><br>
      </form>    
<p>Please do not spam our inbox. Our moderation team takes time to read every single message. Especially in the infancy of the website, please be extra sure to be careful on our moderation team, as the website mechanics are still a work in progress. Thank you :)</p>     
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
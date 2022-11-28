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
      <a href="/learnFandom.php">LEARN THE LORE</a>
    </div>
    <div class="col">
      <a href="/forum.php">FORUM</a>
    </div>
  </div>
</div>
</body>

  <body class="content">
    <div class="container"> 
      <div class="row m-3">
    <div class="col">
    <h1>Add a Topic</h1>
 <form method=post action="/forum/addTopic.php">
 <p><strong>Your Username:</strong><br>
   <input type="text" name="topicOwner" size=40 maxlength=150>
  <p><strong>Topic Title:</strong><br>
  <input type="text" name="topicTitle" size=40 maxlength=150>
  <p><strong>Post Text:</strong><br>
  <textarea name="postText" rows=8 cols=40 wrap=virtual></textarea>
  <p><input type="submit" name="submit" value="Add Topic"></p>
  </form>

   <?php
   //check for required fields from the form
   if ((!$_POST['topicOwner']) || (!$_POST['topicTitle'])
       || (!$_POST['postText'])) {
       exit;
   }
 
 //connect to server and select database
 $conn = mysql_connect("localhost", "joeuser", "somepass")
     or die(mysql_error());
 mysql_select_db("testDB",$conn) or die(mysql_error());

 //create and issue the first query
 $addTopic = "insert into forum_topics values ('', '$_POST[topicTitle]',
   now(), '$_POST[topicOwner]')";
 mysql_query($addTopic,$conn) or die(mysql_error());

 //get the id of the last query 
  $topicId = mysql_insert_id();

 //create and issue the second query
 $addPost = "insert into forum_posts values ('', '$topicId',
    '$_POST[postText]', now(), '$_POST[topicOwner]')";
  mysql_query($addPost,$conn) or die(mysql_error());
 
 ?>





























      
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
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
      <a href="/forum/forum.php">FORUM</a>
    </div>
  </div>
</div>
</body>

  <body class="content">
    <div class="container"> 
      <div class="row m-3">
    <div class="col">

 <?php
  //connect to server and select database
  $conn = mysql_connect("localhost", "joeuser", "somepass")
      or die(mysql_error());
  mysql_select_db("testDB",$conn) or die(mysql_error());

 //gather the topics
  $getTopics = "select topicId, topicTitle,
dateFormat(topicCreateTime, '%b %e %Y at %r') as fmtTopicCreateTime,
 topicOwner from forumTopics order by topicCreateTime desc";
 $getTopicsRes = mysql_query($getTopics,$conn) or die(mysql_error());
 if (mysql_num_rows($getTopicsRes) < 1) {
    //there are no topics, so say so
   $displayBlock = "<p><em>No topics exist.</em></p>";
 } else {
    //create the display string
   $displayBlock = "
    <table cellpadding=3 cellspacing=1 border=1>
   <tr>
   <th>TOPIC TITLE</th>
   <th># of POSTS</th>
   </tr>";
 
     while ($topicInfo = mysql_fetch_array($getTopicsRes)) {
       $topicId = $topicInfo['topicId'];
      $topicTitle = stripslashes($topicInfo['topicTitle']);
       $topicCreateTime = $topicInfo['fmtTopicCreateTime'];
      $topicOwner = stripslashes($topicInfo['topicOwner']);

        //get number of posts
       $getNumPosts = "select count(postId) from forumPosts
             where topicId = $topicId";
        $getNumPostsRes = mysql_query($getNumPosts,$conn)
            or die(mysql_error());
        $numPosts = mysql_result($getNumPostsRes,0,'count(postId)');

         //add to display
        $displayBlock .= "
        <tr>
        <td><a href=\"/forum/forum.php?topicId=$topicId\">
       <strong>$topicTitle</strong></a><br>
       Created on $topicCreateTime by $topicOwner</td>
        <td align=center>$numPosts</td>
       </tr>";
    }
   //close up the table
    $displayBlock .= "</table>";
 }
  ?>
 <html>
 <head>
 <title>Topics in My Forum</title>
  </head>
 <h1>Topics in My Forum</h1>
 <?php print $displayBlock; ?>
<p>Would you like to <a href="/forum/forum.php">add a topic</a>?</p>





































      
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
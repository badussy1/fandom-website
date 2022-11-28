<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php';

$msg = "<p>The <strong>$topicTitle</strong> topic has been created.</p>";
?>
<html>
  <?php
echo $msg; 
  if ($_SESSION["forum"] != NULL)  {
    echo "this post was written by: ".$_SESSION["forum"]['username']."<br>"; 
    echo "this post is about: ".$_SESSION["forum"]['topicTitle']."<br>"; 
    echo "here's what you said about it: ".$_SESSION["forum"]['content']."<br>";  
  } else {
    echo "no data exists";
  }

$newFormData = array(
        "date"=>date("m/d/Y"),
        "username"=> $_SESSION["join"]["fName"],
        "topicTitle"=> $_SESSION["join"]["email"],
        "content"=> $_SESSION["join"]["age"]
          );
$jsonFormData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/forumData.json');
$pastFormData = json_decode($jsonFormData, TRUE);
array_push($pastFormData, $newFormData);
$jsonData = json_encode($pastFormData);

file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data/forumData.json', $jsonData);
?> 
</html>
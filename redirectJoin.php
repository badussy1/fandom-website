<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php';
?>

<!doctype html>
<html lang="en">

<p>thank you so much! your password is saved, and your login is now valid :)</p>
<h6>welcome to the fandom! we appreciate your support.</h6>

<h5>just to make sure, here was the information you gave us.</h5>
  <?php
  if ($_SESSION["join"] != NULL)  {
    echo "your name is: ".$_SESSION["join"]['fName']."<br>"; 
    echo "your email address is: ".$_SESSION["join"]['email']."<br>"; 
    echo "your age is: ".$_SESSION["join"]['age']."<br>";  
  } else {
    echo "no data exists";
  }

$newFormData = array(
        "date"=>date("m/d/Y"),
        "fName"=> $_SESSION["join"]["fName"],
        "email"=> $_SESSION["join"]["email"],
        "age"=> $_SESSION["join"]["age"],
        "password"=> $_SESSION["join"]["password"]
          );
$jsonFormData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/joinData.json');
$pastFormData = json_decode($jsonFormData, TRUE);
array_push($pastFormData, $newFormData);
$jsonData = json_encode($pastFormData);

file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data/joinData.json', $jsonData);
?>
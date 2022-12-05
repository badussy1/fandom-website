<?php include $_SERVER['DOCUMENT_ROOT'].'/functions.php';

  $_SESSION["contactMeForm"]["fName"] = $_POST['fName'];
  $_SESSION["contactMeForm"]["lName"] = $_POST['lName'];
  $_SESSION["contactMeForm"]["email"] = $_POST['email'];
  $_SESSION["contactMeForm"]["reason"] = $_POST['reason'];
  $_SESSION["contactMeForm"]["message"] = $_POST['message'];
?>

<h5>just to make sure, here was the information you gave us.</h5>
  <?php
  if ($_SESSION["contactMeForm"] != NULL)  {
    echo "your name is: ".$_SESSION["contactMeForm"]['fName']." ".$_SESSION["contactMeForm"]["lName"]."<br>"; 
    echo "your email address is: ".$_SESSION["contactMeForm"]['email']."<br>"; 
    echo "reason for contact: ".$_SESSION["contactMeForm"]['reason']."<br>";  
    echo "your message: ".$_SESSION["contactMeForm"]['message']."<br>";  
  } else {
    echo "no data exists";
  }
$newFormData = array(
        "date"=>date("m/d/Y"),
         "fName"=> $_SESSION["contactMeForm"]["fName"] = $_POST['fName'],
        "lName" => $_SESSION["contactMeForm"]["lName"] = $_POST['lName'],
         "email" => $_SESSION["contactMeForm"]["email"] = $_POST['email'],
        "reason" =>  $_SESSION["contactMeForm"]["reason"] = $_POST['reason'],
        "message" => $_SESSION["contactMeForm"]["message"] = $_POST['message']
          );
$jsonFormData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data/contactData.json');
$pastFormData = json_decode($jsonFormData, TRUE);
array_push($pastFormData, $newFormData);
$jsonData = json_encode($pastFormData);

file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data/contactData.json', $jsonData);
?>
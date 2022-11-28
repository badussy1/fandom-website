<?php session_start();

$password="<input type='password' name='password' value='' minlength='8' required>";
$age="<input type='number' id='age' name='age' min='14' max='90'>"; 

$_SESSION["join"]["fName"] = $_POST['fName'];
$_SESSION["join"]["email"] = $_POST['email'];
$_SESSION["join"]["age"] = $_POST['age'];

$userAge = $_POST['age'];
$userName = $_POST['userName'];
$userPassword = $_POST['userPassword'];
$userEmail = $_POST['userEmail'];

$_SESSION["forum"]["username"] = $_POST['username'];
$_SESSION["forum"]["topicTitle"] = $_POST['topicTitle'];
$_SESSION["forum"]["content"] = $_POST['content'];
?>

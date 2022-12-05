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

$nav = "<a href='/index.php'>Home</a> | <a href='/rules.php'>Rules</a> | <a href='/signIn/register.php'>Register now!</a> | <a href='/.php'/contactUs.php>Contact Moderation</a> | <a href='/learnFandom.php'>About TWICE</a> | <a href='/media.php'>Media</a>"; 

$footer = "<p>This is a fandom website. ALL RIGHTS RESERVED. All pictures, original material, posts, and videos are all property of Twice and JYP Entertainment. This website falls under fair use, which takes content and is able to modify or transform it for entertainment or commentary purposes. Thank you!</p>"; 
?>


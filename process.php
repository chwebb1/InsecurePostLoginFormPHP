 <?php 
session_start();
$correctUserName = "user"; 
$correctPassword = ""; 

$username = $_POST['username']; // Stores our inputted data in these variable names
//safe() refers to a function in config.php
$password = $_POST['password'];// Stores our inputted data in these variable names
if (isset($_POST['correctPassword'])){
	$correctPassword=$_POST['correctPassword'];
}

if($correctUserName==$username && $correctPassword==$password && $password != "") {
   $_SESSION['loggedin_post'] = 1;
   echo("login successful");
   header('Location: http://thewebbster.info/post/admin.php'); //Successful login
   exit(); 
} 
else {
	echo("login unsuccessful");
   header('Location: http://thewebbster.info/post/loginForm.php?error=1'); //Login not successful redirect back to login form
   exit();
}
?>
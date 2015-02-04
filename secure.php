
<?php
session_start();

if(!isset($_SESSION['loggedin_post'])) {
   header('Location: http://thewebbster.info/post/loginForm.php?error=1');
   exit();
}
?> 
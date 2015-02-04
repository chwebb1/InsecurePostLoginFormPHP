<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Welcome to Company, Inc!</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
</form>
	<form method="post" name="login" action="process.php">
		<fieldset>
		
			<legend>Log in</legend>
			<h4><?php if (isset($_GET['error'])) {echo '<font color="red">Invalid login data supplied. Please try again.</font>&nbsp;</br></br>';}?></h4>
			<h6><?php if (isset($_GET['logout'])) {echo 'You have successfully logged out, thanks for using our super (in)secure system!</br></br>';}?></h6>
			<label for="login">Username</label>
			<input type="text" id="login" name="username"/>
			<div class="clear"></div>
			
			<label for="password">Password</label>
			<input type="password" id="password" name="password"/>
			<div class="clear"></div>
			
			<br />
			
			<input type="submit" style="margin: -20px 0 0 287px;" class="button" name="commit" value="Log in"/>	
		</fieldset>
	</form>
</body>
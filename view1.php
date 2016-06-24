<!DOCTYPE html>
<html>

<head>
	<title>Login Widget</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/bootstrap-theme.css" rel="stylesheet">
	<!--<link rel="stylesheet" type="text/css" href="../application/css/login.css">-->
<style type="text/css">
	body	
{
	background-color: cyan;
	margin:0px;
}

#upperBar
	{
		background-color: blue;
		height: 50px;
	}
	#mainDiv
	{
		background-color: green;
		height: 578px;
	}

	form
	{
		position: absolute;
		left: 591px;
		top:216px;
		list-style: none;
		background-color: lightgray;
		border-radius: 10px;
		height: 270px;
    	width: 241px;
	}

	form ul li
	{
		list-style: none;
	}

	

	#loginBtn
	{
		position: absolute;
    	top: 231px;
    	left: 15px;
	}

	a
	{
		position: absolute;
 	   left: 69px;
       top: 231px;
	}


	.alert alert-danger 
	{
		visibility: hidden;
	}
</style>
</head>
<body>


	<form action="http://localhost/Blog/index.php/Tuto/Login/index" method="POST">
		<ul>
			<li><h2>Login, Fool!</h2></li>			
			
			  
  			  
  			 	<li>Usuario <br>
  			 	<input type="text" name="username" placeholder="Write username">
  				<?php echo validation_errors() ?>
  				</li>
			
			
			
			  				  			
			
			<li>Password <br> <input type="password" name="password" placeholder="Write your password"></li>

			<li><input type="submit" id="loginBtn" value="Login"></li>
			<li><a href="Register_control">Register</a></li>
		</ul>
	</form>
	<div id="upperBar"></div>
<div id="mainDiv">
</div>
</body>
</html>

<!--"../HomeController/login"-->

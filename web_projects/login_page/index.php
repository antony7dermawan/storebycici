<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div class='logincover'>
		<img src="image/acien.png" class="logo">
		<a class='payroll_text'>Payroll</a>
		<div class="loginbox">
			<img src="image/login_picture.png" class="login_logo">
			<form method = 'POST' action='' autocomplete="off">
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username" value="" autocomplete="off" readonlyonfocus="this.removeAttribute('readonly');">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter Password" value="" autocomplete="off" readonlyonfocus="this.removeAttribute('readonly');">


				<input type="submit" name="submit" value="Login">
			</form>
		</div>
		<h2>Warning: this Computer program is protected by law :)</h2>
	</div>

</body>
</html>




<style type="text/css">
	
body
{
	background-color: lightblue;
	font-family: sans-serif;
}
.payroll_text
{
	margin-top: 50px;
	left:15%;
	position: absolute;
	top: 110px;
	font-size: 35px;
	font-style: italic;
	color: darkslategray;
}
.logo
{
	width: auto;
	height: 20px;
	margin-top: 10px;
	position: absolute;
	top: 20px;
}
.loginbox
{
	width: 320px;
	height: 520px;
	background: white;
	color:darkslategray;
	top:50%;
	left:75%;
	position: absolute;
	transform: translate(-50%,-50%);

	box-sizing: border-box;
	padding: 70px 30px;
	opacity: 0.9;
	filter: alpha(opacity=100);
}
.loginbox form
{
	margin-top: 120px;
}
.logincover
{
	width: 620px;
	height: 520px;
	background: aliceblue;
	top:50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
	opacity: 0.9;
	filter: alpha(opacity=100);
}
.logincover h2
{
	color:black;
	width:320px;
	height: 520px;

	margin-top: 240px;
	left:25%;
	position: absolute;
	transform: translate(-50%);

	box-sizing: border-box;
	padding: 70px 30px;
	opacity: 0.9;
	filter: alpha(opacity=100);

}


.login_logo
{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: 30px;
	left: calc(50% - 50px);
	background-color: navy;
}

h1
{
	margin-top: 90px;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;
}
h2
{
	margin-top: 90px;
	color: 'black';
	padding: 0 0 20px;
	text-align: justify;
	font-size: 11px;
}
h2[class='version']
{
	margin:0;
	color: black;
	padding: 0 0 10px;
	text-align: right;
	font-size: 11px;

}

.loginbox p
{
	margin:0;
	padding: 0;
	font-weight: bold;
}

.loginbox input
{
	width: 100%;
	margin-bottom: 20px;
}
.loginbox input[type="text"],input[type="password"]
{
	border:none;
	border-bottom: 1px solid lightblue;
	background: transparent;
	outline:none;
	height: 40px;
	color: black;
	font-size: 16px;
}
.loginbox input[type='submit']
{
	border:none;
	background: lightblue;
	outline:none;
	height: 40px;
	color: black;
	font-size: 18px;
	border-radius: 20px;
}
.loginbox input[type='submit']:hover
{
	background: navy;
	color: white;
}



</style>

</h1>
</body>
</html>
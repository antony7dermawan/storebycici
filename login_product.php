<?php

for($i=0;$i<20;$i++)
{
	$selected_header[$i]='';
}
$selected_header[4]=" class='active'";
$login_title = 'Online Apps Login';
include('web_setting/db_connection.php');
session_start();





if(isset($_POST['login_button']))
{ 
	$textbox_id_user= $_POST['username'];
	$textbox_id_password= $_POST['password'];
	if($textbox_id_user!=null and $textbox_id_password!=null)
	{
		$DB_TABLE_NAME = 't_user_login';
		$select_db = "SELECT * FROM {$DB_TABLE_NAME} where ID_USER='{$textbox_id_user}' and ID_PASSWORD='{$textbox_id_password}'";
		$select_ex = $conn->query($select_db);
		if($select_ex->num_rows> 0)
		{
			while($select_db = $select_ex->fetch_assoc())
			{
				$t_user_login_access= ($select_db["ACCESS"]);
				$t_user_login_status= ($select_db["STATUS"]);
			}
			$_SESSION['t_user_login_status'] = $t_user_login_status;
			$_SESSION["ACCESS"] = $t_user_login_access;
			$_SESSION["t_user_login_username"] = $textbox_id_user;

			$DB_TABLE_NAME = 't_m_online_apps_access';
			$select_db = "SELECT * FROM {$DB_TABLE_NAME} where ACCESS='{$t_user_login_access}'";
			$select_ex = $conn->query($select_db);
			if($select_ex->num_rows> 0)
			{
				while($select_db = $select_ex->fetch_assoc())
				{
					$t_m_online_apps_access_apps_url= ($select_db["APPS_URL"]);
				}
				header("Location: online_apps/{$t_m_online_apps_access_apps_url}/index.php");				
			}
		}
		if($select_ex->num_rows== 0)
		{
			$login_title = 'Wrong Password';
		}

	}	
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Acien - Login</title>
	<link href="index.css" rel = "stylesheet" type="text/css">
</head>
<body>
	
	<div class="loginbox">
		<img src="image/login_picture.png" class="login_logo">
			<h1><?php echo $login_title?></h1>
			<form method = "POST" action = "" autocomplete="off">
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username" value = "" autocomplete="off" readonly 
    onfocus="this.removeAttribute('readonly');">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter Password" value="" autocomplete="off" readonly 
    onfocus="this.removeAttribute('readonly');">
				
				<input type="submit" name="login_button" value="login">
			</form>
	</div>
	
	<?php include("header.php");?>
</body>
</html>





<style>
body
{
	background: url(image/body_background.jpg);
	background-size: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
  	background-position: center; 
}


.loginbox{
	width:250px;
	height: 420px;
	background: rgb(60, 60, 60);
	color: white;
	top:50%;
	left:50%;
	position: absolute;
	transform: translate(-50%,-50%);
	
	box-sizing:border-box;
	padding :70px 30px;
	opacity: 0.9;
  	filter: alpha(opacity=100);
}

.login_logo
{
	width:100px;
	height: 100px;
	border-radius: 50%;
	position:absolute;
	top:30px;
	left:calc(50% - 50px);
	background-color: navy;

}
h1{
	margin-top: 70px;
	padding: 0 0 20px;
	text-align: center;
	font-size: 18px;
}
h2{
	margin: 0;
	color: 'black';
	padding: 0 0 10px;
	text-align: justify;
	font-size: 11px;
}

h2[class="version"]
{
	margin: 0;
	color: 'black';
	padding: 0 0 10px;
	text-align: right;
	font-size: 11px;
}
.loginbox p{
	margin: 0;
	padding: 0;
	font-weight: bold;

}
.loginbox input {
	width: 100%;
	margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"]{
	border:none;
	border-bottom: 1px solid lightblue;
	background: transparent;
	outline: none;
	height:30px;
	color: WhiteSmoke;
	font-size: 14px;

}
.loginbox input[type="submit"]
{
	border:none;
	outline: none;
	height:40px;
	background: WhiteSmoke;
	color:black;
	font-size:18px;
	border-radius:20px;

}

.loginbox input[type="submit"]:hover
{
	cursor:pointer;
	background: gray;
	color: white;

}


</style>
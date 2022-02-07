<?php

for($i=0;$i<20;$i++)
{
	$selected_header[$i]='';
}
$selected_header[0]=" class='active'";

include('youtube_db.php');
include('web_setting/db_connection.php');
session_start();

#$_SESSION['products_choosed']='line_visualization';

if(isset($_POST['more_videos']))
{
	header("Location: https://www.youtube.com/channel/UCGp3ImjD_THVDkXZfjFqhug/videos?view_as=subscriber");
}






foreach(array_keys($project_title) as $total_project_title){}


$date_time_i=date("Y-m-d").' '.date("H:i:s");
$pc_name_i = php_uname('n');
$mac_address_i = exec('getmac');


$DB_TABLE_NAME='heroku_964441ad0bdf19a.t_t_visit_website';
$insert_db = "insert into {$DB_TABLE_NAME} values ('{$date_time_i}','{$pc_name_i}','{$mac_address_i}')";
$insert_ex = $conn->query($insert_db); 














?>

<!DOCTYPE html>
<html>
<head>
	<title>Acien</title>
	<link rel = "icon" href ="image/acien_title.jpg" type = "image/x-icon"> 
	<link href="index.css" rel = "stylesheet" type="text/css">
</head>
<body>

	
	<div class='about_us'>
		<img src="image/omron.jpg" name="left_photo">
		<a name='about_us_title'>Welcome to the Acien Family!</a>
		<a name='about_us_body'>
		Acien was started in a factory by a group of people that have passion in robotics and automation system. From Robots, Electronic Projects, to Website, this is your fisrt step to start your future!
		</a>
		<input type="submit" name="get_started_with_the_hobby" value="Get Started with the Hobby">
		<input type="submit" name="meet_acien" value="Meet Acien">
	</div>

	<div class='newest_build'>
		<a name='about_us_title'>NEWEST BUILD</a>
		<a name='about_us_sub_title'>Adventure started here.</a>
		<table>
			<tr>
				<th>
					<iframe name='left_video' src="<?php echo $favorite_youtube[0]?>" frameborder="0" allowfullscreen></iframe>
					<a href="<?php echo $favorite_youtube[0]?>" name='title'><?php echo $favorite_youtube_title[0]?></a><br>
					<a name='sub_title'><?php echo $favorite_youtube_date[0]?></a><br>
					<a name='body'><?php echo $favorite_youtube_comments[0]?></a>
				</th>
				<th>
					<iframe name='right_video' src="<?php echo $favorite_youtube[1]?>" frameborder="0" allowfullscreen></iframe>
					<a href="<?php echo $favorite_youtube[1]?>" name='title'><?php echo $favorite_youtube_title[1]?></a><br>
					<a name='sub_title'><?php echo $favorite_youtube_date[1]?></a><br>
					<a name='body'><?php echo $favorite_youtube_comments[1]?></a>
				</th>
			</tr>
		</table>
		<a name='under_line'></a>
		<form method = "POST" action = "">
			<input type="submit" value="More Videos" name="more_videos">
		</form>
	</div>

	<div class='best_build_plan'>
		<a name='best_build_plan_title'>FREE PROJECTS</a>
		<a name='best_build_plan_sub_title'>Create your project here.</a>
		<div name='plan_1'>
			<iframe name='right_video' src="<?php echo $project_youtube[($total_project_title)];?>" frameborder="0" allowfullscreen></iframe>
			<a href="projects/<?php echo $project_link[($total_project_title)];?>" name='plan_title'><?php echo $project_title[($total_project_title)];?></a>
		</div>
		<div name='plan_2'>
			<iframe name='right_video' src="<?php echo $project_youtube[($total_project_title-1)];?>" frameborder="0" allowfullscreen></iframe>
			<a href="projects/<?php echo $project_link[($total_project_title-1)];?>" name='plan_title'><?php echo $project_title[($total_project_title-1)];?></a>
		</div>
		<div name='plan_3'>
			<iframe name='right_video' src="<?php echo $project_youtube[($total_project_title-2)];?>" frameborder="0" allowfullscreen></iframe>
			<a href="projects/<?php echo $project_link[($total_project_title-2)];?>" name='plan_title'><?php echo $project_title[($total_project_title-2)];?></a>
		</div>
		<div name='plan_4'>
			<iframe name='right_video' src="<?php echo $project_youtube[($total_project_title-3)];?>" frameborder="0" allowfullscreen></iframe>
			<a href="projects/<?php echo $project_link[($total_project_title-3)];?>" name='plan_title'><?php echo $project_title[($total_project_title-3)];?></a>
		</div>
	</div>
	<div class='end_page'>
		<?php include("end_page.php");?>
	</div>
	<?php include("header.php");?>
	



	

</body>
</html>

<style>
.title_head
{
	float: left;
	font-size: 25px;
	text-align: left;
	color:rgb(120, 120, 120);
	font-family: "ms sans-serif", sans-serif; 
}
.title_body
{
	float: left;
	font-size: 25px;	
	text-align: left;
	color:black;
	font-family: "ms sans-serif", sans-serif; 
}
.text_body
{
	font-weight: normal;
	font-size: 20px;	
	text-align: left;
	font-family: "ms sans-serif", sans-serif; 
}











body
{
	background: url(image/body_background.jpg);
	background-size: 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
  	background-position: center; 
}

.about_us
{
	width: 850px;
	height: 240px;
	margin-top: 480px;
	opacity: 0.9;
	background-color: black;
	border: 1px solid black;
	border-radius: 10px;
	margin-left: 50%;
	transform: translate(-50%,0%);
	position: absolute;
}

.about_us img[name="left_photo"]
{
	width: 190px;
	height: auto;
	margin-left: 20px;
	margin-top: 20px;
}
.about_us a[name='about_us_title']
{
	margin-top: 30px;
	position: absolute;
	margin-left: 40px;
	font-size: 25px;
	font-weight: bold;
	color:white;
}
.about_us a[name='about_us_body']
{
	width: 65%;
	margin-top: 60px;
	position: absolute;
	margin-left: 40px;
	font-size: 18px;
	color:white;
}
.about_us input[name='get_started_with_the_hobby']
{
	margin-top: 160px;
	position: absolute;
	margin-left: 40px;
	font-size: 18px;
}
.about_us input[name='meet_acien']
{
	margin-top: 160px;
	position: relative;
	margin-left: 300px;
	font-size: 18px;
}
.about_us input
{
	border:none;
	outline: none;
	height:40px;
	background: firebrick;
	color:white;
	font-size:18px;
	border-radius:2px;
}
.about_us input:hover
{
	background: maroon;
}







.newest_build
{
	width: 100%;
	height: 900px;
	position: absolute;
	margin-top: 720px;
	background-color: white;
}
.newest_build a[name='about_us_title']
{
	margin-top: 60px;
	position: absolute;
	margin-left: 50%;
	font-size: 40px;
	font-weight: bold;
	color:black;
	transform: translate(-50%,-50%);
}
.newest_build a[name='about_us_sub_title']
{
	margin-top: 100px;
	position: absolute;
	margin-left: 50%;
	font-size: 25px;
	font-style: italic;
	color:gray;
	transform: translate(-50%,-50%);
}
.newest_build table
{
	margin-top: 120px;
	position: absolute;
	margin-left: 50%;
	font-size: 40px;
	color:black;
	transform: translate(-50%,0%);
}
.newest_build table tr th
{
	padding: 20px 100px 20px 100px;
}
.newest_build iframe
{
	width: 420px;
	height: 345px;
}
.newest_build iframe:hover
{
	width: 430px;
	height: 350px;
}
.newest_build table a
{
	font-size: 23px;
}
.newest_build table a[name='title']
{
	font-weight: bold;
	color: maroon;
}
.newest_build table a[name='sub_title']
{
	color: gray;
	font-size: 15px;
	margin-top: -10px;
}
.newest_build table a[name='body']
{
	text-align: justify;
	color: darkslategray;
	text-justify: inter-word;
	font-weight: normal;
}
.newest_build input[name="more_videos"]
{
	margin-top: 850px;
	margin-left: 50%;
	transform: translate(-50%,-50%);
}
.newest_build a[name="under_line"]
{
	width: 90%;
	height: 5px;
	background-color: black;
	margin-top: 850px;
	position: absolute;
	margin-left: 50%;
	transform: translate(-50%,0%);
	border-radius: 5px;
	opacity: 0.5;
}


.newest_build input
{
	border:none;
	outline: none;
	height:40px;
	background: firebrick;
	color:white;
	font-size:18px;
	border-radius:2px;
}
.newest_build input:hover
{
	background: maroon;
}





.best_build_plan
{
	width: 100%;
	height: 500px;
	position: absolute;
	margin-top: 1620px;
	background-color: lightgrey;
}
.best_build_plan a[name='best_build_plan_title']
{
	margin-top: 60px;
	position: absolute;
	margin-left: 50%;
	font-size: 40px;
	font-weight: bold;
	color:black;
	transform: translate(-50%,-50%);
}
.best_build_plan a[name='best_build_plan_sub_title']
{
	margin-top: 100px;
	position: absolute;
	margin-left: 50%;
	font-size: 25px;
	font-style: italic;
	color:gray;
	transform: translate(-50%,-50%);
}
.best_build_plan div
{
	margin-top: 150px;
	position: absolute;
	width: 260px;
	height: 240px;
	background-color: white;
	transform: translate(-50%,0%);
	border-radius: 5px;
}
.best_build_plan div[name='plan_1']
{
	margin-left: 15%;
}
.best_build_plan div[name='plan_2']
{
	margin-left: 38%;
}
.best_build_plan div[name='plan_3']
{
	margin-left: 62%;
}
.best_build_plan div[name='plan_4']
{
	margin-left: 85%;
}
.best_build_plan div iframe
{
	margin-top: 20px;
	margin-left: 50%;
	transform: translate(-50%,0%);
	width: 220px;
	height: auto;
	position: relative;
}
.best_build_plan div iframe:hover
{
	width: 225px;
	height: auto;
}
.best_build_plan div a[name='plan_title']
{
	margin-left: 10%;
	position: relative;
	font-size: 20px;
	color: maroon;
	font-weight: bold;
	transform: translate(-50%,-50%);
}
.best_build_plan div a[name='plan_title']:hover
{
	color: black;
}



.end_page
{
	width: 100%;
	height: 150px;
	position: absolute;
	margin-top: 2120px;
	background-color: black;
}
</style>



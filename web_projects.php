<?php

for($i=0;$i<20;$i++)
{
	$selected_header[$i]='';
}
$selected_header[2]=" class='active'";

include('web_project_db.php');
session_start();




$total_colom=4;
foreach(array_keys($web_project_title) as $total_web_project_title){}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Acien - WEB Projects</title>
	<link href="index.css" rel = "stylesheet" type="text/css">
</head>
<body>
	<div class='web_projects'>
		<a name='web_projects_title'>WEB Projects</a>
		<a name='web_projects_sub_title'>Get your free code here.</a>
		<form method = "POST" action = "">
		    <table>
		    <?php
		    
		    $a=$total_web_project_title/$total_colom;
		    for($i=0;$i<=$total_web_project_title;$i++)
		    {
		      $rmd=(float)($i/$total_colom);
		      $rmd=($rmd-(int)$rmd)*$total_colom;
		      $zero_qty= "";
		      
		      if($i==0 or ($i>=$total_colom and $rmd==0))
		      {
		        echo "<tr>";
		      }
		        echo "<th>";
		        echo "<img src='web_projects/".$web_project_link[$i]."/".$web_project_image[$i]."'><br><br>";
		        echo "<a href='web_projects/".$web_project_link[$i]."'>".$web_project_title[$i]."</a>";





		        echo "</th>";
		      if($rmd==($total_colom-1))
		      {
		        echo "<tr>";
		      }
		    }


		    ?>


		    </table>
		</form>
	</div>

	<?php include("header.php");?>
</body>
</html>



<style type="text/css">

.web_projects
{
	width: 100%;
	height: 100%;
	margin-top: 80px;
	opacity: 0.9;
	background-color: black;
	border: 1px solid black;
	border-radius: 10px;
	margin-left: 50%;
	transform: translate(-50%,0%);
	position: absolute;
}


.web_projects a[name='web_projects_title']
{
	margin-top: 20px;
	margin-left: 50%;
	transform: translate(-50%,0%);
	position: absolute;
	color: white;
	font-size: 25px;
	font-weight: bold;
	font-family: arial;
}
.web_projects a[name='web_projects_sub_title']
{
	margin-top: 60px;
	margin-left: 50%;
	transform: translate(-50%,0%);
	position: absolute;
	color: white;
	font-size: 15px;
	font-weight: normal;
	font-family: arial;
	font-style: italic;
	opacity: 0.7;
}
.web_projects form
{
	margin-top: 120px;
	margin-left: 50%;
	transform: translate(-50%,0%);
	position: absolute;
	color: black;
	font-size: 15px;
	font-weight: normal;
	font-family: arial;
	font-style: italic;

}
.web_projects table 
{
	width: 1000px;

}
.web_projects table tr th
{
	height: 180px;
	background: white;
	border-radius: 10px;
}


.web_projects table tr th img
{
	height: auto;
	width: 200px;
	border-radius: 10px;
	margin-top: -20px;
}


.web_projects table a
{
	color: maroon;
}


</style>
<?php

for($i=0;$i<20;$i++)
{
	$selected_header[$i]='';
}
$selected_header[1]=" class='active'";


session_start();

if($_SESSION['products_choosed']==null)
{
	$_SESSION['products_choosed']='line_visualization';
}


if(isset($_POST['line_visualization']))
{
	$_SESSION['products_choosed']='line_visualization';
}

if(isset($_POST['payroll']))
{
	$_SESSION['products_choosed']='payroll';
}
if(isset($_POST['accounting']))
{
	$_SESSION['products_choosed']='accounting';
}
if(isset($_POST['machine_business']))
{
	$_SESSION['products_choosed']='machine_business';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link href="products.css" rel = "stylesheet" type="text/css">
</head>
<body>

	<div class="product_type">
		<table name="header_type">
			<tr>
				<th>
					<form method = "POST" action = "">
						<input type="submit" name="line_visualization" value ="">
							<br>
						<a>Line Visualization</a>
					</form>
				</th>
				<th>
					<form method = "POST" action = "">
						<input type="submit" name="payroll" value ="">
							<br>
						<a>Payroll System</a>
					</form>
				</th>
				<th>
					<form method = "POST" action = "">
						<input type="submit" name="accounting" value ="">
							<br>
						<a>Accounting System</a>
					</form>
				</th>
				
			</tr>
		</table>
	</div>
	
	<?php include("products/{$_SESSION['products_choosed']}/index.php");?>

	
	<?php include("header.php");?>
</body>
</html>

<style>


.product_type
{
	margin-top: 100px;
	left:50%;
	position: absolute;
	transform: translate(-50%,-50%);
	background-color: WhiteSmoke;



	width:100%;
	height: 120px;
}

input
{
	width:140px;
	height: 70px;
	border-radius: 5px;
}
input[name="accounting"]
{
	background: url(products/accounting/accounting.jpg);
	background-size: 100%;
}
input[name="payroll"]
{
	background: url(products/payroll/payroll.jpg);
	background-size: 100%;
}
input[name="line_visualization"]
{
	background: url(products_image/line_visualization.png);
	background-size: 100%;
}
table[name="header_type"]
{
	margin-top: 10px;
	left:50%;
	position: absolute;
	transform: translate(-50%,0);
}


table[name="header_type"] tr th
{
	padding: 0px 20px 20px 20px;
}
</style>
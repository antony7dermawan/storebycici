
	<div class='head_button'>
      <ul class="main-nav">
      	<img src="image/logo_acien.png" class="logo_acien">
        <li <?php echo $selected_header[0];?>> <a href="index.php"> Home</a></li>
        <li <?php echo $selected_header[1];?>> <a href="products.php"> Products</a></li>
        <li <?php echo $selected_header[2];?>> <a href="web_projects.php"> WEB Projects</a></li>
     
        <li <?php echo $selected_header[4];?>> <a href="login_product.php"> Login</a></li>
      </ul>
     </div>



<style>
  	
.head_button
{
	height: 40px;
	margin-left: 0px;
	margin-top: 0px;
	background-color:black;
	width:100%;
	position: fixed;
}


.main-nav
{
	top:5%;
	left:40%;
	position: absolute;
	transform: translate(-50%,-50%);
}
.logo_acien
{
	margin-top: 10px;
	float: left;
	width: 100px;
	height: 20px;
	margin-right: 60px;
}
.main-nav li
{
	margin-top: 8px;
	margin-left: 50px;
	display: inline-block;
	

}
.main-nav li a
{
	color:white;
	text-decoration: none;
	padding: 5px 5px;
	font-family: "ms sans-serif", sans-serif; 
	font-size: 12px;
}
.main-nav li.active a
{
	color:rgb(180, 180, 180);
}
.main-nav li a:hover
{
	color:rgb(180, 180, 180);
}
  </style>
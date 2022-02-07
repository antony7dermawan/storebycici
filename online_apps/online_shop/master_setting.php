<?php
include('web_setting/db_connection.php');
session_start();

for($i=0;$i<20;$i++)
{
  $selected_header[$i]='';
}
$selected_header[1]=" class='active'";

if(isset($_POST['return_logo']))
{
	header("Location: master.php");
}


$db_table[0]='t_m_os_master_online_shop_name';


$table_name[0]='T Online Shop Name';



foreach( array_keys($db_table) as $total_table){}

if($_SESSION['db_name']=='')
{
  $_SESSION['db_name']=$db_table[0];
}

if(isset($_POST['select_table']))
{
  $_SESSION['db_name'] = $_POST['select_table'];
}
$db_name=$_SESSION['db_name'];

for($i=0;$i<=$total_table;$i++)
{
  if($db_name==$db_table[$i])
  {
    $selected_table[$i]= 'selected';
  }
  if($db_name!=$db_table[$i])
  {
    $selected_table[$i]= '';
  }
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Master Setting</title>
 	<link href="style.css" rel = "stylesheet" type="text/css">
 </head>
 <body>

  <div class="main">
  	<form method = "POST" class="return_logo" action = "">
          <input type="submit" name="return_logo" value ="">
    </form>
    <div class='table_position'>
      <form method = "POST" action = "">
          <select name="select_table" onchange='this.form.submit();'>
                
                <?php
                for($i=0;$i<=$total_table;$i++)
                {
                  echo "<option value='".$db_table[$i]."' ".$selected_table[$i].">".$table_name[$i]."</option>";
                }
                ?>
          </select>
      </form>
      <?php 
      include($db_name.".php");
      ?>
    </div>
  </div>
    
  <?php
  include('header.php');
  ?>
</body>
</html>

<style type="text/css">
.table_position
{
  margin-left: 100px;
  margin-top: -30px;
}
.return_logo input
{
  width: 50px;
  height: 51px;
    background-size: 100%;
    background: url(image/return_logo.png);
  background-size: 100%;
  border-radius: 20px;
  float: left;
  margin-top: -50px;
}

.main
{
  margin-top:360px;
  width:100%;
  height: 600px;
  background: white;
  
  
  left:50%;
  position: relative;
  transform: translate(-50%,-50%);
  
  box-sizing:border-box;
  padding :70px 30px;
  opacity: 0.9;
  filter: alpha(opacity=100);
}
</style>


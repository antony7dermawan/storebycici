<?php
include('web_setting/db_connection.php');
session_start();

for($i=0;$i<20;$i++)
{
  $selected_header[$i]='';
}
$selected_header[1]=" class='active'";
$_SESSION['salary_table_page']='0';

#...............................................go to page by menu
if(isset($_POST['customer_list']))
{
  header("Location: customer_list.php");
}
if(isset($_POST['master_setting']))
{
  header("Location: master_setting.php");
}

if(isset($_POST['create_login_user']))
{
  header("Location: create_login_user.php");
}



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Master</title>
 	<link href="style.css" rel = "stylesheet" type="text/css">
 </head>
 <body>

  <div class="main">
    <table style="width:100%">
    <tr class='row'>
      <th>
        <form method = "POST" action = "">
          <input type="submit" name="customer_list" value ="">
          <br><br>
          <a>Customer List</a>
        </form>
      </th>
      <th>
        <form method = "POST" action = "">
          <input type="submit" name="master_setting" value ="">
          <br><br>
          <a>Master Setting</a>
        </form>

      </th>
      
      <th>
        <form method = "POST" action = "">
          <input type="submit" name="create_login_user" value ="">
          <br><br>
          <a>Create Login User</a>
        </form>

      </th>
      
    </tr>
    <tr class='row'>
      <th>
      </th>

      <th>
      </th>

      <th>
      </th>

    </tr>


  </table>
  </div>
    
  <?php
  include('header.php');
  ?>
</body>
</html>

<style type="text/css">

.main form
{
  font-family: arial;
  font-size: 14px;
}
.main input
{
  
  width:100px;
  height: 100px;
  border-radius: 20px;
  

}

.main input[name="create_login_user"]
{
  background: url(image/login_user_create.png);
  background-size: 100%;
}
.main input[name="customer_list"]
{
  background: url(image/employee_list.png);
  background-size: 100%;
}
.main input[name="master_setting"]
{
  background: url(image/master_setting.png);
  background-size: 100%;
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

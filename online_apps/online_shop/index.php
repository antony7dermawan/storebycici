<?php
include('web_setting/db_connection.php');
session_start();

for($i=0;$i<20;$i++)
{
  $selected_header[$i]='';
}
$selected_header[0]=" class='active'";


$_SESSION['db_name']='t_m_os_master_online_shop_name';




#...............................................go to page by menu
if(isset($_POST['stock_information']))
{
  header("Location: stock_information.php");
}
if(isset($_POST['generate_payroll']))
{
  header("Location: generate_payroll_2.php");
}
if(isset($_POST['input_loan']))
{
  header("Location: input_loan.php");
}
if(isset($_POST['input_absent']))
{
  header("Location: input_absent.php");
}
if(isset($_POST['other_allowance']))
{
  header("Location: other_allowance.php");
}
if(isset($_POST['pay_loan']))
{
  header("Location: pay_loan.php");
}
if(isset($_POST['time']))
{
  header("Location: time.php");
}





 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Acien - Stock Inventory</title>
 	<link href="style.css" rel = "stylesheet" type="text/css">
 </head>
 <body>

  <div class="main">
    <table style="width:100%">
    <tr class='row'>
      <th>
        <form method = "POST" action = "">
          <input type="submit" name="stock_information" value ="">
          <br><br>
          <a>Stock Information</a>
        </form>
      </th>
      <th>
        <form method = "POST" action = "">
          <input type="submit" name="generate_payroll" value ="">
          <br><br>
          <a>Input Stock Out</a>
        </form>
      </th>
      <th>
        <form method = "POST" action = "">
          <input type="submit" name="input_loan" value ="">
          <br><br>
          <a>Input Stock In</a>
        </form>
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
.main input[name="time"]
{
  background: url(image/time_logo.jpg);
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
}
.main input[name="pay_loan"]
{
  background: url(image/pay_loan.jpg);
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
}
.main input[name="other_allowance"]
{
  background: url(image/other_allowance.png);
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
}
.main input[name="input_absent"]
{
  background: url(image/absent.png);
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
}
.main input[name="input_loan"]
{
  background: url(image/loan.png);
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
}
.main input[name="stock_information"]
{
  background: url(image/excel.jpg);
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
}
.main input[name="input_excel"]
{
  background: url(image/excel.jpg);
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
}
.main input[name="generate_payroll"]
{
  background: url(image/payroll.png);
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
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

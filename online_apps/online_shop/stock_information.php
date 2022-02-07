<?php
include('web_setting/db_connection.php');
session_start();

for($i=0;$i<20;$i++)
{
  $selected_header[$i]='';
}
$selected_header[0]=" class='active'";



if(isset($_POST['return_logo']))
{
  header("Location: index.php");
}







$link_name = "Location: stock_information.php";



$colom_name[0]='No';
$colom_name[1]='ID Barang';
$colom_name[2]='Nama Barang';
$colom_name[3]='Qty Barang';
$colom_name[4]='Update Oleh';
$colom_name[5]='ID Online Shop';
$colom_name[6]='ID Group Online Shop';


$insert_text="'','','','{$_SESSION["t_user_login_username"]}','',''";

$colom_name_sql[0]='ID';
$colom_name_sql[1]='STOCK_ID';
$colom_name_sql[2]='STOCK_NAME';
$colom_name_sql[3]='STOCK_QTY';
$colom_name_sql[4]='UPDATED_BY';
$colom_name_sql[5]='ONLINE_SHOP_ID';
$colom_name_sql[6]='ONLINE_SHOP_GROUP_ID';

$total_data_in_one_page = 5;
$DB_TABLE_NAME = 'heroku_964441ad0bdf19a.t_m_os_master_stock';


//........................batas setting end





$select_db = "SELECT {$colom_name_sql[0]} FROM {$DB_TABLE_NAME}";
$select_ex = $conn->query($select_db);
if($select_ex->num_rows> 0)
{
  while($select_db = $select_ex->fetch_assoc())
  {
    $grade_id[] = ($select_db[$colom_name_sql[0]]);
  }
}
if($select_ex->num_rows== 0)
{
    $grade_id[0] = '';
}



foreach( array_keys($grade_id) as $total_data){}








foreach( array_keys($colom_name_sql) as $total_colom){}


for($i=0;$i<=$total_colom;$i++)
{
  $select_db_s = "SELECT * FROM {$DB_TABLE_NAME} ";
  $select_ex_s = $conn->query($select_db_s);
  if($select_ex_s->num_rows> 0)
  {
    
      while($select_db_s = $select_ex_s->fetch_assoc())
      {
        $colom_data[$i][]= ($select_db_s[$colom_name_sql[$i]]);
      }
    
    foreach( array_keys($colom_data[0]) as $total_row){}
  }


  if($select_ex_s->num_rows== 0)
  {
    for($i=0;$i<=$total_colom;$i++)
    {
      $colom_data[$i][0]='';
    }
    $total_row=0;
  }
}





if(isset($_POST['update']))
{
  for ($i = 0; $i <= $total_row; $i++)
  {
    for($x=1;$x<=$total_colom;$x++)
    {
      $data_to_update = $_POST["textbox_".$x."_".$i];
      $update_db = "update {$DB_TABLE_NAME} set {$colom_name_sql[$x]}='{$data_to_update}' where({$colom_name_sql[0]}='{$colom_data[0][$i]}')";
      $update_ex = $conn->query($update_db);

    }
  }
  header($link_name);
}


if(isset($_POST['new_row']))
{
  $value_id = $colom_data[0][$total_row]+1;
  $insert_db = "insert into {$DB_TABLE_NAME} values ({$value_id},{$insert_text})";
  $insert_ex = $conn->query($insert_db); 

  header($link_name);    
}
for ($i = 0; $i <= $total_row; $i++)
{
  if(isset($_POST['delete_'.$i]))
  {
      $delete_db = "delete FROM {$DB_TABLE_NAME} where({$colom_name_sql[0]}='{$colom_data[0][$i]}')";
      $delete_ex = $conn->query($delete_db);

      if($total_data==$page)
      {
        $page=$page-$total_data_in_one_page;
        $_SESSION[$session_name]=$page;
      }
      header($link_name);
    
  }
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <title>Acien - Coni Feeding Machine</title>
  <link href="style.css" rel = "stylesheet" type="text/css">
 </head>
 <body>

  <div class="main">
    <form method = "POST" class="return_logo" action = "">
          <input type="submit" name="return_logo" value ="">
    </form>
    <form method = "POST" class="salary_table_cover" onSubmit="if(!confirm('Confirm Changes?')){return false;}" action = "">
    
          <table class="salary_table">
          <thead>
          <tr class='table_head'>
            <?php
            for($i=0;$i<=$total_colom;$i++)
            {
              echo '<th>'.$colom_name[$i].'</th>';
            }
            ?>

          </tr>
          </thead>
          <tbody>
          <?php 
            for ($i = 0; $i <= $total_row; $i++)
            {
              echo "<tr>";
              for($x=0;$x<=($total_colom+1);$x++)
                {
                  echo '<th';
                    
                  

                  echo '>';
                      IF($x==0)
                      {
                        echo $colom_data[$x][$i]=$i+1;
                      }
                      IF($x<$total_colom+1 and $x>0 and $x!= 4)
                      {
                        echo "<input type='text' name='textbox_".$x."_".$i."' value ='".$colom_data[$x][$i]."'>";
                      }
                      if($x== 4)
                      {
                        echo $colom_data[$x][$i];
                      }
                      IF($x==$total_colom+1)
                      {
                        echo "<input type='submit' name='delete_".$i."' value ='-'>";
                      }
                 
                  
                  echo '</th>';
                }     
              echo "</tr>";
            }
            ?>
          </tbody>
    
        </table>
      
        
        <input type="submit" name="new_row" value ="New Row">
        <input type="submit" name="update" value ="Update">

      </form>
  </div>
  
  <?php
  include('header.php');
  ?>
</body>
</html>

<style type="text/css">

.main h1
{
  font-family: arial;
  font-size: 18px;
  margin-top:0px;
  left:50%;
  position: absolute;
  transform: translate(-50%,-50%);
}

.main table[name='table_body']
{
  font-weight: normal;
  font-family: arial;
  font-size: 14px;
  margin-top:100px;
  left:50%;
  position: absolute;
  transform: translate(-50%,-50%);
  text-align: left;
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



.salary_table_cover input[name="new_row"],input[name="update"]
{
  border:none;
  outline: none;
  height:20px;
  background: lightblue;
  color:black;
  font-size:14px;
  border-radius:2px;

}

.salary_table_cover input[name="new_row"]:hover
{
  cursor:pointer;
  background: navy;
  color: white;
}
.salary_table_cover input[name="update"]:hover
{
  cursor:pointer;
  background: navy;
  color: white;

}

.salary_table_cover tr th
{
  padding: 2px 2px 2px 2px;
}

.salary_table thead
{
  background-color: navy;
  color:white;
}
.salary_table_cover
{
  margin-top: 0px;
  margin-left: 80px;
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
a
{
  font-size: 20px;
  font-family: arial;
}

</style>

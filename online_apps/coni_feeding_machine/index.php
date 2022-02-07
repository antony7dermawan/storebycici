<?php
include('web_setting/db_connection.php');
session_start();

for($i=0;$i<20;$i++)
{
  $selected_header[$i]='';
}
$selected_header[0]=" class='active'";











$link_name = "Location: index.php";



$colom_name[0]='No';
$colom_name[1]='Date';
$colom_name[2]='Time';
$colom_name[3]='ID Name';
$colom_name[4]='Name';
$colom_name[5]='Status';


$insert_text="'2020-03-28','00:00','','{$_SESSION["ACCESS"]}','',''";

$colom_name_sql[0]='ID';
$colom_name_sql[1]='DATE';
$colom_name_sql[2]='TIME';
$colom_name_sql[3]='ID_NAME';
$colom_name_sql[4]='NAME';
$colom_name_sql[5]='STATUS';


$total_data_in_one_page = 5;
$DB_TABLE_NAME = 'heroku_964441ad0bdf19a.t_p_cfm_t_t_feeding';


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



if(isset($_POST["lamp_on"]))
{
  $update_db = "update {$DB_TABLE_NAME} set STATUS='1' where(ID_NAME=3 AND ACCESS=2)";
  $update_ex = $conn->query($update_db);
  header($link_name);
}
if(isset($_POST["lamp_off"]))
{
  $update_db = "update {$DB_TABLE_NAME} set STATUS='0' where(ID_NAME=3 AND ACCESS=2)";
  $update_ex = $conn->query($update_db);
  header($link_name);
}



if(isset($_POST["mode_on"]))
{
  $update_db = "update {$DB_TABLE_NAME} set STATUS='1' where(ID_NAME=4 AND ACCESS=2)";
  $update_ex = $conn->query($update_db);
  header($link_name);
}
if(isset($_POST["mode_off"]))
{
  $update_db = "update {$DB_TABLE_NAME} set STATUS='0' where(ID_NAME=4 AND ACCESS=2)";
  $update_ex = $conn->query($update_db);
  header($link_name);
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
    <h1>Coni Feeding Machine</h1>
    <table name='table_head'>
      <tr>
        <th>
          Mode
        </th>
        <th>
          <form method = "POST" action = "">
          <?php
          $mode_status='undetecable';
          if($colom_data[5][3]==0)
          {
            $mode_status='Manual Mode';
            $mode_name = 'mode_on';
          }
          if($colom_data[5][3]==1)
          {
            $mode_status='Auto Mode';
            $mode_name = 'mode_off';
          }
          ?>
          <input type="submit" name="<?php echo $mode_name;?>" value ="<?php echo $mode_status?>">
          </form>
        </th>
      </tr>
      <tr>
        <th>
          Feed
        </th>
        <th>
          <form method = "POST" action = "">
          <input type="submit" name="feed" value ="Feed Coni">
          </form>
        </th>
      </tr>
      <tr>
        <th>
          Change Water
        </th>
        <th>
          <form method = "POST" action = "">
          <input type="submit" name="change_water" value ="Change Coni Water">
          </form>
        </th>
      </tr>
      <tr>
        <th>
          Lamp
        </th>
        <th>
          <form method = "POST" action = "">
          <?php
          $lamp_status='undetecable';
          if($colom_data[5][2]==0)
          {
            $lamp_status='Lamp Off';
            $lamp_name = 'lamp_on';
          }
          if($colom_data[5][2]==1)
          {
            $lamp_status='Lamp On';
            $lamp_name = 'lamp_off';
          }
          ?>
          <input type="submit" name="<?php echo $lamp_name;?>" value ="<?php echo $lamp_status?>">
          </form>
        </th>
      </tr>
    </table>
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
                      IF($x<$total_colom+1 and $x>0)
                      {
                        echo "<input type='text' name='textbox_".$x."_".$i."' value ='".$colom_data[$x][$i]."'>";
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
.main table[name='table_head']
{
  font-weight: normal;
  font-family: arial;
  font-size: 14px;
  margin-top:70px;
  left:50%;
  position: absolute;
  transform: translate(-50%,-50%);
  text-align: left;
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

.salary_table thead
{
  background-color: navy;
  color:white;
}
.salary_table_cover
{
  margin-top: 200px;
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

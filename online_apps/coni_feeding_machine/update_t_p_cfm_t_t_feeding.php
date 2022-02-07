<?php
include('web_setting/db_connection.php');
$date=date("Y-m-d");
$time=date("h:i:sa");

$db_status=$_GET['STATUS'];
$db_id_name=$_GET['ID_NAME'];
$db_access=$_GET['ACCESS'];

$date_time=$date.' '.$time;
$DB_TABLE_NAME='heroku_964441ad0bdf19a.t_p_cfm_t_t_feeding';
$insert_db = "update {$DB_TABLE_NAME} set STATUS={$db_status} where(ID_NAME={$db_id_name} and ACCESS={$db_access})";
$insert_ex = $conn->query($insert_db);
?>

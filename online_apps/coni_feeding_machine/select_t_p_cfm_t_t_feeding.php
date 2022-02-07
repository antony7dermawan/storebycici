<?php

include('web_setting/db_connection.php');

$db_id_name=$_GET['ID_NAME'];
$db_access=$_GET['ACCESS'];






$DB_TABLE_NAME='heroku_964441ad0bdf19a.t_p_cfm_t_t_feeding';
$select_db = "select * from {$DB_TABLE_NAME} where(ID_NAME={$db_id_name} and ACCESS={$db_access})";
$select_ex = $conn->query($select_db);
if($select_ex->num_rows> 0)
{
	while($select_db = $select_ex->fetch_assoc())
	{
		$t_user_login_status= ($select_db["STATUS"]);
	}
}
	echo ($t_user_login_status);
?>
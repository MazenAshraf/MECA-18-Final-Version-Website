<?php
//create connection
$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$db_pass = '';
//create mysqli object
$conn = mysql_connect('mecaegyptorg.ipagemysql.com' , 'mecaegyptorg' , 'meca17');

if(!$conn)
{
	die('Failed'.mysql_error());
}
//echo "connected";
$check=mysql_select_db(quiz1);

<?php
session_start();
include 'database.php';
$duration="";
//		                $query = "SELECT * FROM `choices` WHERE `question_number`='$no_q' AND `is_correct`=1";
$query="SELECT * FROM `timer`";
$res=mysql_query($query);
while ($row=mysql_fetch_array($res)) {
	$duration=$row["duration"];
}
if(!isset($_SESSION["duration"] ))
{
$_SESSION["duration"] = $duration;//duration
}
if(!isset($_SESSION["start_time"]))
{
$_SESSION["start_time"] = date("Y-m-d H:i:s");
}
$end_time=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes', strtotime($_SESSION["start_time"])));
if(!isset($_SESSION["end_time"]))
{
$_SESSION["end_time"] = $end_time;
}
?>
<div id="response"></div>
<script type="text/javascript">
	setInterval(function()
	{
		var xmlhttp= new XMLHttpRequest();
		xmlhttp.open("GET","response.php",false);
		xmlhttp.send(null);
		document.getElementById("response").innerHTML=xmlhttp.responseText;
	},1000);
</script>
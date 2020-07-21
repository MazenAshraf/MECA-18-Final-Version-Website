<?php 
include ("CodeServer.php");
session_start();
$email=$_SESSION['Email'];
$major=$_SESSION['Major'];
$year=$_SESSION['year'];
//$d['major']
$sql="SELECT * FROM `platform` Where `major`='$major' AND `year`='$year' OR `major`='all'";
$result=mysql_query($sql);
//$sql="SELECT * FROM `committees` Where `avail` > 0 ";
//$result=mysql_query($sql);

if(isset($_POST['submit']))
{
	$company1=$_POST['company1'];
	$company2=$_POST['company2'];
	//$query1="UPDATE  `users` SET  `section1` =  '$score[1]' , `section2` =  '$score[2]' , `section3` =  '$score[3]' , `section4` =  '$score[4]', `section5`='$y' WHERE  `mobile` =$mobile1 LIMIT 1" ;
	$sql2=" UPDATE `platform-students` SET `company-name1` ='$company1' , `company-name2`='$company2' WHERE `email`='$email'";
	$res=mysql_query($sql2);
	if($res)
	{
         header('location:Homesign.php');
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta charset="utf-8">
	<!--to link html with css-->
    <link rel="stylesheet" href="css/style2.css">
    <!--for bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> 
    

    <!--for jquery-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   
    <!--end of link of jquery-->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--for glyphicons-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <meta name="keywords" content="meca">

    <!--for mobile responsive-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--name of title of website-->
    <title>
    	SIGN UP
    </title>
    <!--logo of the website-->
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
     <!--animated css-->
     <link rel="stylesheet" href="css/animate.css">
     <script src="js/wow.js"></script>
     <script>
          new WOW().init();
     </script>
     <!--ballon buttons-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/balloon-css/0.5.0/balloon.min.css">
     <!--for icons-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <meta name="keyword" content="meca,knowledge,asu">
  <title>MECA</title>
</head>
<body background="images/image1.jpeg" style="background-color: rgba(0,0,0,0.5); background-position: center; background-attachment: fixed; background-size: cover;">
	<div id="background" style="background-color: rgba(0,0,0,0.5);">
        <div id="layer" style="background-color: rgba(0,0,0,0.5);">
        	<br>
        	<br>
        	<br>
        	<br>
        	<br>
        	<br>
        	<br>
        	<br>
    <div class="f">
     <form action="z.php" method="post">
 <div class="form-group" style="margin-top:18%;">
      <label for="inputState" style="color:orange; font-size: 30px;" >First Prefrence:</label><br>
      <select id="inputState" class="custom-select" style="width: 100%; height: 23%;" required name="company1">
        <option value="">Select your 1st prefrence</option>
        	<?php while($row=mysql_fetch_array($result)):?>
            <option value='<?php echo $row['company']; ?>'><?php echo $row['company']; ?> </option>
<?php endwhile; ?>
<?php             mysql_data_seek($result, 0);?>
          
<!--
               	<?php while($row=mysql_fetch_array($result)):?>
            <option value='<?php echo $row['Committee']; ?>'><?php echo $row['Committee']; ?> </option>
<?php endwhile; ?>
<?php             mysql_data_seek($result, 0);?>
-->
          
      </select>
    </div>
         <div class="form-group">
      <label for="inputState" style="color:orange; font-size: 30px;" >Second Prefrence:</label><br>
      <select id="inputState" class="custom-select" style="width: 100%; height: 23%;" required name="company2">
        <option value="">Select your 2nd prefrence </option>
				<?php while($row=mysql_fetch_array($result)):?>
           		<option value='<?php echo $row['company']; ?>'><?php echo $row['company']; ?> </option>
<?php endwhile; ?>

      </select>
    </div>
    <button value="Submit" type="submit" name="submit" class="btn btn-warning btn-lg" style="margin-bottom: 20px; background-color: white;border: 2px solid orange;
    border-radius: 7px; color: orange; font-weight: 600; width: 30%; margin-left: 35%;">Submit</button>
</form>
</div>
</div>
</div>
</body>
</html>

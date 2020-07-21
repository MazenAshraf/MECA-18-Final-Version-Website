<?php include('CodeServer.php');
session_start();
$email=$_SESSION['Email'];
$mobile=$_SESSION['Mobile'];
$name=$_SESSION['Name'];
if(isset($_POST['submit']))
{
$major8=$_POST['Major'];
$year8=$_POST['Year'];
$_SESSION['Major']=$major8;
$_SESSION['year']=$year8;
$insert="INSERT INTO `platform-students` (`name`, `email`, `mobile`,`major`,`year`) VALUES ('$name','$email','$mobile','$major8','$year8');";
$result=mysql_query($insert);
if($result)
{
header("Location:z.php");
//header("Location: http://$host$uri/$extra");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  
  <meta name="keyword" content="meca,knowledge,asu">
  <title>MECA</title>
    <link rel="stylesheet" href="css/Home.css">
    <link rel="stylesheet" href="css/normalize.css">
     <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="shortcut icon" href="images/logo.ico">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <script src="js/navshrink.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Audiowide|Concert+One|Exo+2|Hanuman|Jura|Montserrat|Oxygen|Titillium+Web" rel="stylesheet">
<!-- bootstrap links -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!--                    mai links             -->
<!-- nav shrink -->

<script src="js/navshrink.js"></script>
<link rel="shortcut icon" type="icon" href="images/logo.ico">
<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

    <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<button onclick="document.getElementById('id02').style.display='block'" class="w3-btn w3-dark-grey" style="font-size:17px;padding:12px 35px;background-color: #424242 !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px;margin-left: 20%; margin-top: 5%; margin-bottom: 20px;">APPLY NOW!</button>
    <div id="id02" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4" style="border: 2px solid white;
    border-radius: 20px; overflow: hidden;>
    <header class="w3-container w3-red w3-display-container" style="background-color: grey !important; margin-bottom: 20px; height: 52px !important;"> 
      <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-display-topright w3-hover-red w3-hover-opacity">&times;</span>
      <h2 style="text-align: center; margin-top: 1%; font-family: 'Montserrat', sans-serif;">Test Date</h2>
    </header>
    <div class="w3-container">
     <form action="ww.php" method="post">
 <div class="form-group">
      <label for="inputState" style="color:orange; font-size: 18px;" >Major:</label><br>
      <select id="inputState" class="custom-select" style="width: 100%; height: 15%;" required name="Major">
        <option value="">Select your Major</option>

            <option value='Preparatory'>Preparatory</option>
            <option value='Mechanical'>Mechanical</option>
             <option value='Electrical'>Electrical</option>
             <option value='Civil'>Civil</option>
             <option value='Architecture'>Architecture</option>
             <option value='Building'>Building</option>
             <option value='Mechatronics'>Mechatronics</option>
             <option value='Materials'>Materials</option>
             <option value='Manufacturing'>Manufacturing</option>
             <option value='Landscape'>Landscape</option>
             <option value='Energy'>Energy</option>
             <option value='Computer'>Computer</option>
             <option value='Electrical power'>Electrical power</option>
             <option value='Mechanical power'>Mechanical power</option>
             <option value='Production'>Production</option>
             <option value='Automotive'>Automotive</option>
            <option value='Communication'>Communication</option>
             


      </select>
    </div>
         <div class="form-group">
      <label for="inputState" style="color:orange; font-size: 18px;" >Year:</label><br>
      <select id="inputState" class="custom-select" style="width: 100%; height: 15%;" required name="Year">
        <option value="">Select your year</option>
        <option value='0'>0</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>

      </select>
    </div>
    <button  value="Submit" name="submit" class="btn btn-warning btn-lg" style="margin-bottom: 20px; background-color: white;border: 2px solid orange;
    border-radius: 7px; color: orange; font-weight: 600; width: 30%; margin-left: 35%;">Submit</button>
</form>
</div>
</div>
</div>

</body>
</html>

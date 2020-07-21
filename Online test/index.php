<?php include 'database.php'; ?>
<?php
//	$query = "SELECT * FROM `questions`";
//	$result = mysql_query($query);
//	$total = mysql_num_rows($result);
?>
<!doctype HTML>
<html lang="en">
<!--Start of head tag-->
<head> <!--every comment will be above their lines-->
	<meta charset="utf-8">
	<!--to link html with css-->
    <link rel="stylesheet" href="css/style3.css">
    <!--for bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--for glyphicons-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <meta name="keywords" content="meca">

    <!--for mobile responsive-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--name of title of website-->
    <title>
    	Instructions
    </title>
     <script type = "text/javascript" >

   function preventBack(){window.history.forward();}

    setTimeout("preventBack()", 0);

    window.onunload=function(){null};

</script>
    <!--logo of the website-->
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet'>
     <!--animated css-->
     
   </head>


   <body>

    <div id="background">
        <div id="layer">
          
      <br><br><br><br>
            <div class="row">
            <div class="col-md-2">
                    
         </div>
   <div class="col-md-8" id="layer1">
                   
   <img src="images/logo.png" style="width: 40%; margin-left: 25%; margin-bottom: 30px;" >

  <div class="form-group">
  <label  style="color:orange; font-size: 40px;">Test Instructions:</label>
  </div>

<div name="Instructions">
<p style="color: white; font-family: 'Oxygen'; font-size: 30px;"> <span style="color:orange; font-size: 40px;">•</span> It's prefered to use google chrome browser.</p>
<p style="color: white; font-family: 'Oxygen'; font-size: 30px;"> <span style="color:orange; font-size: 40px;">•</span> If you have any problem during the test, you can proceed the test and the problem will be taken into consideration.</p>
<p style="color: white; font-family: 'Oxygen'; font-size: 30px;"> <span style="color:orange; font-size: 40px;">•</span> Close all programs, including email.</p>
<p style="color: white; font-family: 'Oxygen'; font-size: 30px;" > <span style="color:orange; font-size: 40px;">•</span> Multiple attempts are not allowed. </p>
<p style="color: white; font-family: 'Oxygen'; font-size: 30px;" > <span style="color:orange; font-size: 40px;">•</span> This Test can only be taken once.</p>
<p style="color: white; font-family: 'Oxygen'; font-size: 30px;"> <span style="color:orange; font-size: 40px;">•</span> Don't close the window of the test for any reason.</p>

<p style="color: white; font-family: 'Oxygen'; font-size: 30px;"> <span style="color:orange; font-size: 40px;">•</span> Make sure you have a good internet connection.</p>
<p style="color: white; font-family: 'Oxygen'; font-size: 30px;"> <span style="color:orange; font-size: 40px;">•</span> It is recommended to restart your PC to free up memory.</p>
<div style="text-align: center; margin-top: 70px;">
   <a href="question.php?n=1" class="start"> <button onclick="document.getElementById('id02').style.display='block'" class="w3-btn" style="font-size:20px;padding:12px 35px;background-color: transparent !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px; color: orange;margin: auto;">Start Test</button> </a></div>

<!--<a href="question.php?n=1" class="start">Start Test</a>-->
  
</div>

<br> 
   
<br> <br><br> <br> 

</div>    
            </div>
            <!--end of row-->
  <br><br><br><br><br> <br> <br> <br> <br> <br> <br> <br> 
            </div>
            <!--end of layer-->
        </div>
        <!--end of background-->        
   </body>
   </html>

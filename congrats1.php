<?php include("onlinetest/database.php");
session_start();
$email=$_SESSION['Email'];
$mobile=$_SESSION['Mobile'];
$name=$_SESSION['Name'];
$date = $_POST['slot'];
//$date = new DateTime('2000-01-01');
//$result = $date->format('Y-m-d H:i:s');
if(!(($_SESSION['success'])==1))
{
    header('location:index.php');
}
if(isset($_POST['interview']))
{
      $DateQuery = " SELECT * FROM `timeInterview` where `date`= '$date' ";
      $slots =mysql_query($DateQuery);
      $row1= mysql_fetch_array($slots);

      $id= $row1['avail'];
      $newid=$id-1;
      
//    $query = "INSERT INTO `users` (`name`, `email`, `mobile`,`section1`,`section2`,`section3`,`section4`,`section5`,`Test`) VALUES ('$name1','$email1','$mobile1','$zero','$zero','$zero','$zero','$zero','$test');";
        $check="SELECT * FROM `Interviews` WHERE `mobile`= '$mobile';";
        $check2=mysql_query($check);
        //$check3=mysql_fetch_array($check2);
           $amr= mysql_num_rows($check2);
        if($amr>0)
        {
            echo '<script type="text/javascript">
            alert("You have already selected an interview date!, Press OK to return to Home page");
            window.location.href = "Homesign.php";
            </script>';
        header('location:Homesign.php');
        }
    
    else{
        //n7ot el data fel database elly a5taro
        $Updatequery = "UPDATE `timeInterview` SET `avail`=$newid WHERE `date`= '$date' ";
        $result2 = mysql_query($Updatequery);
        
        //nd5l el esm w  kda
      $update="INSERT INTO `Interviews` (`name`,`mobile`,`date_id`) VALUES ('$name','$mobile','$date');";
      $update2=mysql_query($update);
          
        if ($update2 == TRUE) {
        echo '<script type="text/javascript">
            alert("Good Luck in your interview ) !, Press OK to return to Home page");
            window.location.href = "Homesign.php";
            </script>';
        header('location:Homesign.php');
        }
}
}
?> 
<!doctype HTML>
<html lang="en">
<!--Start of head tag-->
<head> <!--every comment will be above their lines-->



  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="keyword" content="meca,knowledge,asu">
      <link rel="shortcut icon" href="images/logo.ico">
<link href="https://fonts.googleapis.com/css?family=Anton|Berkshire+Swash|Bree+Serif|Francois+One|Gloria+Hallelujah|Lobster|Jura|Pacifico|Ranchers" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="keyword" content="meca,knowledge,asu">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
<!--footer tags-->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="keyword" content="meca,knowledge,asu">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>-
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


   





<!--to link html with css-->
    <link rel="stylesheet" href="css/signup3.css">

    <link rel="stylesheet" href="css/signup4.css">

        

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
    Congratulations
    </title>
    <!--logo of the website-->
<link rel="shortcut icon" type="icon" href="images/logo.ico">
     
     <!--for icons-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>


   <body>



   <!--Header-->

   <nav  class="navbar navbar-dark bg-dark navbar-expand-lg " style="padding: 25px;  right: 0; left: 0; top: 0; position: fixed;  margin-bottom: 0px; z-index: 1;padding:0;height: auto">

    <!--meca logo-->
   <img src="images/logo.ico" width="140" height="60" alt="MECA">

   <!--collapse button-->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
<!--end of button-->

<!-- nav items-->
  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: 'Merriweather', serif; font-size: 20px; padding-left: 20px; ">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item " style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="Homesign.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="historysign.php">History</a>
      </li>
       <li class="nav-item" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="aboutsign.php">About</a>
      </li>

       <li class="nav-item" style="padding-left: 10px; padding-right: 10px;" >
        <a class="nav-link"  href="Trusteesign.php">Trustee's Board</a>
      </li>


     
    </ul>

  </div>
</nav>
<!--end of header-->






<!--registeration form-->
 

    <div id="background">
        <div id="layer">
           
            <br>
            <br>
            <br>
            <br>
            <div class="row" style="width:100% !important;">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6" id="layer1">
                <h1 style="text-align: center;font-size: 7vw; color: orange; font-family: 'Berkshire Swash', cursive;">Congratulations</h1>
                    
<p style="text-align: center; color: orange; font-family: 'Bree Serif', serif; font-size: 32px; margin-top: 5%; margin-bottom: 10%; letter-spacing: 2px;">You have passed MECA's test</p>
                   
  <form method="post" action="congrats1.php">
    <div class="form-group">
      <label for="inputState" style="color:orange; font-size: 18px;" >Interview date:</label>
      <select id="inputState" class="custom-select" style="width: 100%; height: 15%;" name="slot" required>
        <option selected>Choose your interview date</option>

              <?php
                           $sql = "SELECT * FROM `timeInterview`";
                           $result = mysql_query($sql);
                           $num_rows = mysql_num_rows($result);
                           if ($num_rows > 0) {
                           while ($row=mysql_fetch_array($result ))
                           {
                               $option = $row['date'];
                               $id=$row['id'];
                               if ($row['avail'] > 0)
                                   {
                                       echo "<option value=$option> $option </option>";
                                   }
                           }
                           }
                               else {
                                       echo "No avaliable slots";
                                   }
                       ?>

      </select>
    </div>
  
    <br>
    <button type="Submit" class="btn btn-warning btn-lg" style="width: 40%; margin-left: 30%;background-color: transparent !important; color: orange;border-radius: 7px; font-weight: 600; border-width: 2px; border-color: orange; font-family: Jura , cursive;" name="interview">Submit</button>
                     
    <br>
    
</form>  


<br> <br><br> <br> 

</div>

                
            </div>
            <!--end of row-->
            <br>
<br>
<br>
<br>
<br> <br> <br> <br> <br> <br> <br> <br> 
            </div>
            <!--end of layer-->

        
        <!--end of background-->
          <div class="footer">
 <div class="container">
<div class="row">
<div class="social-media-links" class="col-md-4" style="display: flex; align-items: center; ">
       <a style="height: 20px !important;" class="link" href='https://www.facebook.com/MECAEgypt'><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
       <a style="height:20px !important;" class="link" href='https://twitter.com/MECAEgypt'><i class="fa fa-twitter-square fa-2x fa-fw"></i></a>
       <a style="height:20px !important;" class="link" href='https://www.youtube.com/user/MECAEgypt'><i class="fa fa-youtube-play fa-2x fa-fw"></i></a>
       <a style="height:20px !important;" class="link" href='https://www.instagram.com/MECAEgypt/'><i class="fa fa-instagram fa-2x fa-fw"></i></a>
  </div>
</div>

   <br><br>
<!--copywrites-->
    <div class="row">
      <div class="copywrites" class="col-md-4" style="display: flex; align-items: center; font-family: Georgia;">
        © MECA'18 Developed by MECA IT Committee
      </div>
    </div>
  </div>
</div>      
  </div>     
<!--footer-->
  <!-- <div class="footer">
    
     <div class="container">

      <div class="row">
      <div class="social-media-links" class="col-md-4" style="display: flex; align-items: center;">
        <a href="https://www.facebook.com/MECAEgypt/"><img class="footer-social-media-icon" src="images/fb.png"></a>  
            <a  href="https://twitter.com/MECAEgypt"><img class="footer-social-media-icon" src="images/Twitter.png"></a>
            <a href="https://www.instagram.com/mecaegypt/"><img class="footer-social-media-icon" src="images/insta.png"></a>
             <a href="https://www.youtube.com/user/MECAEgypt"><img class="footer-social-media-icon" src="images/youtube.png"></a>

      </div>  
    </div>-->









  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

    <script  src="js/index.js"></script>

  
   </body>
   </html>
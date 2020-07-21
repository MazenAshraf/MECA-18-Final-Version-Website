<?php include('CodeServer.php') ?>
<!DOCTYPE html>
<html>
<head>

  <!-- title to be edited -->
    <title> ABOUT US </title> 
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="meca, academy">
    <meta name="description" content="">
    <meta name="author" content="MECA">
    <!-- style -->
    <link rel="stylesheet" href="css/about.css" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/logo.ico" type="images/x-icon">
    <!-- font awesome -->
    <script src="https://use.fontawesome.com/25392a555b.js"></script>
    <script src="https://fonts.google.com/?utm_source=google&utm_medium=cpc&utm_campaign=1001467%20%7C%20Material.IO%20%7C%20Global%20%7C%20en%20%7C%20Hybrid%20%7C%20Text%20%7C%20BKWS&utm_term=%7Bkeyword%7D&gclid=EAIaIQobChMIneea3N7S1wIVsDLTCh0f9g4yEAAYASAAEgJADfD_BwE"></script>
   
   <!--footer-->



    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/
   



    <!--header tags-->
      
  <link rel="jquery"  href="js/jquery.js">
  <link rel="shortcut icon" type="icon" href="images/logo.ico">

  <meta name="description" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="keyword" content="meca,knowledge,asu">

   <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
<link rel="shortcut icon" type="icon" href="images/logo.ico">
    <script src="js/navshrink.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
   


    
</head>





   <!--Header-->

   <nav  class="navbar navbar-dark bg-dark navbar-expand-lg " style="padding: 25px;  right: 0; left: 0; top: 0; position: fixed;  margin-bottom: 0px; z-index: 1;height:auto;padding:0.15%; ">

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
       <li class="nav-item active" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="aboutsign.php">About</a>
      </li>

       <li class="nav-item" style="padding-left: 10px; padding-right: 10px;" >
        <a class="nav-link"  href="Trusteesign.php">Trustees' Board</a>
      

     <li class="nav-item dropdown" style="padding-left: 10px; padding-right: 10px;position:absolute;right:8%;" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION["Name"]; ?>
        </a>

        <!--end of nav items-->
      

      <!--Sign in & sign Up Drop Down Menu//-->
        <div  class="dropdown-menu" id="dd" aria-labelledby="navbarDropdown" style="padding: 10px;">
<form method="post"action="CodeServer.php">
       <!--   <button onclick="document.getElementById('id01').style.display='block';document.getElementById('dd').style.display='block';" class="w3-btn w3-dark-grey" style="font-size:17px;background-color: #424242 !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px; margin-top: 5%; width: 100%;">Change Password</button> -->
            <button class="w3-btn w3-dark-grey" style="font-size:17px;background-color: #424242 !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px;margin-top: 5%; width: 100%;" name="logout">Log Out</button>
</form>
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4" style="border: 2px solid white;
    border-radius: 20px; overflow: hidden;">
    <header class="w3-container w3-red w3-display-container" style="background-color: grey !important; margin-bottom: 20px; height: 52px !important;"> 
      <span onclick="document.getElementById('id01').style.display='none';document.getElementById('dd').style.display='';" class="w3-button w3-xlarge w3-display-topright w3-hover-red w3-hover-opacity">&times;</span>
      <h2 style="text-align: center; margin-top: 1%; font-family: 'Montserrat', sans-serif;">Change Password</h2>
    </header>
    <div class="w3-container">
          <form>
 <div class="form-group" style="margin-left: 20%;">
      <label for="inputState" style="color:black; font-size: 22px; font-weight: 500;" >Current Password:</label>
<input type="text" name="">
    </div>
     <div class="form-group" style="margin-left: 20%;">
      <label for="inputState" style="color:black; font-size: 22px; font-weight: 500; letter-spacing: 2.95px;" >New Password:</label>
<input type="text" name="">
    </div> 
     <div class="form-group" style="margin-left: 20%;">
      <label for="inputState" style="color:black; font-size: 22px; font-weight: 500;" >Confirm Password:</label>
<input type="text" name="">
    </div> 
        <button onclick="document.getElementById('id01').style.display='none'" type="Submit" class="btn btn-warning btn-lg" style="margin-bottom: 20px; background-color: white;border: 2px solid orange;
    border-radius: 7px; color: orange; font-weight: 600; width: 30%; margin-left: 35%;">Submit</button>
    </form>
    </div>
  </div>
</div>
        </div>
      </li>
     
    </ul>

  </div>
</nav>
<!--end of header-->









<!--about us page-->
    <!-- Image Header -->
  <div id="cover">
  
<body id="myPage">
     <div id="layer">
       <img src="images/1.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
    </div>   
   
   <!-- end image header -->

   <!-- div about -->
  <div class="w3-content" style="max-width:1100px;margin-bottom:20px;margin-top: 40px">
         
         <div class="w3-container w3-padding-20 w3-center" id="team">
                    <h1 class="heading1">ABOUT <br> US</h1>
         <div class="w3-row"><br>
                <div class="w3-quarter">
                     <div class="company " >
                         <div class="card shadow" >
                            <div class="front face center ">
                                 <img src="images/about.jpg" style="width: 100%; height: 100%;" class="w3-hover-opacity" >
                                
                            </div>
                            <div class="back face center ">
                                 <img src="images/about1.jpg" style="width: 100%; height: 100%;">
                            </div>
                         </div>
                </div>
                </div>
                 <div class="w3-quarter ">
                 <div class="company " >
                       <div class="card shadow" >
                           <div class="front face center ">
                                 <img src="images/core.jpg" style="width: 100%; height: 100%;" class="w3-hover-opacity">
                               
                           </div>
                           <div class="back face center ">
                                     <img src="images/core1.jpg" style="width: 100%; height: 100%;">
                                 
                            </div>
                        </div>
                 </div>
                 </div>
                 <div class="w3-quarter">
                 <div class="company " >
                       <div class="card shadow" >
                           <div class="front face center">
                                 <img src="images/mission.jpg" style="width: 100%; height: 100%;" class="w3-hover-opacity">

                           </div>
                           <div class="back face center backg3">
                                    <img src="images/mission1.jpg" style="width: 100%; height: 100%;">
                                   
                            </div>
                        </div>
                 </div>
                 </div>
                 <div class="w3-quarter ">
                  <div class="company " >
                       <div class="card shadow" >
                           <div class="front face center">
                                 <img src="images/vission.jpg"  style="width: 100%; height: 100%; position: center;"
                                  class="w3-hover-opacity">
                               
                           </div>
                           <div class="back face center ">
                                     <img src="images/vission1.jpg" style="width: 100%; height: 100%;">
                                  
                            </div>
                        </div>
                 </div>
                </div>
                </div>

           <!-- end div about -->
           <!-- TEAM -->
 <div class="w3-content" style="max-width:1100px;margin-top:10px;margin-bottom:20px"> 
     <div class="w3-container w3-padding-64 w3-center" id="team">
          <h1 class="heading1" >OUR TEAM</h1>
          <h3>Meet the MECANs</h3>

         <div class="w3-row"><br>
               <div class="w3-center ">
                 <img src="images/PA.jpg" alt="Boss" style="width:40%" class="w3-circle w3-hover-opacity">
                 <h2> Bassant ElSheikh</h2>
                 <p>MECA President </p>
              </div>
              <div class="w3-quarter">
                 <img src="images/PM.jpg" alt="Boss" style="width:60%" class="w3-circle w3-hover-opacity">
                 <h2>Ahmed Amin</h2>
                  <p>PM Head </p>
              </div>

               <div class="w3-quarter">
                 <img src="images/OP.jpg" alt="Boss" style="width:60%" class="w3-circle w3-hover-opacity">
                 <h2>Mohamed Alaa</h2>
                 <p>Operations Head</p>
               </div>

               <div class="w3-quarter">
                  <img src="images/FRR.jpg" alt="Boss" style="width:60%" class="w3-circle w3-hover-opacity">
                  <h2>Youssef Galal</h2>
                  <p>FR Head</p>
                </div>

                <div class="w3-quarter">
                 <img src="images/HR.jpg" alt="Boss" style="width:60%" class="w3-circle w3-hover-opacity">
                 <h2> Ahmed Hamdy </h2>
                 <p>HR Recruitment Head</p>
                </div> 
                </div>
               
          <div class="w3-row"><br>              
                <div class="w3-quarter">
                  <img src="images/IT.jpg" alt="Boss" style="width:60%" class="w3-circle w3-hover-opacity">
                  <h2>Nada Amr</h2>
                  <p>IT Head</p>
                </div>
               <div class="w3-quarter">
                  <img src="images/MAR.jpg" alt="Boss" style="width:60%" class="w3-circle w3-hover-opacity">
                  <h2>Nurhan Fouad</h2>
                  <p>Marketing Head</p>
               </div>
               <div class="w3-quarter">
                 <img src="images/OD.jpg" alt="Boss" style="width:60%" class="w3-circle w3-hover-opacity">
                 <h2> Passant ElKhabbaz</h2>
                 <p>HR-OD Head</p>
               </div>
               <div class="w3-quarter">
                 <img src="images/PR.jpg" alt="Boss" style="width:60%" class="w3-circle w3-hover-opacity">
                 <h2>Nada Saad</h2>
                 <p>PR Head</p>
                </div>
                </div>


         </div>

     </div>
   </div>
   <!-- end TEAM -->
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

 <div class="footer">
 <div class="container">
<div class="row">
<div class="social-media-links" class="col-md-4" style="display: flex; align-items: center; ">
      <a class="link" href='https://www.facebook.com/MECAEgypt'><i class="fa fa-facebook-official fa-2x fa-fw"></i></a>
      <a class="link" href='https://twitter.com/MECAEgypt'><i class="fa fa-twitter-square fa-2x fa-fw"></i></a>
      <a class="link" href='https://www.youtube.com/user/MECAEgypt'><i class="fa fa-youtube-play fa-2x fa-fw"></i></a>
      <a class="link" href='https://www.instagram.com/MECAEgypt/'><i class="fa fa-instagram fa-2x fa-fw"></i></a>
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

<!--End of footer-->
    

</body>
    </div>
</html>
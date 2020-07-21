<?php include('CodeServer.php') ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">


<!-- to be edited -->
<title>Meca History</title>



<!-- meta  -->
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keyword" content="meca,knowledge,asu">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--style sheet-->
<link type="text/css" rel="stylesheet" href="css/history.css">
<!-- font awsome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- nav shrink -->
<link rel="shortcut icon" type="icon" href="images/logo.ico">
<script src="js/navshrink.js"></script>

<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

<!--google fonts-->
<link href="https://fonts.googleapis.com/css?family=Audiowide|Barlow|Boogaloo|El+Messiri|Exo|Exo+2|Fredericka+the+Great|Lato|Merienda+One" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!-- footer links -->
<!-- header links -->

 link rel="stylesheet" href="css/style.css">
  <link rel="jquery"  href="js/jquery.js">
  <link rel="shortcut icon" type="icon" href="images/logo.ico">

  <meta name="description" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="keyword" content="meca,knowledge,asu">

   <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    <script src="css/style.css"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/navshrink.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<!-- end -->






</head>

<body>
<!--                  header                              -->
 <!--Header-->

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
      <li class="nav-item active" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="historysign.php">History</a>
      </li>
       <li class="nav-item" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="aboutsign.php">About</a>
      </li>

       <li class="nav-item" style="padding-left: 10px; padding-right: 10px;" >
        <a class="nav-link"  href="Trusteesign.php">Trustees's Board</a>
      </li>
       

     <li class="nav-item dropdown" style="padding-left: 10px; padding-right: 10px;position:absolute;right:8%;" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php echo $_SESSION["Name"]; ?>
        </a>

        <!--end of nav items-->
      

      <!--Sign in & sign Up Drop Down Menu//-->
        <div  class="dropdown-menu" id="dd" aria-labelledby="navbarDropdown" style="padding: 10px;">
<form method="post" action="CodeServer.php">
        <!--  <button onclick="document.getElementById('id01').style.display='block';document.getElementById('dd').style.display='block';" class="w3-btn w3-dark-grey" style="font-size:17px;background-color: #424242 !important;border: 2px solid white;
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
<!--                  end of header                   -->


<!--                2007                   -->
<div   class="year row right">
<img   id="y2007y" class="yearImage col-lg-4 col-md-6 col-sm-6 col-xs-12"  height="600">

  <div class="description col-lg-8 col-md-6 col-sm-6 col-xs-12">
    
    
    <h1 class="head1">EVENTS</h1>
    <ul class="ulleft">
    <li>MECA Academy</li> 
    <li>UDT</li>
    
    </ul>
  </div>

  
</div>
<!--                         2008                 -->
<div class="year row left">
  
  <div class="description1 col-lg-8 col-md-6 col-sm-6 col-xs-12">
    <h1 class="head">EVENTS</h1>
    <ul class="ulright">
    <li>MECA Academy</li> 
    <li>ExxonMobil Sessions</li>
    
    </ul>
  </div>
  <img id="y2008y" class="yearImage col-lg-4 col-md-6 col-sm-6 col-xs-12"  height="600">

  
</div>



<!--                  2009                 -->
<div  class="year row right">
  <img  id="y2009y" class="yearImage col-lg-4 col-md-6 col-sm-6 col-xs-12"  height="600">
  <div class="description col-lg-8 col-md-6 col-sm-6 col-xs-12">
    <h1 class="head1">EVENTS</h1>
    <ul class="ulleft">
    <li>MECA Academy</li> 
    <li>Imagine Cup</li>
    <li>MECA Internship</li>
    
    </ul>
  </div>
  

</div>



<!--                                2010              -->
<div  class="year row left">
  <div  class="description1 col-lg-8 col-md-6 col-sm-6 col-xs-12">
    
    <h1 class="head">EVENTS</h1>
    <ul class="ulright">
    <li>MECA Academy</li> 
    <li>United Activities (UA)<span style="font-size: 0.001px;">l</span></li>
    <li>MECA Internship</li>
    <li>MECAzine 1<sup>st</sup> Issue</li>
    <li>MECA Seminars</li>
    <li>Imagine Cup</li>
    <li>MECAway</li>
    </ul>
  </div>
  <img id="y2010y" class="yearImage col-lg-4 col-md-6 col-sm-6 col-xs-12" >
  
  
</div>



<!--                              2011                     -->
<div  class="year  row right">
  <img  id="y2011y" class="yearImage col-lg-4 col-md-6 col-sm-6 col-xs-12" >
  <div class="description ccol-lg-8 col-md-6 col-sm-6 col-xs-12">
    
    <h1 class="head1">EVENTS</h1>
    <ul class="ulleft">
    <li>MECA Academy</li> 
    <li>MECAzine 2<sup>nd</sup> Issue</li>
    <li>MECA Internship</li>
    <li>MECA Seminars </li>
    <li>ECG</li>
    <li>IMagine Cup</li>
    <li>Projects' day</li>
    </ul>
  </div>
  
  
</div>



<!--                       2012               -->
<div  class="year  row left">

<div class="description1 col-lg-8 col-md-6 col-sm-6 col-xs-12">
  
  <h1 class="head">EVENTS</h1>
    <ul class="ulright">
    <li>MECA Academy 2.0</li> 
    <li>EMC<sup>2</sup></li>
    <li>MECA Seminars</li>
    <li>MECAzine 3<sup>rd</sup>Issue</li>
    <li>MECA Internship</li>
    <li>Gone Google's Day</li>
    <li>MECA Franchising</li>
    </ul>
</div>
  <img  id="y2012y" class="yearImage col-lg-4 col-md-6 col-sm-6 col-xs-12" >
  

</div>



<!--                       2013                   -->
<div  class="year row right">
  
  <img id="y2013y" class="yearImage col-lg-4 col-md-6 col-sm-6 col-xs-12"  >
  <div class="description col-lg-8 col-md-6 col-sm-6 col-xs-12">
    
    <h1 class="head1">EVENTS</h1>
    <ul class="ulleft">
    <li>MECA Academy 2.0</li> 
    <li>EMC<sup>2</sup></li>
    <li>MECA Seminars</li>
    <li>MECAzine 4<sup>th</sup>Issue</li>
    <li>MECA Internship</li>  
    <li>MECA Learning Program (MLP)</li>
    
    </ul>
  </div>

</div>
<!--                                      2014                       -->
<div  class="year row left">
  <div class="description1 col-lg-8 col-md-6 col-sm-6 col-xs-12">
    
    <h1 class="head">EVENTS</h1>
    <ul class="ulright">
      <li>MECA Academy 2.0</li> 
      <li>Mentor Graphics Event</li>
        <li>Egyptian Steel Event</li>
        <li>MECAzine 5<sup>th</sup>Issue</li>
      <li>MECA Seminars</li>
        <li>MECA Internship</li>
        <li>Air Liquide</li>  
  
    
    </ul>
  </div>
  <img  id="y2014y" class="yearImage col-lg-4 col-md-6 col-sm-6 col-xs-12"  >
  
  
</div>



<!--          2015             -->
<div  class="year row right">
  <img  id="y2015y" class="yearImage col-lg-4 col-md-6 col-sm-6 col-xs-12"    >
  <div class="description col-lg-8 col-md-6 col-sm-6 col-xs-12" >
    
    <h1 class="head1">EVENTS</h1>
    <ul class="ulleft">
    <li>MECA Academy 2.0</li> 
    <li>MECA Mentorship</li>
    <li>MECAzine 6<sup>th</sup>Issue</li>
    <li>MECA Development Program</li>
    <li>MECA Empowerment Pogram</li>
    </ul>
  </div>
  
  
</div>



<!--       2016                     -->
<div  class="year row left">
  <div  class="description1 col-lg-8 col-md-6 col-sm-6 col-xs-12">
    
    <h1 class="head">EVENTS</h1>
    <ul class="ulright">
    <li>MECA Academy 2.0</li> 
    <li>MECA Venture</li> 
    <li>MECA ENterprise</li>
    <li>ECG</li>
    <li>Air Liquide</li>
    <li>MECAzine 7<sup>th</sup>Issue</li>
    </ul>
  </div>
  <img  id="y2016y" class="yearImage col-lg-4 col-md-6 col-sm-6 col-xs-12"  >
  
  
</div>

<!--              2017             -->
<div class="year row right">
  <img  id="y2017y"  class="yearImage col-lg-4 col-md-6 col-sm-6 col-xs-12"  >
  <div class="description col-lg-8 col-md-6 col-sm-6 col-xs-12">
    
    <h1 class="head1">EVENTS</h1>
    <ul class="ulleft">
    <li>MECA Academy 2.0</li> 
    <li>MECA Enterprise</li>
    
    </ul>
  </div>
  
</div>  


<!--               footer      -->
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

<!--End of footer-->

<!--           end of footer -->
</body>
</html>



<!-- NOTE 1 :2011 OVERFLOW     2017 PIC  -->


<?php include('CodeServer.php') ?>
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
    <!--navbar-dark bg-dark dol kano fl class 3shan ydolo el loon el dark grey-->
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
      <li class="nav-item active" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="history.php">History</a>
      </li>
       <li class="nav-item" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="about.php">About</a>
      </li>

       <li class="nav-item" style="padding-left: 10px; padding-right: 10px;" >
        <a class="nav-link"  href="Trustee.php">Trustees' Board</a>
      </li>
       

     <li class="nav-item dropdown" style="padding-left: 10px; padding-right: 10px;position:absolute;right:10%;" >
        <a onclick="document.getElementById('sign').style.display=''" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign In
        </a>

        <!--end of nav items-->
      

      <!--Sign in & sign Up Drop Down Menu//-->
        <div  class="dropdown-menu" id="sign" aria-labelledby="navbarDropdown" style="padding: 10px; text-align: center;">
            
           <form   class="form-inline" style="text-align: center;" method="post" action="CodeServer.php">
            Have An Account ? <br>
          <input class="form-control mr-sm-2" type="textbox" placeholder="Enter Your Email" style="margin-top: 5%" name="E-mail"> 

          <input class="form-control mr-sm-2" type="Password" placeholder="Enter Your Password"  style="margin-top: 8%" name="Password"><br>
          <div class="dropdown-divider"></div>
           <button  style="margin-left: 20%; width: 60%;margin-top: 10%; margin-bottom: 5%;border-radius: 30px; font-size: 18px; background-color: orange;color: white;border-color: orange" class="btn btn-secondary btn-sm" type="submit" name="login_students">Sign In</button> 
          Don't Have an Account Yet?

          <button style="margin-left: 20%; width: 60%;margin-top: 5%;border-radius: 30px;font-size: 18px; background-color: white;color: orange;border-color: orange;border-width: 2px;" class="btn btn-secondary btn-sm" type="submit" name="Signup" >Sign Up</button>
               
        </form>
        </div>
      </li>
     
    </ul>

  </div>
</nav>
<!--end of header-->
 
<!--header -->
<div class="video-container">
  <div class="layer">
    <div class="intro">
           <h1 style="color: orange !important;">MECA</h1>
            <p><span>A</span> <span>C</span>all <span>F</span>or <span>C</span>hange <span>A</span>gents</p>        
       </div>
  </div>
  <video autoplay loop poster="images/image1.jpeg">
    <source src="videos/video.mp4" type="video/mp4" />
  </video>
</div>
<!-- header -->
<div style="height: 650px;"></div> 

     <!--                                                YLF                                                           -->

<!--<div class="ylf" style="background-color: #424242; width: 100% ; padding: 20px; overflow: hidden;">
              <div class=" col-lg-4  col-md-4 col-ms-10 col-xs-10 offset-ms-1 offset-xs-1 ylf" style="float: left; margin-top: 50px;" >
            <p style="color: white;
            font-weight: 400;
letter-spacing: 1px;
font-size: 20px;
line-height: 220%;">YLF “Youth Leaders Foundation” is a Non-Profit Organization that seeks potential leaders in all Egyptian Universities to help improve their skills through “Leadership Program”, all you have to do to enter the program is to pass the International Certified Assessments to measure your leadership competencies.</p>
            <a href="http://www.ylf-eg.org/apply-now/"><button onclick="document.getElementById('id02').style.display='block'" class="w3-btn w3-dark-grey" style="font-size:17px;padding:12px 35px;background-color: #424242 !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px;margin-left: 20%; margin-top: 5%; margin-bottom: 20px;">APPLY NOW!</button></a>
          </div>
          <div class="col-lg-6 col-md-6 col-ms-10  col-xs-10 offset-ms-1 offset-xs-1 yif"  style="float: left;">
  <img  src="YIF.jpg" style="height:auto;width:850px; margin-right: 20px !important;">
  </div>
</div>
                   MAKER FAIRE                                               -->
<!--  <div class="ylf" style="background-color: #595959; width: 100% ; padding: 20px; overflow: hidden;">
                        <div class="col-lg-8 col-md-8 col-ms-12  col-xs-12 offset-ms-1 offset-xs-1 yif"  style="float: left;">
  <img  src="css/market.jpg" style="height:auto;width:850px; margin-right: 20px !important; right: 20px;">
  </div>
              <div class=" col-lg-4  col-md-4 col-ms-10 col-xs-10 offset-ms-1 offset-xs-1 ylf" style="float: left; margin-top: 50px; right: 0px;" >
            <p style="color: white;
            font-weight: 400;
letter-spacing: 1px;
font-size: 20px;
line-height: 220%;">To all those crafty hands out there!
We are proud to announce our Cooperation with <span style="color: #ea1b20; font-weight:500; ">Maker Faire </span> Cairo.

<span style="color: #ea1b20; font-weight:500; ">Maker Faire </span>Cairo is a festival for The Handy Craft Makers all over Egypt and the Middle East, includes many Events, Talks and Workshops.

<span style="color: orange; font-weight:500; ">MECA</span> will participate as a tickets provider for The Early Bird and late Owl Tickets.</p>
          <a href="Fairregister.php">  <button  class="w3-btn w3-dark-grey" style="font-size:17px;padding:12px 35px;background-color: #424242 !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px;margin-left: 20%; margin-top: 5%; margin-bottom: 20px;">GET YOUR TICKET</button></a>
          </div>
</div>
-->
    
    

 


<!--  PLATFORM  -->
    <div style=" background-color: #424242; height:140px;"> 
      <br>
    <h1 style="text-align:center;font-family: 'Times New Roman', cursive;font-size:40px;margin-bottom:15px; color: white;"><span style="color: orange">MECA</span> Sponsors</h1>
    <h2 style="text-align:center;font-family: 'Times New Roman', cursive;color:white;font-size:40px;">PLATFORM</h2>
    </div>
    
    <div class="platform" style="height:30%;">
        
<div class="row" style="margin-left:5%;margin-right:5%;margin-bottom:10px;">
  <div class="col-md-4" style="margin-top:10px;">
    <div class="thumbnail">
      <br><br>
      <a href="http://www.dorra.com/">
        <img src="images/image001.jpg" alt="Dorra" style="width:70%;margin-right:10px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <br><br>
      <a href="https://www.airliquide.com/">
        <img src="images/image002.jpg" alt="Air Liquide" style="width:70%;margin-right:10px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <br><br>
    <div class="thumbnail" style="margin-top:15px;">
      <a href="https://eg.grundfos.com/">
        <img src="images/image017.png" alt="grundfos" style="width:70%;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>
</div>





<div class="row" style="margin-left:5%;margin-right:5%;margin-bottom:10px;">


  <div class="col-md-4" >
    <br>
    <br><br><br>
    <div class="thumbnail" style="margin-top:15px;">
      <a href="http://www.ovm-mena.com/">
        <img src="images/image004.png" alt="OVM" style="width:70%;margin-right:10px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>
                       

  <div class="col-md-4">
    <div class="thumbnail">
      <a href="http://ecseg.com/">
        <img src="images/image005.jpg" alt="ECS" style="width:70%;height: 180px; margin-right:10px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>
    <div class="col-md-4" style="padding-left:40px;">
      <br><br><br><br>
    <div class="thumbnail">
      <a href="https://www.pgcareers.com/">
        <img src="images/image006.PNG" alt="P&G" style="width:100px;height:100px;margin-left: 70px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>
                            </div>
  




<div class="row" style="margin-left:5%;margin-right:5%;margin-bottom:20px;">

<div class="col-md-3">
    <div class="thumbnail">
      <br><br>
      <a href="http://www.aboughalymotors.com/">
        <img src="images/image019.jpg" alt="Abou Ghaly" style="width:70%;margin-right:10px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>

<div class="col-md-3" style="padding-right: 0px;">
    <div class="thumbnail" style="margin-top:35px;">
      <br><br>
      <a href="http://systelgroup.com/">
        <img src="images/image010.jpg" alt="systel" style="width:70%;height: 70px; margin-right:0px; padding-right: 0px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>
                        
<div class="col-md-3" style="margin: 0px; padding-left: 0px;">
  <br><br>
    <div class="thumbnail">
      <a href="http://idealstandard-egypt.com/">
        <img src="images/nada1.jpg" alt="Ideal Standards" style="width:100%;margin-top:30px;height:50px;margin-right:0px; padding-left: 0px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>
<div class="col-md-3">
  <br><br>
    <div class="thumbnail">
      <a href="https://icareer.com.eg/">
        <img src="images/image009.png" alt="icareer" style="width:100%;height:120px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>
</div>




<div class="row" style="margin-left:5%;margin-right:5%;margin-bottom:10px; margin-top: 15px; ">


<div class="col-md-3">
    <div class="thumbnail">
      <br><br>
      <a href="http://www.roadrunners.co/">
        <img src="images/image006.jpg" alt="RoadRunners" style="width:70%;margin-right:10px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>

<div class="col-md-3">
  <br><br><br><br>
    <div class="thumbnail">
      <a href="http://www.bticino.com.eg/">
        <img src="images/image005.png" alt="bticino" style="width:70%;margin-right:10px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>


<div class="col-md-3" style="margin-top:25px;">
  <br><br>
    <div class="thumbnail">
      <a href="https://www.facebook.com/Scientific.accent/">
        <img src="images/image016.png" alt="Scientific accent" style="width:70%;height:100px;margin-right:10px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>


  <div class="col-md-3">
    <br><br>
    <div class="thumbnail">
      <a href="http://www.bayangroup.org/">
        <img src="images/image013.png" alt="Bayan" style="width:59%;height:122px;margin-left:10px;">
        <div class="caption">
        </div>
      </a>
    </div>
  </div>
    </div>

    <br><br><br>
        
<div style="background-color: #424242;width:100%;margin-bottom:0px;">
    
    <div class="thumbnail" style="margin-top:10px;">
        <h1 style="text-align:center;color:orange;font-size:40px;font-family: 'Times New Roman', cursive;margin-top:5px;"> Strategic Recruitment Partner </h1>
        <br>
      <a href="https://wuzzuf.net/signup/joinow?gclid=Cj0KCQjwn-bWBRDGARIsAPS1svuhqHX5YjAy2onzZrHpXR114JXPIgry4VNTEk-OK-ADausO4ZRqr3MaAifxEALw_wcB">
        <img src="images/image008.png" alt="wuzzuf" style="height:80px; width:50px; display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;">
        <div class="caption">
        </div>
      </a>
    </div>
  
    
    <br><br>
        </div>
         <br>
      <div class="thumbnail" style="margin-top:10px; padding-bottom: 0px;margin-bottom: 0px;">
        <h1 style="text-align:center;color:orange;font-size:40px;font-family: 'Times New Roman', cursive;margin-top:5px;">MECA Partner </h1>
  
        <a href=http://www.ylf-eg.org>
        <img  src="images/imageylf.png"  style="width:20%;height:260px;display: block;
    margin-left: auto;
    margin-right: auto;">
        <div class="caption">
        </div>
      </a>
  </div>
<!--           <button onclick="myFunction()" id="apply" class="w3-btn w3-dark-grey btn-lg" style="font-size:17px;padding:12px 35px;background-color: #424242 !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px;margin-left: 42%; margin-top: 5px;padding-top: 10px; margin-bottom: 20px;">APPLY NOW!</button>

              <button onclick="myFunction()" id="apply" class="w3-btn w3-dark-grey btn-lg" style="font-size:17px;padding:12px 35px;background-color: #424242 !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px;margin-left: 42.85%; margin-top: 5px;padding-top: 10px; margin-bottom: 20px;">TAKE TEST</button> -->
        
        
 <button onclick="myFunction()" name="Check_result" id="result" class="w3-btn w3-dark-grey btn-lg" style="font-size:17px;padding:12px 35px;background-color: #424242 !important;border: 2px solid white;border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px;margin-left: 42%; margin-top: 5px;padding-top: 10px; margin-bottom: 20px;">Test Results</button>
     
<!--                                            event                                               -->

<div class="event" style="background-color: white; padding-top: 20px;">
  <div class="row" style="width: 100% !important;">
    <div class="info col-lg-4  col-md-4 col-ms-10 col-xs-10 offset-ms-1 offset-xs-1">

      <div class="slogan">
          <p> <span>W</span>here <span>H</span>eroes <br> <span>A</span>re <span>M</span>ade</p>
      </div>


       <div class="middle">
            <div class="text">Discover</div>
        </div>

        <div class="disc">
            <p>MECA Academy is the first of its kind to take place in the faculty of engineering ASU, the first academy was in 2007.
            The Academy intends to provide real life  simulation to the business world observed in any of the leading companies in Egypt.Sessions are conducted by experts from the company's different departments.</p>


    <!-- <button class="apply" id="myBtn">APPLY NOW!</button> -->
<!-- <button class="qq" onclick="myFunction()" style="font-size:17px;padding:12px 35px;background-color: #424242 !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px;margin-left: 20%;color: white !important; margin-top: 30%;">MY RESULT</button> -->

<!-- <div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-4" style="border: 2px solid white;
    border-radius: 20px; overflow: hidden;>
    <header class="w3-container w3-red w3-display-container" style="background-color: grey !important; margin-bottom: 20px; height: 52px !important;"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-display-topright w3-hover-red w3-hover-opacity">&times;</span>
      <h2 style="text-align: center; margin-top: 1%; font-family: 'Montserrat', sans-serif;">Test Date</h2>
    </header>
    <div class="w3-container">
     <form>
 <div class="form-group">
      <label for="inputState" style="color:orange; font-size: 22px; font-weight: 500;" >Time Slot:</label>
      <select id="inputState" class="custom-select" style="width: 100%; height: 15%;" required>
        <option selected>Choose your test date</option>
        <option value='Ain Shams'>We 6/12</option>
              <option value='Cairo'>Th 7/12</option>
              <option value='Helwan'>Fri 8/12</option>
              <option value='HTI<'>Sat 9/12</option>
              <option value='MIU'>Sun 10/12</option>
              <option value='GUC'>Mon 11/12</option>
              <option value='Other'>Tus 12/12</option>

      </select>
    </div>
     <div class="form-group">
      <label for="inputState" style="color:orange; font-size: 22px; font-weight: 500;" >Have you ever joined MECA Academy?</label>
      <select id="inputState" class="custom-select" style="width: 100%; height: 15%;" required>
        <option selected>Yes</option>
        <option value=''>No</option>
      </select>
    </div>
        <button onclick="document.getElementById('id01').style.display='none'" type="Submit" class="btn btn-warning btn-lg" style="margin-bottom: 20px; background-color: white;border: 2px solid orange;
    border-radius: 7px; color: orange; font-weight: 600; width: 30%; margin-left: 35%;">Submit</button>
    </form>
    </div>
  </div>
</div> -->
<p></p>
</div>
</div>
<div class="eventimage col-lg-6 col-md-6 col-ms-10  col-xs-10 offset-ms-1 offset-xs-1  ">
  <img class="img-fluid" src="images/academy2.jpg" style="height: 700px;">
<!--     <button onclick="myFunction()" class="w3-btn w3-dark-grey" style="font-size:17px;padding:12px 35px;background-color: #424242 !important;border: 2px solid white;
    border-radius: 5px;font-family: 'Concert One', cursive; letter-spacing: 2px;margin-left: 35%; margin-top: 5%;">MY RESULT</button> -->
</div>
</div>
</div>
<!-- event -->
<!-- social media notification-->

<div class="container" class="notification" style="margin-bottom: 30px">

    <div class="row">
    <!-- facebook notification -->
    <div class="col-lg-5 col-md-10 col-xs-10 col-ms-10 offset-ms-1 offset-xs-1  " style="margin-right:8%">
      <div class="facebook-notifiction" class="" style="display: flex; float: center; ">
         <div class="container-section feed">
    <div class="text-left" style="width: 490px;">
      <h4 style="color: #4267b2;"><strong>Facebook</strong></h4>
      <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/MECAEgypt/" data-tabs="timeline" data-width="490" data-height="500" data-hide-cover="true" data-small-header="true" data-adapt-container-width="true" data-show-facepile="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=543000012530907&amp;container_width=517&amp;height=500&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2FMECAEgypt%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=timeline&amp;width=490"><span style="vertical-align: bottom; width: 490px; height: 500px;"><iframe name="f398602b7beefe" width="490px" height="500px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.4/plugins/page.php?adapt_container_width=true&amp;app_id=543000012530907&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FhsBwMj6iLmk.js%3Fversion%3D42%23cb%3Df1f40dba1172e84%26domain%3Dmecaegypt.org%26origin%3Dhttp%253A%252F%252Fasuracingteam.org%252Ffde359369bb98c%26relation%3Dparent.parent&amp;container_width=517&amp;height=500&amp;hide_cover=true&amp;href=https%3A%2F%2Fwww.facebook.com%2FMECAEgypt%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;small_header=true&amp;tabs=timeline&amp;width=600" style="/*border: none*/; visibility: visible; width: 600px; height: 500px !important;" class=""></iframe></span></div>
</div>
        </div>
        </div>
        </div>
<!--twitter notification-->
<div id="twitter-widget-holder">
<div class="col-lg-5 col-md-10 col-xs-10 col-ms-10 offset-ms-1 offset-xs-1 offset-md-1 offset-lg-1" style="padding: 0px !important;margin-left:1% !important;">
      <div  class="twitter-notification" style="width: 500px; display: flex; align-items: right;">
          <div class="twitter" style="width: 600px;">
          <h4 style="color: #9fd6ff;"><strong>Twitter</strong></h4>
    <a class="twitter-timeline" href="https://twitter.com/MECAEgypt?ref_src=twsrc%5Etfw data-chrome=" scrollbar>Tweets by MECAEgypt</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      </div>
    

  </div>
</div>
</div>
</div>
<!-- end of social media notification-->
<!--footer-->
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
<!-- <script type="text/javascript" src="js/site.js"></script> -->

<script src="js/bootstrap.min.js"></script>
<script>
   function myFunction() {
     // onclick="document.getElementById('sign').style.display='block'"
     document.getElementById('sign').style.display='block';
         // document.getElementById("navbarSupportedContent").classList.toggle("show");
         if ( ($(window).width() < 974) || (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent))) {
         $('.navbar-collapse').collapse('show');
 }
 }
 </script>
</body>
</html>
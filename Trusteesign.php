<?php include('CodeServer.php') ?>
<!DOCTYPE html>
<html>



<head>
	<link rel="stylesheet" href="css/TrusreeStyle.css">
	<link rel="stylesheet" href="css/Trustee's.css">
 <link rel="shortcut icon" type="icon" href="images/logo.ico">
 <link rel="jquery"  href="js/jquery.js">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="js/jquery.js"></script>
    <script src="css/style.css"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/navshrink.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>



    
    
</head>




<body>
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
       <li class="nav-item" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="aboutsign.php">About</a>
      </li>

       <li class="nav-item active" style="padding-left: 10px; padding-right: 10px;" >
         <a class="nav-link"  href="Trusteesign.php">Trustees's Board</a>
	      </li>
 

     <li class="nav-item dropdown" style="padding-left: 10px; padding-right: 10px;position:absolute;right:8%" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION["Name"]; ?>
        </a>

        <!--end of nav items-->
      

      <!--Sign in & sign Up Drop Down Menu//-->
        <div  class="dropdown-menu" id="dd" aria-labelledby="navbarDropdown" style="padding: 10px;">
<form method="post" action="CodeServer.php">
         <!-- <button onclick="document.getElementById('id01').style.display='block';document.getElementById('dd').style.display='block';" class="w3-btn w3-dark-grey" style="font-size:17px;background-color: #424242 !important;border: 2px solid white;
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
	<div class="background1" class="w3-hover-opacity" ></div>

	            <h1 class="Founders">Our Founders</h1>
  <div class="founderscontainer">

<h4 class="Founder" style="color:orange; font-family: 'Lobster Two', cursive; font-size:40px;font-weight: 600;padding-bottom:70px;">Muhammad Abd El-Gelil</h4>
	<h4 class="Founder" style="font-family: 'Lobster Two', cursive; font-size:40px;font-weight: 600;padding-bottom:70px;">Muhammad Abd El-Gwad</h4>
	<h4 class="Founder"style="color:orange ;font-family: 'Lobster Two', cursive;font-weight: 600;font-size:40px;padding-bottom:70px;">Muhammad Ibrahim</h4>
	<h4 class="Founder" style="font-family: 'Lobster Two', cursive; font-size:40px;font-weight: 600;padding-bottom:70px;">Muhammad Abd El-Monaem</h4>
	<h4 class="Founder"style="color:orange;font-family: 'Lobster Two', cursive; font-size:40px;font-weight: 600;padding-bottom:70px;">Karim Abbas</h4>
	<h4 class="Founder" style="font-family: 'Lobster Two', cursive; font-size:40px;font-weight: 600;padding-bottom:70px;">Karim SalahAldin</h4>
	<h4 class="Founder"style="color:orange;font-family: 'Lobster Two', cursive; font-size:40px;font-weight: 600;padding-bottom:70px;">Karim Moataz</h4>
	<h4 class="Founder" style="font-family: 'Lobster Two', cursive; font-size:40px;font-weight: 600;padding-bottom:70px;">Muhammad Tarek</h4>
</div>
	<div class="w3-content" style="max-width: 1200px;">
<h1 class="Advisors" style="margin-top:5% ">Our Advisors</h1>
<div class="all2" style="margin-top:5% ">
   <div class="queue">
     <div class="leader">
  	   <div class="personcard">
    	 <div class="space">
         <img src="Advisors/Anas2.jpg" alt="Anas" style="width:100%">
         <div class="overlay">
         <p class="text"> >Anas El-Wakeel<br><span class="font3">Advisors' Leader</span></p>
         </div>
         </div>
     </div>
     </div>

     <div class="leader">
       <div class="personcard">
    	<div class="space1">
      <img src="Advisors/Fadi.jpg" alt="Fadi" style="width:100% ">
      <div class="overlay1">
           <p class="text">Fadi Nassef<br><span class="font3">SPOC</span></p>

       </div>    
    </div>
</div>
</div>
  
  <div class="person">
  
    <div class="personcard">
    	<div class="space">
      <img src="Advisors/Yasmine.jpg" alt="Yassmin" style="width:100%">  
      <div class="overlay">
      <p class="text">Yassmin Muhammad<br><span class="font3">Advisor</span></p>
      </div>
        </div>
</div>
  
</div>

</div>
<div class="queue">


     <div class="person">
       <div class="personcard">
    	<div class="space1">
      <img src="Advisors/MuhammadS.jpg" alt="Muhammad" style="width:100% ">
      <div class="overlay1">
      <p class="text">Muhammad E.Saad<br><span class="font3">Advisor</span></p>
       </div>    
    </div>
      
    </div>
  </div>

  
     <div class="person">
<div class="personcard">
 <div class="space1">

      <img src="Advisors/Omar1.jpg" alt="Omar" style="width:100%; height:50%; ">
      <div class="overlay1">
      <p class="text">Omar Yousri<br><span class="font3">Advisor</span></p>
       </div>    
  </div>
    </div>
  </div>
</div>
</div>
</div>

<!--End of footer-->
</body>
</html>

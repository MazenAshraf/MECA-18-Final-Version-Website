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
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster+Two|Satisfy|Yellowtail" rel="stylesheet">
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

   <nav  class="navbar navbar-dark bg-dark navbar-expand-lg " style="  right: 0; left: 0; top: 0; position: fixed;  margin-bottom: 0px; z-index: 1;height:auto;padding:0.15%; ">

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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="history.php">History</a>
      </li>
       <li class="nav-item" style="padding-left: 10px; padding-right: 10px;">
        <a class="nav-link" href="about.php">About</a>
      </li>

       <li class="nav-item active" style="padding-left: 10px; padding-right: 10px;" >
                <a class="nav-link"  href="trustee.php">Trustees's Board</a>
      </li>
  

<!--     <li class="nav-item dropdown" style="padding-left: 10px; padding-right: 10px;position:absolute;right:10%;" >-->
<!--        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--          Sign in-->
<!--        </a>-->

        <!--end of nav items-->
      

      <!--Sign in & sign Up Drop Down Menu//-->
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding: 10px; text-align: center;">
           <form   class="form-inline" style="text-align: center;" method="post"action="CodeServer.php">
            Have An Account ? <br>
          <input class="form-control mr-sm-2" type="textbox" placeholder="Enter Your Username" style="margin-top: 5%">

          <input class="form-control mr-sm-2" type="Password" placeholder="Enter Your Password"  style="margin-top: 8%"><br>
          <div class="dropdown-divider"></div>
           <button  style="margin-left: 20%; width: 60%;margin-top: 10%; margin-bottom: 5%;border-radius: 30px; font-size: 18px; background-color: orange;color: white;border-color: orange" class="btn btn-secondary btn-sm" type="submit" name="login_students">Sign In</button> 
          Don't Have an Account Yet?
               <button style="margin-left: 20%; width: 60%;margin-top: 5%;border-radius: 30px;font-size: 18px; background-color: white;color: orange;border-color: orange;border-width: 2px;" class="btn btn-secondary btn-sm" type="submit" name="Signup" >Sign Up</button>
            </form>
        </div>
<!--      </li>-->
     
    </ul>

  </div>
</nav>
<!--end of header-->
	<div class="background1" class="w3-hover-opacity" ></div>

	            <h1 class="Founders">Our Founders</h1>
 <div class="founderscontainer">
<!--font-family: 'Dancing Script', cursive;
font-family: 'Lobster Two', cursive;
	font-family: 'Satisfy', cursive;
	font-family: 'Yellowtail', cursive;-->
<h4 class="Founder" style="color:orange; font-family: 'Dancing Script', cursive; font-size:40px;font-weight: 600;margin-bottom:50px;">Muhammad Abd El-Gelil</h4>
	<h4 class="Founder" style="font-family: 'Lobster Two', cursive; font-size:40px;font-weight: 600;margin-bottom:50px;">Muhammad Abd El-Gwad</h4>
	<h4 class="Founder"style="color:orange ;font-family: 'Dancing Script', cursive; font-size:40px;font-weight: 600;margin-bottom:50px;">Muhammad Ibrahim</h4>
	<h4 class="Founder" style="font-family: 'Lobster Two', cursive; font-size:40px;font-weight: 600;margin-bottom:50px;">Muhammad Abd El-Monaem</h4>
	<h4 class="Founder"style="color:orange;font-family: 'Dancing Script', cursive; font-size:40px;font-weight: 600margin-bottom:50px;">Karim Abbas</h4>
	<h4 class="Founder" style="font-family: 'Lobster Two', cursive; font-size:40px;font-weight: 600;margin-bottom:50px;">Karim SalahAldin</h4>
	<h4 class="Founder"style="color:orange;font-family: 'Dancing Script', cursive; font-size:40px;font-weight: 600;margin-bottom:50px;">Karim Moataz</h4>
	<h4 class="Founder" style="font-family: 'Lobster Two', cursive; font-size:40px;font-weight: 600;margin-bottom:0px;">Muhammad Tarek</h4>
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
         <p class="text" >Anas El-Wakeel<br><span class="font3">Advisors' Leader</span></p>
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
<div class="queue">
     <div class="person">
       <div class="personcard">
 	
      <div class="space1">
	      <img src="Advisors/MuhammadS.jpg" alt="Muhammad" style="width:100% ; height=100%;">
      <div class="overlay1">
      <p class="text">Muhammad E.Saad<br><span class="font3">Advisor</span></p>
       </div>    
    </div>
      
    </div>
  </div>
  <div class="person">


       <div class="personcard">
    	<div class="space1">

    <img src="Advisors/Omar1.jpg" alt="Omar" style="width:100%; height:100; ">
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

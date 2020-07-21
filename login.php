<?php include('CodeServer.php')?>
<!DOCTYPE html>
<html>
<head>



  <title>MECA</title>

  <link rel="stylesheet" href="css/style.css">
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

</head>
<body>


  <!--navbar-dark bg-dark dol kano fl class 3shan ydolo el loon el dark grey-->

  <!--Header-->

   <nav  class="navbar navbar-expand-lg " style="padding: 25px; background-color: transparent;">

    <!--meca logo-->
   <img src="images/logo.ico" width="140" height="60" alt="MECA">

   <!--collapse button-->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
<!--end of button-->

<!-- nav items-->
  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: 'Merriweather', serif; font-size: 20px; padding-left: 20px; ">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">History</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#">Trustee's Board</a>
      </li>
       <li class="nav-item" >
        <a class="nav-link"  href="#" >Blog</a>
      </li>

<!--        -->
<!--        -->
<!--        -->
     <li class="nav-item dropdown" >
         <form action="CodeServer.php" method="post">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="login_students">
          Sign in
        </a>
         </form>
        <!--end of nav items-->
      

      <!--Sign in & sign Up Drop Down Menu//-->
        <div  class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding: 10px; text-align: center;">
           <form   class="form-inline" style="text-align: center;" method="post" action="login.php">
            Have An Account ? <br>
          <input class="form-control mr-sm-2" type="textbox" placeholder="Enter Your Username" style="margin-top: 5%" name="Name">

          <input class="form-control mr-sm-2" type="Password" placeholder="Enter Your Password"  style="margin-top: 8%" name="Password"><br>
          <div class="dropdown-divider"></div>
           <button  style="margin-left: 20%; width: 60%;margin-top: 10%; margin-bottom: 5%; border-radius: 30px; font-size: 18px; background-color: orange;color: white;border-color: orange" class="btn btn-secondary btn-sm" type="submit" name="login_students">Sign In</button> 
          Don't Have an Account Yet?

          <button style="margin-left: 20%; width: 60%;margin-top: 5%;border-radius: 30px;font-size: 18px; background-color: white;color: orange;border-color: orange;border-width: 2px;" class="btn btn-secondary btn-sm" type="submit" name="Signup">Sign Up</button>
        </form>
        </div>
      </li>
     
    </ul>

  </div>
</nav>
<!--end of header-->


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>

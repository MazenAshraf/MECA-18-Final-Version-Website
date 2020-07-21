
<!doctype HTML>
<html lang="en">
<!--Start of head tag-->
<head> <!--every comment will be above their lines-->
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
   </head>
   <body>
       
    <div id="background">
        <div id="layer">
          <!--  <div>
                <br>
                <img src="images/logo.png" id="meca">
            </div>-->
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6" id="layer1">
<!--                    -->
<!--                    -->
<!--                    -->
                    
                   <form method="post" action="CodeServer.php">
                       <?php include('error.php'); ?>
                    <img src="images/ibm.png" id="ibm">
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputEmail4" style="color:orange; font-size: 18px;">First Name:</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="First Name" required name="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4" style="color:orange; font-size: 18px;">Last Name:</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputNumber" style="color:orange; font-size: 18px;">Mobile:</label>
    <input type="tel" class="form-control" id="inputNumber" placeholder="Phone Number"  title="01XXXXXXXXX" required name="Mobile">
  </div>
  <div class="form-group">
    <label for="inputAddress2" style="color:orange; font-size: 18px;">E-mail:</label>
    <input type="E-mail" class="form-control" id="inputAddress2" placeholder="E-mail Address" required name="E-mail">
  </div>
   <div class="form-group">
      <label for="inputState" style="color:orange; font-size: 18px;" >University:</label>
      <select id="inputState" class="custom-select" style="width: 100%; height: 15%;" required name="University">
        <option selected>Choose your University</option>
        <option value='Ain Shams'>Ain Shams</option>
              <option value='Cairo'>Cairo</option>
              <option value='Helwan'>Helwan</option>
              <option value='HTI'>HTI</option>
              <option value='MIU'>MIU</option>
              <option value='GUC'>GUC</option>
              <option value='Other'>Other</option>

      </select>
    </div> 
    <div class="form-group">
      <label for="inputState" style="color:orange; font-size: 18px;" >Faculty:</label>
      <select id="inputState" class="custom-select" style="width: 100%; height: 15%;" required name="Faculty">
        <option selected>Choose your Faculty</option>
<!--        <option value=''>Choose your Faculty</option>-->
        <option value='Engineering'>Engineering</option>
        <option value='Computer science'>Computer science</option>
        <option value='Other'>Other</option>

      </select>
    </div>
    <div class="form-group">
      <label for="inputState" style="color:orange; font-size: 18px;" >Year:</label><br>
      <select id="inputState" class="custom-select" style="width: 100%; height: 15%;" required name="Year">
        <option selected>Select your year</option>
        <option value='0' ng-disabled="(faculty != 'Engineering')">0</option>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>

      </select>
    </div>

   <div class="form-group">
      <label for="inputState" style="color:orange; font-size: 18px;" >Major:</label><br>
      <select id="inputState" class="custom-select" style="width: 100%; height: 15%;" required name="Major">
        <option selected>Select your Major</option>
            <option value='1'>Mechanical</option>
            <option value='2'>Electrical</option>
            <option value='3'>Civil</option>
            <option value='4'>Architecture</option>
            <option value='4'>Other</option>

      </select>
    </div>



   <div class="form-group">
      <label for="inputState" style="color:orange; font-size: 18px;" >ID:</label><br>
      <select id="inputState" class="custom-select" style="width: 100%; height: 15%;" required name="col-ID">
        <option selected>Select your uni ID</option>
            <option value='1'>0</option>
            <option value='2'>1</option>
            <option value='3'>2</option>
            <option value='4'>3</option>
            <option value='4'>4</option>

      </select>
    </div>

    <br>
    <button type="Submit" class="btn btn-warning btn-lg" name="reg_students">Submit</button>
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
        </div>
        <!--end of background-->
                
       
   </body>
   </html>

<?php
include('CodeServer.php');
session_start();


if (isset($_POST['reg_Fair']))
{
$name = $_POST['fullName'];
$mobile = $_POST['Phone'];
$email = $_POST['E-Mail'];
$governorate = $_POST['Governorate'];
$date = $_POST['Birthday'];
$query = "SELECT * FROM `MakerFairEvent` WHERE `mobile`=$mobile";
$result = mysql_query($query);
$rows = mysql_num_rows($result);
if($rows>0)
{
            echo '<script type="text/javascript">
            alert("Username already exists, Press OK to return to Register page");
            window.location.href = "Fairregister.php";
            </script>';
}
else
{

	$query = "INSERT INTO `MakerFairEvent` (`name`,`mobile`,`email`,`governorate`,`birthdate`) VALUES ('$name', $mobile ,'$email','$governorate','$date');";
	$Status = mysql_query($query);
	if($Status==TRUE)
	{
            echo '<script type="text/javascript">
            alert("Thanks for submitting :)");
            window.location.href = "index.php";
            </script>';	
        }
        else
        {
            echo '<script type="text/javascript">
            alert("Please register again");
            window.location.href = "Fairregister.php";
            </script>';
        }

}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- external style sheet -->
	<link rel="stylesheet" type="text/css" href="css/makerfairestyle.css">

	<!-- googlefonts -->
<link href="https://fonts.googleapis.com/css?family=Amaranth|Kavivanar|Quicksand" rel="stylesheet">
</head>
<body>

	<!-- whole page   -->
	<div class=" page container-fluid  ">
		<div class="row qq" >
			<!-- form area  -->
			<div class="  reg  col-xs-offset-2 col-xs-8" >
				<div class="container-fluid ">
					<div class="row">

						<form  target=""  method="post" action="Fairregister.php">
							
							<fieldset>

									<legend "><span style="color: orange;">MECA</span> <span style="color: white;">&</span> <span style="color: red;">Maker Faire</span></legend>

									<div class="input-group col-xs-offset-2 col-xs-8">
					    			<label class="text" >Full Name : </label><br>

									<input type="text" name="fullName"  class="form-control" placeholder="Enter Your Full Name" autofocus required>
									
									</div>

									<div class="input-group  col-xs-offset-2 col-xs-8">

										<label  class="text">Your Phone :</label> <br>

											<input type="text" name="Phone"  class="form-control" placeholder="Enter Your phone " pattern="[0-9]{11}" title="11 letter phone number" required><br>
									</div>

									<div class="input-group  col-xs-offset-2 col-xs-8">

										<label class="text" >E-Mail : </label><br>

											<input type="email" name="E-Mail" class="form-control" placeholder="Enter Your E-Mail" required>
									</div>

									<div class="input-group  col-xs-offset-2 col-xs-8">
										<label  class="text" >Birthday:</label> <br>

					 					 <input type="date" name="Birthday"  class="form-control" min="1960-01-01" max="2016-01-01" required> 
									 </div>
									
									<div class="input-group  col-xs-offset-2 col-xs-8">

										<label class="text" >Governorate :</label> <br>

											<select id="id_country" name="Governorate"  class="form-control"  required >
											<option  value="Cairo" selected="selected">Cairo</option>
										         <option  value="Giza">	Giza </option>
										         <option value="Alexandria " >Alexandria </option>
										         <option value="Qalyubia" >Qalyubia</option>
										         <option value="Monufia" >	Monufia</option>
										         <option value="Sharqia" >Sharqia  </option>
										         <option value="Gharbia" >Gharbia  </option>
										         <option value="Aswan" >Aswan</option>
										         <option value="Luxor" >Luxor</option>
										         <option value="Beheira" >	Beheira </option>
										         <option value="Beni Suef" >Beni Suef </option>
										         <option value="Faiyum" >Faiyum </option>
										         <option value="Dakahlia" >Dakahlia </option>
										         <option value="Damietta" >Damietta </option>
										         <option value="Ismailia" >Ismailia</option>
										         <option value="Kafr El Sheikh" >Kafr El Sheikh</option>
										         <option value="Matruh" >	Matruh</option>
										         <option value="Minya" >Minya</option>         
										         <option value="New Valley" >New Valley</option>         
										         <option value="Port Said" >Port Said</option>         
										         <option value="Qena" >Qena</option>
										         <option value="Red Sea" >Red Sea</option>
										         <option value="Sohag" >Sohag</option>
										         <option value="Asyut" >	Asyut  </option>
										         <option value="North Sinai" >North Sinai </option>
										         <option value="South Sinai" >South Sinai</option>
										         <option value="Suez" >Suez</option>				  
											</select>

									</div>

									 <div class="input-group col-xs-offset-3  col-xs-6">
									 	<input class=" text btn btn-default btn-block"  type="submit" value="Submit" name="reg_Fair">
									 </div>


									
					  


							</fieldset>
						</form>


					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
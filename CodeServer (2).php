<?php

session_start();

// variable declaration
$name = "";
$email = "";
$password = "";
$errors = array();
$check = FALSE;
$_SESSION['success'] = "";

$conn = mysql_connect('mecaegyptorg.ipagemysql.com', 'meca', 'meca17'); 
if (!$conn) { 
    die('Could not connect: ' . mysql_error()); 
} 
//echo 'Connected successfully'; 
mysql_select_db(meca1); 
// REGISTER USER

if (isset($_POST['Signup'])) {
    header('location:signup.php');
}
if (isset($_POST['reg_students'])) {

    $name = $_POST['Name'];
    $email = $_POST['E-mail'];
    $university = $_POST['University'];
    $faculty = $_POST['Faculty'];
    $Col_id = $_POST['col-ID'];
    $major = $_POST['Major'];
    $year = $_POST['Year'];
    $mobile = $_POST['Mobile'];


    // form validation: ensure that the form is correctly filled
    // register user if there are no errors in the form
    if (count($errors) == 0) {

        $query = "SELECT * FROM `students` WHERE `Mobile`='$mobile' ";
        $result = mysql_query($query);
        $num_rows = mysql_num_rows($result);
        if ($num_rows > 0) {
            echo '<script type="text/javascript">
            alert("Username already exists, Press OK to return to Register page");
            window.location.href = "signup.php";
            </script>';
        } else {

            $query = "INSERT INTO `students` (`Name`, `Mobile`, `Password`, `Email`, `University`, `Faculty`, `Col_ID`, `Major`, `Year`) VALUES ('$name',$mobile,'$mobile','$email','$university','$faculty','$Col_id','$major','$year');";

          $status = mysql_query($query);
           if ($status == TRUE) {
                
                //echo "Inserted Successfully";
            $_SESSION['Name'] = $name;
            $_SESSION['Mobile']=$mobile;
            
            echo '<script type="text/javascript">
            alert("Your Mobile Number is your Password !! to continue Press OK");
            window.location.href = "Homesign.php";
            </script>';
            $_SESSION['success'] = "You are now logged in and your password is  " . $mobile;
               
            $_SESSION['Name'] = $name;
            $_SESSION['Mobile']=$mobile;
            $_SESSION['Email']= $email;
            header('location:Homesign.php');
            }  else {
            echo "Error: " . $query . "<br>" . $conn->error;    
            }
            
            
        }
    }
    if ($check) {
        header('location:signup.php');
    }
}

// ...
// ... 
// LOGIN USER
if (isset($_POST['login_students'])) {
    $email = $_POST['E-mail'];
    $password =$_POST['Password'];

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {

        $query = "SELECT * FROM `students` WHERE `Email`='$email' AND `Mobile`='$password' ";
        $result = mysql_query($query);
        $num_rows = mysql_num_rows($result);
        if ($num_rows > 0) {
           $row= mysql_fetch_row($result );
                $_SESSION['Name'] = $row [1];
                $_SESSION['Mobile']=$row [2];
                $_SESSION['Email']=$email;
                header('location: Homesign.php');  
        
    } else {
        
        echo '<script type="text/javascript">
            alert("wrong password/email combination , Press OK to return to login page");
            window.location.href = "index.php";
            </script>';
    }
}
}
if (isset($_POST['Signup'])) {

    header('location:signup.php');
}
// Logout user
if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['Name']);
    header('location: index.php');
}
if(isset($_POST['Check_result1'])){
    $mobile = $_SESSION['Mobile'];
//echo "here";
    //echo $_SESSION['Mobile'];
    $query = "SELECT * FROM `students` WHERE `Mobile`='$mobile' ";
    $result = mysql_query($query);
    $row= mysql_fetch_row($result);
    if($row [10]==1)
    {
    header('location:congratulations.php');
    }
    else{
        header('location:sorry.php');
    }
}
if(isset($_POST['go'])){
header('location:homesign.php');
}

if(isset($_POST['SecRec'])){
    $mobile = $_SESSION['Mobile'];
    $name = $_POST['name'];
    $committeeID=$_POST['Committee'];
    $dateid = $_POST['interviewDate'];

    $CommitteeQuery = " SELECT * FROM `Committees` where `ID`= '$committeeID' ";
    $comResult =mysql_query($CommitteeQuery);
    $row2 = mysql_fetch_row($comResult);

    $CommitteeName=$row2[1];
if($CommitteeName == ""){
      echo '<script type="text/javascript">
            alert("Please Select your Committee First !, Press OK to return to Home page");
            window.location.href = "Homesign.php";
            </script>';
    }
else{
if($dateid == 0)
        {
          echo '<script type="text/javascript">
            alert("Good Luck in the Next Time ;), Press OK to return to Home page");
            window.location.href = "Homesign.php";
            </script>';
        }
        else
        {
if($dateid == -1)
          {
            echo '<script type="text/javascript">
            alert("Please Select The Date First !, Press OK to return to Home page");
            window.location.href = "Homesign.php";
            </script>';
          }
          else{
    $query1 = "SELECT * FROM `students` WHERE `Mobile`='$mobile' ";
    $result = mysql_query($query1);
    $row= mysql_fetch_row($result);

    if($row[11] != NULL)
    {
        echo '<script type="text/javascript">
            alert("You Have Already Selected your Committee !, Press OK to return to Home page");
            window.location.href = "Homesign.php";
            </script>';
    }
    else
    {
        

      $DateQuery = " SELECT * FROM `timesInterview` where `ID`= '$dateid' ";
      $slots =mysql_query($DateQuery);
      $row1= mysql_fetch_row($slots);
      $date = $row1[1];

      $query = "UPDATE `students` SET `Committee` = '$CommitteeName',`interview`='$date' WHERE `Mobile`='$mobile' ";
      $result1 = mysql_query($query);

      $id= $row1[2];
      $newid=$id-1;
      $Updatequery = "UPDATE `timesInterview` SET `avalib`=$newid WHERE `ID`= '$dateid' ";
      $result2 = mysql_query($Updatequery);
      $previd= $row2[2];
      $new=$previd-1;
    
    $Updatequery2 = "UPDATE `Committees` SET `Avail`=$new WHERE `ID`= '$committeeID' ";
    $result3 = mysql_query($Updatequery2);

        if ($result1 == TRUE) {
        echo '<script type="text/javascript">
            alert("Good Luck in your interview ;) !, Press OK to return to Home page");
            window.location.href = "Homesign.php";
            </script>';
        header('location:Homesign.php');
        }
}
    }
    }
    }
}
/* //bdayet el platform'
$majorstudent="SELECT * From `students` Where `Major`='$major'";
$query4=mysql_query($studentquery);
$d=mysql_fetch_row($query4);
//$d['major']

$majorplatform=$_POST['major'];
$platformquery= "SELECT * FROM `platform` Where `major`='$majorplatform'";
$query5 = mysql_query($platformquery);
$r = mysql_fetch_row($query5);
if($d['Major']==$r['major'])
{

$_SESSION['major'] = "$majorplatform";

    echo $majorplatform;
    header('location:Homesign.php');
} */

?>

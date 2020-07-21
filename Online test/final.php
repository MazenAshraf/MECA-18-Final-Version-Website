<?php session_start(); ?>
<?php include'database.php';?>
<?php
$mobile1=$_SESSION['Mobile'];
$score=array();
$score = $_SESSION['score'];
$mazen=array();
$mazen=$_SESSION['choicess'];
$x1= 0;
$x2=$_SESSION['a'];
    $x3=$_SESSION['b'];
    $x4=$_SESSION['c'];
    $x5=$_SESSION['d'];
    $x6=$_SESSION['e'];
$y=$x5+$x6;


//UPDATE  `users` SET  `email` =  'mazenashraf@Live.com' WHERE CONVERT(  `name` USING utf8 ) =  'Mazen Ashraf Mohamed' AND CONVERT(  `email` USING utf8 ) =  'mazenashraf@Live.co' AND  `mobile` =1001331887 AND  `section1` =0 AND  `section2` =0 AND  `section3` =0 AND  `section4` =0 AND  `Test` =1 LIMIT 1 ;
//echo $mobile1;
 
            // $query1 = "UPDATE `users` SET `section1`=6 AND `section2`=6 AND `section3`=6 AND `section4`=7  WHERE `mobile` =$mobile1 ";
//DELETE FROM Customers
//WHERE CustomerName='Alfreds Futterkiste';
$query1="UPDATE  `users` SET  `section1` =  $x1 , `section2` =  $x2 , `section3` = $x3 , `section4` = $x4, `section5`= $y WHERE  `mobile` =$mobile1 LIMIT 1" ;
             $status = mysql_query($query1);

unset($_SESSION['random_q']);
unset($_SESSION["duration"]);
unset($_SESSION['score']);
unset($_SESSION["Mobile"]);
unset($_SESSION["start_time"]);
unset($_SESSION["end_time"]);
unset($_SESSION['Second']);
unset($_SESSION["Email"]);
unset($_SESSION['Name']);
unset($_SESSION['random_sample']);
unset($_SESSION['current_para']);
unset($_SESSION['para_no1']);
unset($_SESSION['choicess']);
session_destroy();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MECA</title>
    <link rel="stylesheet" type="text/css" href="css/ques.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>MECA Test</h1>
        </div>
    </header>
    <main>
        <div class="container" id="middle">
            <h2 style="text-align:center;font-family: 'Merienda', cursive;font-size:30px"><strong>You're Done!</strong></h2>
            <p style="text-align:center;font-family: 'Merienda', cursive;"><strong>Congrats! You have completed the test</strong></p>
            <p style="text-align:center;font-family: 'Merienda', cursive;"><strong>Stay tuned for your result ;)</strong> </p>
            
            <form action="process.php" method="POST">
            <input type="submit" name="home" value="Back Home" id="subbut">
                </form>
        </div>
    </main>
    <footer>
    <div style="background: #f87e0a !important; font-size: 25px;" class="container">
     © MECA'18 Developed by MECA IT Committee
        </div>
    </footer>
</body>
</html>
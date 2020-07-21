<?php include'database.php';?>
<?php session_start();?>
<?php
if(!isset($_SESSION["Mobile"] ))
{
   header('Location: http://www.mecaegypt.com/');
}
$duration="";
$page = $_SERVER['PHP_SELF'];
$sec = "5";
//                    $query = "SELECT * FROM `choices` WHERE `question_number`='$no_q' AND `is_correct`=1";
$query="SELECT * FROM `timer`";
$res=mysql_query($query);
while ($row=mysql_fetch_array($res)) {
  $duration=$row["duration"];
}
if(!isset($_SESSION["duration"] ))
{
$_SESSION["duration"] = $duration;//duration
}
if(!isset($_SESSION["start_time"]))
{
$_SESSION["start_time"] = date("Y-m-d H:i:s");
}
$end_time=date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes', strtotime($_SESSION["start_time"])));
if(!isset($_SESSION["end_time"]))
{
$_SESSION["end_time"] = $end_time;
}

if($_SESSION['Second']<1)
{
if(isset($_SESSION['Second'] ))
{

//header('Location: http://www.mecaegypt.com/quiz/final.php');
    header('Location:final.php');

exit();
}
}
?>
<?php
//set section number
  $number = (int) $_GET['n'];



  // //get question
  // $query = "SELECT * FROM `questions` WHERE `question_number` = '$number'";
  // //get result
  // $result = mysql_query($query);
  // $question = mysql_fetch_array($result);


  //get total number of questions
//  $query = "SELECT * FROM `questions`";
//  $result= mysql_query($query);
//  $total = mysql_num_rows($result);
?>




            <?php
// taking username and e-mail
if(isset($_SESSION["Email"]))
{
            $name1=$_SESSION['Name'];
            $email1=$_SESSION['Email'];
            $mobile1=$_SESSION['Mobile'];
            $zero=0;
            $test=1;
            $query1="SELECT * FROM `users` WHERE `email`='$email1' AND `Test`='$test'";
            $status1=mysql_query($query1);
            if(mysql_num_rows($status1)>0){
              ?>
              <script type="text/javascript">
                window.location.href = "http://mecaegypt.com/onlinetest/done.php";
              </script>
<?php
            }
             $query = "INSERT INTO `users` (`name`, `email`, `mobile`,`section1`,`section2`,`section3`,`section4`,`section5`,`Test`) VALUES ('$name1','$email1','$mobile1','$zero','$zero','$zero','$zero','$zero','$test');";
             $status = mysql_query($query);
                       if ($status == TRUE) {
                           unset($_SESSION['Email']);
                       }
}
            ?>
<!DOCTYPE html>
<html>
<head >
  <meta charset="utf-8">
    <meta http-equiv="refresh" content="<?php echo $_SESSION['Second'];?>" />
  <title>Platform Test</title>
          <script type = "text/javascript" >

   function preventBack(){window.history.forward();}

    setTimeout("preventBack()", 0);

    window.onunload=function(){null};
function disableselect(e) {
    return false;
}

function reEnable() {
    return true;
}

document.onselectstart = new Function("return false");

if (window.sidebar) {
    document.onmousedown = disableselect;
    document.onclick = reEnable;
}
</script>
  <link rel="stylesheet" type="text/css" href="css/ques.css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya|Bree+Serif|Courgette|Crimson+Text|Lora|Merienda|Shrikhand" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
</head>

<body>
<div id="response"></div>
<script type="text/javascript">
  setInterval(function()
  {
    var xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET","response.php",false);
    xmlhttp.send(null);
    document.getElementById("response").innerHTML=xmlhttp.responseText;
  },1000);
</script>
  <header>
    <div class="container">
      <h1>Test</h1>
    </div>
  </header>
  <main>
    <div class="container" id="middle">
      <div class="current">Section <?php echo $number; ?> of 6</div>
        
        <div class="w3-light-grey w3-round">
        <div class="w3-container w3-round w3-green" style="width:<?php if($number==1){echo"0%";} else if($number==2) {echo"16%";} else if($number==3) {echo"32%";}  else if($number==4) {echo"48%";} else if($number==5) {echo"64%";} else if($number==6) {echo"84%";} ?>"><?php if($number==1){echo"0%";} else if($number==2) {echo"16%";} else if($number==3) {echo"32%";}  else if($number==4) {echo"48%";} else if($number==5) {echo"64%";} else if($number==6) {echo"84%";} ?></div>
        </div>
        
      <p class="question" style=" display: block;">
          <?php
      //get question
                if($number==1)
                {
                    $min=200;
                    $max=206;
                    
                }
                else if($number==2){
                    $min=1;
                    $max=5;
                }
                else if($number==3){
                    $min=6;
                    $max=10;
                }
                 else if($number==4){
                    $min=11;
                    $max=14;
                }
          //$i=rand($min, $max);
          
          
          
          if(!isset($_SESSION['random_sample']))
          {
          $random_sample=rand(1,4);
          $_SESSION['random_sample']=$random_sample;         //choosing a random sample for the user
          }
          else
          {
            $random_sample=$_SESSION['random_sample'];
          }
          //$ques = $i + ($random_sample-1)*20;    //question number in question table
          $q_number=0;
          $q=1;
            if($number==5||$number==6)
            {
                     //x = current paragraph
                     $x=rand(1,2);
                     $parag = $x + ($random_sample-1)*2;   //paragraph number in the table

                    //to show the same paragraph if the user refreshes page
                     if(!isset($_SESSION['current_para'])){
                         
                     //to make randomize in paragraphs between section5&6
                     if(isset($_SESSION['para_no1']))
                     {
                         while($x==$_SESSION['para_no1'])
                             $x=rand(1,2);
                     $parag = $x + ($random_sample-1)*2 ;  //paragraph number in the table
                     }
                         //showing questions of the desired paragraph
                     $_SESSION['para_no1']=$x;
                     $query4="SELECT * FROM `Para`WHERE `para_no`= $parag";
                     $para=mysql_query($query4);
                         while($row=mysql_fetch_array($para))
                         { 
                             echo "<h3><strong>Read the paragraph and answer accordingly:</strong></h3> ";
                           // echo"Read the paragraph and answer accordingly:";
                            echo "<br>";
                            echo $row['para_text']; 
                            echo "<br>";
                            $i=$row['question_no'];
                         }
                         $q=2;
                    $_SESSION['current_para']=$parag;
                         }
                
                 else if(isset($_SESSION['current_para']))
                {
                  $zz=$_SESSION['current_para'];
                     $query5="SELECT * FROM `Para`WHERE `para_no`= $zz";
                     $para=mysql_query($query5);
                         while($row=mysql_fetch_array($para)){ 
                             echo "<h3><strong>Read the paragraph and answer accordingly:</strong></h3> ";
                           // echo"Read the paragraph and answer accordingly:";
                            echo "<br>";
                            echo $row['para_text']; 
                            echo "<br>";
                            $i=$row['question_no'];

                         }
                         $q=2;
                }
        }
                
                $random_q=array();
               // if(!isset($_SESSION['random_q']))
                //{
                $_SESSION['start']=$i;
         
                    
                    

                
                    if($number==2||$number==3||$number==4)
                    {
                          $random_q = range($min,$max);
                          shuffle($random_q);
                     }
               if($number==1)
               {
                   $random_q[0]=rand(200,206);
               }
          ?>
                    <?php
           // paragrapph section won't randomize question   para randomize 
                    if($number==5||$number==6){
                         while($q<=4):
          
                        $random_q[$q_number]=$i;
                        $i++;
                        $q_number++;
                        $q++;
                        endwhile;
         
                    }
          
                    ?>
          
          <?php
          
          
          if($number==2||$number==3)
          {
            for( $t=0 ; $t<=4 ; $t++) {
              $random_q[$t]= $random_q[$t] + ($random_sample-1)*20 ;
            }
          }
                    if($number==4)
                    {
                       for( $t=0 ; $t<=3 ; $t++) {
                        $random_q[$t]= $random_q[$t] + ($random_sample-1)*20 ;
                                                } 
                    }
          // }
                          //showing the same questions if the user refresh the page
                  // if(isset($_SESSION['random_q']))
                  // {  
                  // $random_q=$_SESSION['random_q'];
                  // }


            ?>
      <p style="font-size: 25px;"><?php
          
          //nfzna el etnen query abl el whilat 3alshan nwfr neoptimze el mawdo3 
          
             //   SELECT * FROM Customers WHERE Country IN ('Germany', 'France', 'UK');
        $query = "SELECT * FROM `questions` WHERE `question_number` IN ('$random_q[0]','$random_q[1]','$random_q[2]','$random_q[3]','$random_q[4]') ORDER BY `question_number`";
        //get result
        $result = mysql_query($query);
        $numRowsR = mysql_num_rows($result);  
                      //get results
          
        $query2 = "SELECT * FROM `choices` WHERE `question_number` IN   ('$random_q[0]','$random_q[1]','$random_q[2]','$random_q[3]','$random_q[4]') ORDER BY `question_number`";
        $choices = mysql_query($query2);
        $numRows = mysql_num_rows($choices);
        $numChoice = 4;
        $no=1;
          
        while($question = mysql_fetch_array($result))
                    {
            
                        echo $no.'-';
                        echo $question['text'] ;
                        //echo "<br>";
                       if($number==1)
                        {
                            echo "(LIMITED: 5 MINS)";
                            echo "<br>";
                            echo "<br>";

                        } 
          ?></p>


    
        
            <p><?php $check_Image=$question['images'];
                if($check_Image!=''){
               echo '  
                         <tr>  
                              <td>  
                                  <img src="data:image/jpg;base64,'.base64_encode($question['images'] ).'"   class="img-thumnail" />  
                              </td>  
                         </tr>  
                     ';  
                }
          
                ?></p>
               
      <form method="post" action="process.php" style="font-size: 25px !important;">
        <ul class="choices">
            
          <?php
                    //get choices
                    
            while($row= mysql_fetch_array($choices))
            {
              if($row['question_number']==$question['question_number'])
              {
            ?>
          <li><input type="radio" name="<?php echo $random_q[$no-1]; ?>" value="<?php echo $row['id']; ?>">
                        <?php echo $row['text'];
                        ?>
                        <?php $check_Image=$row['Images'];
                        if($check_Image!=''){
                         echo '  
                         <tr>  
                              <td>  
                                  <img src="data:image/jpg;base64,'.base64_encode($row['Images'] ).'"class="img-thumnail" />  
                              </td>  
                         </tr>  
                        ';                            
                        }
                        ?> 
                        
         </li>
          <?php
              }
            }
            ?>
        </ul>
            <?php
            mysql_data_seek($choices, 0);
             
           $no++;
          }
            ?>
          
                                    <?php
                $_SESSION['random_q']=$random_q;
//                for($i=0;$i<=4;$i++)
//                {
//                  echo $random_q[$i]."A";
//                }
                 ?>
<!--        <input type="text" name="sit" style="display: none;" placeholder="Answer" id="situation">
 -->       <textarea style="width:90%; height:100px; display: none;" id="situation" name="sit" placeholder=" Answer...">
</textarea>
<br>
<br>
                   <?php if ($number==1) {
            ?>
            <style type="text/css">#situation{
            display:block !important;
            }</style>
            <?php
            } ?>
       <input id="subbut" type="submit" style="height: 50px;" name="submit" value="<?php 
                if($number==1||$number==2||$number==3||$number==4||$number==5) {                           
                        echo  "NEXT"  ;
                }
                else if($number==6)
                        {
                        echo"SUBMIT" ;
                        }
            ?>">
        <input type="hidden" name="number" value="<?php echo $number; ?>">
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
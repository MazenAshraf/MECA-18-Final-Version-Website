<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
$start=$_SESSION['start'];
$mobile1=$_SESSION['Mobile'];
$random_received=array();
$random_received=$_SESSION['random_q'];
$selected=array();
$selected[0]=5;
    if(!isset($_SESSION['score']))
    {
        $sections_score=array();
        $sections_score[1]=0;
        $sections_score[2]=0;
        $sections_score[3]=0;
        $sections_score[4]=0;
        $sections_score[5]=0;
        $sections_score[6]=0;
        $_SESSION['score']=$sections_score;
    }
    if(isset($_POST['submit']))
    {
                 $qwe=0;
                 while($qwe<=4)
                 {
                    $selected[$qwe]=$_POST[''.$random_received[$qwe]];
                   $qwe=$qwe+1;
                   $start=$start+1;

                 }
        $_SESSION['choicess']=$selected;


        //$selected_choice = $_POST['choice'];
        $number = $_POST['number'];
        $next = $number + 1;

//      //get total number of questions
//      $query = "SELECT * FROM `questions`";
//      $result = mysql_query($query);
//      $total = mysql_num_rows($result);

        //get correct choice

        $query = "SELECT * FROM `choices` WHERE `question_number` IN ('$random_received[0]','$random_received[1]','$random_received[2]','$random_received[3]','$random_received[4]') AND `is_correct`=1";
                        //get result
                $result = mysql_query($query);
         $K=1;
        // $h=4;//number of questions of para
        // if($number==5||$number==6)
        // {
        //     $h=3;
        // }
        while($row = mysql_fetch_array($result))
        {
            
                //$no_q = $random_received[$K];
                //get row
                
            
            //header('location: final.php');
          for($j=0;$j<=4;$j++){
                    if($row['id'] == $selected[$j] && $selected[$j]!='')
                        {
                            // //answer is correct
                            
                            $sections_score=$_SESSION['score'];
                            $sections_score[$number]=$sections_score[$number]+1;
                            $_SESSION['score']=$sections_score;
                        
                        if($number == 2){
                            $_SESSION['a'] = $sections_score[2];
                        }
                         if($number == 3){
                            $_SESSION['b'] = $sections_score[3];
                        }
                         if($number == 4){
                            $_SESSION['c'] = $sections_score[4];
                        }
                         if($number == 5){
                            $_SESSION['d'] = $sections_score[5];
                        }
                         if($number == 6){
                            $_SESSION['e'] = $sections_score[6];
                        }
                    }
                    
          }
                $K=$K+1;
            
        }

        if ($number==1) {
            $text=$_POST['sit'];
            $insert="UPDATE  `users` SET  `situations` =  '$text' WHERE  `mobile` =$mobile1 LIMIT 1" ;
            $resu=mysql_query($insert);
                        }
      
        if ($number ==6) {
                unset($_SESSION['random_q']);
                header('location: final.php');
        }
        else
        {
            unset($_SESSION['random_q']);
            unset($_SESSION['current_para']);
            unset($_SESSION['choicess']);
            header('location: question.php?n='.$next);
        }
        
    }
if(isset($_POST['home']))
{
header('location:../index.php');
}
?>
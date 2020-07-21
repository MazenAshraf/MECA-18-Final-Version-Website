<?php
session_start();
$from_time1=date('Y-m-d H:i:s');
$to_time1=$_SESSION["end_time"];
$timefirst=strtotime($from_time1);
$timesecond=strtotime($to_time1);
$differenceinseconds=$timesecond-$timefirst;
$_SESSION['Second']=$differenceinseconds;
if($_SESSION['Second']<1)
{
			
exit();
}?>
<html>
    <head>
    <style>
        #scroll{
          color:saddlebrown;  
            left:5px;
        }
        #scroll:hover{
            color:darkslateblue;
        }
        .layer{
            background-color: rgba(248, 247, 216, 0.7);
            position: absolute;
            width: 10px;
            height: 7%;
        }
    </style>
    </head>
<body>
<!--<div style="overflow-y: scroll; height:400px;">-->
<!-- 
<script>
    window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scroll").style.top = "-50px";
  }
}
</script>
-->
    
<h1 id="scroll" style="position:fixed;top:10px;width:100%;" class="layer"><?php  echo gmdate("i:s",$differenceinseconds);?></h1>
</body>
</html>

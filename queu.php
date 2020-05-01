<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Result|How much do you really know about Bollywood ?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">  
    <meta name="keywords" content="Bollywood, Indian Cinema, Bollywood quiz, quiz, Indian cinema quiz">
    <meta name="author" content="priyanG"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>
    <a href="vowow.html"><h1>vowow</h1></a>
    <header class="head">
      How much do you really know about bollywood ?

</header>
    
        
    <div class="answer-flex">   
        
   <div class="box">
<?php
 
    if(empty($_POST['q1']) || empty($_POST['q2']) || empty($_POST['q3']) || empty($_POST['q4']) || empty($_POST['q5']) || empty($_POST['q6']) || empty($_POST['q7']) || empty($_POST['q8']) || empty($_POST['q9']) || empty($_POST['q10']))
    {
        header("Location: ../vowow/Main.html?Please select atleast one of the option kela");
     }
    
   else{
    $count=0;
    $ans1=$_POST['q1'];
    $ans2=$_POST['q2'];
    $ans3=$_POST['q3'];
    $ans4=$_POST['q4'];
    $ans5=$_POST['q5'];
    $ans6=$_POST['q6'];
    $ans7=$_POST['q7'];
    $ans8=$_POST['q8'];
    $ans9=$_POST['q9'];
    $ans10=$_POST['q10'];
   

    if($ans1=="C"){
        $count++;    
    }
    if($ans2=="A"){
        $count++;    
    }
    if($ans3=="B"){
        $count++;    
    }
    if($ans4=="A"){
        $count++;    
    }
    if($ans5=="D"){
        $count++;    
    }
    if($ans6=="C"){
        $count++;    
    }
    if($ans7=="B"){
        $count++;    
    }
    if($ans8=="B"){
        $count++;    
    }
    if($ans9=="B"){
        $count++;    
    }
    if($ans10=="C"){
       
        $count++;    
    }
    if($count>=7){
        echo "<p>Congratulations</p>";
        echo "<p>You scored $count out of 10 </p>";
    }
    else if($count>=4){
        echo "<p>You scored $count out of 10 </p>";
        echo "<p>You're good but....<p>";
    }
    else{
        echo "<p>You scored $count out of 10 </p>";
        echo "<p>Sometimes it's good to chill out and watch a movie<p>";
    }
    
   
     
   }
    
  
 

?>
</div>
</div>
<footer class="botom">
                  <!--Social media button-->  
                  <div class="share-button">
                    <div class="fb-share-button" data-href="https://vowow.000webhostapp.com/vowow.html" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fvowow.000webhostapp.com%2Fvowow.html&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                    <div class="twitter-share-button"> <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
                    <a style=" color: rgb(30, 235, 30); font-size:22px ; margin-left: 17px;;" class="fab fa-whatsapp-square" href="https://wa.me/?text=How much do you really know about Bollywood? |Take the Quiz| :https://vowow.000webhostapp.com/Main.html"></a>
                </div> 
                <br>All rights reserved-&copy; 2020 vowow
         </footer>
</body>
</html>
<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which word goes in all these spaces? I always ____ up early. I ____ on well with Hannah. I ____ to work at 9.00",
   1 => "make",
   2 => "look",
   3 => "get",
   6 => 3
),
2 => array(
   0 => " Which word goes in all these spaces? ____ out! There’s a truck! I have to____ after my little sister. I ____ forward to seeing you again.",
   1 => "look",
   2 => "make",
   3 => "get",
   6 => 1
),
3 => array(
   0 => "Tom doesn’t like his job, but he has to ___ up with it, for the sake of his family.",
   1 => "make",
   2 => "get",
   3 => "put",
   6 => 3
),
4 => array(
   0 => "I don’t have time to write up the document. Can you ___ to it please?",
   1 => "see",
   2 => "take",
   3 => "make",
   6 => 1
),
5 => array(
   0 => "Which sentence is NOT correct?",
   1 => "When you get at the traffic lights, turn right.  ",
   2 => "Get off the train at Central Station.  ",
   3 => "How do I get to Central Station please? ",
   6 => 1
),
6 => array(
   0 => "I ‘m really looking ____ to your party!",
   1 => "forward  ",
   2 => "up  ",
   3 => "over   ",
   6 => 1
),
7 => array(
   0 => "Which phrase CANNOT complete this sentence? She doesn’t get on with…",
   1 => "her work.  ",
   2 => "the other children.  ",
   3 => "her bag.",
   6 => 3
),
8 => array(
   0 => "Which word CANNOT go in the space? Don’t worry, I’ll look ________ it. ",
   1 => "after",
   2 => "into",
   3 => "to",
   6 => 3
),
9 => array(
   0 => "Our car _________ on the motorway.",
   1 => "took off  ",
   2 => "got off  ",
   3 => "broke down  ",
   6 => 3
),
10 => array(
   0 => "Children need someone responsible to __________.",
   1 => "look up to  ",
   2 => "put up with  ",
   3 => "see to ",
   6 => 1
),
);



$max=10;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }
        
$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percentaje=0;
        }else{
        $percentaje= Round(100*$ok / $question);
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>TOEFL Online</title>
<meta charset="utf-8">
<link rel="icon" href="">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css">

<script language='JavaScript'>
<!-- 
function Goahead (number){
        if (document.percentaje.response.value==0){
                if (number==<?php print $a[$randval2][6] ; ?>){
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                        document.percentaje.ok.value++
                }else{
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                }
        }
        if (number==<?php print $a[$randval2][6] ; ?>){
                document.question.response.value="Correct"
        }else{
                document.question.response.value="Incorrect"
        }
}
// -->
</script>

</head>
<body>
  <script type="text/javascript">
     var showListForm = function() {
        document.getElementById("penjelasan-form").setAttribute("style", "display:none");
        document.getElementById("show-form").setAttribute("style", "display:block");
        document.getElementById("hide-form").setAttribute("style", "display:none");
      }
    </script>
    <script type="text/javascript">
     var showPenjelasanForm = function() {
        document.getElementById("penjelasan-form").setAttribute("style", "display:block");
        document.getElementById("show-form").setAttribute("style", "display:none");
        document.getElementById("hide-form").setAttribute("style", "display:block");
      }
    </script>

<!--Start Header-->
<header class="page1">
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="#" onClick="goToByScroll('page1'); return false;"><img height="30px" width="1300px" src="images/logo2.png" alt=""></a></h1>
        <div class="menu_block">
        <nav class="">
          <ul class="sf-menu">
            <li class="men1"><a onClick="goToByScroll('page1'); return false;" href="index.php">Home</a><strong class="hover"></strong></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<!--End Header-->

<!-- Start Grammar -->
<div id="page2" class="content"> 
  <div class="container_12">\
  <div class="grid_14">
    <div class="box">
      <div class="slogan4">
      <h3>Inseparable phrasal verbs</h3>
      </div>
         <div style="background-color:#666666; color:white; margin-left:150px; width:620px; padding:5px 0">There are 10 questions in this quiz. Read the grammar explanation below. 
          <div class="box3">
            <table border="0" cellspacing="5px" width="580px">
              <?php if ($question<$max){ ?>
              <tr><td align="right">
                Percentage of correct responses: <?php print $percentaje; ?> %
                <hr>
              </td></tr>
              <tr><td>
              <form method="POST" name="percentaje" action="<?php print $URL; ?>">
                <input type="hidden" name="response" value=0>
                <input type="hidden" name="question" value=<?php print $question; ?>>
                <input type="hidden" name="ok" value=<?php print $ok; ?>>
                <input type="hidden" name="Randon" value=<?php print $randval; ?>>
                <input style="font-family:Trebuchet ms; font-size:14.5px; width:80px; border:1px;" type="submit" value="Next">
              </form>
              </td></tr>

              <tr><td>
              <form method="POST" name="question" action="">
              <br><strong><?php print $question+1; ?>. </strong><?php print "<b>".$a[$randval2][0]."</b>"; ?>
                <br><input type="radio" name="option" value="1"  onClick="Goahead (1);"><?php print $a[$randval2][1] ; ?>
                <br><input type="radio" name="option" value="2"  onClick="Goahead (2);"><?php print $a[$randval2][2] ; ?>
                <?php if ($a[$randval2][3]!=""){ ?>
                <br><input type="radio" name="option" value="3"  onClick="Goahead (3);"><?php print $a[$randval2][3] ; } ?>
                <br><input style="font-family:Trebuchet ms; color:#f77779; font-size:15px; width:60px; border:1px;" type="text" name="response" size=8>
              </form>

              <?php
              }else{
              ?>
              <tr><td align="center">
              The Quiz has finished<br>
              <br>Percentage of correct responses: <?php print $percentaje ; ?> %
              <p><a href="<?php print $address; ?>">Restart</a>

              <?php } ?>

              </td></tr>
              
            </table>

            <form id="show-form">
            <br><a href="#" class="link" onclick="showPenjelasanForm()">Show Explanation</a><br><br><hr>
            </form>

            <form id="hide-form" style="display:none">
            <br><a href="#" class="link" onclick="showListForm()">Hide Explanation</a><br><br><hr>
            </form>

            <form id="penjelasan-form" style="display:none">
            <br><p style="font-size:16px; color:black; text-align:center">Inseparable phrasal verbs</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Phrasal Verbs terdiri dari kata kerja dan satu atau lebih preposisi. Mereka sering digunakan, terutama dalam bahasa Inggris lisan informal. Arti dari kata kerja phrasal sering -benar berbeda dari arti dari kata kerja saja.<br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              1) Beberapa kata kerja phrasal tidak pernah menggunakan obyek. <br>
              <b>get up </b>= get out of bed  <br>
              <em>I get up at seven o’clock every morning.</em><br>
              <b>take off</b> = leave the ground <br>
              <em>The plane took off on time.</em><br>
              <b>look out </b>= beware! be careful!  <br>
              <em>Look out! That car is going to hit you!</em><br>
              <b>get  on </b>= be good friends  <br>
              <em>My dad and my brother don’t get on.   </em><br>
              <b>break down </b>= stop working (for vehicles)<br>
              <em>Our car broke down on the way home from Scotland.</em><br>
              <b>make up </b>= become friends again after an argument<br>
              <em>The kids often fight but they always make up afterwards.</em><br><br>
              2) Beberapa kata kerja phrasal membutuhkan objek. <br>
              <b>get on / off something</b> = exit transport  <br>
              <em>Get off the bus at the next stop.</em><br>
              <b>look after someone / something</b> = take care of someone / something<br>
              <em>Please can you look after our cats while we’re on holiday? </em><br>    
              <b>see to something</b> = do, arrange, prepare, organise<br>
              <em>Don’t worry about dinner. I’ll see to it.</em><br>
              <b>look into something </b>= investigate<br>
              <em>There has been a burglary at the school. Police are looking into it.</em><br>
              <b>get to</b> = arrive at<br>
              <em>When you get to the end of the street, turn right.</em><br><br>
              3) Beberapa kata kerja phrasal berisi tiga kata dan objek . <br>
              <b>look up to someone</b> = respect someone<br>
              <em>I look up to my teachers.</em><br>
              <b>look forward to something </b>= be excited about (a future event)<br>
              <em>I’m looking forward to the party.</em><br>
              <b>get on with someone</b> =  be good friends with someone<br>
              <em>I don’t get on with Karen.</em><br>
              <b>get on with something </b>=  continue doing something<br>
              <em>Please be quiet and get on with your work.</em><br>
              <b>put up with something</b> = tolerate<br>
              <em>I can’t put up with that noise any longer!</em><br><br>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
  </div>
</div>
<!-- End Grammar -->

<footer>
      <div class="copy2"></a> &copy; Febriani F Damanik (132406106) | <a href="#">Privacy Policy</a> <br> </div>
</footer>
</body>
</html>
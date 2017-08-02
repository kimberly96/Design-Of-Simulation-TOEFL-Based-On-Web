<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which sentence is NOT correct?",
   1 => "I’ll finish the work in the morning.  ",
   2 => "We went to Turkey in June.  ",
   3 => "Let’s go the cinema in the weekend.",
   6 => 3
),
2 => array(
   0 => "Which sentence is NOT correct?",
   1 => "I want to go on holiday at New Year.  ",
   2 => "I’ve got a meeting at 10 o’clock.  ",
   3 => "I’m having a party at my birthday.",
   6 => 3
),
3 => array(
   0 => "Which sentence is NOT correct?",
   1 => "We’re going to the theatre on tomorrow night.  ",
   2 => "I’ve got to go to work on Monday.  ",
   3 => "She was born on 6th December.",
   6 => 1
),
4 => array(
   0 => "Which sentence is NOT correct?",
   1 => "I went to university 1996.  ",
   2 => "I saw James yesterday.  ",
   3 => "Shall we go out tonight?  ",
   6 => 1
),
5 => array(
   0 => "Which preposition goes in the space? We’re going on holiday _____ spring.",
   1 => "on",
   2 => "at",
   3 => "in",
   6 => 3
),
6 => array(
   0 => "Which preposition goes in the space? I always have a cup of tea ______ the morning.",
   1 => "on  ",
   2 => "in  ",
   3 => "You don’t need a preposition here.  ",
   6 => 2
),
7 => array(
   0 => "Complete the sentence. I saw Derek _________ Friday afternoon.",
   1 => "in",
   2 => "on",
   3 => "in the",
   6 => 2
),
8 => array(
   0 => "Complete the sentence. We’re going clubbing _________ tonight.",
   1 => "You don’t need a preposition here.",
   2 => "on",
   3 => "at",
   6 => 3
),
9 => array(
   0 => "Which sentence is NOT correct?",
   1 => "Can we visit you at Tuesday?  ",
   2 => "We always have a cup of coffee at breaktime.  ",
   3 => "We always visit our relatives at Christmas.   ",
   6 => 1
),
10 => array(
   0 => "Which sentence is NOT correct?",
   1 => "I left university in 2007.  ",
   2 => "I start college in 30th September.  ",
   3 => "It rains a lot in summer.   ",
   6 => 2
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
      <h3>Prepositions of Time</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Prepositions of Time</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Preposition of time digunakan sebelum kata hari, bulan, tahun dan waktu lainnya.<br><br>
              <b>AT</b><br>
              Digunakan sebelum: <br>
              Times: We’re leaving at 3 o’clock <br>
              Lunchtime / bedtime: He’s arriving at lunchtime. <br>
              Night: I can’t sleep at night. <br>
              The weekend: See you at the weekend! <br>
              Festivals: We went away at Easter. <br><br>
              <b>IN</b> <br>
              the morning / afternoon / evening: See you in the morning!<br>
              Months: My birthday’s in June. <br>
              Seasons: We always go on holiday in summer. <br>
              Years: He was born in 1996. <br><br>
              <b>ON</b><br>
              Dates: We arrived here on 4th August. <br>
              Days of the week: Let’s go to the zoo on Saturday. <br>
              Single day events: We always eat out on Christmas Day. <br><br>
              Gunakan <b>On</b> sebeum day + morning/ afternoon/ evening/ night. <br>
              <em>See you on Tuesday night!</em><br><br>
              <b>Jangan</b> gunakan preposition sebelum today, tonight, tomorrow, yesterday. <br><br>
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
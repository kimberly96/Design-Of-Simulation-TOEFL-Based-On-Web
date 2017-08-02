<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "I _____ leave at half past three.",
   1 => "must to  ",
   2 => "have to  ",
   3 => "has to   ",
   6 => 2
),
2 => array(
   0 => "My mum ____ work any more. She’s retired.",
   1 => "not have to  ",
   2 => "doesn’t have to  ",
   3 => "hasn’t to   ",
   6 => 2
),
3 => array(
   0 => "Alan ______ work on Sundays.",
   1 => "hasn’t to   ",
   2 => "not have to  ",
   3 => "doesn’t have to  ",
   6 => 3
),
4 => array(
   0 => "_____ to go to the meeting?",
   1 => "Has Laura  ",
   2 => "Does Laura have   ",
   3 => "Does Laura has   ",
   6 => 2
),
5 => array(
   0 => "Which sentence uses have to incorrectly?",
   1 => "You don’t have to leave yet, it’s only three thirty.  ",
   2 => "Visitors don’t have to feed the tigers, it’s dangerous.  ",
   3 => "My uncle is so rich that he doesn’t have to work.  ",
   6 => 2
),
6 => array(
   0 => "Which sentence is NOT correct?",
   1 => "Have you to catch the train now?  ",
   2 => "Do you have to cook tonight?  ",
   3 => "What time do you have to go home?  ",
   6 => 1
),
7 => array(
   0 => "What time _____________ to be at the station tomorrow?",
   1 => "we do have  ",
   2 => "do we have  ",
   3 => "have we   ",
   6 => 2
),
8 => array(
   0 => "Which sentence is correct?",
   1 => "We don’t has to do exams at the end of the year.  ",
   2 => "We haven’t to wear a school uniform.  ",
   3 => "We don’t have to go to school on Wednesday afternoons. ",
   6 => 3
),
9 => array(
   0 => "Which sentence has a similar meaning? You don’t have to fill in this form.",
   1 => "You must not fill in this form.  ",
   2 => "It’s not necessary to fill in this form.  ",
   3 => "You don’t have the correct form.   ",
   6 => 2
),
10 => array(
   0 => "Which sentence has a similar meaning? I have to be home by eight o’clock.",
   1 => "I can’t go home until eight o’clock.  ",
   2 => "I must go home before eight o’clock.  ",
   3 => "I don’t have to go home until eight o’clock.",
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
            <li class="men1"><a onClick="goToByScroll('page1'); return false;" href="index.html">Home</a><strong class="hover"></strong></li>
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
      <h3>Have To</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Have To</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Gunakan <b>have to</b> untuk berbicara tentang sesuatu yang harus Anda lakukan. <br>
              <em> I <u>have to</u> start work at eight.</em><br><br>
              Gunakan <b>dont have to</b> untuk berbicara tentang sesuatu yang tidak perlu. <br>
              <em> You <u>don’t have to</u> work tomorrow, it’s Saturday.</em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              <b>Positif</b><br>
              <img src="images/grammar/grammar21.jpg"><br><br>
              <b>Negatif</b><br>
              <img src="images/grammar/grammar22.jpg"><br><br>
              <b>Pertanyaan</b><br>
              <img src="images/grammar/grammar23.jpg"><br><br>   
              <strong><u>Kesalahan umum:</u></strong><br>
              1) Beberapa orang berpikir <b>dont have to</b> berarti <b>must not</b> namun hal tersebut tidak benar. <br>
              <em><strike>You don’t have to use your mobile phone in class. </strike>    →  You mustn’t use your mobile phone in class.</em><br><br>
              2) Beberapa orang menggunakan <b>haven’t  / hasn’t to</b> dalam bentuk pertanyaan. <br>
              <em><strike>My sister hasn’t to work today.</strike>          →          My sister doesn’t have to work today. <br>
              <strike>Have you to leave now?</strike>                →           Do you have to leave now?</em> <br><br>
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
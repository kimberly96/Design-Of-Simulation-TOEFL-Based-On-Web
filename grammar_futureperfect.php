<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which sentence means: When you get home, dinner will be ready to eat?",
   1 => " By the time you get home, I’ll be making dinner.  ",
   2 => " By the time you get home, I’ll have made dinner.  ",
   3 => " When you get home, I’ll make dinner. ",
   6 => 2
),
2 => array(
   0 => "Which sentence means:This time next week, Joyce will no longer be here?",
   1 => " This time next week, Joyce will have left.  ",
   2 => " This time next week, Joyce will be leaving.  ",
   3 => " This time next week, Joyce will leave.   ",
   6 => 1
),
3 => array(
   0 => "Sorry, Jake, I ___ late tomorrow, I’m afraid.",
   1 => " ’ll be being  ",
   2 => " ’ll have been  ",
   3 => " ’ll be   ",
   6 => 3
),
4 => array(
   0 => "Wich sentence means: By the time we get to the venue, the presentation will have started.",
   1 => " The presentation has already started.  ",
   2 => " The presentation hasn’t started yet, but it will start before we arrive.  ",
   3 => " The presentation hasn’t started yet. It will start after we arrive. ",
   6 => 3
),
5 => array(
   0 => "I bet the shop ____ of ice cream by the time we get there.",
   1 => " will be sell out  ",
   2 => " will sold out  ",
   3 => " will have sold out   ",
   6 => 3
),
6 => array(
   0 => "Will you ____ the work by Friday? ",
   1 => "have completed",
   2 => "has completed",
   3 => "had completed",
   6 => 1
),
7 => array(
   0 => "Paul ___ all the milk! ",
   1 => "won’t have drunk",
   2 => "won’t drunk",
   3 => "won’t to drunk",
   6 => 1
),
8 => array(
   0 => "Construction is still going on, but it ____ by Friday. ",
   1 => "would have finished",
   2 => "will finished",
   3 => "will have finished",
   6 => 3
),
9 => array(
   0 => "I’m sure Karen ___ my name again! ",
   1 => "will forgotten",
   2 => "will have forgotten",
   3 => "would have forgotten",
   6 => 2
),
10 => array(
   0 => "I bet Robin ____ to bring the money he owes me!",
   1 => "won’t to rememberred",
   2 => "won’t have rememberred",
   3 => "won’t rememberred",
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
      <h3>Future Perfect</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Future Perfect</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              1) Gunakan future perfect untuk berbicara tentang kejadian yang akan <u>selesai sebelum waktu tertentu dimasa depan</u>. <br>
              <em>This time next week, <u>I’ll will have finished</u> this project.</em><br><br>
              frasa sering terlihat dengan menggunakan future continuous, yaitu: <br>
              <b>By ..., This time next week...,  In __ years’ time...; when + present simple; by the time + present simple.</b><br>
              <em>When you arrive, I’ll have prepared the dinner. <br>
              By the time I get home, my mum will probably have tidied the house.</em><br><br>
              2) Future perfect juga digunakan untuk membuat prediksi tentang kejadian pada masa depan yang akan selesai pada waktu tertentu sebelum masa depan. <br>
              <em>Do you think Mel will have eaten all the chocolate cake? <br>
              No, she won’t have done that!  </em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              <b>Positif dan Negatif</b><br>
              <img src="images/grammar/grammar45.jpg"><br><br>
              <b>Bentuk Pertanyaan</b><br>
              <img src="images/grammar/grammar46.jpg"><br><br>
              <b>Be going to</b> jarang digunakan dalam membuat kalimat future perfect tense.<br>
              <em>Tom’<u>s going to</u> have finished his lecture by the time we get there.</em><br><br>
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
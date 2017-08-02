<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "We ____ for about ten minutes before it started to rain.",
   1 => "only been walking",
   2 => "'d only been walking",
   3 => "'d only walking",
   6 => 2
),
2 => array(
   0 => "Mandy was exhausted by the time she went on holiday because she ____ over 55 hours a week.",
   1 => "'d been working",
   2 => "working",
   3 => "'d working",
   6 => 1
),
3 => array(
   0 => "The flat was lovely and tidy because my flatmate _____",
   1 => "have cleaning",
   2 => "had cleaning",
   3 => "had been cleaning",
   6 => 3
),
4 => array(
   0 => "Colin and his wife ____ in their home long before Colin changed jobs and they had to move house again.",
   1 => "hadn't been living",
   2 => "hadn't  living",
   3 => "haven't been living",
   6 => 1
),
5 => array(
   0 => "Many European countries _____  action to reduce greenhouse gas emissions prior to the Kyoto Protocol in 1990.",
   1 => "had already taking",
   2 => "had been taking",
   3 => "had already been taking",
   6 => 3
),
6 => array(
   0 => "Before the recession, the economy ____ at a rapid pace. ",
   1 => "had been growing",
   2 => "have been growing",
   3 => "had growing",
   6 => 1
),
7 => array(
   0 => "Five suspected terrorists were arrested earlier today. They ____ in a London basement.",
   1 => "had been hiding",
   2 => "had hiding",
   3 => "have been hiding",
   6 => 1
),
8 => array(
   0 => "We ____ long before I had to leave to catch my train. ",
   1 => "had not talking",
   2 => "had been talk",
   3 => "had not been talking",
   6 => 3
),
9 => array(
   0 => "Paul and Debbie have broken up. They _____ on well for some time.",
   1 => "hadn't getting",
   2 => "hadn't been getting",
   3 => "haven't been getting",
   6 => 2
),
10 => array(
   0 => "If it ____ so heavily, I would have gone running.",
   1 => "hadn't raining",
   2 => "hadn't been raining",
   3 => "haven't been raining",
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
      <h3>Past Perfect Continuous</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Past Perfect Continuous</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Gunakan past perfect continuous untuk menceritakan cerita yang terjadi dimasa lalu.  <br>
              Contoh: <br>
              <em>A sentence with the events in the order they happened:<br>
              John was having trouble sleeping, so he went to the doctor late.</em> <br><br>
              Tulis kata kerja apa saja diantara kata <u>had dan been</u>.<br>
              <em>They <u>had already been</u> waiting for half an hour. <br>
              He’d only <u>been working</u> there a week before he got fired.</em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              <img src="images/grammar/grammar49.jpg"><br><br>
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
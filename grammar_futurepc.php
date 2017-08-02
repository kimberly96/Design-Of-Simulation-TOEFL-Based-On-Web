<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "By November, we’ll ____ here for five years.",
   1 => " live  ",
   2 => " have been living  ",
   3 => " be living   ",
   6 => 2
),
2 => array(
   0 => "I expect Anna will be tired when she arrives. She ____ for over 20 hours.",
   1 => " will have travelled  ",
   2 => " will have been travelling  ",
   3 => " will be travelling   ",
   6 => 2
),
3 => array(
   0 => "By the end of this month, we ____ for six years!",
   1 => "'ll dating",
   2 => "'ll be dating",
   3 => "'ll have been dating",
   6 => 3
),
4 => array(
   0 => "Which sentence is NOT correct? By Christmas Dominic will ____ as project manager for five years.",
   1 => " be working  ",
   2 => " have been working  ",
   3 => " have worked ",
   6 => 1
),
5 => array(
   0 => "I’m flying to Florida tonight. This time tomorrow, I’ll ____ on a beach drinking cocktails!",
   1 => " have been lying  ",
   2 => " be lying  ",
   3 => " lie   ",
   6 => 2
),
6 => array(
   0 => "What do you think those men were doing in Charles’s garden yesterday?",
   1 => " I expect they’ll have been doing some gardening.  ",
   2 => " I expect they’ll be doing some gardening.  ",
   3 => " I expect they’ll do some gardening.   ",
   6 => 1
),
7 => array(
   0 => "Hurry up! Your parents ____ for us for ages! ",
   1 => "will have been waiting",
   2 => "will be waiting",
   3 => "will waiting",
   6 => 1
),
8 => array(
   0 => "This time next week, I ___ here for three months. ",
   1 => "will be working",
   2 => "will working",
   3 => "will have been working",
   6 => 3
),
9 => array(
   0 => "Rodney will be really tired this evening because he ____ football with his mates.",
   1 => "will be playing",
   2 => "will have been playing",
   3 => "will have be playing",
   6 => 2
),
10 => array(
   0 => "What do you think Tom was doing up late last night? ",
   1 => "Don’t worry. I bet he will be chatting to his friends online.",
   2 => "Don’t worry. I bet he will have been chatting to his friends online.",
   3 => "Don’t worry. I bet he will chatting to his friends online.",
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
      <h3>Future Perfect Continuous</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Future Perfect Continuous</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              1) Gunakan future perfect Continuous untuk berbicara tentang kejadian yang akan <u>diproses/dilakukan pada waktu tertentu sebelum waktu yang spesifik dimasa depan</u>.<br>
              <em>Janet will be really tired when we get home. She <e>will have been looking</u> after the children all day!</em><br><br>
              2) Juga dapat digunakan untuk membuat prediksi tentang kejadian <u>yang akan diproses/dilakukan sebelum waktu yang spesifik dimasa depan</u><br>
              <em>Joe won’t mind that we are late. He <u>won’t have been waiting</u> long.</em><br><br>
              3) Juga dapat digunakan untuk memprediksi apa yang telah terjadi dimasa lalu. <br>
              <em>“What do you think the men were doing in the store room?” <br>
              “Don’t worry. They <u>will have been unpacking</u> boxes.”     </em><br><br>
              <b>Fixed future time </b> dan <b>length of time</b> sering dituliskan didalam kalimat future perfect continuous. <br>
              <em>By the end of this week, I’ll have been working here for five months.</em><br>
              Fixed future time:   the end of this week <br>
              Length of time:      five months  <br><br>
              Namun hal tersebut tidak selalu ada/terjadi:<br>
              <em>Anne will be in a bad mood at the party this evening because <u>she’ll have been doing</u> housework. </em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              <b>Positif dan Negatif</b><br>
              <img src="images/grammar/grammar47.jpg"><br><br>
              <b>Bentuk Pertanyaan</b><br>
              <img src="images/grammar/grammar48.jpg"><br><br>
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
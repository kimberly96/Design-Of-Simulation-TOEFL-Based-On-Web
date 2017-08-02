<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which word is a correct past simple verb?",
   1 => "studyed  ",
   2 => "taked",
   3 => "made   ",
   6 => 3
),
2 => array(
   0 => "Where can you write the word went?",
   1 => "We ____ to France next week.  ",
   2 => "We ____ France last month.  ",
   3 => "We ____ to France every year.   ",
   6 => 2
),
3 => array(
   0 => "Which word goes in the space? What time did you ____ lunch?",
   1 => "have",
   2 => "had",
   3 => "has",
   6 => 1
),
4 => array(
   0 => "Which sentence is correct?",
   1 => "Sally didn’t got my email.  ",
   2 => "Tom didn’t met Anna.  ",
   3 => "We didn’t go out last night.",
   6 => 3
),
5 => array(
   0 => "Which question is NOT correct?",
   1 => "Where did your parents meet?  ",
   2 => "Did you like the gift?  ",
   3 => "What time you did arrive?   ",
   6 => 3
),
6 => array(
   0 => "we ___ a lovely meal at a restaurant last night.",
   1 => "had",
   2 => "have",
   3 => "has",
   6 => 1
),
7 => array(
   0 => "Sorry i am late. I ___ the time of the meeting.",
   1 => "din't know",
   2 => "doesn't know",
   3 => "don't know",
   6 => 1
),
8 => array(
   0 => "Paul and Emma ____ to America for their holiday.",
   1 => "go",
   2 => "did go",
   3 => "went",
   6 => 3
),
9 => array(
   0 => "Sarah ____ sick so she decided to go home.",
   1 => "feel",
   2 => "felt",
   3 => "do felt",
   6 => 2
),
10 => array(
   0 => "Did you ____ the castle in Edinburgh?",
   1 => "saw",
   2 => "see",
   3 => "seen",
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
      <h3>Past Simple</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Past Simple</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Past Simple digunakan untuk berbicara tentang peristiwa yang telah selesai di masa lalu dan untuk bercerita, lelucon dan anekdot.<br><br>
              <strong><u>Bentuk:</u></strong><br>
              1) Banyak bentuk kata kerja past tense diubah dengan penambahan <b>-ed</b> diakhir kata kerja.<br>
              want      =>          <em> wanted</em><br>
              start     =>           <em>started</em><br><br>
              Jika verb diakhiri <b>e</b>, cukup tambahkan <b>d</b> (<b>liked</b>,<b>hoped</b>).<br>
              Jika verb diakhiri <b>y</b>, hapus <b>y</b> dan tambahkan <b>ied</b> (<b>studied</b>,<b>carried</b>). Tapi jangan lakukan jika verb diakhiri huruf vokal + <b>y</b> (played, NOT plaied. stayed, NOT staied). <br><br>
              Namun banyak kata kerja past tense yang mempunyai bentuk irreguler. Anda perlu belajar masing-masing secara terpisah. Berikut adalah beberapa contoh. <br>
              have      =>           had                        make     =>           made <br>
              take       =>           took                       sit           =>           sat <br>
              get         =>           got                         feel        =>           felt <br><br>
              Kata kerja past tense sama untuk semua orang. <br>
              I went; you went; he went; she went; they went; we went... <br><br>
              2) Bentuk Negatif <br>
              <img src="images/grammar/grammar11.jpg"><br>
              Jangan gunakan bentuk kata kerja past dalam kalimat negatif. <br>
              <em>I didn’t had dinner.         =>           I didn’t have dinner.</em><br><br>
              3) Bentuk Pertanyaan <br>
              <img src="images/grammar/grammar12.jpg"><br><br>
              <strong><u>Kesalahan Umum:</u></strong><br>
              Beberapa orang menggunakan kata kerja past di kalimat pertanyaan. <br>
              <strike >Did you saw the film?</strike >     =>                           Did you see the film?<br><br>
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
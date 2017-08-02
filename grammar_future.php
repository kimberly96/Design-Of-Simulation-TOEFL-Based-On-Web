<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Alex ___ late. He’s stuck in traffic.",
   1 => " will arriving  ",
   2 => " will be arriving  ",
   3 => " will be arrive   ",
   6 => 2
),
2 => array(
   0 => "____ you get home, we’ll be having dinner.",
   1 => " In time  ",
   2 => " By the time  ",
   3 => " By   ",
   6 => 2
),
3 => array(
   0 => "What time ____ for the party?",
   1 => " you going to be leaving  ",
   2 => " you will be leaving  ",
   3 => " will you be leaving   ",
   6 => 3
),
4 => array(
   0 => "What is the meaning of the sentence below? When you arrive, I’ll be working in the garage.",
   1 => " I will start working after you arrive.",
   2 => " I will start working in the garage before you arrive.  ",
   3 => " I will finish my work in the garage before you arrive. ",
   6 => 2
),
5 => array(
   0 => "Which sentence is NOT correct? In the year 3000, most people ____ in cities.",
   1 => " will be living  ",
   2 => " are going to be living  ",
   3 => " will living  ",
   6 => 3
),
6 => array(
   0 => "This time tomorrow we ___ to nice",
   1 => "will be flying",
   2 => "will flying",
   3 => "are going to flying",
   6 => 1
),
7 => array(
   0 => "I’d better not call Anna now. She  ____",
   1 => "will be working",
   2 => "will working",
   3 => "are going to working",
   6 => 1
),
8 => array(
   0 => "David just called. He said he ____ to the meeting",
   1 => "won't come",
   2 => "won't coming",
   3 => "won't be coming",
   6 => 3
),
9 => array(
   0 => "____ with Grandma while you’re in Scotland?",
   1 => "will you staying",
   2 => "will you be staying",
   3 => "will you to staying",
   6 => 2
),
10 => array(
   0 => "The kids are very quiet at the moment. They  ____ wrong, i bet.",
   1 => "will doing something ",
   2 => "will be doing something ",
   3 => "will to doing something ",
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
      <h3>Future Continuous</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Future Continuous</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              a) Gunakan Future Continuous untuk berbicara tentang suatu peristiwa yang sudah akan berlangsung pada waktu tertentu di masa depan. <br>
              <em>This time next week, I’<u>ll be driving</u> to my parents’ house.</em><br><br>
              Frase yang sering digunakan ialah: <br>
              <em>By ..., This time next week...,  In __ years’ time...; when + present simple; by the time + present simple. <br><br>
              When you arrive, I’ll be driving home. <br>
              By the time I get home, you’ll probably be having a bath.</em>  <br><br>
              b) Future Continuous dapat digunakan sebagai pengganti present continuous untuk membicarakan rencana masa depan. <br>
              Setiap kali Anda akan menggunakan kalimat pengantar sebelum sebuah pertanyaan, Anda harus mengubah urutan kata dalam pertanyaan tersebut. <br>
              <em>Will you be going to Jane’s party? <br>
              Yes, but I’ll be getting there a bit late, because I’m going to a meeting after work.</em><br><br>
              c) Kita juga dapat menggunakan Future Continuous untuk membuat tebakan tentang sesuatu yang sedang berlangsung saat ini. <br>
              <em>Don’t phone Richard now, he’ll be having dinner. <br>
              Oh no, I forgot about the dinner! It’ll be burning, I know it!</em><br><br>
              Kalimat-kalimat tersebut bukan tentang masa depan tetapi kita bisa menggunakan Future Continuous untuk berbicara tentang apa yang kita asumsikan dapat terjadi pada saat ini. <br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              a) Anda dapat membuat Future Continuous dengan <b>will</b> atau <b>going to</b>. Anda dapat membuatnya dengan cara berikut: <br>
              <b>Positif dan Negatif</b><br>
              <img src="images/grammar/grammar32.jpg"><br><br>
              <b>Kalimat Pertanyaan</b><br>
              <img src="images/grammar/grammar33.jpg"><br><br>
              b) Ingat bahwa beberapa kata kerja tidak digunakan dalam continuous tenses. Ini termasuk kata kerja yang berhubungan dengan kepemilikan: <em>possess, own , belong</em> likes dan dislikes: <em>like, love, hate</em> dan kata kerja abstrak: <em>seem, be, cost, want</em>. <br><br>
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
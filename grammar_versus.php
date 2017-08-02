<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "‘I ____ out last Friday.’",
   1 => " didn’t go  ",
   2 => " have gone  ",
   3 => " haven’t been   ",
   6 => 1
),
2 => array(
   0 => " Which sentence is NOT correct?",
   1 => " This is the news. There has been an earthquake in Japan last night.  ",
   2 => " This is the news. There has just been an earthquake in Japan.  ",
   3 => " This is the news. There has been an earthquake in Japan.   ",
   6 => 1
),
3 => array(
   0 => "Which sentence is NOT correct?",
   1 => " I’ve bought a new mobile phone two days ago.  ",
   2 => " Alan has just arrived.  ",
   3 => " He’s recently got a new job in Frankfurt. ",
   6 => 1
),
4 => array(
   0 => "‘I’ve been to New York.’",
   1 => " Really? When did you go?  ",
   2 => " Really? When have you gone?  ",
   3 => " Really? When you have gone? ",
   6 => 1
),
5 => array(
   0 => "I haven’t seen him ____.",
   1 => " last night  ",
   2 => " yesterday  ",
   3 => " yet   ",
   6 => 3
),
6 => array(
   0 => "Which word CANNOT go in the space? I’ve _____ spoken to James about the meeting.",
   1 => " yet  ",
   2 => " already  ",
   3 => " just   ",
   6 => 1
),
7 => array(
   0 => "I _______ Helen since we _______ at school together.",
   1 => " know / were  ",
   2 => " ‘ve known / were  ",
   3 => " knew / ‘ve been  ",
   6 => 2
),
8 => array(
   0 => "My parents have lived in Canada for three years.",
   1 => " They used to live in Canada but now they live somewhere else.  ",
   2 => " They still live in Canada now.  ",
   3 => " They used to live in Canada but now they are dead. ",
   6 => 2
),
9 => array(
   0 => "Jack has broken his leg.",
   1 => " Oh no! How has he done that?  ",
   2 => " Oh no! How did he do that?  ",
   3 => " Oh no! What’s happened? ",
   6 => 2
),
10 => array(
   0 => "I’ve telephoned Mike ___________",
   1 => " three times last week.  ",
   2 => " three times this week.  ",
   3 => " yesterday. ",
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
      <h3>Present Perfect vs Past Simple</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Present Perfect vs Past Simple</p>
            <div class="text1">
              <b>Present Perfect</b><br>
              <strong>Kegunaan:</strong><br>
              1) Present Perfect tense sering digunakan untuk memberitahu kabar terbaru yang 'up-to-date'. <br>
              <em>‘Great news! Jane <u>has had</u> a baby!’</em><br><br>
              Namun anda tidak bisa menggunakan present perfect dengan frasa yang berhubungan. <br>
              <em>‘Great news! Jane has had a baby yesterday!’</em><br>
              Jadi, untuk bertanya atau memberikan suatu informasi, anda membutuhkan <b>past simple</b>. <br>
              <em>‘Great news! Jane <u>has had</u> a baby!’ <br>
              ‘When <u>did she have it?</u>’ <br>
              ‘She <u>had</u> it last night!’</em> <br><br>
              2) Present Perfect dapat digunakan dengan frasa yang berhubungan dengan waktu habis/waktu terakhir, seperti: <br>
              <b>this week, today, this year</b><br>
              <em><u>I’ve seen</u> Roger twice this week. <br>
              That’s the second time <u>I’ve seen</u> that film this year.</em><br><br>
              3) Present Perfect sering digunakan didalam kalimat dengan kata-kata berikut ini: <br>
              <b>just, yet, already, ever, never</b><br>
              <em>I<u>’ve just finished</u> the report. <br>
              Karen <u>has finished</u> the book already. <br>
              I <u>haven’t finished</u> the report yet. <br>
              I<u>’ve never been</u> to Spain. Have you ever been?</em>  <br><br>
              4) Present Perfect sering digunakan untuk menjelaskan periode/lama waktu mulai di masa lalu dan masih berlanjut sampai sekarang. kata yang sering digunakan ialah <b>for</b> dan <b>since</b>. <br>
              <em>I’ve lived here for five years. <br>
              James has worked here since last summer.</em><br><br>
              Present Perfect dan past simple dapat muncul di dalam satu kalimat: <br>
              <em> <u>I’ve lived</u> here since I <u>was</u> a child. <br>
              Tom <u>has been</u> unemployed since he <u>left</u> the factory.</em> <br><br>
              <b>Past Simple</b><br>
              <strong>Kegunaan:</strong><br>
              Past simple dapat digunakan dalam frasa yang berhubungan dengan waktu habis, seperti: <br>
              <b>yesterday, last week, last month, in 2010, two weeks ago</b><br><br>
              <em>Jemma left the company six weeks ago.
              I emailed Tony last week.</em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              <b><u>Present Perfect</u></b><br>
              <b>Positif</b><br>
              <img src="images/grammar/grammar38.jpg"><br><br>
              <b>Negatif</b><br>
              <img src="images/grammar/grammar38.jpg"><br><br>
              <b>Bentuk Pertanyaan</b><br>
              <img src="images/grammar/grammar38.jpg"><br><br>
              <b><u>Past Simple</u></b><br>
              <b>Positif</b><br>
              <img src="images/grammar/grammar38.jpg"><br><br>
              <b>Negatif</b><br>
              <img src="images/grammar/grammar38.jpg"><br><br>
              <b>Bentuk Pertanyaan</b><br>
              <img src="images/grammar/grammar38.jpg"><br><br>
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
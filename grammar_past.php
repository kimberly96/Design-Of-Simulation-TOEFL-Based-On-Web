<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => " Which word CANNOT go in the space? ____ were talking loudly when the teacher came into the room.",
   1 => "we",
   2 => "he",
   3 => "they",
   6 => 2
),
2 => array(
   0 => "Ellen ___ listening when the teacher spoke to her.",
   1 => "weren’t  ",
   2 => "were  ",
   3 => "was   ",
   6 => 3
),
3 => array(
   0 => "Helen and I ____ looking when we crossed the road.",
   1 => "didn’t  ",
   2 => "wasn’t  ",
   3 => "weren’t",
   6 => 3
),
4 => array(
   0 => "Which question is correct?",
   1 => "Where was she living?  ",
   2 => "What you were doing?  ",
   3 => "Where they staying?",
   6 => 1
),
5 => array(
   0 => "Which sentence has the same meaning? I got into the bath, and then the phone rang.",
   1 => "I was having a bath when the phone was ringing.  ",
   2 => "I had a bath because the phone was ringing.  ",
   3 => "I was having a bath when the phone rang. ",
   6 => 3
),
6 => array(
   0 => "Philip told Kim what to do, but Kim ____",
   1 => "wasn't listening",
   2 => "doesn't listening",
   3 => "not listening",
   6 => 1
),
7 => array(
   0 => "I ___ economics at university when I met my wife-to-be.",
   1 => "was studying",
   2 => "was styding",
   3 => "was study",
   6 => 1
),
8 => array(
   0 => "Raymond ___ very well, but he went to work anyway.",
   1 => "was feeling",
   2 => "weren’t feeling",
   3 => "wasn’t feeling",
   6 => 3
),
9 => array(
   0 => "What ___ when I called?",
   1 => "was you doing",
   2 => "were you doing",
   3 => "are you doing",
   6 => 2
),
10 => array(
   0 => "The experiment went wrong because the scientists  ____",
   1 => "wasn't concentrating",
   2 => "weren’t concentrating",
   3 => "doesn't concentrating",
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
      <h3>Past Continuous</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Past Continuous</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              1) Gunakan <b>past</b> untuk ' mengatur adegan ' cerita sebelum menjelaskan apa yang terjadi. <br>
              <em> ‘It <b>was raining</b>. I <b>was walking</b> in the park. Some kids <b>were playing</b> football nearby. Suddenly…’</em><br><br>
              2) Gunakan past continuous untuk berbicara tentang tindakan yang terjadi selama beberapa waktu di masa lalu dan kemudian terputus/interrupt. Gunakan past simple tense untuk berbicara tentang interupsi tersebut. <br>
              <em> I <b>was cooking</b> dinner when suddenly there was a knock at the door.</em><br><br>
              3) Untuk berbicara tentang peristiwa yang berlangsung pada waktu tertentu. <br>
              <em>At 5 o’clock yesterday afternoon, I <b>was driving</b> home from work.</em><br><br>
              Perhatikan perbedaan dalam arti : <br>
              <em>When James got home, I cooked dinner</em>:-  I started cooking AFTER he got home. <br>
              When James got home, I was cooking dinner</em>: - I started cooking BEFORE he got home.</em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              <b>Positif</b><br>
              <img src="images/grammar/grammar24.jpg"><br>
              <b>Bentuk Negatif</b><br>
              <img src="images/grammar/grammar25.jpg"><br>
              <b>Bentuk Pertanyaan</b><br>
              <img src="images/grammar/grammar26.jpg"><br><br>
              <strong><u>Aturan Ejaan:</u></strong><br>
              Jika verb diakhiri 'e', hapus 'e' dan tambahkan <b>-ing</b> . <br>
              have   => I was having lunch <br><br>
              Jika verb diakhiri satu huruf vokal dan konsonan, double konsonan tersebut (kecuali w dan y). <br>
              get     => He was just getting up. <br>
              play    => We were playing. <br><br>
              <strong><u>Kesalahan Umum:</u></strong><br>
              1) Beberapa orang lupa menambahkan -ing. <br>
              <strike>I was watch television.</strike>   => <em>I was watching television.</em><br><br>
              2) Beberapa orang membuat pengejaan yang salah. <br>
              <strike>I was studing.</strike>  => <em>I was studying.</em><br>
              <strike>We were eatting </strike>  => <em>We were eating.</em>    <br><br>
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
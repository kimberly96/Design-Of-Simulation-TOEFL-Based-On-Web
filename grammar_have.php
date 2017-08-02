<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which sentence is correct?",
   1 => " I shouldn’t shouted at him.  ",
   2 => " I shouldn’t have shouted at him.  ",
   3 => " I shouldn’t have to shouted at him. ",
   6 => 2
),
2 => array(
   0 => "The bill should have ____ by now.",
   1 => " arrived  ",
   2 => " arrive  ",
   3 => " to arrive   ",
   6 => 1
),
3 => array(
   0 => " Which sentence has a similar meaning? I went to the supermarket on Saturday morning. It was very busy and I regret it now.",
   1 => " I shouldn’t have gone to the supermarket on a Saturday morning.  ",
   2 => " I should have gone to the supermarket on a Saturday morning.  ",
   3 => " I should go to the supermarket on a Saturday morning.   ",
   6 => 1
),
4 => array(
   0 => "The traffic was really bad. We ____ left home during rush hour.",
   1 => " shouldn’t have  ",
   2 => " should have  ",
   3 => " should   ",
   6 => 1
),
5 => array(
   0 => " Which sentence means: I didn’t tell John about the meeting. I regret it now.",
   1 => " I should tell John about the meeting.  ",
   2 => " I should have told John about the meeting.  ",
   3 => " I shouldn’t have told John about the meeting.   ",
   6 => 2
),
6 => array(
   0 => "I ____  hit John.",
   1 => "shouldn't have",
   2 => "shouldn't",
   3 => "shouldn't to",
   6 => 1
),
7 => array(
   0 => "Which sentence means: I didn’t go to the party. Now I wish I had gone to the party. ",
   1 => "I should have gone to the party.",
   2 => "I should gone to the party.",
   3 => "I should have go to the party.",
   6 => 1
),
8 => array(
   0 => "Which sentence means: I expected Karen to arrive ten minutes ago.",
   1 => "Karen shouldn't have arrived ten minutes ago",
   2 => "Karen should arrived ten minutes ago",
   3 => "Karen should have arrived ten minutes ago",
   6 => 3
),
9 => array(
   0 => "Wich sentence means: You took Robert’s chocolate bar. That was a bad thing to do.",
   1 => "you shouldn’t have take Robert’s chocolate bar.",
   2 => "you shouldn’t have taken Robert’s chocolate bar.",
   3 => "you should taken Robert’s chocolate bar.",
   6 => 2
),
10 => array(
   0 => "Which sentence means: You were expecting a sofa delivery at 10am. They delivered it at 8a.m.",
   1 => "They should have delivered the sofa until ten o’clock.",
   2 => "They shouldn’t have delivered the sofa until ten o’clock.",
   3 => "They shouldn’t delivered the sofa until ten o’clock.",
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
      <h3>Should Have</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Should Have</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              1) <b>Should have</b> digunakan untuk menunjukkan rasa penyesalan pada masa lampau - berharap agar sesuatu yang terjadi dimasa lampau seandainya dapat berubah. <br>
              <em> I should have studied for my exam! <br></em>
              (Saya tidak belajar sebelum ujian. Saya gagal. Sekarang saya berharap seandainya masa lalu dapat berubah.)<br><br>
              2) <b>Should have</b> digunakan untuk berbicara tentang sesuatu yang diinginkan untuk terjadi, namun tidak terjadi (atau terjadi dikemudian hari). <br>
              <em>  The letter should have arrived by now, but it hasn’t come yet.  </em><br>
                (Saya sangat ingin suratnya tiba, namun surat tersebut belum juga sampai).  <br>
              <em>Here’s the bus! It should have been here twenty minutes ago. </em><br>
                (Busnya datang terlambat. Busnya baru saja tiba). <br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              <img src="images/grammar/grammar34.jpg"><br><br>
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
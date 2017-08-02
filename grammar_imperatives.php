<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which sentence is correct?",
   1 => "Please to hold the line.  ",
   2 => "Please you hold the line.  ",
   3 => "Please hold the line.   ",
   6 => 3
),
2 => array(
   0 => "Which is the friendliest way to reply to the question? How do I log onto the website?",
   1 => "First you type your username here.  ",
   2 => "You must type your username here.  ",
   3 => "Type your username here.",
   6 => 1
),
3 => array(
   0 => "Which word goes in the space? ____ talk to John, he’s busy.",
   1 => "Not  ",
   2 => "No  ",
   3 => "Don’t",
   6 => 3
),
4 => array(
   0 => "Which sentence is best for a sign?",
   1 => "Please sign in, visitors!  ",
   2 => "Visitors must sign in.  ",
   3 => "Visitor, you must sign in please.",
   6 => 2
),
5 => array(
   0 => "Which question is NOT correct?",
   1 => "Don’t leave the house alone.  ",
   2 => "Take care when you cross the road.  ",
   3 => "Please to take a seat.",
   6 => 3
),
6 => array(
   0 => "Which sentence is best for a sign?",
   1 => "Visitor, you don’t park here.  ",
   2 => "Don’t park your car here please, visitors.  ",
   3 => "Visitors must not park their cars here.   ",
   6 => 3
),
7 => array(
   0 => "Which sentence is best for a sign?",
   1 => "Must not touch.  ",
   2 => "You don’t touch.  ",
   3 => "Do not touch.  ",
   6 => 3
),
8 => array(
   0 => "You are giving someone instructions. Which sentence is best?",
   1 => "Please put the box over there.  ",
   2 => "Please to put the box over there.  ",
   3 => "You must put the box over there. ",
   6 => 1
),
9 => array(
   0 => "Which sentence is correct.",
   1 => "Don’t telling anyone! It’s a secret.  ",
   2 => "Don’t to tell anyone! It’s a secret.  ",
   3 => "Don’t tell anyone! It’s a secret. ",
   6 => 3
),
10 => array(
   0 => "Which sign is best?",
   1 => "Passengers must not cross this line.  ",
   2 => "Passenger must not cross this line.  ",
   3 => "Passenger, don’t cross this line",
   6 => 1
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
      <h3>Imperatives</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Imperatives</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Kalimat Imperatives digunakan untuk memberikan instruksi, perintah dan peringatan. Harus sering digunakan dalam tanda-tanda dan pemberitahuan untuk memberikan instruksi.<br><br>
              <strong><u>Bentuk:</u></strong><br>
              1) Jangan menggunakan subjek ketika memberikan perintah.<br>
              <strike>You</strike> wash your hands.    =>     <em>Wash your hands.</em><br><br>
              Selalu gunakan bentuk infinitif dari kata kerja, tanpa to.<br>
              <strike>To</strike> sit down please.     =>     <em>Sit down please.</em><br><br>
              Gunakan <strong>Dont</strong> dalam bentuk negatif. <br>
              <em>Dont sit here.</em><br><br>
              2) Instruksi tertulis pada tanda-tanda sering menggunakan <strong>Do Not</strong> dan <strong>Not</strong>.<br>
              <em>Do not cross this line.</em><br><br>
              3) Ketika memberikan instruksi kepada teman, Anda dapat menghaluskannya dengan menggunakan 'you'. Namun, hal ini biasanya hanya dilakukan dalam bahasa Inggris yang diucapkan.<br>
              <em>First <strong>you</strong> put the mixture into a bowl, and then <strong>you</strong> add two eggs. Then <strong>you</strong> whisk it.<br><br>
              4) Beberapa tanda ditulis dengan menggunakan <strong>Must</strong> / <strong>Must not</strong>. <br>
              <em>All visitors <strong>must</strong> wear a badge. <br>
              Passengers <strong>must not</strong> talk to the driver.</em><br><br>
              6) Hati-hati agar tidak bingung dalam penggunan <strong>Would Like</strong> dan <strong>Like</strong>.<br>
              Gunakan <strong>like</strong> untuk berbicara tentang hal-hal yang Anda suka sepanjang waktu. <br>
              <em>I <u>like</u> chocolate cake. It’s my favourite food.</em><br><br>
              Perhatikan bagaimana kata benda plural ( pengunjung / penumpang ) umumnya digunakan dalam tanda-tanda. <br><br>
              <strong><u>Kesalahan umum</u></strong>
              Beberapa orang sering menggunakan to aetelah Dont/Mustn't. <br>
              <strike>Don’t to go in that door.<strike>       =>      <em>Don’t go in that door.</em><br><br>
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
<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which sentence is correct?",
   1 => " We may going to a concert next week.  ",
   2 => " We may go to a concert next week  ",
   3 => " We may to go to a concert next week.   ",
   6 => 2
),
2 => array(
   0 => "What is the correct negative sentence?",
   1 => " We might not have time to see James.  ",
   2 => " We don’t might have time to see James.  ",
   3 => " We might haven’t time to see James. ",
   6 => 1
),
3 => array(
   0 => "Tom might ____ in his office at the moment.",
   1 => " to be  ",
   2 => " be  ",
   3 => " being ",
   6 => 2
),
4 => array(
   0 => "Which sentence is NOT possible?",
   1 => " He may go to his friend’s house last night.  ",
   2 => " We may have a party next weekend.  ",
   3 => " She might be in her bedroom at the moment.  ",
   6 => 1
),
5 => array(
   0 => "Which question is correct?",
   1 => " When will the package might arrive?  ",
   2 => " When might the package arrive?  ",
   3 => " When the package might arrive? ",
   6 => 2
),
6 => array(
   0 => "Cathy __________ be late again.",
   1 => " won’t probably  ",
   2 => " probably will  ",
   3 => " will probably   ",
   6 => 3
),
7 => array(
   0 => "We definitely _________ have time to see a film.",
   1 => " won’t  ",
   2 => " will  ",
   3 => " might   ",
   6 => 1
),
8 => array(
   0 => "Which sentence is correct?",
   1 => " I maybe won’t be able to come to the party.  ",
   2 => " I maybe not be able to come to the party.  ",
   3 => " I might not be able to come to the party.",
   6 => 3
),
9 => array(
   0 => "Which sentence has a similar meaning to the sentence below? I’ll certainly have time to finish the report tomorrow.",
   1 => " I’ll possibly have time to finish the report tomorrow.  ",
   2 => " I’ll definitely have time to finish the report tomorrow.  ",
   3 => " I’ll probably have time to finish the report tomorrow.   ",
   6 => 2
),
10 => array(
   0 => "Which sentence has a different meaning to the sentence below? Kate might not be able to attend the meeting tomorrow.",
   1 => " Kate may be unable to attend the meeting tomorrow.  ",
   2 => " Kate definitely won’t be able to attend the meeting tomorrow.  ",
   3 => " Kate possibly won’t be at the meeting tomorrow. ",
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
      <h3>May Might and Adverbs of Probability</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">May Might and Adverbs of Probability</p>
            <div class="text1">
              <strong><u>May dan Might</u></strong><br>
              <strong>Kegunaan:</strong><br>
              Gunakan <b>May</b> dan <b>Might</b> untuk berbicara tentang apa yang mungkin akan terjadi di masa depan. May dan Might berarti <b>maybe will</b>. Mereka dapat merujuk ke masa depan atau masa sekarang. <br>
              Contoh: <br>
              I might have a pen in my bag.  ( = present use) <br>
              She may arrive tomorrow. ( = future use) <br><br>
              <b>May</b> dan <b>Might</b> adalah modal verb, seperti like, can, will dan should sehingga aturannya tetap sama. <br>
              1) Jangan tambahkan 's' ke orang ketiga. <br>
              <em>He may come. NOT <strike>He mays come.</strike> <br>
              She might stay. NOT <strike>She mights stay.</strike> <br><br></em>
              2) Untuk bentuk negatif, tambahkan <b>not</b> setelah may dan might. <br>
              <em>He may not come.  She might not stay. <br><br></em>
              3) Untuk bentuk pertanyaan, balikkan posisi may/might dan subjek. Namun, bentuk pertanyaan dengan might tidaklah biasa digunakan. <br>
              <em>Might he be late? </em><br><br>
              4) May dapat digunakan dengan 'I' atau 'We' untuk membuat suatu permintaan. Namun, <b>can/could</b> lebih umum digunakan. <br>
              <em>May I have some chocolate? May we go to the party?</em><br><br>
              5) May dan Migh selalu diikuti verb dalam bentuk infinitive. <br>
              <em>I might go. NOT <strike>I might to go. </strike><br>
              She might stay. NOT <strike>She might staying.</strike></em><br><br>
              <hr><br>
              <strong><u>Will + adverbs of probability</u></strong><br>
              <strong>Kegunaan:</strong><br>
              Anda dapat menggunakan will dan wont dengan kata kerja yang berbeda untuk menampilkan kemungkinan dari peristiwa yang akan terjadi. <br>
              <em>I’ll possibly go to the party.<br>
              I’ll probably go to the party.<br>
              I’ll definitely go to the party.<br>
              I’ll certainly go to the party.</em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              Perhatika bahwa <b>'ll / will</b> digunakan sebelum kata kerja, namun <b>won't</b> digunakan setelah kata kerja. <br>
              <em><b>I’ll probably</b> see you later. <br>
              <b>I probably won’t</b> see you later.</em>  <br><br>
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
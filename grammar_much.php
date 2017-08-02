<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which word goes in the space? How ____ is your Dad?",
   1 => "much",
   2 => "old",
   3 => "tall",
   6 => 2
),
2 => array(
   0 => "Which sentence is correct?",
   1 => "How many milk do we have?  ",
   2 => "How much do we have milk?  ",
   3 => "How much milk do we have? ",
   6 => 3
),
3 => array(
   0 => "Which word CANNOT go in the space? How ____ is the bag?",
   1 => "big  ",
   2 => "much  ",
   3 => "many",
   6 => 3
),
4 => array(
   0 => "Which question is correct?",
   1 => "How long to get from here to London?  ",
   2 => "How long does it take to get from here to London?  ",
   3 => "How long it takes to get from here to London? ",
   6 => 2
),
5 => array(
   0 => "Which question is best?",
   1 => "How many rooms are in your house?  ",
   2 => "How many rooms there are in your house?  ",
   3 => "How many rooms are there in your house?   ",
   6 => 3
),
6 => array(
   0 => "Complete the question. ___ work do you have to do today?",
   1 => "How long  ",
   2 => "How many  ",
   3 => "How much   ",
   6 => 3
),
7 => array(
   0 => "Complete the question. How long ____ the River Mississippi?",
   1 => "is",
   2 => "does",
   3 => "has",
   6 => 1
),
8 => array(
   0 => "Which sentence is NOT correct?",
   1 => "I’m twenty three.  ",
   2 => "I’m twenty three years old.  ",
   3 => "I’m twenty three years.  ",
   6 => 3
),
9 => array(
   0 => "What is the correct reply? How much is the cruise?",
   1 => "It’s 1,450 Euros.   Correct! Correct",
   2 => "It’s 10 days.  ",
   3 => "Its 670 kilometres.",
   6 => 1
),
10 => array(
   0 => "Which question is NOT correct?",
   1 => "How much money do you have?  ",
   2 => "How long is the lesson?  ",
   3 => "How many students there are in the school?   ",
   6 => 3
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
      <h3>Much and <span>Many</span></h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">How</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Gunakan <b>how</b> untuk mendapatkan informasi tentang nomor dan jumlah. <br>
              Anda dapat menggunakannya untuk mencari tahu tentang usia, ukuran , panjang , biaya dan banyak lagi .<br><br>     
              <strong><u>Bentuk Umum:</u></strong><br>
              1) <u>Ukuran/Dimmensions</u><br>
              Gunakan <b>how big</b> untuk mencari tahu tentang ukuran. <br>
              <em>How big is your car?</em><br><br>
              Gunakan <b>how long</b> untuk mencari tahu panjang, dan <b>how wide</b> untuk lebar. <br>
              <em>How long is the River Nile? How wide is it?</em><br><br>
              Untuk memperjelas suatu jawaban, gunakan <b>long</b> dan <b>wide</b>. <br>
              <em>It’s a hundred miles long. It’s a mile wide.</em><br><br>
              2) <u>Umur/Age</u><br>
              Gunakan <b>how old</b> untuk mengetahui umur suatu benda atau seseorang.<br>
              <em>How old is your sister?</em><br>
              You can reply: <em>‘She’s ten’ or ‘She’s ten years old’ NOT <strike>‘She’s ten years’</strike>.</em><br><br>
              3) <u>WaKtu/Time</u><br>
              Gunakan <b>how long</b> untuk bertanya tentang waktu. <br>
              <em>How long is the film?    ==>    It’s about two hours long. <br>
              How long does it take to get there?     ==>    About three hours.</em> <br><br>
              4)<u>Jumlah/Quantity</u><br>
              Gunakan <b>how much</b> untuk bertanya tentang harga. Dan juga gunakan <b>how much</b> untuk benda yang tidak dapat dihitung. <br>
              Ingatlah untuk menempatkan setiap kata benda yang tidak terhitung setelah 'much'. <br>
              <em>How much is this bag?    <br>
              How much money do you have? NOT     <strike>How much do you have money?</strike></em><br><br>
              Gunakan <b>how many</b> untuk benda yang dapat dihitung. <br>
              Ingatlah untuk menempatkan setiap kata benda yang terhitung setelah 'many'. <br>
              <em>How many people are coming? NOT       <strike>How many are coming people?</strike></em><br><br>
              Pertanyaan <b>how many</b> sering menggunakan kata <b>there</b>. <br>
              <em>How many people are there in your class?  NOT <strike>How many people are in your class?</strike></em><br><br>
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
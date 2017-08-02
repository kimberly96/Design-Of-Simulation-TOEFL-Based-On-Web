<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "What is the superlative form of fat?",
   1 => "the fattest ",
   2 => "fattiest ",
   3 => "fattes",
   6 => 1
),
2 => array(
   0 => "What is the superlative form of interesting?",
   1 => "the more interesting",
   2 => "the most interesting",
   3 => "most interesting",
   6 => 2
),
3 => array(
   0 => "Which word is NOT spelled correctly?",
   1 => "youngest",
   2 => "shortest",
   3 => "happyest",
   6 => 3
),
4 => array(
   0 => " Which word goes in the space? Which is the ___ planet from the sun?",
   1 => "farrest",
   2 => "far",
   3 => "furthest",
   6 => 3
),
5 => array(
   0 => "Which sentence is NOT correct?",
   1 => "That was the most hardest exam ever!",
   2 => "This is the best bar in the city.",
   3 => "She’s the worst volleyball player in the school.",
   6 => 3
),
6 => array(
   0 => "Question 6 is ____ question in the test.",
   1 => "dificult",
   2 => "the most dificult",
   3 => "most dificult",
   6 => 2
),
7 => array(
   0 => "That was ____ film I’m ever seen.",
   1 => "the most boring",
   2 => "the boring",
   3 => "the boringest",
   6 => 1
),
8 => array(
   0 => "The fish is ____ thing on the menu.",
   1 => "good",
   2 => "the best",
   3 => "goodest",
   6 => 2
),
9 => array(
   0 => "Karen is ___ student in the class.",
   1 => "the healthiest",
   2 => "the healthest",
   3 => "the healthyest",
   6 => 1
),
10 => array(
   0 => "Yesterday was ___ day of the year so far.",
   1 => "the hotest",
   2 => "the most hot",
   3 => "the hottest",
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
      <h3><span>Superlative</span>s</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Superlatives</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Bentuk superlatives menggambarkan sesuatu yang lebih besar daripada hal lainnya.<br><br>
              <em>The Amazon is the longest river in the world.<br>
              Helen is the most intelligent student in the class</em><br><br>
              <strong><u>Bentuk:</u></strong><br>
              1) Tulis <strong>the</strong> sebelum superlative.<br><br>
              2) Jika adjective pendek dan memiliki satu suku kata, tambahkan huruf <strong>est</strong> diakhir kata.Namun apabila diakhir kata diakhiri huruf e, hanya tambahkan <strong>st</strong>.<br>
              tall     =>    the tallest          nice      =>      the nicest<br>
              thick    =>    the thickest         late      =>      the latest<br><br>
              3) Jika adjective diakhiri satu huruf vokal dan satu consonant, tulis kembali consonant, dan kemudian tulis <strong>est</strong>.Namun jangan menulis <strong>w</strong> sebanyak dua kali.<br>
              big     =>   the biggest           new     =>    the newest (NOT newwest)<br>
              thin    =>   the  thinnest         slow    =>    the slowest (NOT slowwest)<br>
              slim    =>   the slimmest<br><br>
              <em><u>The biggest</u> cat in the world is the lion.</em><br><br>
              4) Jika adjective mempunyai 2 suku kata dan diakhiri huruf <strong>y</strong>, ubah huruf y menjadi <strong>i</strong> dan tambahkan <strong>est</strong>.<br>
              funny   =>   the funniest          silly    =>    the silliest<br><br>
              <em>It’s <u>the silliest</u> film I’ve ever seen!</em><br><br>
              5) Untuk adjective mempunyai 2 suku kata atau lebih <strong>Jangan</strong> tambahkan huruf<strong>est</strong>. Tulis <strong>most</strong> di depan kata adjective.<br>
              interesting    =>    the most interesting        surprising     =>     the most surprising<br>               
              <em>It’s <u>the most interesting</u> book I’ve ever read.</em><br><br>
              4) Beberapa adjective memiliki bentuk irreguler superlative, seperti berikut ini.<br>
              good  =>  <em>the best</em><br>
              bad   =>  <em>the worst</em><br>
              far   =>  <em>the furthest</em><br><br>
              5) <strong>In</strong>Seringkali ( tetapi tidak selalu ) digunakan setelah kata sifat superlatif untuk menyatakan bahwa pernyataan ini benar.<br>
              London is the biggest city <u>in</u> England.<br>
              Everest is the highest mountain <u>in</u> the world.<br>
              My brother is the tallest person <u>in</u> my family.<br><br>
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
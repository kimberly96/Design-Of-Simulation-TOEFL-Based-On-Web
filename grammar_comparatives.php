<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "What is the comparative form of great?",
   1 => "greater",
   2 => "greatier",
   3 => "more great",
   6 => 1
),
2 => array(
   0 => "What is the comparative form of important?",
   1 => "more important",
   2 => "importanter",
   3 => "more importanter",
   6 => 1
),
3 => array(
   0 => "Which comparative adjective is NOT spelled correctly?",
   1 => "happy => happier",
   2 => "thin => thiner",
   3 => "big => bigger",
   6 => 2
),
4 => array(
   0 => "Which word goes in the space? My wife is more intelligent ___ me.",
   1 => "than",
   2 => "from",
   3 => "to",
   6 => 1
),
5 => array(
   0 => "Which sentence is NOT correct?",
   1 => "Kerry is smarter than her sister.",
   2 => "This book is boringer than that one.",
   3 => "Melanie is prettier than June.",
   6 => 2
),
6 => array(
   0 => "Which is ____ a tiger or a lion?",
   1 => "dangerous",
   2 => "more dangerous",
   3 => "very dangerous",
   6 => 2
),
7 => array(
   0 => "Daniel is ____ at sport than his brother.",
   1 => "worse",
   2 => "very worse",
   3 => "bad",
   6 => 1
),
8 => array(
   0 => "How much ___ do we have to walk?",
   1 => "far",
   2 => "further",
   3 => "more far",
   6 => 2
),
9 => array(
   0 => "I think this dress is ___ than that one",
   1 => "prettier",
   2 => "pretty",
   3 => "more pretty",
   6 => 1
),
10 => array(
   0 => "I need to get up ___ tomorrow than I did today.",
   1 => "more early.",
   2 => "early",
   3 => "earlier",
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
      <h3><span>Comparative</span>s</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Comparatives</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Comparatives digunakan untuk membicarakan tentang bagaimana perbedaan dua benda.<br><br>
              <em>I am taller than you.<br>
              This book is thicker than that one.</em><br><br>
              <strong><u>Bentuk:</u></strong><br>
              1) Jika adjective mempunyai 1 silabel, tambahan <strong>er</strong> diakhir kalimat. Jika diakhir kalimat sudah ada huruf  <strong>e</strong> maka tinggal menambahkan huruf <strong>r</strong>.<br>
              tall   =>  taller     nice  =>  nicer <br>
              thick  =>  thicker    late  =>  later <br><br>
              2) Jika adjective diakhiri satu huruf vokal dan satu consonant, tulis kembali consonant, dan kemudian tulis <strong>er</strong>.Namun jangan menulis <strong>w</strong> sebanyak dua kali.<br>
              big   =>  bigger     new   =>  newer (NOT newwer)<br>
              thin  =>  thinner    slow  =>  slower (NOT slowwer) slim  =>  slimmer<br>
              <em>My brother is thinner than me.</em><br><br>
              3) Jika adjective mempunyai 2 suku kata dan diakhiri huruf <strong>y</strong>, ubah huruf y menjadi <strong>i</strong> dan tambahkan <strong>er</strong>.<br>
              funny   =>  funnier     silly   =>  sillier <br>
              <em>Which of these books is funnier?</em><br><br>
              4) Beberapa adjective memiliki bentuk irreguler superlative, seperti berikut ini.<br>
              good  =>  <em>better</em><br>
              bad   =>  <em>worse</em><br>
              far   =>  <em>further</em><br><br>
              Tambahkan than setelah kata sifat komparatif untuk membandingkan satu hal dengan yang lain . Namun, hal ini tidak selalu diperlukan.<br>
              <em>My house is smaller than yours.</em><br><br>
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
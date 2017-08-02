<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Choose the sentence with the meaning : James is always lazy. He failed a test last week.",
   1 => " If you hadn’t been so lazy, you would pass that test.  ",
   2 => " If you weren’t so lazy, you would have passed that test.   ",
   3 => " If you weren’t so lazy, you would pass that test.    ",
   6 => 2
),
2 => array(
   0 => "Choose the sentence with the meaning: Paul drove too fast. Now he’s in trouble with the police.",
   1 => " If Paul hadn’t driven too fast, he wouldn’t be in trouble with the police.  ",
   2 => " If Paul didn’t drive too fast, he wouldn’t be in trouble with the police.  ",
   3 => " If Paul hadn’t drive too fast, he wouldn’t have been in trouble with the police.",
   6 => 1
),
3 => array(
   0 => "If he ___ you an invoice, you should pay him.",
   1 => " had sent  ",
   2 => " would send  ",
   3 => " ‘s sent   ",
   6 => 3
),
4 => array(
   0 => "Which sentence is correct?",
   1 => " If you’d remembered to bring a map, we wouldn’t have been lost now.  ",
   2 => " If you remembered to bring a map, we wouldn’t be lost now.  ",
   3 => " If you’d remembered to bring a map, we wouldn’t be lost now. ",
   6 => 3
),
5 => array(
   0 => "If ____ late, can you turn everything off before you go?",
   1 => " you’ve worked  ",
   2 => " you’re working  ",
   3 => " you’ll work   ",
   6 => 2
),
6 => array(
   0 => "If you _________ the photocopier off and off again, it sometimes works.",
   1 => " turn  ",
   2 => " will turn  ",
   3 => " turned   ",
   6 => 1
),
7 => array(
   0 => " Choose the sentence with the meaning: I don’t have a degree, so I didn’t get the job.",
   1 => " If I have a degree, I would have got that job.  ",
   2 => " If I had a degree, I would have got that job.  ",
   3 => " If I’d had a degree, I would get that job.   ",
   6 => 2
),
8 => array(
   0 => " Choose the sentence with the meaning: You didn’t fix the roof. Now it’s leaking.",
   1 => " If you’d fixed the roof, it wouldn’t be leaking.  ",
   2 => " If you fixed the roof, it wouldn’t have leaked.  ",
   3 => " If you’d fixed the roof, it wouldn’t have been leaking. ",
   6 => 1
),
9 => array(
   0 => "You can't find your purse. You think someone has taken it. What do you say? If someone ____ my purse, I’ll be furious!",
   1 => " took  ",
   2 => " has taken  ",
   3 => " takes   ",
   6 => 2
),
10 => array(
   0 => " Which word CANNOT go in the space? If you order the book today, it ___ arrive tomorrow.",
   1 => "may",
   2 => "would",
   3 => "should",
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
      <h3>Mixed Conditional</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Mixed Conditional</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Kalimat mixed conditional(Campuran) menggabungkan dua kondisi tenses yang berbeda. <br>
              Beberapa tenses/bentuk dapat digunakan sebagai: <br><br>
              1) <b>Mixed First Conditional Sentences</b><br>
              Kalimat Conditional pertama dapat menggunakan berbagai macam kata kerja modal. <br>
              <b>If + present simple, can / may / might / will / should + verb (infinitive)</b><br>
              <em>If you give me some money, I can buy some milk. <br>
              If I finish my homework, may I go out with my friends? <br>
              If you switch the photocopier off and on again, it should work.</em>  <br><br>
              Kalimat conditional pertama dapat menggunakan <b>going to</b>, sebaik <b>will</b>. <br>
              <b>If + present simple, going to + verb (infinitive)</b><br>
              <em>If you don’t get ready soon, we’re going to be late!</em><br><br>
              Present continuous dan going to dapat muncul dengan klausa <b>if</b>.<br>
              <em>If you’re going to the shop, can you buy me some cola? <br>
              If you’re going to pay him, make sure you get a receipt.</em><br><br>
              Present perfect juga dapat menggunakan klausa <b>if</b>. <br>
              <em>If you’ve finished your work, you can go home.</em><br><br>
              2) <b>Mixed Third / Second Conditional</b><br>
              Kombinasi kalimat ini menjelaskan kejadian yang tidak nyata dimasa lalu dan hasilnya dimasa depan. <br>
              <b>If + past perfect, would + verb (infinitive)</b><br>
              <em>If he'd taken the medicine, he wouldn't still be sick. <br>
              He wouldn’t still be sick if he’d taken the medicine. </em><br><br>
              3) <b>Mixed Second / Third Conditional</b><br>
              Kombinasi ini menjelaskan situasi yang tidak pernah benar, dan hasil/konsekuensi dari situasi tersebut. <br>
              <b>If + past simple, would have + verb (infinitive)</b><br>
              <em>If you were better at speaking in public, the presentation would have been more successful. <br>
              The presentation would have been more successful if you were better at speaking in public.</em> <br><br>
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
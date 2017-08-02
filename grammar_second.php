<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "What would you do if there _____ an earthquake?",
   1 => " would be  ",
   2 => " were  ",
   3 => " could be",
   6 => 2
),
2 => array(
   0 => " Which sentence is NOT correct?",
   1 => " If we lived in that house, we could get a dog.  ",
   2 => " She’d go out more if she would have more free time.  ",
   3 => " If I were you, I’d discuss the situation with my boss. ",
   6 => 2
),
3 => array(
   0 => "If I had more money, I ______ that television.",
   1 => " would buy  ",
   2 => " will buy  ",
   3 => " bought",
   6 => 1
),
4 => array(
   0 => "Which sentence is NOT true of the second conditional?",
   1 => " It describes an imaginary situation.  ",
   2 => " It describes what will happen in the future.   ",
   3 => " You can use it for daydreaming and wishing.",
   6 => 2
),
5 => array(
   0 => "‘Could you help me fix the car?’",
   1 => " I would if I’d know how to do it.  ",
   2 => " If I had time, I’d.  ",
   3 => " I would if I knew how.",
   6 => 3
),
6 => array(
   0 => "If he ____ more careful, he wouldn’t keep breaking things.",
   1 => "were",
   2 => "was",
   3 => "is",
   6 => 1
),
7 => array(
   0 => "I ___  to the wedding if I wasn’t so busy.",
   1 => "'d go",
   2 => "sould go",
   3 => "'m go",
   6 => 1
),
8 => array(
   0 => "He would be more successful if he ____ a bit more business sense.",
   1 => "has",
   2 => "have",
   3 => "had",
   6 => 3
),
9 => array(
   0 => "If she ___ English better, she’d be able to get a really good job.",
   1 => "speak",
   2 => "spoke",
   3 => "could spoke",
   6 => 2
),
10 => array(
   0 => "If we had more staff, we ____  to take on more projects.",
   1 => "'d able",
   2 => "'d be able",
   3 => "be able",
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
      <h3>Second Conditional</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Second Conditional</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Second Conditional digunakan untuk situasi tidak nyata/imajinasi dan konsekuensinya. <br>
              Example: <em>If I had a car, I could visit my friend.</em><br>
                (Namun kenyataannya adalah, saya tidak mempunyai mobil dan saya tidak dapat mengunjungi teman saya). <br><br>
              Second Conditional juga digunakan untuk membicarakan kemampuan yang tidak nyata dan konsekuensinya. <br>
              Example: <em>If I could fly, I wouldn’t need a car.</em><br>
                (Namun kenyataannya adalah, saya tidak bisa terbang sehingga saya membutuhkan mobil). <br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              1) Second Conditional dibuat dengan cara berikut:<br>
              <img src="images/grammar/grammar27.jpg"><br>
              Example:            <b> If we had more money, we would buy that house.</b><br><br>
              atau <br>
              <img src="images/grammar/grammar28.jpg"><br>
              Example: <b>She’d be more successful if she worked harder.</b><br><br>
              2) to be kata kerjad dapat digunakn <b>were</b> untuk semua subject. Sehingga contoh kalimat akan seperti ini <b> If I were you…</b><br>
              <em>If I were you, I’d buy a bicycle.   </em><br><br>
              Atau bisa juga: <br>
              <em>If he were more careful, he wouldn’t break everything.  =><br>
			  If he was more careful, he wouldn’t break everything.</em>	<br><br>
			  3) Untuk berbicara tentang kemampuan yang tidak nyata, gunakan <b>could</b>. <br>
              <img src="images/grammar/grammar29.jpg"><br>
              Example: <b> If I could help you, I would!</b><br><br>
              4) Ingat bahwa kata kerja infinitif setelah modal verb tidaklah diperlukan jika artinya sudah jelas.  <br>
              If I could pay, <Strike>I’d</strike>...   =>   If I could pay, I would... <br><br>
              <strong><u>Kesalahan Umum:</u></strong><br>
              1) Beberapa orang menulis <b>would</b> setelah <b>if</b>. <br>
              <strike>If I would have a lot of money, I would buy that car!</strike>  =>  If I had a lot of money, I would buy that car! <br><br>
              2) Beberapa orang lupa menuliskan <b>could</b> saat membicarakan kemampuan yang tidak nyata. <br>
              <strike>If I played the drums, I’d join a band.</strike>  =>   If I could play the drums, I’d join a band <br><br>
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
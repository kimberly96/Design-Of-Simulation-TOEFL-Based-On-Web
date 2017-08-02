<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "We ____ have won the game if we’d played a little better.",
   1 => " would  ",
   2 => " can  ",
   3 => " might  ",
   6 => 2
),
2 => array(
   0 => "If the weather ____ better, we could’ve gone to the beach.",
   1 => " hadn’t been  ",
   2 => " would have been  ",
   3 => " had been ",
   6 => 3
),
3 => array(
   0 => "Which sentence has the same meaning? I lost Jennifer’s number so I couldn’t call her.",
   1 => " If I hadn’t lost Jennifer’s number, I could’ve called her.  ",
   2 => " If I had lost Jennifer’s number, I could’ve called her.  ",
   3 => " If I hadn’t lost Jennifer’s number, I couldn’t have called her.   ",
   6 => 1
),
4 => array(
   0 => "If I ____ time, I ____ visited him.",
   1 => " had had / would have  ",
   2 => " would have / had  ",
   3 => " would have had / would have  ",
   6 => 1
),
5 => array(
   0 => "I might have bought the table if...",
   1 => " it had been a bit smaller.  ",
   2 => " it would be a bit smaller.  ",
   3 => " it may have been a bit smaller. ",
   6 => 1
),
6 => array(
   0 => "I ____ all that way to the castle, if I’d known it was closed.",
   1 => "wouldn’t have driven",
   2 => "wouldn’t had driven",
   3 => "couldn’t have driven",
   6 => 1
),
7 => array(
   0 => "I’m sure Sarah ____ her grandmother more often if she’d known she was so ill.",
   1 => "would have visited",
   2 => "would has visited",
   3 => "has visited",
   6 => 1
),
8 => array(
   0 => "If Keith ___ more careful, he wouldn’t have had an accident.",
   1 => "have been",
   2 => "has been",
   3 => "had been",
   6 => 3
),
9 => array(
   0 => "I ____ the documents if I’d known you needed them.",
   1 => "wouldn't has thrown away",
   2 => "wouldn't have thrown away",
   3 => "wouldn't had thrown away",
   6 => 2
),
10 => array(
   0 => "If you ____ for directions, we wouldn’t have got lost",
   1 => "could asked",
   2 => "would asked",
   3 => "had asked",
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
      <h3>Third Conditional</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Third Conditional</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Gunakan Third Conditional untuk berbicara kejadian pada masa lampau. Gunakan untuk menjelaskan apa yang akan terjadi dimasa lampau (event 'b') sebagai hasil dari sesuatu yang lain (event 'a'). Bagaimanpun, baik avent a dan b  tidak benar-benar terjadi. Olehsebab itu, third conditional menjelaskan hipotesis  dan situasi yang bersifat imajinasi. <br><br>
              <em>If I had been at home yesterday, I’d have got your phone call.</em><br>
              (Namun, saya tidak dirumah dan saya tidak mendapatkan pangilan telfon darimu). <br><br>
              Third Conditional dapat digunakan untuk mengkritik: <br>
              <em>If you had worked harder, you wouldn’t have failed the test.</em>
                (But you didn’t work hard and you failed the test). <br><br>
              Atau dapat juga digunakan sebagai bentuk ekspresi: <br>
              <em> If I hadn’t spent all my money, I could’ve bought a computer.
                (But I spend all my money and I couldn’t buy a computer).</em><br><br>
              Atau: <br>
              <em>If I we’d taken that route, we’d have been stuck in the traffic jam for hours!
                (But we didn’t take that route, and we didn’t get stuck)</em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              a) Third Conditional dibuat dengan cara sebagai berikut:<br>
              <img src="images/grammar/grammar30.jpg"><br><br>
              <em>If you’d told me that Anna had put on weight, I wouldn’t have congratulated her on becoming pregnant.</em><br><br>
              Atau: <br>
              <img src="images/grammar/grammar31.jpg"><br><br>
              <em>Jim wouldn’t have made those mistakes if you had trained him properly.</em><br><br>
              b) Anda juga dapat menggunakan <b>may have / may not have, might have / might not have or could have / couldn’t have</b> untuk menjelaskan adanya kemungkinan dan konsekuensi yang lain. <br>
              <em>You  <u>might have</u> had an accident if you’d driven home in the snow last night.</em><br><br>
              c) Kadang kalimat <b>if clause</b> tidak perlu diucapkan. <br>
               ‘I’d have helped.’  <b>means</b>  ‘I’d have helped if you’d asked me.’ <br>
               ‘I wouldn’t have said that.’   <b>means</b>  ‘I wouldn’t have said that if I’d been there.’ <br><br>
               <strong><u>Kesalahan Umum:</u></strong><br>
               Beberapa orang menulis <b>would</b> setelah <b>if</b> dan hal tersebut salah. <br>
               <em><strike>If I would have seen Sally, I’d have told her the news.</strike>  →    If I had seen Sally, I’d have told her the news.</em><br><br>
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
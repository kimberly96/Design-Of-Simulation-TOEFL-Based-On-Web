<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which word completes the sentence? You ____ very hungry!",
   1 => "is",
   2 => "are",
   3 => "am",
   6 => 2
),
2 => array(
   0 => "In which sentence can you write is?",
   1 => "____ you a doctor?  ",
   2 => "This ____ my mother.  ",
   3 => "____ your parents here? ",
   6 => 2
),
3 => array(
   0 => "Which question is NOT correct?",
   1 => "Where is your house?  ",
   2 => "You are a manager?  ",
   3 => "How old are you?   ",
   6 => 2
),
4 => array(
   0 => "Which sentence is correct?",
   1 => "He not my dad, he’s my husband!  ",
   2 => "I’m no a student, I’m a teacher.  ",
   3 => "Maria’s not in the kitchen.  ",
   6 => 3
),
5 => array(
   0 => "Which is the correct answer to this question? Are you hungry?",
   1 => "No, I not.  ",
   2 => "Yes, I’m.  ",
   3 => "No, I’m not.   ",
   6 => 3
),
6 => array(
   0 => "______ is cold inside?",
   1 => "it",
   2 => "are",
   3 => "do",
   6 => 1
),
7 => array(
   0 => "where ____ you?",
   1 => "are",
   2 => "is",
   3 => "am",
   6 => 1
),
8 => array(
   0 => "Sorry, but we ____ free on Friday.",
   1 => "are",
   2 => "isn't",
   3 => "aren't",
   6 => 3
),
9 => array(
   0 => "That ____ my sister, its my mom.",
   1 => "is",
   2 => "isn't",
   3 => "are",
   6 => 2
),
10 => array(
   0 => "Hello, i ____ Paul, nice to meet you.",
   1 => "amn't",
   2 => "am",
   3 => "is",
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
      <h3>Past Simple of <span>To be</span></h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">To Be</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Fungsi Be ialah sebagai berikut:<br>
              <img src="images/grammar/grammar6.jpg"><br><br>
              <strong><u>Bentuk:</u></strong><br>
              <b>Kalimat Positif:</b><br>
              <img src="images/grammar/grammar7.jpg"><br><br>
              <b>Kalimat Negatif:</b><br>
              <img src="images/grammar/grammar8.jpg"><br><br>
              <b>Kalimat Pertanyaan:</b><br>
              <img src="images/grammar/grammar9.jpg"><br><br>
              <b>Jawaban Singkat:</b><br>
              <img src="images/grammar/grammar10.jpg"><br><br>
              <strong><u>Singkatan:</u></strong><br>
              Kata kerja be memiliki bentuk penuh dan bentuk yang disingkat. <br>
              <em>I am = I’m <br>
              He is = He’s</em> <br><br>
              Bentuk singkatan pada umumnya ('m/'s/'re') dapat dilakukan dalam pengucapan ataupun penilisan. <br>
              Anda hanya dapat menggunakan satu singkatan pada satu waktu :<br>
              eg: <em>He isn’t <br>
              He’s not <br>
              but NOT He’sn’t</em><br><br>
              Anda dapat menyingkat be setelah pronoun (i/ you/ she etc) dan nama. <br>
              Anda dapat menyingkat 'is' setelah kalimat pertanyaan. <br>
              <em>What is your name? => What’s your name?</em><br>
              Namun jangan menyingkat 'are' setelah kalimat pertanyaan. <br>
              <em>Where are you from? => Where’re you from? </em><br><br>
              Jangan menyingkat pertanyaan yang singkat:<br>
              <em>Yes, I am <b>NOT</b> <strike>Yes, I’m</strike></em><br><br>
              <strong><u>Kesalahan umum:</u></strong><br>
              1) Dalam bahasa inggris, setiap kalimat harus memiliki kata kerja. Namun beberapa orang menulis kalimat tanpa kata kerja. <br>
              <strike>I very hungry.</strike> => <em>I’m very hungry</em><br>
              <strike>My brother in his bedroom.</strike< => <em>My brother is in his bedroom.</em><br><br>
              2) Beberapa orang salah dalam meulis pertanyaan. <br>
              <strike>She is your sister? </strike> => <em>Is she your sister?</em><br><br>
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
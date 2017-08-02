<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Where can you write lives?",
   1 => "I ___ near Birmingham.  ",
   2 => "Alice and Emma ____ in Ireland.  ",
   3 => "My aunt ____ in Scotland",
   6 => 3
),
2 => array(
   0 => "Where can you write don’t?",
   1 => "Paul ___ like coffee.  ",
   2 => "It ___ rain much in Mexico.  ",
   3 => "I ___ have a car.  ",
   6 => 3
),
3 => array(
   0 => "Which word goes in the space? ___ you live near here?",
   1 => "are",
   2 => "does",
   3 => "do",
   6 => 3
),
4 => array(
   0 => "Which sentence is correct?",
   1 => "Maria haves a brown dog.  ",
   2 => "Tom goes to work on Sundays.  ",
   3 => "My parents does the shopping on Saturdays.   ",
   6 => 2
),
5 => array(
   0 => "Which is the correct answer to this question? Does your sister work here?",
   1 => "Yes, she do.  ",
   2 => "Yes, she have.  ",
   3 => "No, she doesn’t. ",
   6 => 3
),
6 => array(
   0 => "Tom ___ a new car. ",
   1 => "has",
   2 => "had",
   3 => "have",
   6 => 1
),
7 => array(
   0 => "My brother ____ about the party.",
   1 => "doesn't know",
   2 => "don’t know",
   3 => "didn't know",
   6 => 1
),
8 => array(
   0 => "My dad ____ TV every evening.",
   1 => "watch",
   2 => "watching",
   3 => "watches",
   6 => 3
),
9 => array(
   0 => "Do you ___ near here?",
   1 => "lives",
   2 => "live",
   3 => "lived",
   6 => 2
),
10 => array(
   0 => "What time does Jason ___ work",
   1 => "started",
   2 => "start",
   3 => "starting",
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
      <h3>Present <span>Simple</span></h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Present Simple</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Kalimat di present simple bersifat benar sepanjang waktu.<br>   
              I come from Japan. <br>
              I live in Paris. <br>
              I like animals. <br>
              I have three sisters. <br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              <b>Positif</b><br>
              <img src="images/grammar/grammar17.jpg"><br><br>
              <b>Negatif</b><br>
              <img src="images/grammar/grammar18.jpg"><br><br>
              <b>Bentuk Pertanyaan</b><br>
              <img src="images/grammar/grammar19.jpg"><br><br>
              <b>Bentuk Jawaban Singkat</b><br>
              <img src="images/grammar/grammar20.jpg"><br><br>
              <strong><u>Aturan Pengejaan untuk Orang Ketiga  (he / she / it):</u></strong><br>
              1) Jika kata kerja diakhiri <b>konsonan + y</b>, ubah <b>y</b> ke <b>i</b> dan tambahkan <b>-es</b>.<br>
              <em>I stu<u>dy</u> English.  ==> He stu<u>dies</u> English</em><br><br>
              2) Jika kata kerja diakhiri <b>tch, ss, x, sh </b> atau <b>z</b> tambahkan <b>-es</b>.<br>
              <em>She watch<u>es</u> television. <br>
              Susan miss<u>es</u> her family. <br>
              He fix<u>es</u> the television. <br>
              My dad wash<u>es</u> the car on Sundays.</em><br><br>
              3) Beberapa verb mempunyai bentuk pengejaan irreguler. <br>
              <em>I go         →           he / she / it <u>goes</u>  <br>
              I do         →           he / she / it <u>does</u>  <br>
              I have     →           he / she / it <u>has</u> </em><br><br>
              <strong><u>Kesalahan Umum: </u></strong><br>
              1) Beberapa orang lupa menambahkan <b>s</b> untuk she/he/it. <br>
              <em> <strike>My mother like chocolate.</strike>                =>           My mother likes chocolate.</em><br><br>
              2) Beberapa orang membuat bentuk negatif yang salah<br>
              <em> <strike>Tom no work here.</strike>           →            Tom doesn’t work here. <br>
              <strike>Tom isn’t work here.</strike><br>
              <strike>Tom don’t work here.</strike></em><br><br>
              3) Beberapa orang lupa menambahkan Do dan Does dalam membuat pertanyaan<br>
              <em><strike>You like this song?</strike>             →            Do you like this song? <br>
              <strike>Is your father work here?</strike>            →            Does your father work here?</em><br><br>
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
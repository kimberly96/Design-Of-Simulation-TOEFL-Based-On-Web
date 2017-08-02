<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Peter loves his cat, ______?",
   1 => " does he  ",
   2 => " doesn’t he  ",
   3 => " isn’t he   ",
   6 => 2
),
2 => array(
   0 => "Your children don’t go out alone, ____?",
   1 => " can’t they  ",
   2 => " can they  ",
   3 => " do they?  ",
   6 => 3
),
3 => array(
   0 => "Dad’s taken my bag, ____?",
   1 => " isn’t he?  ",
   2 => " hasn’t he?  ",
   3 => " is he? ",
   6 => 2
),
4 => array(
   0 => "I’m not invited to the wedding, ___?",
   1 => " aren’t I  ",
   2 => " are I  ",
   3 => " am I   ",
   6 => 3
),
5 => array(
   0 => "We looked everywhere, ____?",
   1 => " didn’t we  ",
   2 => " weren’t we  ",
   3 => " haven’t we  ",
   6 => 1
),
6 => array(
   0 => "She doesn’t live far from here, ____ ?",
   1 => "does she?",
   2 => "is she?",
   3 => "do she",
   6 => 1
),
7 => array(
   0 => "Brian would help out if he could, ___ ?",
   1 => "wouldn't he",
   2 => "doesn’t he",
   3 => "isn’t he",
   6 => 1
),
8 => array(
   0 => "Your parents never listen to pop music, ____ ?",
   1 => "are the",
   2 => "does they",
   3 => "do they",
   6 => 3
),
9 => array(
   0 => "We’re having bacon for dinner tonight, ____ ?",
   1 => "haven’t we",
   2 => "aren’twe",
   3 => "doesn’t we",
   6 => 2
),
10 => array(
   0 => "She’s got beautiful eyes, ____ ?",
   1 => "isn’t she",
   2 => "hasn't she",
   3 => "doesn’t she",
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
      <h3>Question Tag</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Question Tag</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Gunakan question tag di dua situasi. <br>
              1) Anda tidak yakin apakah sesuatu itu benar, sehingga anda ingin mengecek. Pada kasus seperti ini, suara anda harus meningkat  ketika anda berbicara/menyebutkan question tag tersebut. <br>
              <em>You’re not going now, are you?</em><br><br>
              2) Anda tau bahwa sesuatu itu benar. Kemudian anda ingin memasukkan orang lain ke dalam percakapan. Pada kasus seperti ini, suara anda harus merendah ketika menyebutkan tag sehingga tidak terdengar seperti pertanyaan. <br>
              <em>He doesn’t live here now, does he?</em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              Question tag yang baik: <br>
              1) Kalimat positif yang singkat, pertanyaan negatif di akhir. <br>
              Ulasan Tag ini memeriksa sesuatu yang Anda yakini <u>benar</u>. <br>
              <em>It’s Monday today, isn’t it?</em><br><br>
              2) Kalimat negatif yang singkat, pertanyaan positif di akhir. <br>
              Ulasan Tag ini memeriksa sesuatu yang Anda yakini <u>salah</u>. <br>
              <em>It’s not raining, is it?</em><br><br>
              Buat question tag dengan cara berikut: <br>
              1) Jika terdapat kata kerja modal, tulis dalam bentuk berlawanan (positif/negatif) di akhir kalimat. Kemudian tulis subject pronoun dari kalimat. <br>
              <em>Ian’s nice, isn’t he? <br>
              Laura hasn’t arrived yet, has she? <br>
              I can’t do anything to help, can I? <br>
              We won’t be late, will we?</em><br><br>
              PERHATIAN: Gunakan <b>aren't </b> dengan <b>i'm</b> di question tag. <br>
              <em>I’m a bit careless, aren’t I?       NOT       <strike>I’m a bit careless, am not I?</strike></em><br><br>
              2) Dikalimat present dan past tense, gunakan <b>do</b>, <b>does</b> dan <b>did</b>. <br>
              <em>Brian and Cathy don’t eat meat, do they?<br>
              Your dad lives abroad, doesn’t he?<br>
              Your friends enjoyed themselves, didn’t they?</em> <br><br>
              3) Gunakan question tag yang positif setelah <b>never</b>. <br>
              <em>Miles never goes out, does he?</em><br><br>
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
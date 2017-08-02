<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Do you know how tall ____?",
   1 => " is it?  ",
   2 => " they are?  ",
   3 => " he’s?   ",
   6 => 2
),
2 => array(
   0 => "Which question is correct?",
   1 => " Can you tell me where were you born?  ",
   2 => " Can you tell me where you were born?  ",
   3 => " Can you tell me if where you were born?   ",
   6 => 2
),
3 => array(
   0 => "I wonder ____ he’s moved house yet.",
   1 => " whether  ",
   2 => " when  ",
   3 => " where   ",
   6 => 1
),
4 => array(
   0 => "Which question is NOT correct?",
   1 => " I want to know when is he going to get a job.  ",
   2 => " Do you know if they’ve fixed their car?  ",
   3 => " Have you any idea if we’ve got any bread?  ",
   6 => 1
),
5 => array(
   0 => "I’ve no idea whether _______ meat or not.",
   1 => " does Jane eats  ",
   2 => " Jane does eat  ",
   3 => " Jane eats  ",
   6 => 3
),
6 => array(
   0 => "Do you know ____ the report?",
   1 => "where John put",
   2 => "where is John put",
   3 => "where does John put",
   6 => 1
),
7 => array(
   0 => "Can you tell me  ___ please?",
   1 => "what the date is",
   2 => "what is the date ",
   3 => "what date it is",
   6 => 1
),
8 => array(
   0 => "Have you any idea ____ on time?",
   1 => "if the flight is going",
   2 => "if the flight is be going",
   3 => "if the flight is going to be",
   6 => 3
),
9 => array(
   0 => "I wonder ____ ?",
   1 => "who  was Jennifer dating",
   2 => "who Jennifer is dating",
   3 => "who Jennifer is date",
   6 => 2
),
10 => array(
   0 => "I’ve no idea ____ or not.",
   1 => "if it work",
   2 => "if it worked",
   3 => "it worked",
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
      <h3><span>Embedded</span> Question</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Embedded Question</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Setiap kali Anda akan menggunakan kalimat pengantar sebelum sebuah pertanyaan, Anda harus mengubah urutan kata dalam pertanyaan tersebut. <br>
              Pengantar tersebut termasuk: <br>
              <em>Can you tell me...? Do you know...? I don’t know... I’m not sure...   I wonder...  I can’t remember...</em><br><br>
              What’s the time?  =>Can you tell me what the time is? <br>
              Where did he go? =>I don’t know where he went. <br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              1)  Jika pertanyaan itu memiliki kata kerja bantu, maka tukar posisi dari kata kerja bantu dan subjek. Anda juga dapat melakukan ini dalam kalimat dengan kata kerja <b>to be</b>.<br>
              Example:   When can you get here?    <br>
              <b>can</b> adalah kata kerja bantu dan <b>you</b> adalah subjek. Tukar posisi mereka ketika Anda ingin menambahkan pengantar. <br>
              <em>Do you know when you can get here?</em><br><br>

              Other examples: <br>
              <em>Where has he gone?      =>I don’t know where he has gone. <br>
              What are they doing?   => I don’t know what they’re doing. <br>
              What time is it?    => Have you any idea what time it is?</em> <br><br>
              Anda tidak dapat menyingkat kata kerja jika terletak di akhir kalimat. <br>
              <em><strike>Do you know what time it’s? </strike>     =>Do you know what time it is?</em><br><br>
              2) Jika pertanyaan berbentuk present atau past simple, hapus do / does/ did dari pertanyaan. Ubah akhir dari kata kerja sehingga bentuk kata kerja tetap mengikuti tense. <br>
              <em>Where <b>did he go?</b> =>Did you see where <b>he went?</b><br>
              What time <b>do you get up? </b>=>Can you tell me what time <b>you get up?</b><br>
              Where <b>does she work?</b> =>I wonder where <b>she works?</b></em> <br><br>
              3) Jika pertanyaan tidak memiliki kata tanya (Where, What, Why etc.) gunakan <b>if</b> atau <b>wether</b> sebelum pertanyaan. <br>
              <em>Does he live here? =>Do you know <b>if</b> he lives here? <br>
              Are they coming to the party?    =>Do you know<b> whether</b> they are coming to the party?</em> <br><br>
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
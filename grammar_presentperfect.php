<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "What _________ doing?",
   1 => " you been  ",
   2 => " have you been   ",
   3 => " you have been   ",
   6 => 2
),
2 => array(
   0 => "I’ve been playing football ________.",
   1 => " all day.  ",
   2 => " yesterday.  ",
   3 => " two hours ago. ",
   6 => 1
),
3 => array(
   0 => "Which sentence is NOT correct?",
   1 => " I haven’t been sleeping well lately.  ",
   2 => " She’s not been working very hard recently.  ",
   3 => " We’ve not eating cakes and chocolates.   ",
   6 => 3
),
4 => array(
   0 => "Which question is NOT correct?",
   1 => " What Amelia has been doing all day?  ",
   2 => " How long have the kids been playing in the park?  ",
   3 => " Who has Karen been working for?   ",
   6 => 1
),
5 => array(
   0 => "We ______ raising money for charity.",
   1 => " haven’t  ",
   2 => " hasn’t been  ",
   3 => " ‘ve not been    ",
   6 => 3
),
);


$max=5;

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
      <h3>Present Perfect Continuous</h3>
      </div>
         <div style="background-color:#666666; color:white; margin-left:150px; width:620px; padding:5px 0">There are 5 questions in this quiz. Read the grammar explanation below. 
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
            <br><p style="font-size:16px; color:black; text-align:center">Present Perfect Continuous</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Gunakan Perfect Perect Continuous di dua situasi. <br>
              1) Anda memulai sesuatu di masa lalu dan masih mengerjakannya sampai sekarang. <br>
              <em>I’ve been working all morning.</em> (Dan saya masih bekerja sampai sekarang). <br><br>
              2) Anda baru saja selesai mengerjakan sesuatu dan efek atau akibatnya masih terlihat sampai sekarang. <br>
              <em>I’ve been gardening, so my hands are dirty.</em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              Bentuk umum Prensent perfect continuous dapat dilihat dengan cara berikut ini: <br>
              <b>Bentuk positif dan negatif</b><br>
              <img src="images/grammar/grammar36.jpg"><br><br>
              Contoh : <em>You’ve been eating chocolate. I’ve not been sleeping well.</em><br><br>
              <b>Bentuk Pertanyaan</b><br>
              <img src="images/grammar/grammar37.jpg"><br><br>
              Contoh : <em>Have you been drinking? Has Emily been seeing her ex-boyfriend?</em><br><br>
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
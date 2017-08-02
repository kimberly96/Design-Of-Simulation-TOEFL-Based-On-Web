<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which word CANNOT go in the space? ____ are talking very loudly!",
   1 => "you",
   2 => "she",
   3 => "they",
   6 => 2
),
2 => array(
   0 => "Complete the sentence. The girl ___ cycling to school.",
   1 => "is",
   2 => "am",
   3 => "are",
   6 => 1
),
3 => array(
   0 => "Complete the sentence. My husband and I ____ staying here for a long time.",
   1 => "don't",
   2 => "isn't",
   3 => "aren't",
   6 => 3
),
4 => array(
   0 => "Which question is correct?",
   1 => "What you doing?  ",
   2 => "Where is she working?  ",
   3 => "Where you are staying? ",
   6 => 2
),
5 => array(
   0 => "Which is the correct reply? Where’s James?",
   1 => "He works in his office.  ",
   2 => "He’s working in his office.  ",
   3 => "He is work in his office. ",
   6 => 2
),
6 => array(
   0 => "Luke ___ politics at university.",
   1 => "is studying",
   2 => "is studing",
   3 => "is study",
   6 => 1
),
7 => array(
   0 => "We ___  lunch at the moment.",
   1 => "are having",
   2 => "are have",
   3 => "having",
   6 => 1
),
8 => array(
   0 => "I ___ well today.",
   1 => "am not feel",
   2 => "not feeling",
   3 => "am not feeling",
   6 => 3
),
9 => array(
   0 => "Where are George and Lucy ____ at the moment?",
   1 => "lives",
   2 => "living",
   3 => "are living",
   6 => 2
),
10 => array(
   0 => "I’m afraid someone ____ here.",
   1 => "are sitting",
   2 => "is sitting",
   3 => "is sit",
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
      <h3>Present <span>Continuous</span></h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Present Continuous</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              1) Present continuous digunakan untuk berbicara tentang tindakan yang terjadi sekarang.<br>
              Ellen <b>is having</b> a bath at the moment. <br>
              Right now, Mark <b>is talking</b> to her manager. <br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              <b>Positif</b><br>
              <img src="images/grammar/grammar14.jpg"><br><br>
              <b>Negatif</b><br>
              <img src="images/grammar/grammar15.jpg"><br><br>
              <b>Bentuk Pertanyaan</b><br>
              <img src="images/grammar/grammar16.jpg"><br><br>
              <strong><u>Aturan Pengejaan:</u></strong><br>
              Jika kata kerja diakhiri huruf e, hapus <b>e</b> sebelum menambahkan <b>-ing</b>.<br>
              <b>come =>           I’m coming. <br>
              have  =>           He’s having lunch.</b> <br><br>
              <strong><u>Kesalahan Umum: </u></strong><br>
              1) Beberapa orang lupa menambahkan verb <b>be</b>. <br>
              <em> <strike>I watching television. </strike>                =>           I’m watching television.</em><br>
              <em> <strike>She not coming. </strike>                =>           She's not coming.</em><br><br>
              2) Beberapa orang membuat bentuk pertanyaan yang salah<br>
              <em> <strike>She is working?</strike>                =>            Is she working?</em><br><br>
              3) Beberapa orang membuat salah pengejaan<br>
              <em> <strike>I’m studing law. </strike>                =>            I’m studying law.</em><br>
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
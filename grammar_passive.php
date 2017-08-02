<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "The equipment ___ delivered tomorrow afternoon.",
   1 => " will  ",
   2 => " will be  ",
   3 => " will been  ",
   6 => 2
),
2 => array(
   0 => "Mark was ___ to hospital in an ambulance.",
   1 => " taken  ",
   2 => " took  ",
   3 => " taking   ",
   6 => 1
),
3 => array(
   0 => "The woman was bitten ___ a snake.",
   1 => " from  ",
   2 => " for  ",
   3 => " by   ",
   6 => 3
),
4 => array(
   0 => "Which word or phrase CANNOT complete the sentence: Dogs ___ kept under control.",
   1 => " must   ",
   2 => " are always  ",
   3 => " should be   ",
   6 => 1
),
5 => array(
   0 => "Police ___ been informed about the incident.",
   1 => " is  ",
   2 => " have  ",
   3 => " was   ",
   6 => 2
),
6 => array(
   0 => "You must eat this yoghurt before 15th May.",
   1 => "This yoghurt must be eaten before 15th May.",
   2 => "This yoghurt must eaten before 15th May.",
   3 => "This yoghurt must eat before 15th May.",
   6 => 1
),
7 => array(
   0 => " We have taken the visitors to the lounge.",
   1 => "The visitors have been taken to the lounge.",
   2 => "The visitors has been taken to the lounge.",
   3 => "The visitors have taken to the lounge.",
   6 => 1
),
8 => array(
   0 => "The bridge ____ over 300 years ago.",
   1 => "were build",
   2 => "was buling",
   3 => "was build",
   6 => 3
),
9 => array(
   0 => "Most electronic equipment ____ in south east Asia.",
   1 => "is manufactured",
   2 => "are manufactured",
   3 => "has manufactured",
   6 => 2
),
10 => array(
   0 => "Drinks ___ into the art gallery.",
   1 => "mustn't be taken",
   2 => "shouldn't be taken",
   3 => "couldn't be taken",
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
      <h3>Simple Passive</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Simple Passive</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Passive voice digunakan ketika: <br>
              1) Objek dari kalimat lebih penting dari subjek. <br>
              <b>The city was destroyed by the volcano.</b><br><br>
              2) Subjeck dari kalimat tidak diketahui. <br>
              <b>This cheese was made in Canada.</b><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              Anda dapat menggunakan passive voice untuk semua tense. Gunakan bentuk kata kerja yang benar yaitu <b> be + the past participle</b>. <br><br>
              <img src="images/grammar/grammar44.jpg"><br><br>
              Untuk menuliskan 'akibat', gunakan <b>by</b>. <br>
              <em>The bins were emptied <b>by</b> the cleaning staff.</em><br><br>
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
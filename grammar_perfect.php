<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "When I got home, the children had already ___ to bed.",
   1 => " went  ",
   2 => " gone  ",
   3 => " going   ",
   6 => 2
),
2 => array(
   0 => "We ___ been out long when it started to rain.",
   1 => " weren’t  ",
   2 => " hadn’t  ",
   3 => " had   ",
   6 => 3
),
3 => array(
   0 => "When I turned on the television, my favourite program _______.",
   1 => " had finished nearly  ",
   2 => " has nearly finished  ",
   3 => " had nearly finished   ",
   6 => 3
),
4 => array(
   0 => "Which sentence has a similar meaning: The film started. Then we arrived at the cinema.",
   1 => " When we had arrived at the cinema, the film started.  ",
   2 => " When we arrived at the cinema, the film had already started.  ",
   3 => " When we had arrived at the cinema, the film had started. ",
   6 => 2
),
5 => array(
   0 => "Which sentence has a similar meaning: Someone stole my phone. Then I found my bag and the phone was not there.  ",
   1 => " When I found my bag, I had noticed that someone stole my phone.  ",
   2 => " When I found my bag, I noticed that someone had stolen my phone.  ",
   3 => " When I found my bag, I had noticed that someone had stolen my phone.",
   6 => 2
),
6 => array(
   0 => "We finally arrived at the hotel. It ____  a long journey and we were very tired.",
   1 => "had been",
   2 => "has been",
   3 => "had",
   6 => 1
),
7 => array(
   0 => "The Council ____  to put speed cameras along the road because there had been seven fatal accidents in the past year.",
   1 => "decided",
   2 => "had decided",
   3 => "has decided",
   6 => 1
),
8 => array(
   0 => "Emergency workers pulled three people from the wreckage. They ____ under the wreckage for four days.",
   1 => "has survived",
   2 => "survived",
   3 => "had survived",
   6 => 3
),
9 => array(
   0 => "Kathy was sad when she moved house, because she ____ there for over fifteen years.",
   1 => "lived",
   2 => "had lived",
   3 => "has lived",
   6 => 2
),
10 => array(
   0 => "Tom ___ great because he had stayed up late the night before.",
   1 => "doesn't feel",
   2 => "didn't feel",
   3 => "don't feel",
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
      <h3>Past Perfect</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Past Perfect</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              1) Past Perfect adalah tenses yang bersifat narasi. Artinya ialah, digunakan saat membicarakan cerita pada tentang masa lalu. <br>
              Past perfect digunakan di paragraf yang sama dengan simple past tense, dan seringkali digunakan di kalimat yang sama seperti kata kerja past simple. <br><br>
              Past Perfect menggambarkan sebuah peristiwa yang terjadi <b>sebelum peristiwa yang lain di masa lampau</b>. <br>
              Contoh: <br>
              <em>John <u>went</u> to the shop on the way home from work, so he <u>got</u> home late.</em><br>
              Kedua kata kerja merupakan bentuk simple past. <br><br>
              <em>John <u>got</u> home late because he <u>had gone</u> to the shop on the way home from work.</em><br><br>
              2) Past Perfect selalu menggunakan struktur sebagai berikut: <br>
              i wish :  I wish <b>I had cleaned</b> the house! <br>
              third conditional : If <b>I had practiced</b> harder, we might have won the competition. <br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              <img src="images/grammar/grammar35.jpg"><br><br>
              Tulis kata kerja diantara <u>had</u> dan <u>past participle</u>. <br>
              <em>The film <b>had already started.</b> <br>
              The post <b>had just been</b> delivered.</em><br><br>  
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
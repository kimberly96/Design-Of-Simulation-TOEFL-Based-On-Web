<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "We ____ either eat at a pub, or at a restaurant. What would you like to do?",
   1 => " could  ",
   2 => " must  ",
   3 => " don’t have to   ",
   6 => 1
),
2 => array(
   0 => "Which question is NOT correct?",
   1 => " Should I take a map?  ",
   2 => " Do I must carry an ID card?  ",
   3 => " Do I have to wear a seatbelt?   ",
   6 => 2
),
3 => array(
   0 => "We ­­­­_____ visit Aunt Maria soon, we haven’t seen her for ages!",
   1 => " shouldn’t  ",
   2 => " could  ",
   3 => " must   ",
   6 => 3
),
4 => array(
   0 => "You ­­­­______ to carry an ID card.",
   1 => " don’t have  ",
   2 => " should  ",
   3 => " haven’t   ",
   6 => 1
),
5 => array(
   0 => " Which recommendation is strongest?",
   1 => " We should see a play at the open air theatre.  ",
   2 => " We could see a play at the open air theatre.  ",
   3 => " We must see a play at the open air theatre.  ",
   6 => 3
),
6 => array(
   0 => "I _____ stay at work late tomorrow. I can’t do anything about it.",
   1 => " must  ",
   2 => " have to  ",
   3 => " should   ",
   6 => 2
),
7 => array(
   0 => "You _____ wear your new suit to the interview so that you look nice.",
   1 => " shouldn’t  ",
   2 => " have to  ",
   3 => " should   ",
   6 => 3
),
8 => array(
   0 => "We don’t have to go out on Saturday. We _____ stay in and watch a film.",
   1 => " have to  ",
   2 => " should  ",
   3 => " could   ",
   6 => 3
),
9 => array(
   0 => "You _____ try one of Emma’s cakes – they’re delicious!",
   1 => " should  ",
   2 => " could  ",
   3 => " must   ",
   6 => 2
),
10 => array(
   0 => "Which question is correct?",
   1 => " Must we to take a packed lunch with us?  ",
   2 => " Do we have to take a packed lunch with us?  ",
   3 => " Have we to take a packed lunch with us?   ",
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
      <h3>Using Modals for Recommendations</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Using Modals for Recommendations</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Kata modal berikut ini dapat digunakan untuk memberikan rekomendasi : <br>
              a) <b>Must</b>, must dapat digunakan untuk memberikan rekomendasi yang kuat. <br>
              <em>You <u>must</u> see the Empire State Building while you are in New York.</em><br><br>
              b) <b>Have to</b>, Anda juga dapat menggunakan have to untuk memberikan rekomendasi, namun must lebih bersifat umum. Have to umumnya digunakan untuk berbicara tentang aturan dan hal-hal di luar kendali Anda. <br>
              <em>You <u>have to</u> see the Empire State Building while you are in New York.</em><br><br>
              c) <b>Should</b>, should dan ought to digunakan untuk memberikan sugesti. <br>
              <em>You <u>should</u> try haggis while you are in Scotland.</em><br><br>
              d) <b>Could</b>, untuk memberikan pilihan. <br>
              <em>You <u>could</u> stay in a hotel, or you could stay at a guest house.</em><br><br>
              e) <b>Don't have to</b>, untuk mengatakan sesuatu yang tidak perlu/ tidak diharuskan. <br>
              <em>You <u>don’t have to</u> get a taxi; the metro is really fast and efficient.</em><br><br>
              f) <b>Shouldn't</b>, digunakan untuk memperingatkan orang lain secara sopan. <br>
              <em>You <u>shouldn’t</u> walk home alone after dark</em><br><br>
              g) <b>Musn't</b>, digunakan untuk memperingatkan orang lain secara sopan. <br>
              <em>You <u>mustn’t</u> go to that part of the city – it’s dangerous.</em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              <em>Must, should</em> dan <em>Could</em> adalah modal. Modal memiliki aturan sebagai berikut: <br>
              1) Jangan tambahkan 's' untuk kata pengganti orang ketiga. <br>
              <em>He must. NOT <strike>He musts</strike></em><br>
              2) Untuk bentuk negatid, tambahkan 'not' setelah verb. <br>
              <em>I shouldn’t. NOT <strike>I don’t should</strike></em><br>
              3) Untuk kalimat pertanyaan, balikkan modal dan subjek. <br>
              <em>Must you? NOT <strike>Do you must?</strike></em> <br>
              4) Modal selalu diikuti kata kerja dalam bentuk infinitive. <br>
              <em>I should go. NOT <strike>I should to go.   / I should coming.</strike></em><br><br>
              <em>Have to</em> adalah kata kerja reguler. <br>
              1) Gunakan <b>Do/Does/Did</b> dalam bentuk pertanyaan. <br>
              <em>Do you have to go? NOT Have you to go?</em><br>
              2) Have to diikuti oleh kata kerja dalambentuk infinitive. <br>
              <em>I have to go. </em><br>
              3) Gunakan <b>Don't/ Doesn't/ Didn't</b> dalam bentuk negatif. <br>
              <em>I don’t have to go. NOT <strike>I haven’t to go.</strike></em><br><br>
              <strong><u>Kesalahan umum:</u></strong><br>
              1) Beberapa orang menggunakan <b>to</b> setelah kata kerja modal. <br>
              <em><strike>You must to visit the museum.</strike>  → You must visit the museum.</em><br><br>
              2) Beberapa orang menulis bentuk negatif dan pertanyaan <b>have to</b> dengan salah. <br>
              <em> <strike>You haven’t to take the bus </strike> → You don’t have to take the bus. <br>
              <strike> Have you to go now? </strike> → Do you have to go now?</em><br><br>
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
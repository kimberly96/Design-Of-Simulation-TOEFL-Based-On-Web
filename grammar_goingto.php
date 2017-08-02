<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which word goes in the space? Simon and Emma ____ going to get married.",
   1 => "aren’t",
   2 => "isn’t",
   3 => "don’t",
   6 => 1
),
2 => array(
   0 => "Complete the question. Where ____ going to study?",
   1 => "is you",
   2 => "you are",
   3 => "are you",
   6 => 3
),
3 => array(
   0 => "Which sentence is NOT correct?",
   1 => "Paul’s not going to get a job.",
   2 => "They’re not going visit the castle.",
   3 => "We’re going to see a film",
   6 => 2
),
4 => array(
   0 => "Which is the correct reply? Are you going to meet Ruth?",
   1 => "Yes I’m.",
   2 => "Yes, she is.",
   3 => "Yes, we are. ",
   6 => 3
),
5 => array(
   0 => "Which question is correct?",
   1 => "What time we going to arrive?",
   2 => "Where you are going to stay?",
   3 => "Which television are you going to buy?",
   6 => 3
),
6 => array(
   0 => "She ____ economics at University.",
   1 => "going to study",
   2 => "is going to study",
   3 => "is going study",
   6 => 2
),
7 => array(
   0 => "I ___ that phone – it’s too expensive.",
   1 => "'m not going to buy",
   2 => "'m did not going to buy'",
   3 => "'m not going buy'",
   6 => 1
),
8 => array(
   0 => "What are you ___ while your husband is away?",
   1 => "going to",
   2 => "going to do",
   3 => "do going to",
   6 => 2
),
9 => array(
   0 => "The weather forecast says that it ____ a nice day tomorrow.",
   1 => "is going to be",
   2 => "is going to",
   3 => "going to be",
   6 => 1
),
10 => array(
   0 => "We ____ for James. He’s always late.",
   1 => "not going to wait",
   2 => "are not going wait",
   3 => "are not going to wait",
   6 => 3
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
      <h3><span>Be Going</span>To</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Be Going To</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Bentuk be going to untuk berbicara tentang rencana pribadi Anda untuk masa depan.<br><br>
              <em>I’m going to see my sister at the weekend.<br>
              Are you going to marry Paul</em><br><br>
              <strong><u>Bentuk:</u></strong><br>
              1) Bentuk kalimat positif dan negatif dan pertanyaan ditampilkan di bawah<br><br>
              <strong>Positive</strong><br>
              <img src="images/grammar/grammar1.jpg"><br><br>
              <strong>Negative</strong><br>
              <img src="images/grammar/grammar2.jpg"><br><br>
              <strong>Question</strong><br>
              <img src="images/grammar/grammar3.jpg"><br><br>
              2) Jawaban singkat dari pertanyaan 'be going to' adalah 'yes, i am', 'yes, she is' dll. Anda tidak dapat berkontraksi dengan kalimat pendek tersebut.<br>
              Yes, <strike>he’s</strike>. =>  Yes, he is.<br><br>
              The short negative replies are:<br>
              No, I’m not.<br>
              No, you’re not / No, you aren’t.<br>    
              No, he’s not / No he isn’t. No, she’s not / No she isn’t. No, it’s not / no it isn’t.<br>
              No, we’re not / No, we aren’t.<br>
              No, they’re not / No, they aren’t.<br><br>
              <strong><u>Kesalahan umum:</u></strong>.<br>
              1) Beberapa orang lupa untuk menambahkan kata kerja 'be' sebelum 'going to'. <br>
              <strike>I going to see my friends tonight.</strike>   =>  I’m going to see my friends tonight. <br><br>
              2) Beberapa orang lupa untuk membalikkan subjek dan 'be' dalam pertanyaan. <br>
              <strike>What time you are going to leave?</strike> =>  What time are you going to leave?<br><br>
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
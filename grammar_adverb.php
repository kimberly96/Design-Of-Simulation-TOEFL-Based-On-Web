<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which word CANNOT go in the space? We went shopping and ____ we went to a café and had a cup of coffee.",
   1 => "afterwards",
   2 => "after",
   3 => "then",
   6 => 2
),
2 => array(
   0 => "Which word completes the sentence? Anna plays tennis every ___.",
   1 => "week",
   2 => "days",
   3 => "sundays",
   6 => 1
),
3 => array(
   0 => "Which word completes the sentence? Derek always goes skateboarding ___ Saturdays.",
   1 => "every",
   2 => "on",
   3 => "each",
   6 => 2
),
4 => array(
   0 => "Which sentence is correct?",
   1 => "I visited yesterday my grandmother.",
   2 => "We're having a party tomorrow.",
   3 => "Tom soon is going home.",
   6 => 2
),
5 => array(
   0 => "Which sentence is NOT correct?",
   1 => "I'd like to work overseas.",
   2 => "It's lovely weather. Let's go outside! ",
   3 => "We inside went because it was cold.",
   6 => 3
),
6 => array(
   0 => "Which word completes the sentence? I hardly ever go swimming _______.",
   1 => "nowadays",
   2 => "soon",
   3 => "today",
   6 => 1
),
7 => array(
   0 => "Which sentence is best?",
   1 => "Soon we're leaving, so can you get your bags ready?",
   2 => "We're soon leaving, so can you get your bags ready?",
   3 => "We're leaving soon, so can you get your bags ready?",
   6 => 3
),
8 => array(
   0 => "Which sentence is NOT correct?",
   1 => "Anna abroad lives with her husband.",
   2 => "Anna lives abroad with her husband.",
   3 => "Anna lives with her husband abroad.",
   6 => 1
),
9 => array(
   0 => "Complete the sentence. We went to the cinema and we went out for a drink ___.",
   1 => "afterwards",
   2 => "after",
   3 => "then",
   6 => 1
),
10 => array(
   0 => "Which sentence is correct?",
   1 => "We always watch a film on Wednesday evenings.",
   2 => "We always watch a film on Wednesdays evenings.",
   3 => "We always watch a film every Wednesday evenings.",
   6 => 1
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
      <h3>Adverbs Of <span>Frequency</span></h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Adverbial Phrases of Frequency, Time and place</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Adverbial phrase adalah kelompok kata yang selalu berdampingan. Adverbial phrase menggambarkan dimana, kapan atau seberapa sering sesuatu terjadi.<br><br>
              Adverbial phrases of frequency menggambarkan seberapa sering sesuatu terjadi.<br><br>
              <em>every morning, every afternoon<br>
              every day – daily<br>
              every week – weekly<br>
              every month – monthly<br>
              every year – annually<br>
              every Sunday – on Sundays – on Sunday afternoons<br><br>
              once a day<br>
              twice a day<br>
              three / four / five times a day</em><br><br>
              all the time<br><br>
              <strong><u>Bentuk:</u></strong><br>
              1) Adverbs of frequency sering digunakan pada present simple sentences.<br>
              <em>I have toast for breakfast every day.
              We visit our grandparents twice a month.<br></em><br>
              2) Perhatikan bahwa 'On Saturday' mengacu pada satu hari. 'On Saturdays' berarti 'Every Saturday'.<br><br>
              <strong><u>Kesalahan Umum:</u></strong><br>
              1) Beberapa orang menulis adverbs of frequency di tempat yang salah.<br>
                We every day go the park.        =>     We go to the park every day.<br><br>
              2) Beberapa orang menggunakan bentuk jamak dengan kata every.<br>
                John goes swimming every days.   =>     John goes swimming every day.<br><br>
                <hr><br>
              <strong><u>Kegunaan:</u></strong><br>
              Adverbs and adverbial phrases of time digunakan pada saat kita berbicara sambil melakukan sesuatu.<br><br> 
              Adverbs of time include:<br>
              today, tomorrow, tonight, yesterday, tomorrow, nowadays<br>
              now, first of all, beforehand<br>
              soon, afterwards, later, next, then<br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              1) Adverbs of time biasa digunakan pada awal atau akhir dari sentence atau clause.<br>
              <em>Tomorrow, I’m going to the beach.<br>
              I’m going to the beach tomorrow.<br><br>
              First of all, we had a drink at a café.<br>
              We had a drink at a café first of all.<br><br>
              I’m going to the supermarket, and afterwards I’m going to the library.<br>
              I’m going to the supermarket, and I’m going to the library afterwards.</em><br><br>
              2) Lebih umum digunakan pada awal dari sentence atau clause.<br>
              <em>Then we arrived at the castle.<br>
              I’m going to finish my work and then I’m going to have a drink.<br><br>
              It is more common to use soon and now at the end of a sentence.<br>
              We’re going on holiday soon.<br>
              I’m going home now.</em><br><br>
              <strong><u>Kesalahan Umum:</u></strong><br>
              1) Jangan gunakan adverb of time antara subject dan  object dari sentence.<br>
              I went yesterday to the zoo.   =>    I went to the zoo yesterday. / Yesterday I went to the zoo.<br>
              I’m going now to the bank.     =>    I’m going to the bank now.<br><br>
              2) Anda harus menggunakan noun setelah After dan Before. Jika tidak, gunakan afterwards atau beforehand.<br>
              I’ll be late to class tomorrow. I’m going to the doctors before.  =>  I’ll be late to class tomorrow. I’m going to the doctors beforehand.<br>
              I’m going to my English class and I’m going to the bar after.     =>  I’m going to my English class and I’m going to the bar afterwards. <br><br>
              <hr><br>
              <strong><u>Kegunaan:</u></strong><br>
              Adverbs and adverbial phrases of place digunakan untuk berbicara tentang tempat suatu kejadian.<br><br>
              Adverbs of place include:<br>
              outside, inside, indoors, upstairs, downstairs<br>
              (over) here, (over) there<br>
              abroad, overseas<br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              1) Adverbs of place biasa digunakan setelah verb.<br>
              <em>She lives abroad.<br>
              Let’s go indoors.</em><br><br>

              2) Adverbs of place juga dapat digunakan stelah objek kalimat.<br>
              <em>Rachel works in the office upstairs.<br>
              Your bag is on the table over there.</em><br><br>
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
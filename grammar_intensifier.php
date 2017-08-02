<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which sentence uses too incorrectly?",
   1 => "Don’t drive too fast. You’ll have an accident.  ",
   2 => "Change your clothes! Those clothes are too dirty.  ",
   3 => "Jemma is too beautiful. She’s the prettiest girl I know.",
   6 => 3
),
2 => array(
   0 => "Which sentence is correct?",
   1 => "Paul is enough tall to reach the top of the cupboard.  ",
   2 => "Do we have tea enough?  ",
   3 => "Robert doesn’t get enough sleep.   ",
   6 => 3
),
3 => array(
   0 => "Which word goes in the space? You’ve cooked far too ___ food.",
   1 => "much  ",
   2 => "enough  ",
   3 => "many",
   6 => 1
),
4 => array(
   0 => "Which word goes in the space? The film is ___ funny! I watched it three times!",
   1 => "so",
   2 => "much",
   3 => "too",
   6 => 1
),
5 => array(
   0 => "Which sentence is NOT correct?",
   1 => "John drinks much too much!  ",
   2 => "Please don’t put too much sugar in my coffee.  ",
   3 => "Clara eats too many.  ",
   6 => 3
),
6 => array(
   0 => "What goes in the space? She’s got ____ nice house!",
   1 => "such a",
   2 => "such",
   3 => "soo",
   6 => 1
),
7 => array(
   0 => "What is the best way to complete this sentence? Roger is so rich that…",
   1 => "he works very hard.  ",
   2 => "he can buy whatever he wants.  ",
   3 => "I bought him a bottle of wine for his birthday. ",
   6 => 2
),
8 => array(
   0 => "Which sentence is correct?",
   1 => "They’ve got a such big garden.  ",
   2 => "Liam is such a nice young man.  ",
   3 => "Lucia’s hair is such long.",
   6 => 2
),
9 => array(
   0 => "Which phrase completes the sentence? _______________ that I couldn’t see a thing.",
   1 => "It was so dark  ",
   2 => "It was too dark  ",
   3 => "It was dark enough   ",
   6 => 1
),
10 => array(
   0 => "Which word goes in the space? You must be very proud of Jake. He works ____!",
   1 => "too hard  ",
   2 => "so hard  ",
   3 => "hard enough ",
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
      <h3>Intensifier</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Grammar: So, such, too, enough</p>
            <div class="text1">
              <b style="font-size:15px;">Too</b><br>
              <strong>Kegunaan:</strong><br>
              Too berarti ada banyak sesuatu. Ini menunjukkan pendapat negatif.<br>
              <em>It’s too hot</em> = It is very hot and I <u>don’t</u> like it. <br><br>
              <strong>Bentuk:</strong><br>
              Anda dapat menggunakan <strong>too</strong> sebelum adjective. <br>
              <em>It’s too cold. My trousers are too small.</em><br><br>
              Anda juga dapat menggunakannya sebelum adverb. <br>
              <em>You walk too fast. James speaks too quietly.</em><br><br>
              Sebelum kata benda, gunakan <b>too much</b> ( kata benda uncountable ) atau <b>too many</b> ( kata benda dihitung ). <br>
              <em>I ate too much food. <br>
              I ate too many sandwiches.</em> <br><br>
              Anda juga bisa menggunakan <b>too much</b> setelah verb. <br>
              <em>I ate too much.
              Paul drinks too much.</em><br><br>
              <b style="font-size:15px;">Enough</b><br> 
              <strong>Kegunaan:</strong><br>
              <b>Enough</b> berarti Anda memiliki apa yang Anda butuhkan. <br><br>
              <em>We have enough food for everyone = everyone has some food. <br>
              We don’t have enough chairs for everyone = some people don’t have chairs.</em><br><br>
              <strong>Bentuk:</strong>
              Gunakan <b>Enough</b> sebelum noun. <br>
              <em>We have <u>enough</u> chairs.</em><br><br>
              Namun tulis setelah adjective dan verb. <br>
              <em>Are you <u>warm enough</u>?  He’s <u>qualified enough.</u> She isn’t <u>tall enough</u> to be a model. <br>
              You don’t work <u>hard enough</u>. Are you <u>sleeping enough?</u> </em><br><br>
              Kalimat yang mengandung <b>enough</b> terkadang diikuti <b>to + verb infinitive</b><br>
              <em>I’m not tall enough <u>to reach</u> the book. <br>
              I haven’t got enough money <u>to buy</u> that coat.</em><br><br>
              <b style="font-size:15px;">So</b><br> 
              <strong>Kegunaan:</strong><br>
              So berarti sangat. <br>
              <em>Its so hot!</em><br><br>
              <b>So</b> umumnya digunakan sebelum kata sifat atau kata keterangan . <br><br>
              <em>He’s <u>so funny</u>! He plays the piano <u>so well!</u></em><br><br>
              Namun, dalam bahasa Inggris modern, semakin banyak digunakan sebelum kata benda dan kata kerja. <br><br>
              <em>That dress is <u>so last year</u>! (= That dress is last year’s fashion) <br>
              I’m <u>so going</u> to shout at him when I see him! (so = really)</em><br><br>
              <b>So</b> dapat digunakan menggunakan tambahan <b>that</b> sebelum anak kalimat, untuk menunjukkan hasil dari anak kalimat pertama. <br>
              <em>I was <u>so hot</u> that I couldn’t sleep.</em><br><br>
              <b style="font-size:15px;">Such</b><br> 
              <strong>Kegunaan:</strong><br>
              <b>Such</b> juga berarti sangat. <b>Such</b> digunakan sebelum adjective dan noun. <br>
              <em>They are <u>such nice</u> children</em><br><br>
              Sama seperti <b>So</b>, Such dapat menggunakan dengan tambahan <b>that</b> sebelum anak kalimat, untuk menunjukkan hasil dari anak kalimat pertama. <br>
              <em>I was <u>such a nice day that</u> we decided to go to the park.</em><br><br>
              <strong>Kesalahan Umum:</strong><br>
              1) Beberapa orang menggunakan <b>too</b> untuk arti positif. <br>
              <em><strike>It’s too hot! I love the summer!</strike> => It’s so hot! I love the summer!</em><br><br>
              2) Beberapa orang menulis <b>enough</b> ditempat yang salah. <br>
              <em><strike>Do we have sugar enough?</strike> => Do we have enough sugar?</em><br><br>
              3) Beberapa orang menggunakan So/Such ....  yang salah. <br>
              <em><strike>It was so hot that the sun was shining.</strike></em><br>
              Kalimat terebut salah, karena 'the sun was shining' bukanlah hasil langsung dari 'it was so hot'. The hot day tidak disebabkan karena the sun.<br><br>
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
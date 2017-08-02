<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "One of the most effective vegetable protein subsitutes is the soybean ____ used to manufacture imitation meat products",
   1 => "A)  which can be",
   2 => "B)  it can be ",
   3 => "C)  who can be",
   4 => "D)  can be",
   5 => "Jawab: A. Wich mengarah ke soybean yang merupakan subject dari kata kerja can be used. Pilihan B dan D tidak memiliki klausa. Pilihan C memiliki klausa namun mengarah ke person, bukan ke soybean",
   6 => 1
),
2 => array(
   0 => " ____ 1000 species of finch have been identified",
   1 => "A) as many as",
   2 => "B) as many",
   3 => "C) as much as",
   4 => "D) much as",
   5 => "Jawab: A. Karena hanya pilihan A yang dapat menghitung kata benda seperti species dan angka. Pilihan C dan D digunakan untuk kata benda yang tidak dapat dihitung. Pilihan B dapat digunakan namun bukan untuk angka. ",
   6 => 1
),
3 => array(
   0 => "According to economic laws, the greater the demand, ____ the price",
   1 => "A) higher",
   2 => "B) high",
   3 => "C) the higher",
   4 => "D) the high",
   5 => "Jawab: C. Pilihan A adalah comparative, namun tidak dapat diikuti oleh the. Pilihan B dan D bukanlah bentuk comparative.",
   6 => 3
),
4 => array(
   0 => "The Continental United States is ____ that there are four time zones.",
   1 => "A) much big",
   2 => "B) too big",
   3 => "C) so big",
   4 => "D) very big",
   5 => "Jawab: C. So digunakan dengan adjective untuk mengekspresikan penyebab. Pilihan A harus digunakan sebelum kata benda/noun. Pilihan B dan D tidak digunakan untuk mengekspresikan akibat.",
   6 => 3
),
5 => array(
   0 => "Benjamin West Contributed a great deal to American Art _____",
   1 => "A) painting, teaching and lecturing",
   2 => "B) painting, as a teacher and lecturer",
   3 => "C) painting, teaching and as a lecturer",
   4 => "D) painting, a teacher and a lecturer",
   5 => "Jawab: A. Jawaban dari kalimat tersebut harus diekspresikan dengan struktur pararel. Hanya pilihan A yang mempunyai bentuk -ing. Pilihan B, C, D bukan bentuk pararel.",
   6 => 1
),
6 => array(
   0 => "Upon hatching ____",
   1 => "A) how to swim is know in young ducks",
   2 => "B) swimming is known by young ducks",
   3 => "C) the knowledge of swimming is in young ducks",
   4 => "D) young ducks know how to slim",
   5 => "Jawab: D. Pilihan D menyediakan noun yang dapat dimodifikasi secara logika dengan frasa upon hatching. swimming, knowledge dan how to swim tidak dapat di hacth secara logika seperti pilihan A, B dan C.",
   6 => 4
),
7 => array(
   0 => "The observation deck at the World Trade Center ____ in New York",
   1 => "A) was highest than any other one",
   2 => "B) was higher than any other one",
   3 => "C) was highest that any other one",
   4 => "D) was higher that any other one",
   5 => "Jawab: B. Bentuk comparative selalu diikuit oleh than. Highest di pilihan A dan C dapat digunakan untuk membandingkan lebih dari dua decks. Pilihan D dengan benar membandingkan this deck dengan other decks, namun bukan dengan that.",
   6 => 2
),
8 => array(
   0 => "____ is necessary for the development of strong bones and theeth",
   1 => "A) it is calcium",
   2 => "B) that is calcium",
   3 => "C) calcium",
   4 => "D) although calcium",
   5 => "Jawab: C. Kalsium adalah subjek dari kata kerja is. Pilihan A dapat digunakan dengan kata that. Pilihan B digunakan sebagai subjek clause sebelum kata kerja. Pilihan D digunakan setelah subjek dan kata kerja.",
   6 => 3
),
9 => array(
   0 => "____ with standing testing, we may not conclude that it is true, but we may retain it.",
   1 => "A) if a hyphothesis",
   2 => "B) that a hyphothesis",
   3 => "C) a hyphothesis",
   4 => "D) hyphothesis",
   5 => "Jawab: A. Untuk hasil dari sience, bentuk present yang dibutuhkan ialah bentuk present atau future. Hanya pilihan A yang memenuhi syarat tersebut.",
   6 => 1
),
10 => array(
   0 => "Not until a monkey is several years old ____ to exhibit signs of independence from its mother.",
   1 => "A) it begins",
   2 => "B) does it begin ",
   3 => "C) and begin",
   4 => "D) beginning",
   5 => "Jawab: D. Not until membutuhkan auxilary verb, subjek, dan main verb. Pilihan A tidak ada auxilary. Di pilihan B dan C, tidak ada subjek dan auxilary.",
   6 => 4
),
11 => array(
   0 => "Since Elizabeth Barret Browning's Father never approved of ____ Robert Browning, the couple eloped to italy, where they lived and wrote. ",
   1 => "A) her to marry",
   2 => "B) her marrying",
   3 => "C) she marrying",
   4 => "D) she to marry",
   5 => "Jawab: B. Frasa kata kerja to approve of membutuhkan bentuk -ing. Bentuk -ing harus dimodifikasi oleh possesive noun. Pilihan A dan D adalah infinitive , bukan bentuk -ing. Pilihan C bentuk -ing namun dimodifikasi oleh subjek.",
   6 => 2
),
12 => array(
   0 => "In simple animals, ____ reflex movement or involuntary response to stimuli.",
   1 => "A) behavior mostly",
   2 => "B) most is behavior",
   3 => "C) most behavior is",
   4 => "D) the most behavior",
   5 => "Jawab: C. Most digunakan untuk noun yang tidak dapat dihitung untuk mengekspresikan jumlah yang lebih besar. Pilihan A tidak memiliki verb. Pilihan B kata kerjanya sebelum, bukan setelah noun. Pilihan D, the digunakan sebelum most.",
   6 => 3
),
13 => array(
   0 => "Although the weather in Martha's Vineyard is not _____ to have a year round tourist season, it has become a favorite summer resort.",
   1 => "A) goodly enough",
   2 => "B) good enough",
   3 => "C) good as enough",
   4 => "D) enough good",
   5 => "Jawab: B. Dipilihan A, goodly bukanlah sebuah struktur kata. Bentuk verb dari good adalah well. Dipilihan C, as tidak diperlukan dan jelas salah. Pilihan D, adjective diletakkan setelah, bukan sebelum enough.",
   6 => 2
),
14 => array(
   0 => "According to the wave theory, _____ population of the Americas may have been the result of a number of separate migrations.",
   1 => "A) the",
   2 => "B) their",
   3 => "C) that",
   4 => "D) whose",
   5 => "Jawab: A. The dapat digunakan sebelum noun yang tidak dapat dihitung yang diikuti oleh frasa. Population harulah the population sebelum frasa the Americas.",
   6 => 1
),
15 => array(
   0 => "It is presumed that rules governing the sharing of food influenced ____ that the earliest cultures evolved.",
   1 => "A) that the way",
   2 => "B) is the way",
   3 => "C) the way",
   4 => "D) which way",
   5 => "Jawab: C. Klausa adjective harus bersamaan dengan noun di main clause. that the earliest cultures evolved harus diikuti the way. Pilihan B adalah verb dan noun. Pilihan A hanya noun, sama dengan pilihan D.",
   6 => 3
),
16 => array(
   0 => "Calculus, ____ elegant and economical symbolic system, can reduce complex problems to simple terms. ",
   1 => "A) it is an",
   2 => "B) that an",
   3 => "C) an",
   4 => "D) is an",
   5 => "Jawab: C. Kalimat tersebut memiliki subjek dan verb. Pilihan A redundant karena subjek pronoun it digunakan dengan subjek calculus. Pilihan B terlalu mengarahkan ke main clause. Pilihan D juga bersifat redundant karena mempunyai verb yang menggantikan main verb can reduce.",
   6 => 3
),
17 => array(
   0 => "Canada does not require that U.S citizens obtain passports to enter the country, and ____ ",
   1 => "A) Mexico does neither",
   2 => "B) Mexico does not either ",
   3 => "C) neither Mexico does",
   4 => "D) either does Mexico",
   5 => "Jawab: B. Di pilihan A, verb-subject salah digunakan. Dipilihan C, juga sama dengan pilihan A, neither letakkan di awal bukan diakhir kalimat. Dipilihan D, seharusnya either, bukan neither.",
   6 => 2
),
18 => array(
   0 => "The poet ____ just beginning to be recognized as an important influence at the time of his death.",
   1 => "A) being Walt Whitman",
   2 => "B) who was Walt Whitman",
   3 => "C) Walt Whitman",
   4 => "D) Walt Whitman was",
   5 => "Jawab: D. Kalimat tersebut mempunyai subjek dan verb. Pilihan A tidak memiliki verb. Pilihan  B dan C mengarahkan main clause ke subjek dan verb.",
   6 => 4
),
19 => array(
   0 => " ____ the information of the sun , the planets, and other stars began with the condensation of an interstellar cloud. ",
   1 => "A) it accapted that",
   2 => "B) accapted that",
   3 => "C) it is accapted that",
   4 => "D) that is accapted",
   5 => "Jawab: C. klausa it is accapted that harus bersamaan dengan verb dan subjek, the information ..... began. Pilian A, B, D tidaklah lengkap dan letak penulisan katanya salah.",
   6 => 3
),
20 => array(
   0 => "As a general rule, the standart of living ____ by the average output of each person in society.",
   1 => "A) is fixed",
   2 => "B) fixed",
   3 => "C) has fixed",
   4 => "D) fixes",
   5 => "Jawab: A. Kalimat diatas adalah bentuk kalimat passive. Hanya pilihan A yang mempunyai kalimat yang benar. Pilihan B tidak memiliki bentuk be. Pilihan C memiliki have tapi tidak memiliki bentuk be.  Pilihan D adalah present tense verb, bukan passive.",
   6 => 1
),
);

$max=20;

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
            <li class="men1"><a onClick="goToByScroll('page1'); return false;" href="index.html">Home</a><strong class="hover"></strong></li>
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
      <div style="color:#666666; font-size:30px; padding-bottom:20px; ">Structure - Model Test 1
      </div>
         <div style="background-color:#666666; color:white; margin-left:150px; width:620px; padding:5px 0">There are 20 questions in this quiz. Read the grammar explanation below. 
          <div class="box3">
            <table border="0" cellspacing="5px" width="580px">
              <?php if ($question<$max){ ?>
              <tr><td align="right">
                Percentage of correct answer: <?php print $percentaje; ?> %
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
                <br><br><input type="radio" name="option" value="1"  onClick="Goahead (1);"><?php print $a[$randval2][1] ; ?>
                <br><input type="radio" name="option" value="2"  onClick="Goahead (2);"><?php print $a[$randval2][2] ; ?>
                <br><input type="radio" name="option" value="3"  onClick="Goahead (3);"><?php print $a[$randval2][3] ; ?>
                <br><input type="radio" name="option" value="4"  onClick="Goahead (4);"><?php print $a[$randval2][4] ; ?>
                <br><input style="font-family:Trebuchet ms; color:#f77779; font-size:15px; width:60px; border:1px;" type="text" name="response" size=8>
              </form>

              <form id="show-form">
              <br><a href="#" class="link" onclick="showPenjelasanForm()">Show Explanation</a><br><br><hr>
              </form>

              <form id="hide-form" style="display:none">
              <br><a href="#" class="link" onclick="showListForm()">Hide Explanation</a><br><br><hr>
              </form>

              <form id="penjelasan-form" style="display:none">
              <br>
              <div class="text1"><?php print $a[$randval2][5] ; ?><br><br>
              </div>
              </form>
              
              <?php
              }else{
              ?>
              <tr><td align="center">
              The Quiz has finished<br>
              <br>Percentage of correct answer: <?php print $percentaje ; ?> %
              <p><a href="<?php print $address; ?>">Restart</a>

              <?php } ?>

              </td></tr>
              
            </table>

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
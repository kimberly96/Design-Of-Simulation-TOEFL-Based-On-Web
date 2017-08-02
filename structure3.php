<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Farmers look forward to ____ every summer.",
   1 => "A) participating in the county fairs",
   2 => "B) participate in the county fairs",
   3 => "C) be participating in the county fairs",
   4 => "D) have participated in the county fairs",
   5 => "Jawab: A. Frasa kata kerja to look forward haruslah diikuti kata dengan bentuk -ing. Pilihan B dan D bukan berbentuk -ing. Pilihan C diikuti predikat be dan -ing.",
   6 => 1
),
2 => array(
   0 => "After seeing a movie based on a novel, ____",
   1 => "A) the book is read by many people",
   2 => "B) the book made many people want to read it ",
   3 => "C) many people want to read the book",
   4 => "D) the reading of the book interests many people",
   5 => "Jawab: C. Frasa kata kerja yang berfungsi sebagai pendeskripsi haruslah diikuti oleh noun. Hanya pilihan C yang menyediakan noun yang mana dapat berfungsi sebagi verb deskripsi, after seeing the movie. Tidak pada pilihan, A, B dan D.",
   6 => 3
),
3 => array(
   0 => "When friends insist on ____ expensive gifts, it makes most Americas uncomfortable.",
   1 => "A) them to accept",
   2 => "B) their accepting",
   3 => "C) they accepting",
   4 => "D) they accept",
   5 => "Jawab: B. Frasa kata kerja insist to haruslah diikuti kata dengan bentuk -ing dengan noun possesive. Pilihan A merupakan bentuk infinitif dengan objek pronoun. Pilihan C hanya berbentuk -ing dan bukan noun possesive. Pilihan D adalah bentuk verb biasa. ",
   6 => 2
),
4 => array(
   0 => "Gilbert Stuart is considered by most art critics ____ greatest portrait pointer in the North American colonies.",
   1 => "A) that he was",
   2 => "B) as he was",
   3 => "C) who was the",
   4 => "D) the",
   5 => "Jawab: D. The must digunakan dalam bentuk superlative. Pilihan A, B dan C memiliki struktur penulisan yang salah.",
   6 => 4
),
5 => array(
   0 => "A child in the fisrt grade trends to be _____  all of the other children in the class.",
   1 => "A) the same old to ",
   2 => "B) the same age than",
   3 => "C) as old like",
   4 => "D) the same age as",
   5 => "Jawab: D. The same digunaaan bersamaan dengan noun quality seperti age, dan penggabungan dengan as. As digunakan dengan adjective seperti old, dan as. Pilihan A adalah adjective, bukan noun dan dengan kata bantu to. Pilihan B, the same digunakan bersamaan dengan than, bukan as. ",
   6 => 4
),
6 => array(
   0 => "The bird's egg is such an efficient Structure for protecting the embryo inside ____ difficult for the hatchling to break.",
   1 => "A) that is",
   2 => "B) that",
   3 => "C) and is",
   4 => "D) that it is",
   5 => "Jawab: D. Such digunakan bersamaan dengan frasa noun untuk menampilkan ekspresi dari akibat sebelum that dan subjek untuk menampilkan hasilnya. Pilihan A tidak memiliki subjek. Pilihan B tidak memiliki subjek dan verb. Pilihan C tidak memiliki klausa that.",
   6 => 4
),
7 => array(
   0 => "As a safety measure, the detonator for nuclear device may be made of ____, each of which is controlled by a different employee.",
   1 => "A) two equipments",
   2 => "B) two pieces of equipments",
   3 => "C) two pieces of equipments",
   4 => "D) two equipments pieces",
   5 => "Jawab: C. Ekspresi singular dan plural dari noun yang tidak dapt dihitung seperti equipment membutuhkan frasa idiom, seperti piece atau piece of. Pilihan A, B dan D bukan idiom.",
   6 => 3
),
8 => array(
   0 => " ____ that the English settled in Jamestown.",
   1 => "A) in 1607 that it was",
   2 => "B) that in 1607",
   3 => "C) because in 1607",
   4 => "D) it was in 1607",
   5 => "Jawab: D. Klausa terdahulu/past it was in 1607 that mendeskripsikan subjek dan verb, yaitu the English settled. Pilihan A tidak langsung dan salah penulisan. Pilihan B dapat digunakan sebagai subjek clause setelah main verb. Pilihan C dapat digunakan tanpa that setelah subjek dan verb. ",
   6 => 4
),
9 => array(
   0 => "An equaliteral triangle is a triangle ____ and three angles of equal size.",
   1 => "A) that have three sides of equal length",
   2 => "B) it has three sides equally long",
   3 => "C) that has three sides of equal length",
   4 => "D) having three equal length sides in it",
   5 => "Jawab: C. Dalam kalimat tersebut harus ada persetujuan antara subjek dan verb. Have haruslah has untuk bentuk singular triagnle.",
   6 => 3
),
10 => array(
   0 => " ____ are found on the surface of the moon.",
   1 => "A) craters and waterless seas that ",
   2 => "B) when craters and waterless seas",
   3 => "C) craters and waterless seas",
   4 => "D) since craters and waterless seas",
   5 => "Jawab: C. Kalimat tersebut mempunyai subjek dan verb. Pilihan A merupakan subjek, namun tidak mengandung verb. Pilihan B dan D mendeskripsikan subjek dan verb.",
   6 => 3
),
11 => array(
   0 => " ____ two waves pass a given point simultaneously, they will have no effect on each other's subsequant motion.",
   1 => "A) so that",
   2 => "B) they are",
   3 => "C) that",
   4 => "D) if",
   5 => "Jawab: D. Untuk hasil yang bersifat science, bentuk present membutuhkan hasil dalam bentuk present atau future. Hanay pilihan D yang memenuhi syarat.",
   6 => 4
),
12 => array(
   0 => "Staying in the hotel costs ____ renting a room in dormitory for a week.",
   1 => "A) twice more than",
   2 => "B) twice as much as",
   3 => "C) as much twice as",
   4 => "D) as much as twice",
   5 => "Jawab: B. Kalimat multi comparative seperti twice menampilkan ekspresi frasa setelahnya yaitu as much as. Pilihan A berbentuk multiple namun diikuti oleh frasa more than. Pilihan B dan D tidak memenuhi syarat karena penulisan yang salah.",
   6 => 2
),
13 => array(
   0 => "Unlike most Europeans, many Americans ____ a bowl of cereal for breakfast every day.",
   1 => "A) used to eating",
   2 => "B) are used to eat",
   3 => "C) are used to eating",
   4 => "D) use to eat",
   5 => "Jawab: C. Used to harus dilengkapi verb. Ketika didahului oleh be, maka harus berbentu -ing. Pada pilihan A, used to dilengkapi oleh verb, bukan berbentuk -ing. Pilihan B, digunakan bentuk infinitif. Pada pilihan D, bentuk use salah digunakan.",
   6 => 3
),
14 => array(
   0 => "Fast-food restaurants have become popoular because many working people want ____",
   1 => "A) to eat quickly and cheaply",
   2 => "B) eating quickly and cheaply",
   3 => "C) eat quickly and cheaply",
   4 => "D) the eat quickly and cheaply",
   5 => "Jawab: A. Frasa kata kerja to want haruslah dilegkapi bentuk infinitif. Pilihan B berbentuk -ing namun bukan infinitif. Pilihan C adalah verb. Pilihan D bukanlah grammar.",
   6 => 1
),
15 => array(
   0 => "On an untimed test, to answer accurately is more important then ____",
   1 => "A) a quick finish",
   2 => "B) to finish quickly",
   3 => "C) finishing quickly",
   4 => "D) you finish quickly",
   5 => "Jawab: B.  Kalmiat tersebut harus dilengkapi dengan struktur kata pararel. Pilihan A, C dan B bukan berbentuk pararel.",
   6 => 2
),
16 => array(
   0 => "Besides rain, ____ is seldom pure. ",
   1 => "A) water naturally",
   2 => "B) natural win32_start_service_ctrl_dispatcher(name)",
   3 => "C) water of nature",
   4 => "D) the nature's water",
   5 => "Jawab: B. Ketika dua noun digunakan, fungsi yang pertama biasanya ialah sebagai adjective. Pilihan A, C dan D bersifat mengulang dan tidak idiom.",
   6 => 2
),
17 => array(
   0 => "Burrowing animals provide paths for water in soil, and so do the roots of plants ____",
   1 => "A) decaying and they dying",
   2 => "B) when they die and decay",
   3 => "C) they die and decay",
   4 => "D) when they will die and decay",
   5 => "Jawab: B. Kata kerja present tense diletakkan setelah when untuk menampilkan masa depan.",
   6 => 2
),
18 => array(
   0 => " ____ a busy city, Pompeii was virtually destroyed by the eruption of mount Vesivus in 79 A.D.",
   1 => "A) once",
   2 => "B) it was once",
   3 => "C) once it was",
   4 => "D) that once",
   5 => "Jawab: A. Once berarti hanya sekali dalam masa lalu. Once digunakan dengan frasa seperti busy city untuk melengkapi noun Pompeii.",
   6 => 1
),
19 => array(
   0 => "The FDA was set up in 1940 ____ that maintain standarts for the sale of food and drugs.",
   1 => "A) to enforce the laws",
   2 => "B) to enforcing laws",
   3 => "C) enforcing laws",
   4 => "D) enforced the laws",
   5 => "Jawab: A. Bentuk infinitif digunakan untuk menampilkan suatu tujuan.",
   6 => 1
),
20 => array(
   0 => "Doublestars orbit ____",
   1 => "A) each to the other",
   2 => "B) each other",
   3 => "C) each other one",
   4 => "D) other each one",
   5 => "Jawab: B. Each other digunakan untuk menunjukkan aksi tunggal. Pilihan A, C dan D tidak bersifat idiom. One Another juga benar.",
   6 => 2
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
      <div style="color:#666666; font-size:30px; padding-bottom:20px; ">Structure - Model Test 3
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
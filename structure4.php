<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "I wish you would tell me ____ ",
   1 => "A) Who is being lived next door",
   2 => "B) Who does live in the next door",
   3 => "C) Who lives next door",
   4 => "D) Who next door was living",
   5 => "Jawab: C. Urutan kalimat yang benar adalah subject + verb + (complement) + (modifier). Jadi kalimat (D) sudah pasti salah karena tidak sesuai aturan baku. Sedangkan pada kalimat (A), is being lived tidak mungkin pada model struktur verbal. Kemudian kalimat (B) dapat diabaikan karena kata does dan in the tidak penting berada dalam kalimat model ini. Jadi jawaban yang benar adalah (C).",
   6 => 3
),
2 => array(
   0 => "During the Daytona, the lead car ____, leaving the others far behind.",
   1 => "A) Forwarded rapidly",
   2 => "B) Advanced rapidly",
   3 => "C) Advanced forward rapidly",
   4 => "D) Advanced in a rapidly manner",
   5 => "Jawab: B. Setelah subject ‘the lead car’ tentunya Anda akan membutuhkan verb untuk melengkapi kalimat tersebut. Kata forward bukan merupakan verb, jadi jawaban (A) salah. Lalu jawaban (B) adalah benar verb + adverb rapidly. Jawaban (C) berlebihan karena advanced artinya move forward, sedangkan jawaban (D) tidak tepat karena rapidly harusnya digunakan sebagai bentuk adjective.",
   6 => 2
),
3 => array(
   0 => "After the funeral, the residents of the apartment building __________.",
   1 => "A) sent faithfully flowers all weeks to the cemetery.",
   2 => "B) sent to the cemetery each week flowers faithfully.",
   3 => "C) sent flowers faithfully to the cemetery each week.",
   4 => "D) sent each week faithfully to the cemetery flowers.",
   5 => "Jawab: C. Verb + Object. Di antara subject dan object tidak boleh ada yang menghalangi. Sent (verb) + flowers (object).",
   6 => 3
),
4 => array(
   0 => "Because the first pair of pants did not fit properly, he asked for __________.",
   1 => "A) another pants",
   2 => "B) other pants",
   3 => "C) the others one",
   4 => "D) another pair",
   5 => "Jawab: D.  'another pair' ---> the first pair of pants Pronoun Preference.",
   6 => 4
),
5 => array(
   0 => "The committee has met and __________.",
   1 => "A) they have reached a decision.",
   2 => "B) it has formulated themselves some opinions.",
   3 => "C) its decision was reached at.",
   4 => "D) it has reached a decision.",
   5 => "Jawab: D. it --> the commitee Pronoun Preference",
   6 => 4
),
6 => array(
   0 => " John’s score on the test is the highest in the class; __________.",
   1 => "A) he should study last night.",
   2 => "B) he should have studied last night.",
   3 => "C) he must have studied last night.",
   4 => "D) he must had to study last night.",
   5 => "Jawab: C.  (c) he must have studied last night (Dia pasti sudah belajar tadi malam)",
   6 => 3
),
7 => array(
   0 => " Henry will not be able to attend the meeting tonight because __________.",
   1 => "A) he must to teach a class",
   2 => "B) he will be teaching a class",
   3 => "C) of he will teach a class",
   4 => "D) he will have teaching a class",
   5 => "Jawab: B. (b) he will be teaching a class (dia akan sedang mengajar) Pilihan A salah karena modal tidak boleh ketemu to Pilihan  C salah karena 'because of' merupakan prepoisition yang butuh object 'phrase' bukan clause. Pilihan D salah karena yang dia maksud ialah 'he will have taught a class'",
   6 => 2
),
8 => array(
   0 => " Having been served lunch, __________.",
   1 => "A) the problem was discussed by the members of the committee.",
   2 => "B) the committee members discussed the problem.",
   3 => "C) it was discussed by the committee members the problem.",
   4 => "D) a discussion of the problem was made by the members of the committee.",
   5 => "Jawab: B. Having been served lunch (seusai dihidangkan makan malam) Yang dihidangkan ialah 'the committee'.",
   6 => 2
),
9 => array(
   0 => " The chairman request that __________.",
   1 => "A) the member studied more carefully the problem.",
   2 => "B) the problem was more carefulnessly studied.",
   3 => "C) with more carefulness the problem could be studied.",
   4 => "D) the members study the problem more carefully.",
   5 => "Jawab: D. requested that + subject + Verb 1 murni Subjunctive",
   6 => 4
),
10 => array(
   0 => "There has not been a great response to the sale, __________?",
   1 => "A) does there",
   2 => "B) has not there",
   3 => "C) hasn't it",
   4 => "D) has there",
   5 => "Jawab: D. There has not been a great response to the sale (Positive) + has there (negative) Jika pernyataan positif (+) maka pertanyaan negatif (-), Jika pernyataan positif (-) maka pertanyaan negatif (+) ",
   6 => 4
),
11 => array(
   0 => "Among the 450 artworks in the White House art collection __",
   1 => "A) as is Mary Cassatt’s Young Mother and Two Children",
   2 => "B) is Mary Cassatt’s Young Mother and Two Children",
   3 => "C) which is Mary Cassatt’s Young Mother and Two Children",
   4 => "D) Mary Cassatt’s Young Mother and Two Children",
   5 => "Jawab: B. Materi ini masuk dalam Inversion (pembalikan) ditandai dengan adanya 'place expression' di depan kalimat. Subject dari kalimat ialah 'Mary Cassatt’s Young Mother and Two Children' Inversion --> Verb + Subject",
   6 => 2
),
12 => array(
   0 => "An unconsolidated aggregate of silt particles is also termed silt, _____ a consolidated aggregate is called siltstone.",
   1 => "A) which",
   2 => "B) why",
   3 => "C) whereas",
   4 => "D) whether",
   5 => "Jawab: C. Dalam kalimat atas, terdapat dua clause. Clause 1 = 'An unconsolidated aggregate of silt particles is also termed silt'. Clause 2 'a consolidated aggregate is called siltstone'. Olehnya kita butuh 1 connector untuk mengubungkan dua clause. Pilihan B sudah jelas salah karena why bukanlah connector. Pilihan A salah karena 'which' merupakan connector yang digunakan dalam 'adjective clause'  yang menjelaskan noun. Jadi posisi 'which'  ketika digunakan untuk menghubungkan dua clause berada setelah noun yang dijelaskan. Pilihan D salah karena 'whether' masuk dalam 'noun clause' yang berposisi sebagai 'subject' atau 'object'. 2 Clause butuh 1 Connector; 3 Clause butuh 2 Connector",
   6 => 3
),
13 => array(
   0 => " In 1864 the American Shakespearean actor Edwin Booth gained critical acclaim when he ____ Hamlet at the Winter Garden Theater in New York City.",
   1 => "A) perform",
   2 => "B) performed",
   3 => "C) had been performing",
   4 => "D) having performed",
   5 => "Jawab: B. Dalam kalimat atas, terdapat dua clause dan 1 connector 'when'. Clause 1 = 'the American Shakespearean actor Edwin Booth gained critical acclaim'. Clause 2 'he __ Hamlet at the Winter Garden Theater in New York City'. Clause 2 kehilangan verb olehnya kita butuh verb untuk melengkapinya. Pilihan yang benar ialah B karena waktu nya berbentuk past (in 1864).",
   6 => 2
),
14 => array(
   0 => " ____ are chiefly derived from petroleum.",
   1 => "A) Plastics today",
   2 => "B) There are plastics today",
   3 => "C) Because today plastics today",
   4 => "D) Due to plastics today",
   5 => "Jawab: A. Yang dibutuhkan ialah subject kalimat",
   6 => 1
),
15 => array(
   0 => "Most tangerine trees and their flowers and fruits resemble ___ the orange, although tangerines are generally smaller.",
   1 => "A) of those ",
   2 => "B) which of those ",
   3 => "C) those of ",
   4 => "D) which are of ",
   5 => "Jawab: C. 'resemble' ialah intransitive verb (kata kerja butuh object). Jadi resemble langsung ketemu 'those' sebagai object.", 
   6 => 3
),
16 => array(
   0 => "Ohio, the center of ____ the Hopewen culture, has the greatest concentration of ancient burial mounds in the United States.",
   1 => "A) called",
   2 => "B) what is called",
   3 => "C) that is called",
   4 => "D) is called",
   5 => "Jawab: B. setelah 'of' mesti noun. 'what is called' meruapakan noun clause.",
   6 => 2
),
17 => array(
   0 => "During the 1850’, reform movements __ temperance and the abolition of slavery gained strength in the United States.",
   1 => "A) advocating",
   2 => "B) they had advocated",
   3 => "C) to advocating",
   4 => "D) to advocate when",
   5 => "Jawab: A. 'advocating temperance and the abolition of slavery' merupaka adjective yang menjelaskan / memberi informasi tambahan terkait 'reform movements'.",
   6 => 1
),
18 => array(
   0 => "Many meteorites are thought to have originated from __ that once existed between the orbits of Mars and Jupiter.",
   1 => "A) where a planet or planets",
   2 => "B) a planet or planets so",
   3 => "C) which a planet or planets",
   4 => "D) a planet or planets",
   5 => "Jawab: D. 'that once existed between the orbits of Mars and Jupiter' merupakan adjective clause yang menandakan adanya noun yang dijelaskan sebelumnya.",
   6 => 4
),
19 => array(
   0 => "The modem automobile is a ____ composed of more than 14,000 parts.",
   1 => "A) complex technical system",
   2 => "B) system of complex technical",
   3 => "C) complex technical system that",
   4 => "D) system is technically complex",
   5 => "Jawab: A. article 'a' menandakan adanya noun setelahnya. Selain itu 'composed of more than 14,000 parts' merupakan adjective yang menandakan adanya noun debelumnya.",
   6 => 1
),
20 => array(
   0 => " ___ over 100 years since the invention of the square-bottomed paper bag.",
   1 => "A) Now is",
   2 => "B) Now it has",
   3 => "C) There is now",
   4 => "D) It is now",
   5 => "Jawab: D. Yang dibutuhkan ialah subject dan verb. dari pilihan jawaban yang paling sesuai dg kalimat ialaha 'It is now'.",
   6 => 4
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
      <div style="color:#666666; font-size:30px; padding-bottom:20px; ">Structure - Model Test 4
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
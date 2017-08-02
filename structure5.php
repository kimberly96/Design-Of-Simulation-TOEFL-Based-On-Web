<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "The novelist John Dos Passos developed a style of fiction incorporating several documentary devices ___ to his works",
   1 => "A)  lent realism",
   2 => "B) that lending realism",
   3 => "C) to lend realism",
   4 => "D) of whose realism lent",
   5 => "Jawab: C. developed + to lend. Verb + to + verb. Verb + gerund (verb ing)",
   6 => 3
),
2 => array(
   0 => "In Earth’s infancy, its surface was warm enough for life ___ the young Sun was fainter than it is today.",
   1 => "A) in spite of",
   2 => "B) whether",
   3 => "C) neither of which",
   4 => "D) even though",
   5 => "Jawab: D. yang dibutuhkan ialah connector untuk menghuungkan dua clause di atas. Pilihan A sudah jelas salah karena 'in spite of' merupakan preposition bukan connector. Pilihan B salah karena 'whether' berposisi sebagain noun: subject dan object. Pilihan C salah karena 'neither of which' masuk dalam kategori adjective clause yaitu menjelaskan noun setelahnya. Seteah neither of which pun langsung ketemu verb yg berarti tida sesuai dnegan kalimat. Pilihan D benar. Materi ini masuk dalam kategori 'Adverb Clause'.",
   6 => 4
),
3 => array(
   0 => "The invention of the compound microscope (which allowed much higher magnification through multiple lenses) made ___ the great strides in life sciences.",
   1 => "A) it possible",
   2 => "B) possibly",
   3 => "C) possible",
   4 => "D) it was possible",
   5 => "Jawab: C. Make + possible + sth (noun)",
   6 => 3
),
4 => array(
   0 => "Hares generally have longer ears and hind legs than rabbits and move by jumping ___ running",
   1 => "A) rather to be",
   2 => "B) rather than",
   3 => "C) are rather",
   4 => "D) as rather",
   5 => "Jawab: B. rather than = (dibanding). Digunakan untuk perbandingan",
   6 => 2
),
5 => array(
   0 => " Over the centuries, ____ that try to explain the origins of the university.",
   1 => "A) although many theories",
   2 => "B) many theories",
   3 => "C) have many theories been",
   4 => "D) there have been many theories",
   5 => "Jawab: D. Langkah 1:  'that try to explain the origins of the university' merupakan adjective clause. Adjective clause menjelaskan noun yang letaknya sebelum adjective clause itu sendiri. Jadi sebelum adjective clause di atas mesti ada noun yang dijelaskan. Pilihan C sudah jelas salah karena bukan noun yang sebelum adjective clause tapi 'been'. Langkah 2: Kalimat di atas terdapat 1 clause 'that try to explain the origins of the university' yang terdapat connector 'that' yang juga berfungsi sebagai subject dari verb 'try'. Adanya 1 connector menandakan dalam kalimat tersebut terdapat dua clause. Olehnya yang kita butuhkan dari pilihan jawaban ialah 1 clause. Clause ialah kumpulan kata yang didalamnya terdapat subject dan verb. Pilihan A dan B bukanlah clause.  Jadi pilihan yang tepat ialah pilihan D.",
   6 => 4
),
6 => array(
   0 => "The planet Venus is almost exactly the same size and mass _____ Earth, with a similar interior, including a nickel-iron core.",
   1 => "A) to",
   2 => "B) as",
   3 => "C) is",
   4 => "D) than",
   5 => "Jawab: B. the same + as",
   6 => 2
),
7 => array(
   0 => "George Washington Carver ____ international fame for revolutionizing agriculture research in the southern United States during the early twentieth century.",
   1 => "A) won",
   2 => "B) winning",
   3 => "C) who has won",
   4 => "D) the winner of",
   5 => "Jawab: A. Kalimat di atas kehilangan verb jadi kita butuh verb.",
   6 => 1
),
8 => array(
   0 => "Constituting one of the earliest engineering techniques, ______ in Paleolithic time was done in order to extend natural caves.",
   1 => "A) tunnels were built",
   2 => "B) which built tunnels",
   3 => "C) the building of tunnels",
   4 => "D) tunnels whose building",
   5 => "Jawab: C.  Kalimat di atas buuth subject. Verb dari kalimat di atas ialah 'was done'.",
   6 => 3
),
9 => array(
   0 => "The tulip tree is native to the eastern United States, _____ the tallest and largest broadleaf tree.",
   1 => "A) where",
   2 => "B) where it is",
   3 => "C) it is where",
   4 => "D) is where",
   5 => "Jawab: B. 'where it is the tallest and largest broadleaf tree' merupakan adjective clause yang menjelaskan noun sebelumnya 'the eastern United States'.",
   6 => 2
),
10 => array(
   0 => "Elementary schools in the United states provide formal education ______ arithmetic, science, social science, and communication skills that including reading, writing, spelling, and speaking.",
   1 => "A) such subjects as basic in",
   2 => "B) as basic subjects in such",
   3 => "C) in such basic subjects as",
   4 => "D) as in such basic subjects",
   5 => "Jawab: C. pasangan kata yang benar ialah such as bukan as such. Jadi pilihan B dan D sudah jelas salah. Ingat pola noun phrase (adjective + noun). Kita lihat dipilihan jawaban ada kata basic (adjective) dan subjects (noun). Antara A dan C hanya C yang memnuhi syarat pola noun phrase (adj. + noun).",
   6 => 3
),
11 => array(
   0 => "______ land and money enabled construction of the Union Pacific railroad to begin from Council Bluffs, Iowa, in 1865.",
   1 => "A) By the government granting of ",
   2 => "B) Government grants of",
   3 => "C) For the government to grant",
   4 => "D) Government grants so that",
   5 => "Jawab: B. Yang dibutuhkan dari kalimat di atas ialah subject. Verb nya ialah 'enabled'.",
   6 => 2
),
12 => array(
   0 => "Appointments to the United States Supreme Court and all lower federal courts ____ by the President with the advice and consent of the Senate.",
   1 => "A) making",
   2 => "B) to make",
   3 => "C) are made",
   4 => "D) have made",
   5 => "Jawab: C.  Terdapat 'by' jawabannya mesti passive 'are made'.",
   6 => 3
),
13 => array(
   0 => " The name “squirrel” is commonly used for those forms of the family Sciuridae that live in trees, _____ it is equally accurate for ground dwelling types.",
   1 => "A) whether",
   2 => "B) that",
   3 => "C) although",
   4 => "D) in spite of",
   5 => "Jawab: C. Ada dua clause. Clause 1 = 'The name “squirrel” is commonly used'; Clause 2 = 'it is equally accurate'. Untuk menghubungkan ke dua clause di atas kita butuh connector. Connector yang tepat ialah 'although' (pilihan C)",
   6 => 3
),
14 => array(
   0 => "Green plants combine _____ with water and carbon dioxide to make food.",
   1 => "A) energy derived from light",
   2 => "B) energy, derived it from light",
   3 => "C) energy is derived from light",
   4 => "D) from light, and energy derived",
   5 => "Jawab: A. kalimat di atas sudah terdapat subject dan verb jadi kita tinggal butuh object. Pilihan C sudah salah karen terdapat clause tanpa connector (tidak bisa jadi object). Pilihan D salah karena terdapat 'from' --> combine + noun tanpa 'from'. Pilihan B salah karen 'derived' menjelaskan 'energy' jadi tidak lagi butuh it. Materi ini masuk dalam topik Adjective Clause (Reduction) atau juga Past Participle. ",
   6 => 1
),
15 => array(
   0 => "From the archeologist’s perspective, understanding the past is vitally important and requires ______ of earlier cultures.",
   1 => "A) the ruins examined",
   2 => "B) examining the ruins",
   3 => "C) of the ruins to be examined",
   4 => "D) that the examined ruins",
   5 => "Jawab: B. Verb examinig harus berbentuk -ing.",
   6 => 2
),
16 => array(
   0 => "The Texas Legislature selected Vassar Miller _____ in 1982, and again in 1988.",
   1 => "A) was the state’s poet laureate",
   2 => "B) as the state’s poet laureate",
   3 => "C) the state’s poet laureate",
   4 => "D) become the state’s poet laureate",
   5 => "Jawab: C. Langkah 1: Kalimat di atas sudah lengkap Subject dan Verb. Jadi kita tidak lagi butuh verb lainnya. Pilihan A dan D olehnya sudah jelas salah. Langkah 2: Ketika kita menggunakan kata 'selected' tidak lagi perlu menggunakan kata 'as' tapi langsung saja noun setelahnya. Contoh lain: I selected you the president of the meeting club. Kata kerja yang lain masuk dalam kategori kata kerja semacam ini ialah: consider, find, believe, think, prove call, name, elect, appoint, nominate, make, paint, suppose, turn (mengubah), dan build.",
   6 => 3
),
17 => array(
   0 => "Oxygen and nutrients reach the body’s tissues ____ from the blood through the capillary wall.",
   1 => "A) pass",
   2 => "B) by passing",
   3 => "C) to be passing",
   4 => "D) have passed",
   5 => "Jawab: B. Kalimat di atas sudah lengkap subject dan verb jadi tidak butuh lagi verb. Pilihan A dan D sudah jelas salah. Pilihan C tidak sesuai dengan konteks kalimat.",
   6 => 2
),
18 => array(
   0 => "_____ important development of the Neolithic age was not in the manufacture of stone tools but in the production of food.",
   1 => "A) The most",
   2 => "B) Most",
   3 => "C) Most of",
   4 => "D) Of the most",
   5 => "Jawab: A. Dari penjelasan di atas sudah jelas bahwa pilihan B dan C tidak sesuai pada kalimat. Pilihan D salah karena jika menggunakan bentuk of the most itu bearti akan ada beberapa benda / hal yang di-list dan biasanya ditandai dengan koma. Di atas tidak ada tanda-tanda adanya yang di-list. Contoh; Of the seven students, Anto is the best one at speaking English.",
   6 => 1
),
19 => array(
   0 => " _______ more than 65,000 described species of protozoa, of which more than half are fossils.",
   1 => "A) Being that there are",
   2 => "B) There being",
   3 => "C) Are there",
   4 => "D) There are",
   5 => "Jawab: D. There are (Subject di belakang verb).",
   6 => 4
),
20 => array(
   0 => "________ of classical ballet in the United States began around 1830.",
   1 => "A) To teach",
   2 => "B) Is teaching",
   3 => "C) It was taught",
   4 => "D) The teaching",
   5 => "Jawab: D. Kehilangan Subject. Ingat Noun + of + Noun.",
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
      <div style="color:#666666; font-size:30px; padding-bottom:20px; ">Structure - Model Test 5
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
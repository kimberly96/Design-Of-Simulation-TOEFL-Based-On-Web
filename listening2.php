<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/116C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/116Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) she had already taken the test",
   2 => "B) she did not want to take classes",
   3 => "C) she had noot taken the placement test",
   4 => "D) she would take the math classes later",
   5 => "Jawab: C. Sejak laki-laki tersebut mengekspresikan ekspresi terkejut, itu berarti bahwa ia berpikir kalau wanita tersebut tidak mengambil ujian penempatan (placement).",
   6 => 3
),
2 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/117C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/117Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) the plan is to remain in the class",
   2 => "B) it is not comfortable in the classroom",
   3 => "C) he has been absent because he was sick",
   4 => "D) the waether has been very bad",
   5 => "Jawab: C. 'To catch cold' adalah bentk ekspresi idiom yang berarti bahwa laki-laki tersebut sedang sakit. ",
   6 => 3
),
3 => array(
   0 => "Narasi: <audio controls style=\"margin-left:56px;\">
   <source src=\"audio/118N.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\">Conversation: <audio controls style=\"margin-left:13px;\">
   <source src=\"audio/118C.mp3\" type=\"audio/mpeg\">
   </audio></div><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/118Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) he was late arriving at registration",
   2 => "B) he neen an advisor's signature on a course request form ",
   3 => "C) he is not doing well in the classes because it is so large",
   4 => "D) he must have the permission of the instructure to enroll in a class",
   5 => "Jawab: D. 'I need our technical writing class ... the that case, i'll sign an override for you' ",
   6 => 4
),
4 => array(
   0 => "Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/119Q.mp3\" type=\"audio/mpeg\" >
   </audio>",
   1 => "A) help him with the class",
   2 => "B) explain some technical vocabulary",
   3 => "C) give hime special permission to take the class",
   4 => "D) take a form to the registration area",
   5 => "Jawab: C. 'I'll sign an override..... Pilihan D mengacu pada sesuatu yang profesor katakan kepada Mike, bukan sesuatu yang mike ingin profesor lakukan.",
   6 => 3
),
5 => array(
   0 => "Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/120Q.mp3\" type=\"audio/mpeg\" >
   </audio>",
   1 => "A) he has planned to graduate in the fall",
   2 => "B) he has to take professor Day's class in order to graduate",
   3 => "C) he needs the professor to sign his applocation for graduation",
   4 => "D) he does not have enough credits for graduation",
   5 => "Jawab: B. '...I cant graduate without your class'. Pilihan A  berlawan dengan fakta dari rencana nya untuk lulus/wisuda pada musim semi. ",
   6 => 2
),
6 => array(
   0 => "Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/121Q.mp3\" type=\"audio/mpeg\" >
   </audio>",
   1 => "A) enroll mike in the class next year",
   2 => "B) allow mike to the class this term",
   3 => "C) give mike permission to graduate without her class",
   4 => "D) register mike for another class",
   5 => "Jawab: B. '...I'll sign an override for you'. Pilihan A mengacu pada sugesti yang profesor buat pada awal percakapan, bukan yang ingin ia lakukan.",
   6 => 2
),
7 => array(
   0 => "Narasi: <audio controls style=\"margin-left:56px;\">
   <source src=\"audio/126N.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\">Conversation: <audio controls style=\"margin-left:13px;\">
   <source src=\"audio/126C.mp3\" type=\"audio/mpeg\">
   </audio></div><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/126Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) the 'Sun-Up Semester' program",
   2 => "B) the community collage campus",
   3 => "C) video telecourses",
   4 => "D) technology for distance learning",
   5 => "Jawab: C. Pilihan A dan B adalah tema kedua yang digunakan untuk mengembangkan tema utama. Pilihan D tidak menyebut atau mengandung fakta percakapan.",
   6 => 3
),
8 => array(
   0 => "Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/127Q.mp3\" type=\"audio/mpeg\" >
   </audio>",
   1 => "A) to clarify how to register",
   2 => "B) to advertise the collage",
   3 => "C) to provide a listing of a courses",
   4 => "D) to give student an alternative to video tapes ",
   5 => "Jawab: D. Pilihan A berlawanan dengan fakta bahwa murid harus menghubungi Community Collage distance learning program untuk mendaftar. Pilihan C berlawanan dengan fakta yang tertulis di panduan tv. Pilihan B tidak menyebut atau mengandung fakta percakapan.",
   6 => 4
),
9 => array(
   0 => "Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/128Q.mp3\" type=\"audio/mpeg\" >
   </audio >",
   1 => "A) they should come to campus",
   2 => "B) they can call the community collage",
   3 => "C) the must contact the instructure",
   4 => "D) they can use computers",
   5 => "Jawab: B. 'To register for the telecourses, phone the community collage ...'.",
   6 => 2
),
10 => array(
   0 => "Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/129Q.mp3\" type=\"audio/mpeg\" >
   </audio>",
   1 => "A) by using e-mail",
   2 => "B) by calling KCC7-TV",
   3 => "C) by writing letters",
   4 => "D) by making video tapes",
   5 => "Jawab: A. Pilihan B, C dan D tidak menyebut atau mengandung fakta percakapan.",
   6 => 1
),
11 => array(
   0 => "Narasi: <audio controls style=\"margin-left:56px;\">
   <source src=\"audio/130N.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\">Conversation: <audio controls style=\"margin-left:13px;\">
   <source src=\"audio/130C.mp3\" type=\"audio/mpeg\">
   </audio></div><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/130Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) the women's health",
   2 => "B) the women's grades",
   3 => "C) the man's joke",
   4 => "D) the man's stress",
   5 => "Jawab: A. Kata 'joke' pada pilihan C, mengacu pada frasa 'no-joke' yang berarti sesuatu yang tidak lucu. Pilihan B menyebutkan maksudnya namun bukan merupakan topic percakapan. Pilihan D tidak menyebut atau mengandung fakta percakapan.",
   6 => 1
),
12 => array(
   0 => "Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/131Q.mp3\" type=\"audio/mpeg\" >
   </audio>",
   1 => "A) she was taking to many classes",
   2 => "B) she was very tired because she studied too late",
   3 => "C) she had been ill last semester",
   4 => "D) she may have to withdraw from school this semester.",
   5 => "Jawab: C. Pilihan A dan B kemungkinan benar, namun mereke menyebabkan masalah untuk dia, bukan menjadi masalah bagi dia. Pilihan D berlawanan dengan fakta percakapan.",
   6 => 3
),
);

$max=12;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = 1;}else{$randval=1;}
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
      <div style="color:#666666; font-size:30px; padding-bottom:20px; ">Listening - Model Test 1
      </div>
         <div style="background-color:#666666; color:white; margin-left:150px; width:620px; padding:5px 0">There are 12 questions in this quiz. Read the grammar explanation below. 
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
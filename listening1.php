<?php
session_start();
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/101C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/101Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) He doesn't mind the traffic",
   2 => "B) He takes the bus to school",
   3 => "C) He has to stand on the bus if he takes it to the school",
   4 => "D) He wants to ride to school with the woman",
   5 => "Jawab: C. Sejak laki-laki tersebut berkata tidak ada bangku lagi yang tersedia, itu berarti bahwa dia harus berdiri saat naik bus ke sekolah. Pilihan B menunjukkan sugesti dari wanita tersebut, bukan respon. Pilihan A dan D tidak menyebutkan atau menyimpulkan infromasi dari conversation.",
   6 => 3
),
2 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/102C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/102Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) The woman should not consider her advisor in the decision",
   2 => "B) The woman should not take Dr. Sullivan's section",
   3 => "C) The woman advisor will not be offended",
   4 => "D) The woman should not take a physics course",
   5 => "Jawab: A. Who cares berarti 'sesuatu' yang tidak penting (bahwa her advisor might be offended). Pilihan B, C dan D tidak disebutkan dan tidak menyimpulkan informasi dari percakapan",
   6 => 1
),
3 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/103C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/103Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) she is not interested in the man",
   2 => "B) she doesn't like lectures",
   3 => "C) she would go out with the man on another occasion",
   4 => "D) she would rather stay at home",
   5 => "Jawab: C. Karena wanita tersebut mengucapkan suara 'great' dan dia berterimakasih kepada laki-laki tersebut karena telah bertanya kepadanya, itu berari bahwa 'she would go out with the man on another occasion.",
   6 => 3
),
4 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/104C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/104Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) the bike is in good condition",
   2 => "B) the man needs to replace the bike",
   3 => "C) the bike is missing",
   4 => "D) it is a new bike",
   5 => "Jawab: A. In good shape adalah bentuk ekspresi idiom yang berarti suatu benda dalam kondisi yang bagus. ",
   6 => 1
),
5 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/105C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/105Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) something cold",
   2 => "B) coffee",
   3 => "C) tea",
   4 => "D) both coffee and tea",
   5 => "Jawab: A. Laki-laki tersebut berkata ingin sesuatu yang dingin. Pilihan B, C dan D berbicara tentang sesuatu yang ia suka, bukan yang ia inginkan.",
   6 => 1
),
6 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/106C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/106Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) ask directions",
   2 => "B) walk to the shopping center",
   3 => "C) take a taxi",
   4 => "D) wait for the bus",
   5 => "Jawab: B. '...it isn't too far to walk.' Pilihan A berlawanan pada fakta yang laki-laki tersebut berikan ke wanita tersebut. Pilihan C dan D adalah alternatif kemungkinan yang disebutkan laki-laki tersebut sebelum membuat sugesti.",
   6 => 2
),
7 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/107C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/107Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) she doesn't plan to study",
   2 => "B) she has a very busy schedule ",
   3 => "C) she is lost",
   4 => "D) she has not registered yet",
   5 => "Jawab: D. Sejak wanita tersebut berkata akan mengecek schedule, itu berarti bahwa wanita tersebut belum terdaftar.",
   6 => 4
),
8 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/108C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/108Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) he doesn't  want to listen to the radio",
   2 => "B) he has changed his opinion about turning on the radio",
   3 => "C) the radio will not bother him",
   4 => "D) the radio is not working very well",
   5 => "Jawab: C. 'Not mind' adalah bentuk ekspresi idiom yang berarti bahwa yang mendengarkan radio tidak akan terganggu dengan aktivitas yang dilakukan.",
   6 => 3
),
9 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/109C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/109Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) stop worrying",
   2 => "B) go out more" ,
   3 => "C) talk to a friend",
   4 => "D) get counseling",
   5 => "Jawab: D. 'She would better see someone at the Counseling center'. Pilihan A, B dan C tidak menyebutkan dan tidak mengarahkan pada maksud dari percakapan.",
   6 => 4
),
10 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/110C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/110Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) he prefers to talk another time",
   2 => "B) he wants the women to go away ",
   3 => "C) he would like the women to continue",
   4 => "D) he doesn't know what to think",
   5 => "Jawab: C. 'Please go on' adalah bentuk ekspresi idiom yang berarti bahwa pendengar ingin orang lain untuk melanjutkannya. Pilihan A, B dan D tidak mengandung ekspresi frasa tersebut.",
   6 => 3
),
11 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/111C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/111Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) accept the women's apology",
   2 => "B) allow the women to go ahead of him",
   3 => "C) apologize to the women",
   4 => "D) go to the front of the line",
   5 => "Jawab: B. Sejak laki-laki tersebut meminta maaf pada wanit tersebut, dia harus memberikannya antrian didepan. ",
   6 => 2
),
12 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/112C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/112Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) the neighbors have parties often",
   2 => "B) she doesn't like her neighbors",
   3 => "C) the neighbors' party is distrubing her",
   4 => "D) she will not be invited to the neighbors' party",
   5 => "Jawab: A. 'Not again' adalah bentuk ekspresi idiom yang mengajak pendengar untuk lebih berhati-hati dalam melakukan aktivitas yang bersifat berulang. Pilihan C berlawanan dengan fakta. Pilihan B dan D tidak menyebutkan dan mengandung informasi dari percakapan.",
   6 => 1
),
13 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/113C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/113Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) Dr. Franklin is not very understanding",
   2 => "B) the extension was a very bad idea",
   3 => "C) he is surprised that the woman was denied her request",
   4 => "D) the professor's answer is not surprising",
   5 => "Jawab: C. 'Thats too bad' adalah bentuk ekspresi idiom yang berarti meminta maaf kepada pendengar tentang suatu kejadian.",
   6 => 3
),
14 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/114C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/114Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) they not have a telephone",
   2 => "B) they are late ",
   3 => "C) they have been late",
   4 => "D) they got lose",
   5 => "Jawab: B. Sejak laki-laki tersebut berkata bahwa bahwa mereka telat sejak tadi, itu berarti bahwa mereka sudah telat. Pilihan A tidak seperti alasan. Pilian C dan D tidak menyebutkan dan mengandung maksud dari percakapan.",
   6 => 2
),
15 => array(
   0 => "Conversation: <audio controls style=\"margin-left:10px;\">
   <source src=\"audio/115C.mp3\" type=\"audio/mpeg\">
   </audio><br><br>
   <div style=\"padding-left:15px;\"> Question: <audio controls style=\"margin-left:40px;\">
   <source src=\"audio/115Q.mp3\" type=\"audio/mpeg\" >
   </audio></div>",
   1 => "A) pay the rent half of a month",
   2 => "B) help the man move",
   3 => "C) stay where she is living until the 15th ",
   4 => "D) move out of the apartment",
   5 => "Jawab: C. Sejak wanita tersebut berkata bahwa dia telah membayar biaya rental sampai tanggal 15, ada kemungkinan bahwa dia akan tinggal sampai tanggal 15. ",
   6 => 3
),
);

$max=15;

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
      <div style="color:#666666; font-size:30px; padding-bottom:20px; ">Listening - Model Test 1
      </div>
         <div style="background-color:#666666; color:white; margin-left:150px; width:620px; padding:5px 0">There are 15 questions in this quiz. Read the grammar explanation below. 
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
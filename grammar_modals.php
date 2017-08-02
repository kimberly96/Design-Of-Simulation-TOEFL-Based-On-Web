<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which sentence is correct?",
   1 => "We can visiting you at the weekend.  ",
   2 => "I can’t to see you today.  ",
   3 => "My parents can come to the party.",
   6 => 3
),
2 => array(
   0 => "Which question is correct?",
   1 => "You can play the violin?  ",
   2 => "Can you play the violin?  ",
   3 => "Play you the violin?",
   6 => 2
),
3 => array(
   0 => "Which sentence is NOT correct?",
   1 => "We can’t see the television.  ",
   2 => "David can’t come to work today.  ",
   3 => "I can’t to fix your car, I’m afraid. ",
   6 => 3
),
4 => array(
   0 => "Which question is correct?",
   1 => "Can you to help me please?  ",
   2 => "You can please help me?  ",
   3 => "Can you help me please?",
   6 => 3
),
5 => array(
   0 => "Which question is NOT correct?",
   1 => "Where I can put this box?  ",
   2 => "Which sports can you play?  ",
   3 => "What time can you come to the office?",
   6 => 1
),
6 => array(
   0 => "Which is the correct answer? Can your brother speak German?",
   1 => "No, he don’t can.  ",
   2 => "No, he can’t.  ",
   3 => "Yes, he cans.",
   6 => 2
),
7 => array(
   0 => "What is the best reply? Could I borrow your pen?",
   1 => "Yes, sure.  ",
   2 => "Yes, you could.  ",
   3 => "Yes, I can",
   6 => 1
),
8 => array(
   0 => "Which word completes the question? _____ you understand Spanish people when you were in Spain?",
   1 => "can",
   2 => "could",
   3 => "do",
   6 => 2
),
9 => array(
   0 => "Which word CANNOT go in the space? ____ you drive me to the station please?",
   1 => "can",
   2 => "do",
   3 => "could",
   6 => 1
),
10 => array(
   0 => "Which words complete the sentence? I ____ dance really well when I was young, but I ____now.",
   1 => "couldn’t / can’t  ",
   2 => "could / can’t  ",
   3 => "can’t / can ",
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
      <h3>Modals</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Can / Could</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              1) Can/Cant digunakan untuk berbicara tentang kemampuan Anda sekarang.<br>
              <em>I can speak English.  <br>
              I can’t speak German.</em><br><br>
              Could/Couldnt untuk berbicara tentang kemampuan di masa lalu. <br>
              <em>I could speak French when I was a child, but I can't now. <br>
              I couldn’t speak English when I was a child, but I can now.</em><br><br>
              2) Can atau Could juga dapat digunakan untuk membuat permintaan. Could lebih sopan. <br>
              <em> Can you cook this evening please?<br>
              Could you pass me the salt?</em><br><br>
              Can dapat digunakan untuk menjawab suatu permintaan. <br>
              <em>Can I sit here?                   =>           Yes, you can.   /   Sorry, you can’t. <br>
              Can you cook this evening please?    =>           Yes, I can.     /   Sorry, I can’t.</em>  <br><br>
              <b>Jangan</b> gunakan could untuk menjawab permintaan. <br>
              <em> Could you lend me some money? <br>
              Yes, I could.       =>      Yes, sure!  Sorry, I can’t.</em> <br><br>
              <strong>Bentuk:</strong><br>
              1) Can dan Could memiliki bentuk yang sama untuk semua orang.<br>
              I         <u>can/could</u>            speak English <br>
              you <u>can/could</u>            speak English <br>
              he / she / it         <u>can/could</u>            speak English <br>
              we    <u>can/could</u>            speak English <br>
              they            <u>can/could</u>            speak English. <br>
              <em>It’s too cold. My trousers are too small.</em><br><br>
              2) Bentuk negatif dari <b>can</b> adalah <b>cannot</b> atau <b>can't</b>. Bentuk negatif dari <b>could</b> ialah <b>couldn't</b>.<br><br>
              3) <u>Selalu</u> ada verb setelah <b>can</b> dan <b>could</b> dan verb <u>selalu</u> dalam bentuk infinitive (tanpa to). <br>
              <em>Sally can help you.</em><br>
              NOT <strike>Sally can helps you. / Sally can to help you.</strike></em><br><br>
              4) Membuat pertanyaan dengan membalikkan <b>can</b> dan subject. <br>
              <em> I can see you this afternoon.       =>    <u>Can I</u> see you this afternoon?<br>
              You could help me.    =>    <u>Could you</u> help me?        </em><br><br>
              5) Gunakan can/cant dan could/couldnt untuk pertanyaan yang singkat. <br>
              <em>Can your brother swim?         =>    Yes, he can.  No, he can’t.<br>
              Could you do the test?        =>    Yes, I could.  No, I couldn’t.</em><br><br>
              <strong><u>Kesalahan Umum:</u></strong><br>
              1) Beberapa orang membuat pertanyaan dengan bentuk yang salah. <br>
              <em> You can speak English?      =>     Can you speak English?<br>
              I could sit here?           =>     Could I sit here? </em><br><br>
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
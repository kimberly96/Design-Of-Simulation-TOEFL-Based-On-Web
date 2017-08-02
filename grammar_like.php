<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which word(s) completes the sentence? Would you like ____ to my house for dinner?",
   1 => "to come  ",
   2 => "come  ",
   3 => "for to come ",
   6 => 1
),
2 => array(
   0 => "In which sentence can you write would like?",
   1 => "I ____ playing tennis with my friends.  ",
   2 => "I ____ to work with animals in the future.  ",
   3 => "I ____ like pizza. It’s my favourite food.   ",
   6 => 2
),
3 => array(
   0 => "Which sentence is NOT correct?",
   1 => "I wouldn’t like any more tea, thank you.  ",
   2 => "I’d love some chocolate cake!  ",
   3 => "I wouldn’t like own a dog.",
   6 => 3
),
4 => array(
   0 => "Which question is correct?",
   1 => "Your brother would like a new car?  ",
   2 => "Would your friends like to come to dinner too?  ",
   3 => "Do you would like a drink? ",
   6 => 2
),
5 => array(
   0 => "Which is the best answer to this question? Would you like a biscuit?",
   1 => "Yes, please.  ",
   2 => "I like tea.  ",
   3 => "Yes, I’d.",
   6 => 1
),
6 => array(
   0 => "Complete this sentence. My husband _____ bananas. He eats one every day.",
   1 => "would eat  ",
   2 => "would like  ",
   3 => "likes ",
   6 => 3
),
7 => array(
   0 => "Complete this question. _____you like listening to classical music?",
   1 => "Are   ",
   2 => "Would   ",
   3 => "Do",
   6 => 3
),
8 => array(
   0 => "Complete this question. When ________ to visit us?",
   1 => "you would like  ",
   2 => "would you like  ",
   3 => "do you like",
   6 => 2
),
9 => array(
   0 => "In which sentence can you write like?",
   1 => "I really ____ scary films!  ",
   2 => "I ____ to study engineering when I finish school.  ",
   3 => "I ____ a hamburger and a coke, please.",
   6 => 1
),
10 => array(
   0 => "Complete the sentence. This part of the city looks dangerous! I wouldn’t like ____ here when it’s dark!",
   1 => "I come  ",
   2 => "come  ",
   3 => "to come",
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
      <h3><span>Would Like</span> / Like</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Would Like/Like</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              1) Would like berati want/ingin, namun lebih bersifat sopan. Anda bisa menggunakannya dalam kalimat atau pertanyaan.<br><br>
              <em>I’d like a biscuit.<br>
              Would you like some tea?.</em><br><br>
              2) Anda juga dapat menggunakannya untuk berbicara tentang mimpi dan ambisi.<br><br>
              <em>I’d like to go to Japan.
              I wouldn’t like to live here!.</em><br><br>
              Anda juga dapat menggunakan <strong>I'd Love</strong> atau <strong>I'd Hate</strong> dalam berbicara tantang mimpi/keinginan anda.<br><br>
              <strong><u>Bentuk:</u></strong><br>
              1) Would Like sama untuk semua orang.<br>
              <u>I would like</u> some tea.<br>
              <u>You would like</u> some tea.<br>
              <u>He / she / James would like</u> some tea.k<br>
              <u>We would like</u> some tea.<br>
              <u>They / our clients would like</u> some tea. <br><br>
              2) Untuk membuat pertanyaan, balikkan <strong>subject</strong> dan <strong>would</strong>.<br>
              <em><u>Would you / James / your clients like</u> some tea?</em><br><br>
              3) Gunakan <strong>Wouldn't</strong> dalam bentuk negatif.<br>
              <em><u>I wouldn’t like</u> to work there</em><br><br>
              4) <strong>Would like</strong> dapat diikuti oleh <strong>noun</strong> atau <strong>to + verb</strong>.<br>
              <em>noun:    <u>Would you like</u> a biscuit?<br>
              verb:     <u>Would you like to go</u> to Malaysia?<br><br>
              5) Untuk kalimat positif, anda dapat membuatnya menjadi <strong>'d</strong>. <br>
              <em><u>I would like</u> to go to the USA.      =>     <u>I’d like to go</u> to the USA.</em><br>
              But NOT in negative sentences:<br>
              <em><u>I’dn’t like to</u> work in a factory.   =>     <u>I wouldn’t like to</u> work in a factory.</em><br>
              And NOT in short answers:<br>
              <em><u>Would you like to</u> have a horse?<br>
              Yes, I’d.    =>     Yes, I would.</em><br><br>
              6) Hati-hati agar tidak bingung dalam penggunan <strong>Would Like</strong> dan <strong>Like</strong>.<br>
              Gunakan <strong>like</strong> untuk berbicara tentang hal-hal yang Anda suka sepanjang waktu. <br>
              <em>I <u>like</u> chocolate cake. It’s my favourite food.</em><br><br>
              Gunakan <strong>Would like</strong> untuk berbicara tentang hal-hal yang Anda inginkan sekarang, atau pada beberapa waktu di masa depan. <br>
              <em><u>I’d like</u> a cup of coffee please. <br>
              <u>I’d like to</u> work in a chocolate factory.</em> <br><br>
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
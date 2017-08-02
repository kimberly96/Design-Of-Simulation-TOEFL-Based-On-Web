<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which words complete the sentence? There are two new students in my class, ____ boy and ____ girl.",
   1 => "a / a  ",
   2 => "the / the  ",
   3 => "You don't need a word in the spaces   ",
   6 => 1
),
2 => array(
   0 => "Which sentence is correct?",
   1 => "The actors in this film are very talented.  ",
   2 => "Actors in this film are very talented.  ",
   3 => "Actor in this film is very talented.",
   6 => 1
),
3 => array(
   0 => "Which words go in the spaces? We saw ___ film yesterday. ___ film was about an explorer.",
   1 => "a / A  ",
   2 => "a / The  ",
   3 => "the / A ",
   6 => 2
),
4 => array(
   0 => "omplete the sentence. My mum doesn't like ____. She thinks they are noisy.",
   1 => "dogs  ",
   2 => "dog  ",
   3 => "the dogs",
   6 => 1
),
5 => array(
   0 => "Complete the sentence. Don't look at ____. You will hurt your eyes!",
   1 => "a sun",
   2 => "sun",
   3 => "the sun",
   6 => 3
),
6 => array(
   0 => "Which sentence is NOT correct?",
   1 => "Pollution is a serious issue.  ",
   2 => "Environment is a serious issue.  ",
   3 => "Climate change is a serious issue.   ",
   6 => 2
),
7 => array(
   0 => "Which sentence is NOT correct?",
   1 => "People are increasingly worried about crime.  ",
   2 => "People are increasingly worried about economy.  ",
   3 => "People are increasingly worried about health.",
   6 => 2
),
8 => array(
   0 => "Complete the sentence. That's ___ last gas station for twenty miles.",
   1 => "You do not need a word here.  ",
   2 => "an  ",
   3 => "the ",
   6 => 3
),
9 => array(
   0 => "Which sentence is NOT correct?",
   1 => "Let's go to bar for a drink.  ",
   2 => "Let's go to a bar for a drink.  ",
   3 => "Let's go to the bar for a drink.   ",
   6 => 1
),
10 => array(
   0 => "Which sentence is NOT correct?",
   1 => "The life has changed a lot in the last twenty years.  ",
   2 => "A space ship has landed on the moon.  ",
   3 => "The weather has been changeable recently.",
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
      <h3>Definite and <span>indefinite</span> articles</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Definite and indefinite articles</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              1) Gunakan <b>a</b> untuk kata benda tunggal. <br>
              <em> I've got <b>a</b> brother and <b>a</b> sister.</em><br>
              Gunakan  <b>an</b> jika kata benda diawali huruf vokal. <br>
              <em> I've got <b>an</b> aunt in Texas</em><br><br>
              2) Gunakan plural noun atau benda yang tidak dapat dihitung untuk bicara tentang sesuatu pada umumnya. Jangan gunakan artikel. <br>
              <em>I like <b>cats.</b> <br>
              <b>Dolphins</b> are very intelligent. <br>
              <b>Crime</b> is increasing.</em><br><br>
              3) Gunakan <b>the</b> untuk sesuatu yang bersifat partikular. <br>
              <em><b>Books</b> are interesting. <b>The book</b> on the table is interesting. <br>
              <b>Children</b> are noisy. <b>The children</b> in this class are noisy. </em><br><br>
              4) Gunakan <b>a</b> untuk memperkenalan orang atau benda yang baru. Gunakan <b>the</b> jika anda sudah tau benda atau orang tersebut. <br>
              <em>There is <b>a</b> restaurant near my house. <b>The restaurant</b> serves good food.</em><br><br>
              5) Gunakan <b>the</b> jika benda yang dibicarakan hanya ada satu. <br>
              <em><b>The</b> moon is very big tonight. <br>
              My dad is <b>the</b> only doctor in our village. <br>
              Joe is <b>the</b> best student in the class.</em><br><br>
              6) Gunakan <b>the</b> jika bendanya ada banyak, namun jelas ketika anda menyebutkannya. <br>
              <em>  Let's go to <b>the</b> pub! We need to go to <b>the</b> supermarket.</em><br><br>
              7) Kebanyabakan noun yang 'umum' tidak memakai artikel. <br>
              <em><b>Life</b> is not the same as it used to be NOT: <stike>The life…</stike> <br>
              <b>Health</b> is important to everyone. NOT: <stike>The health…</stike> <br>
              We're worried about <b>pollution</b>. NOT: <stike>The pollution…</stike></em> <br><br>
              Namun beberapa general noun menggunakan <b>the</b>: <br>
              the environment ==>  <em>People are increasingly worried about <b>the</b> environment.</em><br>
              the weather ==>  <em>What's <b>the</b> weather like today?</em><br>
              the countryside ==>  <em>I love walking in <b>the</b> countryside.</em><br>
              the sea / ocean ==>  <em>I'd love to live near <b>the</b> sea.</em><br>
              the radio ==>  <em>There's an interesting programme on <b>the</b> radio.</em><br>
              the theatre / cinema ==>  <em>We went to <b>the</b> theatre last night.</em><br>
              the economy ==>  <em><b>The</b> economy is affecting everyone.</em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              1) Beberapa orang menggunakan <b>the</b> ketika membicarakan suatu benda secara umum. <br>
              <em><strike>I love the romantic films!</strike> => I love romantic films!</em><br><br>
              2) Beberapa orang yang menggunakan kata benda tunggal tidak menyertakan <b>a</b> atau <b>the</b>. <br>
              <em><strike>I want book about the weather.</strike> => I want <b>a</b> book about the weather.</em><br><br>
              3) Beberapa orang menggunakan <b>the</b> ketika berbicara tentang banyak benda secara umum. <br>
              <em><strike>I want the book about the weather.</strike> => I want a book about the weather.</em><br><br>
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
<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Do ____ of you have any money I can borrow?",
   1 => "either  ",
   2 => "both  ",
   3 => "neither",
   6 => 1
),
2 => array(
   0 => " Which sentence is correct?",
   1 => " Neither Alice or Mark live here.  ",
   2 => " Neither of they live here.  ",
   3 => " Neither of them lives here.",
   6 => 3
),
3 => array(
   0 => "Which sentence is NOT correct?",
   1 => " Both of boys like hamburgers.  ",
   2 => " Both boys like hamburgers.  ",
   3 => " Both of the boys like hamburgers",
   6 => 1
),
4 => array(
   0 => "Neither my uncle ___ my aunt could come to the party.",
   1 => " or  ",
   2 => " nor  ",
   3 => " and   ",
   6 => 2
),
5 => array(
   0 => "Neither of ___ likes rap music.",
   1 => " they  ",
   2 => " then  ",
   3 => " them ",
   6 => 3
),
6 => array(
   0 => "____ boy brought a coat.",
   1 => " Both  ",
   2 => " Either  ",
   3 => " Neither ",
   6 => 3
),
7 => array(
   0 => "Feel free to talk to ____ us.",
   1 => " either of  ",
   2 => " both  ",
   3 => " neither of",
   6 => 1
),
8 => array(
   0 => "Which question is correct?",
   1 => " Do either of your parents have a degree?  ",
   2 => " Do either your parents have a degree?  ",
   3 => " Do either of parents have a degree? ",
   6 => 1
),
9 => array(
   0 => "Both my mum ___ my dad drive.",
   1 => " and  ",
   2 => " or  ",
   3 => " nor   ",
   6 => 1
),
10 => array(
   0 => " Which sentence is correct?",
   1 => " We neither have any money.  ",
   2 => " Neither us have any money.  ",
   3 => " Neither of us has any money.",
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
      <h3>Both, Either, Neither</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Both, Either, Neither</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              1) <b>Both</b><br>
              Both berarti dua dari dua benda. <br>
              <em>I have two cats. I like both of them.</em><br><br>
              2) <b>Neither</b><br>
              Neither berarti tidak ada benda yang dimaksud dari dua benda. <br>
              <em>Neither of my cats is grey.</em><br>
              Ingat untuk menggunakan kata kerja tunggal setelah neither. <br>
              <em><strike>Neither of the dogs are dangerous.</strike> => Neither of the dogs is dangerous.</em><br><br>
              3) <b>Either</b><br>
              Either berarti satu  atau yang lain. <br>
              <em>There are two cakes. Please have one. You can have either one.</em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              1) Anda dapat menggunakan <b>both, eihter dan neither</b> langsung sebelum kata benda.<br>
              <em><u>Both</u> supermarkets are good. <br>
              <u>Neither</u> supermarket sells electrical goods. <br>
              We can go to <u>either</u> supermarket, I don’t mind.</em><br><br>
              2) <b>Both, either, dan neither</b> biasa digunakan dengan 'of', namun anda harus selalu menggunakan determiner (the, my, these, those, his etc) sebelum kata benda. <br>
              <em><strike>Both of children like chocolate cake.</strike> => Both of the children like chocolate cake.</em><br>
              <br>Namun anda bisa tidak menggunakan 'of' jika menggunakan <b>both</b>. <br>
              Both of the children like chocolate cake. <br>
              Both children like chocolate cake.  <br><br>
              3) Anda dapat menggunakan <b>both, neither</b> dan <b>either + of + object pronoun</b> (you, them, us ...)<br>
              <em><b>Both of them</b> wore white dresses.  <br>
              <b>Neither of us</b> was late.  <br>
              Have <b>either of you</b> got a pen?</em><br><br>
              4) Anda dapat menggunakan <b> both ... and ...; neither ... nor ..., </b> dan <b>either .... or</b><br>
              <em><b>Both</b> James <b>and</b> Diana work here.
              <b>Neither</b> James <b>nor</b> Diana works here.
              You can ask <b>either</b> James <b>or</b> Diana.</em> <br><br>
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
<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which sentence is correct?",
   1 => "That’s Bobs’ car.  ",
   2 => "That’s Bobs car.  ",
   3 => "That’s Bob’s car.  ",
   6 => 3
),
2 => array(
   0 => "Which sentence is correct?",
   1 => "Are you going to Dan and Suzie’s party?  ",
   2 => "Are you going to Dan’s and Suzie’s party?  ",
   3 => "Are you going to Dan and Suzies’ party?   ",
   6 => 1
),
3 => array(
   0 => "Which word goes in the space? Can you look after the ___ rabbit while we are on holiday?",
   1 => "childrens’s  ",
   2 => "childrens’  ",
   3 => "children’s ",
   6 => 3
),
4 => array(
   0 => "Complete the sentence. That’s not my bag. It’s my ___",
   1 => "brothers’s  ",
   2 => "brothers  ",
   3 => "brother’s   ",
   6 => 3
),
5 => array(
   0 => "Complete the sentence. Write your name at the ___.",
   1 => "page in the top  ",
   2 => "page’s top  ",
   3 => "top of the page",
   6 => 3
),
6 => array(
   0 => "Which sentence is best?",
   1 => "Do you have yesterdays’ newspaper?  ",
   2 => "Do you have the newspaper of yesterday?  ",
   3 => "Do you have yesterday’s newspaper?  ",
   6 => 3
),
7 => array(
   0 => "That’s my sisters’ bedroom. How many girls sleep in this room?",
   1 => "It is impossible to know.  ",
   2 => "one  ",
   3 => "two or more",
   6 => 3
),
8 => array(
   0 => "Which sentence is best?",
   1 => "Istanbul is the biggest city of Turkey.  ",
   2 => "Istanbul is Turkey’s biggest city.  ",
   3 => "Istanbul is Turkeys’ biggest city.",
   6 => 2
),
9 => array(
   0 => "Complete the sentence. That’s _____ car.",
   1 => "Anne’s parents’  ",
   2 => "Annes’ parent’s  ",
   3 => "Anne’s parents   ",
   6 => 1
),
10 => array(
   0 => "Complete the sentence. I never read ____ magazines.",
   1 => "womens’  ",
   2 => "woman’s  ",
   3 => "women’s ",
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
      <h3>Possesive<span>'s</span></h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Possesive's</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Kata sifat Possesive digunakan setelah nama dan sebelum kata benda.<br>
              Mereka memberitahu Anda yang memiliki sesuatu. <br>
              This is <b>John’s</b> coat. <br>
              Is this <b>Tina’s</b> bag?<br><br>
              Jangan gunakan <b>'s</b> setelah benda. <br>
              I clean <strike>the garden’s pond</strike> every week. =>       I clean the pond in the garden every week. <br>
              What’s <strike>the book’s name</strike>?           =>           What’s the name of the book?<br><br>
              Anda dapat menggunakan <b>'s</b> setelah oraganisasi atau grup dari suatu kelompok. <br>
              It’s the <b>government’s</b> decision.   OR       It’s <b>the decision of the government.</b>
              Tom is the <b>company’s</b> new  director.        OR       Tom is <b>the new director of the company.</b><br><br>
              Anda dapat menggunakan <b>'s</b> setelah waktu. <br>
              What time is <b>tomorrow’s</b> meeting?<br><br>
              Kadang anda juga dapat menggunakan <b>'s</b> setelah nama negara atau kota. <br>
              <b>India’s</b>  population is rising <br>
              Tapi Anda tidak bisa melakukan ini jika mengacu pada seseorang. <br>
              <strike>I met London’s mayor last week. </strike>      =>      I met <u>the mayor of London</u> last week. <br>
              <strike>England’s Queen</strike> is well-known. =>           <u>The Queen of England</u> is well-known. <br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              1) Untuk membuat bentuk possesive, tambahkan <b>'s</b> diakhir nama. <br>
              <em>Is that <u>Jack’s</u> bag? </em><br><br>
              2) Apabila ada 2 nama, tambahkan <b>'s</b> hanya di nama prang kedua. <br>
              <em> That’s <u>Jane and Harry’s</u> house.      NOT     <strike>That’s Jane’s and Harry’s house.</strike></em><br><br>
              3) Jika sesuatu menandakan kepunyaan <b>dua atau lebih orang</b>, tambahkan tanda petik tunggal setelah <b>s</b>.<br>
              <em>My <u>parents’</u> house is really big.   NOT   <strike>My parents’s house is really big.</strike></em><br><br>
              Namun jika bentuk keta kerja jamak, tulis tanda petik sebelum <b>s</b>. <br>
              <em>The <u>children’s</u> party was great.   NOT   <strike>The childrens’ party was great.</strike></em><br><br>
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
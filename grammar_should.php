<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which sentence is correct?",
   1 => "We should leave soon.  ",
   2 => "We should leaving soon.  ",
   3 => "We should to leave soon.",
   6 => 1
),
2 => array(
   0 => "We ____ visit Eric when we are in London.",
   1 => "ought  ",
   2 => "should  ",
   3 => "didn’t ought   ",
   6 => 2
),
3 => array(
   0 => "Which question is correct?",
   1 => "We should call the police?  ",
   2 => "Should we call the police?  ",
   3 => "Do we should call the police?",
   6 => 2
),
4 => array(
   0 => "Which sentence is correct?",
   1 => "We ought have a party to celebrate Kate’s birthday.  ",
   2 => "We ought to have a party to celebrate Kate’s birthday.  ",
   3 => "We should to have a party to celebrate Kate’s birthday.   ",
   6 => 2
),
5 => array(
   0 => "You _____ ride a motorbike without a helmet.",
   1 => "shouldn’t  ",
   2 => "ought  ",
   3 => "ought not",
   6 => 1
),
6 => array(
   0 => "Which question is correct?",
   1 => "We ought to tell Jane the news?  ",
   2 => "Ought we tell Jane the news?  ",
   3 => "Ought we to tell Jane the news?  ",
   6 => 3
),
7 => array(
   0 => "Which question is NOT correct?",
   1 => "Where ought we to park our car?  ",
   2 => "Who should he to write to?  ",
   3 => "When should we telephone you?   ",
   6 => 2
),
8 => array(
   0 => "Which sentence is NOT correct?",
   1 => "You ought to invite your grandparents.  ",
   2 => "Jenny should happy about the news.  ",
   3 => "People shouldn’t park their cars here.",
   6 => 2
),
9 => array(
   0 => "You _____ do that!",
   1 => "don’t ought to  ",
   2 => "don’t should  ",
   3 => "shouldn’t   ",
   6 => 3
),
10 => array(
   0 => "We _______ invite Cassie and Jack to dinner.",
   1 => "ought to  ",
   2 => "should to  ",
   3 => "ought ",
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
      <h3> Should and Ought to</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center"> Should and Ought to</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Gunakan <b>should</b> dan <b>ought</b> untuk memberikan nasihat.<br>
              Examples:   <em>You should see a doctor. <br>
              You ought to find a new job</em><br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              <b>Should</b><br>
              Should adalah kata kerja modal, seperti <b>will</b> dan <b>can</b> sehingga mengikuti aturan yang sama. <br>
              1) Jangan tambahkan 's' utnuk orang ketiga tunggal. <br>
              <em>He should buy a new car. NOT  He should <Strike>buys</strike> a new car.</em><br><br>
              2) Untuk bentuk negatif, tambahkan <b>not / n’t </b> setelah should. <br>
              <em> You shouldn’t do that! </em><br><br>
              3) Untuk bentuk pertanyaan, balikkan should dan subject. <br>
              <em>What time should we arrive? </em><br><br>
              4) Should selalu diikuti kata kerja dalam bentuk infinitif. <br>
              I should <strike>to</strike> go.     => <em>I should go.</em><br><br>
              5) Anda juga dapat membuat should dalam bentuk continuous, yaitu <b>should + be + verb-ing.</b>. <br>
              <em>Why are you watching TV? You should be working!</em><br><br>
              <b>Ought</b><br>
              Ought adalah kata kerja semi- modal. Ought mirip dengan should dalam beberapa aturan/cara:<br>
              1) Jangan tambahkan 's' utnuk orang ketiga tunggal. <br>
              <em> He <strike>oughts</strike> to buy a new car.        =>  He ought to buy a new car.  </em><br><br>
              2) Untuk bentuk negatif, tambahkan <b>not / n’t </b> setelah ought. <br>
              <em>You ought not to do that!</em><br>
              Namun, ought tidak sering digunakan dalam kalimat negatif. <br><br>
              3) Untuk bentuk pertanyaan, balikkan ought dan subject. <br>
              <em> What time ought we to arrive? </em><br>
              Namun, ought tidak sering digunakan dalam bentuk pertanyaan. <br><br>
              <b>Ought</b> berbeda dengan <b>Should</b> karena: <br>
              Ought selalu diikuti <b>to + a verb dalam bentuk infinitif.</b><br>
                I <strike>ought go.</strike>   =>I ought to go.  <br><br> 
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
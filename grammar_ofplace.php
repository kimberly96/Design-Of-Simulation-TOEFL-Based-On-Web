<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which sentence is NOT correct?",
   1 => "He works in the first floor.  ",
   2 => "He lives in Park Street.  ",
   3 => "He works in the city centre.",
   6 => 1
),
2 => array(
   0 => "Which sentence is NOT correct?",
   1 => "The calendar is on the wall.  ",
   2 => "The prince died on the end of the film.  ",
   3 => "There are no vegetarian meals on the menu. ",
   6 => 2
),
3 => array(
   0 => "Which sentence is NOT correct?",
   1 => "Turn right at the end of this street.  ",
   2 => "Tom is standing at the back of the queue.  ",
   3 => "There’s something written at the side of the box.  ",
   6 => 3
),
4 => array(
   0 => "Which word goes in the space? My name is _____ the top of the list.",
   1 => "at",
   2 => "in",
   3 => "on",
   6 => 1
),
5 => array(
   0 => "Which preposition goes in the space? I live next ____ a railway line.",
   1 => "of",
   2 => "to",
   3 => "from",
   6 => 2
),
6 => array(
   0 => "Which preposition goes in the space? Your wallet is right in front ______ you!",
   1 => "of",
   2 => "to",
   3 => "from",
   6 => 1
),
7 => array(
   0 => "Complete the sentence. We rented a flat _____ Hamburg.",
   1 => "on",
   2 => "in",
   3 => "at",
   6 => 2
),
8 => array(
   0 => "Which sentence is NOT correct?",
   1 => "I saw Helen on the butcher’s today.  ",
   2 => "I saw Helen in the butcher’s today.  ",
   3 => "I saw Helen at the butcher’s today.  ",
   6 => 1
),
9 => array(
   0 => "Which sentence is NOT correct?",
   1 => "Can you sign your name at the bottom please?  ",
   2 => "Sorry I missed you. I was at a meeting.  ",
   3 => "The school is at Kings Square. ",
   6 => 3
),
10 => array(
   0 => "Which sentence is NOT correct?",
   1 => "She lives in a farm on the mountains.  ",
   2 => "There’s something written on the back of the envelope.  ",
   3 => "The office is on the main road between Derby and Nottingham.   ",
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
      <h3>Prepositions and prepositional phrases of Place</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Prepositions and prepositional phrases of Place</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Preposition of Place digunakan untuk menggambarkan di mana sesuatu yang terjadi.<br>
              <img src="images/grammar/grammar13.jpg"><br><br><br>
              <b>In</b> juga digunakan dalam situasi ini : <br>
              Countries, cities, villages ==>  <em>We live in France / in Paris / in Madrid.</em><br>
              the world ==> <em>It’s the highest building in the world.</em><br>
              mountains ==> <em>and valleys They have a cottage in the mountains / in a valley.</em><br>
              buildings ==> <em>She works in a bank.</em><br>
              water ==> <em>Don’t swim in the sea / the river / the lake.</em><br>
              the middle / centre ==> <em>He lives in the middle of Paris / in the city centre.</em><br>
              books / films / newspaper ==> <em>Which film was that actor in? I read about it in the newspaper.</em><br><br>
              <b>On</b> is also used in these situations: <br>
              walls, ceilings, doors, floor  ==> <em>She hung the picture on the ceiling / the wall / the door.</em><br>
              surfaces  ==> <em>There’s a dirty mark on the page / table</em><br>
              the front / side/ back  ==> <em>There’s a label in on the box / bottle</em><br>
              left / right  ==> <em>The school is on the left.</em><br>
              Floors  ==> <em>Jim’s office is on the second floor.</em><br>
              lists / menus ==> <em>What’s on the menu? Did you buy everything on the list?</em><br>
              roads ==> <em>I live on Jackson street. The nearest gas station is on the motorway. The post box is on the way to work.</em><br>
              natural ==> <em>lines and borders He lives on the coast. London is on the River Thames.</em><br><br>
              <b>At</b> is also used in these situations: <br>
              the top / bottom (of a page)  ==> <em>Sign your name at the top / bottom.</em><br>
              Directions ==> <em>Turn left at the traffic lights / roundabout / end of the street.</em><br>
              Position (next to something)  ==> <em>Wait at the traffic lights / corner / tree.</em><br>
              the front / the back  ==> <em>I wrote my name at the front / back of the book.</em><br>
              the beginning / the end ==> <em>What happened at the beginning / end of the film?</em><br>
              events  ==> <em>I met him at a party / conference / football match</em><br>
              buildings ==> <em>I’ll meet you at the airport / the station / home</em><br><br>
              <strong><u>Kesalahan umum:</u></strong><br>
              1) Beberapa orang melewatkan bagian dari frase preposisional. <br>
              <em><strike>I live next a small shop.</strike> =>  I live next to a small shop.</em><br><br>
              <em><strike>I parked the car in front the building.</strike> =>  I parked the car in front of the building.</em><br>
              2) Beberapa orang menambahkan preposisi kedua di mana itu tidak perlu. <br>
              <em>Your bag is behind <strike>of</strike> the door.=> Your bag is behind the door.</em><br><br>
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
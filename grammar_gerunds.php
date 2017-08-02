<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "In which sentence can you write: having?",
   1 => "I stopped work ___ a cup of coffee.  ",
   2 => "___ children will change your life.  ",
   3 => "Fiona decided ___ a shower after dinner.",
   6 => 2
),
2 => array(
   0 => "In which sentence can you write to go?",
   1 => "I would prefer ____ to the theatre than to the cinema.  ",
   2 => "____ to the gym will keep you fit.  ",
   3 => "I’m interested in ___ to the flower show.   ",
   6 => 1
),
3 => array(
   0 => "Which verb is NEVER followed by a gerund?",
   1 => "suggest  ",
   2 => "ask  ",
   3 => "continue   ",
   6 => 2
),
4 => array(
   0 => "Which verb is NEVER followed by an infinitive?",
   1 => "love  ",
   2 => "begin  ",
   3 => "deny   ",
   6 => 3
),
5 => array(
   0 => "Complete the sentence. We’re going to Chicago ___ my uncle.",
   1 => "visit",
   2 => "for visit",
   3 => "to visit",
   6 => 3
),
6 => array(
   0 => "Complete the sentence. I was driving to town when I saw Hannah walking on the pavement, so I stopped…",
   1 => "to give her a lift.  ",
   2 => "giving her a lift  ",
   3 => "for give her a lift.  ",
   6 => 1
),
7 => array(
   0 => "Complete the sentence. I’m sure that ______ abroad will make Lisa a lot more independent.",
   1 => "living",
   2 => "live",
   3 => "to live",
   6 => 1
),
8 => array(
   0 => "Are you interested _________ special offers from our company?",
   1 => "to receive  ",
   2 => "in receiving  ",
   3 => "receiving   ",
   6 => 2
),
9 => array(
   0 => "Jack suggested _________ a party to celebrate the 5th anniversary of the business.",
   1 => "having  ",
   2 => "to have  ",
   3 => "have   ",
   6 => 1
),
10 => array(
   0 => "Which verb cannot go in the space? We _________ to sit in the table by the window.",
   1 => "asked",
   2 => "prefer",
   3 => "enjoy",
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
      <h3>Gerunds and Infinitives</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Gerunds and Infinitives</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              1) Gerund adalah kata kerja dimana didalamnya terdapat bentuk <b>-ing</b>, yang digunakan sebagai kata benda. <br>
              For example:     <b>eating, going, seeing</b><br><br>
              Gerunds digunakan sebagai: <br>
              a) Subject dari kalimat => <em><u>Smoking</u> is bad for you.</em><br><br>
              b) Setelah beberapa kata kerja, seperti: <b> like, hate, enjoy, quit, suggest, dislike, deny</b><br>
              <em> I like <u>cooking</u>. I enjoy <u>fishing</u>.</em><br><br>
              c) Setelah preposition. <br>
              <em>I’m interested in <u>buying</u> a computer. I’m scared of <u>walking</u> alone in the dark.</em><br><br>
              2) Bentuk infinitive dari kata kerja adalah bentuk kata kerja yang sesungguhnya. Bisa dengan atau tanpa 'to'. <br>
              For example:     <b>(to) eat, (to) go, (to) see.</b><br><br>
              Bentuk Infinitive digunakan untuk: <br>
              a) Setelah kata kerja, seperti: <b>agree, arrange, ask, promise, decide, afford</b>. <br>
              <em> I agreed <u>to do</u> the work. I arranged <u>to see</u> the doctor, They decided <u>to get</u> married.</em><br><br>
              b) Untuk menunjukkan alasan mengapa Anda melakukan sesuatu. <br>
              <em>Tony went to the post office <u>to pay</u> a bill.  </em><br><br>
              c) Setelah adjective. <br>
              <em>I was surprised <u>to see</u> Erica. I’m pleased <u>to meet</u>  you.</em><br><br>
              3a) Beberapa kata kerja dapat diikuti gerunds atau infinitive tanpa mengubah arti dari kalimat tersebut. <br>
              For example: <b>start, begin, hate, like, prefer, continue</b><br>
              <em>She started to cry = She started crying. <br>
              I hate watching horror films = I hate to watch horror films.</em> <br><br>
              3b) Beberapa kata kerja dapat diikuti gerunds atau infinitive namun dapat mengubah arti dari kalimat tersebut. <br>
              For example: <b>try, remember, stop</b><br>
              <em>I tried to get into the house.</em> ==> (Getting into the house is your goal or objective).<br>
              <em>I tried climbing through the window.</em> ==> (Climbing through the window is one thing you tried in order to obtain your final objective.)               <br>
              <em>I stopped cleaning the windows.</em> ==> (I was cleaning the windows and then I stopped).<br>
              <em>I stopped to clean the windows.</em> ==> (I was driving, and I stopped driving in order to clean the windows).<br>
              <em>I remembered to lock the door.</em> ==> (I remembered, and after that I locked the door).<br>
              <em>I remember locking the door.</em> ==> (I remember (now) that I locked the door (in the past)). <br>
              <br>
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
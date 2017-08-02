<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Report this sentence correctly. ‘I can swim really fast.’ ",
   1 => " He said me that he could swim really fast.  ",
   2 => " He told that he could swim really fast.  ",
   3 => " He said that he could swim really fast. ",
   6 => 3
),
2 => array(
   0 => "Tom said ‘I’m going to London tomorrow.’ Five days later you say...",
   1 => " Tom said he was going to London the following day.  ",
   2 => " Tom said he is going to London the following day.  ",
   3 => " Tom said he was going to London tomorrow.   ",
   6 => 1
),
3 => array(
   0 => "There was an accident outside the supermarket’.",
   1 => " He said there has been an accident outside the supermarket.  ",
   2 => " He said there were an accident outside the supermarket.  ",
   3 => " He said there had been an accident outside the supermarket.   ",
   6 => 3
),
4 => array(
   0 => "Which sentence is NOT correct?",
   1 => " Karen said she was going to be late.  ",
   2 => " James said he will help me.  ",
   3 => " Lisa said she didn’t have a map.   ",
   6 => 2
),
5 => array(
   0 => "Maria apologised for not coming. She said she had been busy ____.",
   1 => " previous day  ",
   2 => " the following day  ",
   3 => " that day   ",
   6 => 3
),
6 => array(
   0 => "Paul: ‘I won’t be at the meeting tomorrow.’",
   1 => "Paul said that he wouldn't be at the meeting the following day.",
   2 => "Paul said that he couldn't be at the meeting the day.",
   3 => "Paul said that he wouldn't be at the meeting the present day.",
   6 => 1
),
7 => array(
   0 => "Me: ‘I’ve done it!’",
   1 => "I told you that I had done it",
   2 => "I told you that I done it",
   3 => "I told you that I have done it",
   6 => 1
),
8 => array(
   0 => "Danny: ‘I’m going to be late’.",
   1 => "Danny told me that he was going late.",
   2 => "Danny told me that he going to be late.",
   3 => "Danny told me that he was going to be late.",
   6 => 3
),
9 => array(
   0 => "George: “I can’t chat because I’m working”.",
   1 => "George said that he wasn't talking because he was working.",
   2 => "George said that he couldn't talk because he was working.",
   3 => "George said that he can't talk because he was working.",
   6 => 2
),
10 => array(
   0 => "Hannah: “I want to go to the football match, but I don’t have enough money”.",
   1 => "Hannah said that she want to going to the football match, but she didn’t have enough money.",
   2 => "Hannah said that she wanted to go to the football match, but she didn’t have enough money.",
   3 => "Hannah said that she want to go to the football match, but she didn’t have enough money.",
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
      <h3>Reported Speech</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Comparatives</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Gunakan reported speech untuk berbicara apa yang orang lain katakan dimasa lalu. <br>
              Contoh: <br>
              Eve :   ‘I <b>went</b> to the party on Friday night’. <br>
              James :   ‘Eve said that she <b>had gone</b> to the party on Friday night’. <br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              1) Ketika memberitahukan berita tersebut, kata kerja dalam kalimat harus dalam bentuk past tense. <br>
              <b>am / is / are</b>     <u>changes to</u>   <b>was / were</b><br>
              “I am fine.”        She said that she was fine.<br><br>
              <b>present simple</b>    <u>changes to</u>   <b>past simple</b><br>
              “I like it.”      He said he liked it.<br><br>
              <b>present continuous </b>   <u>changes to</u>   <b>past continuous</b><br>
              “She’s sleeping.”       He said that she was sleeping.<br><br>
              <b>will</b>    <u>changes to</u>   <b>would</b><br>
              “I’ll be there.”        You said that you’d be there.<br><br>
              <b>can </b>    <u>changes to</u>   <b>could</b><br>
              “I can come to the meeting.”        You said that you could come to the meeting.<br><br>
              <b>past simple </b>    <u>changes to</u>   <b>past perfect</b><br>
              “I did the shopping.”       Tom said that he had done the shopping.<br><br>
              <b>present perfect </b>    <u>changes to</u>   <b>past perfect</b><br>
              “I’ve read that book.”      I told him that I’d read the book.<br><br>
              <b>past continuous  </b>   <u>changes to</u>   <b>past perfect continuous</b><br>
              “She was walking home alone.”       He said that she had been walking home alone.<br><br>
              <b>present perfect continuous </b>   <u>changes to</u>   <b>past perfect continuous</b><br>
              “I’ve been working,”        I told him that I’d been working.<br><br><br>
              2) Gunakan <b>He / She / I said (that) ...</b><br>
              Atau <b> He / She told me (that)...; I told him / her (that)...</b><br><br>
              3) Jangan gunakan tanda petik ('')<br><br>
              4) Waktu didalam kalimat juga diubah ketika reporting speech, , <u>jika waktunya tidak lagi sama</u>. <br>
              this morning / week / month   →   <b>that</b> morning / week / month<br>
              yesterday   →   <b>the previous</b> day<br>
              last week / month   →   <b>the previous</b> week / month<br>
              ago   →   <b>earlier / previously</b><br>
              tomorrow  →   <b>the following day</b><br>
              next week / month   →   <b>the </b> week / month<br><br>
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
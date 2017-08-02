<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "The match was cancelled ____ the rain.",
   1 => " because of  ",
   2 => " due to  ",
   3 => " because   ",
   6 => 3
),
2 => array(
   0 => "Some scientists believe that global temperatures are increasing and ___ ice is melting at the poles.",
   1 => " due to  ",
   2 => " because  ",
   3 => " consequently ",
   6 => 3
),
3 => array(
   0 => "In spite of ____, the team won the match.",
   1 => " their inexperience  ",
   2 => " they were inexperienced  ",
   3 => " their experience   ",
   6 => 1
),
4 => array(
   0 => " Which sentence is NOT correct?",
   1 => " In spite of she prepared for her interview, she didn’t get the job.  ",
   2 => " Although she prepared for her interview, she didn’t get the job.  ",
   3 => " Despite preparing for her interview, she didn’t get the job.",
   6 => 1
),
5 => array(
   0 => "Which word CANNOT be used to start a sentence?",
   1 => " However  ",
   2 => " Because  ",
   3 => " But   ",
   6 => 1
),
6 => array(
   0 => "He stayed up to watch the match __________ he was really tired.",
   1 => " however  ",
   2 => " even though  ",
   3 => " in spite of   ",
   6 => 2
),
7 => array(
   0 => "She was late due to ___________.",
   1 => " the bad traffic.  ",
   2 => " the traffic was bad.  ",
   3 => " being bad traffic. ",
   6 => 1
),
8 => array(
   0 => "He didn’t start his essay until the last minute and __________ he didn’t manage to finish it on time.",
   1 => " consequently  ",
   2 => " although  ",
   3 => " because of   ",
   6 => 1
),
9 => array(
   0 => "In spite of ______ older than his sister, Luke is not as responsible as her.",
   1 => " be  ",
   2 => " being  ",
   3 => " he is   ",
   6 => 2
),
10 => array(
   0 => "Which sentence is NOT grammatically correct?",
   1 => " Because we were late.  ",
   2 => " However, it was too late.  ",
   3 => " Therefore, we didn’t have time. ",
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
      <h3>Connecting words</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center">Connecting words</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Connective berguna untuk menggabungkan dua klausa, dan menunjukkan hubungan di antara mereka. <br>
              Hubungan ini dapat menunjukkan :<br>
              <b>a contrast</b> ==>  Although, but, even though, however, despite, in spite of <br>
              <b>a cause</b> ==>  because, because of, as a result of, due to <br>
              <b>an effect </b> ==> so, consequently, as a result, thus, therefore <br><br>
              Kata-kata tersebut tidak bisa digunakan secara bergantian. Kata-kata tersebut mungkin dapat diletakkan dilokasi yang berbeda dengan dalam kalimat, dan mungkin menggunakan tata bahasa yang berbeda. <br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              1)  Connectives showing Contrast / Penghubung yang menampilkan Perbedaan <br>
              Bandingkan kalimat ini dengan arti yang sama :<br>
              a) <em>It is sunny <b>but</b> temperatures are low.</em><br>
              Jangan pernah memulai kalimat dengan <b>but</b>. Anda dapat menggunakan <b>but</b> setelah comma(,). Di kalimat yang pendek, tidak perlu ada tanda baca. <br><br>
              b) <b>Although</b> it is sunny, temperatures are low. / <b>Even though</b> it is sunny, temperatures are low. <br>
              Perhatikan bagaimana <b>altough</b> dan <b>even though</b> diletakkan ditempat yang berbeda meskipun kalimatnya sama. <b>Although</b> dan <b>even though</b> diletakkan sebelum anak kalimat. <br><br>
              <em>Temperatures are low, <b>even though / although</b> it’s sunny.</em><br><br>
              c) <em> It is sunny. <b>However</b>, temperatures are low.</em><br>
              Perhatikan <b>however</b> diletakkan di awal kalimat dan diikuti tanda koma. <br><br>
              d) <em><b>Despite </b>the sun, temperatures are low. <br>
              <b>In spite</b> of the sun, temperatures are low.</em> <br>
              Perhatikan posisi <b>despite</b> dan <b>in spite</b> diletakkan sebelum anak kalimat. Urutan klausa dapat dibalik: <br>
              <em>Temperatures are low <b>despite / in spite</b> of the sun.</em><br><br>
              Juga Ingat bahwa kata-kata tersebut diikuti oleh kata benda, bukan kata kerja klausa. Anda juga dapat menggunakan bentuk -ing dari kata kerja dalam kalimat tersebut. <br><br>
              <em><b>Despite  / In spite</b> of it being sunny, temperatures are low.</em><br><br>
              2) Connectives showing a Cause / Penghubung yang menampilkan Penyebab <br>
              Bandingkan kalimat ini dengan arti yang sama :<br>
              a) <em>I arrived late <b>because</b> the traffic was bad. <br>
              <b>Because</b> the traffic was bad, I arrived late.</em><br><br>
              Catat bahwa Anda hanya dapat memulai kalimat dengan <b>because</b> jika ada dua klausa dalam kalimat. <br><br>
              <em><strike>Because we were late.</strike> INCORRECT <br>
              Because we were late, we missed the start of the show. CORRECT </em><br><br>
              Memulai kalimat dengan <b>because</b> lebih formal daripada menggunakannya di tengah kalimat, dan paling sering digunakan dalam penulisan/writing bukan saat berbicara/speaking. <br><br>
              b) <em>I arrived late <b>because of </b>the bad traffic.    OR <b>Because of</b> the bad traffic, I arrived late. <br>
              I arrived late <b>due to</b> the bad traffic.      OR <b>Due to</b> the bad traffic, I arrived late. <br>
              I arrived late <b> as a result of</b> the bad traffic. OR <b>As a result of</b> the bad traffic, I arrived late. </em><br><br>
              Perhatikan bagaimana ekspresi ini diikuti oleh kata benda, bukan kata kerja klausa. <br><br>
              3) Connectives showing Effect / Penghubung yang menampilkan Akibat <br>
              Bandingkan kalimat ini dengan arti yang sama :<br>
              a) <em>We were late <b>so</b> we missed the beginning of the show.</em><br><br>
              Jangan pernah memulai kalimat dengan So. So dapat dikuti koma (,). Dalam kalimat pendek, tidak ada tanda baca yang dibutuhkan. <br><br>
              b) <em>We were late and <b>thus</b> we missed the beginning of the show. <br>
              We were late and <b>consequently</b> we missed the beginning of the show. <br>
              We were late and <b>as a result</b> we missed the beginning of the show. <br>
              We were late and <b>therefore</b> we missed the beginning of the show.</em>  <br><br>
              <b>Consequently, As a result, Therefore</b> dan <b>Thus</b> lebih formal daripada <b>So</b>. Kata-kata tersebut yang umum dalam kalimat formal dan juga dapat memulai kalimat, tetapi mereka dapat bergabung dengan kalimat sebelumnya dengan menggunakan penghubung <b>dan</b>. <br><br>
              <strong><u>Kesalahan Umum:</u></strong><br>
              1) Beberapa orang memulai kalimat dengan <b>but</b> dan <b>so</b>. <br>
              <em><strike>Joe went to university. But he didn’t like it.</strike> → Joe went to university, but he didn’t like it.</em><br><br>
              2) Beberapa orang menulis kalimat dengan because dan dengan satu anak kalimat. <br>
              <em><strike> I went to the shop. Because I needed some bread.</strike> → I went to the shop because I needed some bread.</em><br><br>
              3) Beberapa orang tidak menggunakan kata benda. <br>
              <em><strike>I went indoors due to it was cold outside.</strike> → I went indoors due to the cold weather outside. </em><br><br>
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
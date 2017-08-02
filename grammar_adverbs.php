<?php
error_reporting(0);

$randomizequestions ="yes";
$a = array(
1 => array(
   0 => "Which sentence is NOT correct?",
   1 => "They ran quickly.  ",
   2 => "We worked hardly.  ",
   3 => "The boys slept heavily.",
   6 => 2
),
2 => array(
   0 => "Which verb can go in the space? That girl ______ very strangely.",
   1 => "walks",                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
   2 => "seems",
   3 => "looks",
   6 => 1
),
3 => array(
   0 => "Which sentence is correct?",
   1 => "My uncle well tells stories.  ",
   2 => "My uncle tells well stories.  ",
   3 => "My uncle tells stories well.   ",
   6 => 3
),
4 => array(
   0 => "Which word can go in the space? Mr Townsend always works _____.",
   1 => "lately  ",
   2 => "fastly  ",
   3 => "carefully ",
   6 => 3
),
5 => array(
   0 => "Which word goes in the space? We arrived at the airport too _____.",
   1 => "latterly  ",
   2 => "lately  ",
   3 => "late",
   6 => 3
),
6 => array(
   0 => "Which sentence is NOT correct?",
   1 => "Anna politely spoke to her teacher.  ",
   2 => "Politely Anna spoke to her teacher.  ",
   3 => "Anna spoke politely to her teacher.",
   6 => 2
),
7 => array(
   0 => "Complete the sentence. We greeted our friends _____.",
   1 => "happily  ",
   2 => "happy  ",
   3 => "happyly",
   6 => 1
),
8 => array(
   0 => "Complete the sentence. This music sounds _____!",
   1 => "greatly  ",
   2 => "great  ",
   3 => "greatily",
   6 => 2
),
9 => array(
   0 => "Which sentence is NOT correct?",
   1 => "I lonely walked around the park.  ",
   2 => "We arrived at the school early.  ",
   3 => "She kindly gave me a birthday present.   ",
   6 => 1
),
10 => array(
   0 => "Which sentence is NOT correct?",
   1 => "Your son runs very fast.  ",
   2 => "She talks very friendly to the younger children.  ",
   3 => "Jonathan energetically ran up the stairs.   ",
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
      <h3> Adverbs - describing verb</h3>
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
            <br><p style="font-size:16px; color:black; text-align:center"> Adverbs - describing verb</p>
            <div class="text1">
              <strong>Kegunaan:</strong><br>
              Adverbs dapat digunakan untuk menggambarkan kata kerja. Adverbs menggambarkan BAGAIMANA Anda melakukan sesuatu.<br>
              Contoh:  She walks <b>quickly</b>; He sings <b>nicely</b>. <br><br>
              <strong><u>Bentuk Umum:</u></strong><br>
              1) Anda dapat membuat banyak adverbs dengan menambahkan -ly ke kata sifat .<br>
              <em>slow -> slowly; loud -> loudly</em><br>
              Jika adjective diakhiri 'y', ganti menjadi huruf 'i'. <br>
              <em>heavy -> heavily; funny -> funnily </em><br>
              Tambahkan 'ally' jika adjective diakhiri huruf 'ic'. <br>
              <em>Physical -> physically; energetic -> energetically </em><br><br>
              2) Ada Beberapa adverb yang tidak teratur, dan tidak berakhir di ly. Ini termasuk:<br>
              good -> <b>well</b> <em>She dances well.</em><br>
              hard -> <b>hard</b> <em>He works hard.</em><br>
              fast -> <b>fast</b> <em>He runs fast.</em><br>
              late -> <b>late</b> <em>He arrives late.</em><br><br>
              3a) Biasanya, adverb diletakkan setelah verb yang dijelaskan. <br>
              <em>She talks quietly</em> NOT <strike>She quietly talks.</strike><br>
              <em>He runs fast.</em> NOT <strike>He fast runs.</strike><br>
              <em> That’s <u>Jane and Harry’s</u> house. NOT  <strike>That’s Jane’s and Harry’s house.</strike></em><br><br>
              3b) Jika verb mempunyai object langsung tanpa preposition maka <b>adverb</b> harus diletakkan setelah object.<br>
              <em>You sang that song nicely.</em> NOT <strike>You sang nicely that song.</strike><br>
              <em>He did the job well.</em> NOT <strike>He did well the job.</strike><br><br>
              3c) Jika verb diikuti oleh preposition dan object, anda dapat meletakkan verb di tempat yang lain.<br>
              <em>He <b>quickly</b> walked to the shop.  <br>
              He walked <b>quickly</b> to the shop. <br>
              He walked to the shop <b>quickly</b>.</em><br><br>
              4) Adverb tidak digunakan untuk menjelaskan verb berikutnya. Seperti contoh: <br>
              Be <em>I am quiet.</em>  NOT <strike>I am quietly.</strike><br>
              Seem <em>It seems strange.</em> NOT <strike>It seems strangely.</strike><br>
              Look <em>That looks nice.</em> NOT <strike>That looks nicely.</strike><br>
              Smell <em>That smells good.</em> NOT <strike>That smells well.</strike><br>
              Sound <em>That sounds great.</em> NOT <strike>That sounds greatly.</strike><br>
              Feel <em>That feels funny.</em> NOT <strike>That feels funnily.</strike><br><br>
              5) Beberapa kata ada yang diakhiri <b>ly</b> namun kata tersebut bukanlah adverb. Contohnya <b>Friendly</b>. Friendly adalah adjective. Kita bisa mengatakan 'She is Firendly' tapi tidak 'She talks friendly'. Tidak ada adverb/keterangan dalam kata Friendly, namun kita bisa mengatakan 'She talks in a friendly way'. <b>Erderly</b> dan <b>Lonely</b> juga adjective, bukan adverb. <b>Kindly</b> dan <b>early</b> adjective dan adverb. <br><br>
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
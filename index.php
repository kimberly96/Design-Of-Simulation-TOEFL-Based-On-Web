<?php 

if (session_status() == PHP_SESSION_NONE  || session_id() == '') {
        session_start();
    }

    require_once("connection.php");
    include("lib_function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>TOEFL Online</title>
<meta charset="utf-8">
<link rel="icon" href="">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>

<script>
function goToByScroll(id) {
    $('html,body').animate({
        scrollTop: $("#" + id).offset().top
    }, 'slow');
}

$(document).ready(function () {
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});


</script>

</head>
<body>

  <script type="text/javascript">
   var showRegisterForm = function() {
      document.getElementById("login-form").setAttribute("style", "display:none");
      document.getElementById("register-form").setAttribute("style", "display:block");
    }
  </script>
  <script type="text/javascript">
   var showLoginForm = function() {
      document.getElementById("login-form").setAttribute("style", "display:block");
      document.getElementById("register-form").setAttribute("style", "display:none");
    }
  </script>
  <script type="text/javascript">
   var showEditForm = function() {
      document.getElementById("profil-form").setAttribute("style", "display:none");
      document.getElementById("edit-form").setAttribute("style", "display:block");
    }
  </script>
  <script type="text/javascript">
   var showProfilForm = function() {
      document.getElementById("profil-form").setAttribute("style", "display:block");
      document.getElementById("edit-form").setAttribute("style", "display:none");
    }
  </script>



  <script type="text/javascript">
   var showMenuForm = function() {
      document.getElementById("menu-form").setAttribute("style", "display:block");
      document.getElementById("button-form").setAttribute("style", "display:none");
      document.getElementById("AboutTOEFL-form").setAttribute("style", "display:none");
      document.getElementById("Tips-form").setAttribute("style", "display:none");
      document.getElementById("Scoring-form").setAttribute("style", "display:none");
      document.getElementById("English-form").setAttribute("style", "display:none");
      document.getElementById("Grammar-form").setAttribute("style", "display:none");
      document.getElementById("Vocab-form").setAttribute("style", "display:none");
      document.getElementById("Level-form").setAttribute("style", "display:none");
      document.getElementById("CEF-form").setAttribute("style", "display:none");
      }
  </script>
  <script type="text/javascript">
   var showAboutTOEFL = function() {
      document.getElementById("menu-form").setAttribute("style", "display:none");
      document.getElementById("button-form").setAttribute("style", "display:block");
      document.getElementById("AboutTOEFL-form").setAttribute("style", "display:block");
      document.getElementById("Tips-form").setAttribute("style", "display:none");
      document.getElementById("Scoring-form").setAttribute("style", "display:none");
      document.getElementById("English-form").setAttribute("style", "display:none");
      document.getElementById("Grammar-form").setAttribute("style", "display:none");
      document.getElementById("Vocab-form").setAttribute("style", "display:none");
      document.getElementById("Level-form").setAttribute("style", "display:none");
      document.getElementById("CEF-form").setAttribute("style", "display:none");
    }
  </script>
  <script type="text/javascript">
   var showTipsForm = function() {
      document.getElementById("menu-form").setAttribute("style", "display:none");
      document.getElementById("button-form").setAttribute("style", "display:block");
      document.getElementById("AboutTOEFL-form").setAttribute("style", "display:none");
      document.getElementById("Tips-form").setAttribute("style", "display:block");
      document.getElementById("Scoring-form").setAttribute("style", "display:none");
      document.getElementById("English-form").setAttribute("style", "display:none");
      document.getElementById("Grammar-form").setAttribute("style", "display:none");
      document.getElementById("Vocab-form").setAttribute("style", "display:none");
      document.getElementById("Level-form").setAttribute("style", "display:none");
      document.getElementById("CEF-form").setAttribute("style", "display:none");
    }
  </script>
   <script type="text/javascript">
   var showScoringForm = function() {
      document.getElementById("menu-form").setAttribute("style", "display:none");
      document.getElementById("button-form").setAttribute("style", "display:block");
      document.getElementById("AboutTOEFL-form").setAttribute("style", "display:none");
      document.getElementById("Tips-form").setAttribute("style", "display:none");
      document.getElementById("Scoring-form").setAttribute("style", "display:block");
      document.getElementById("English-form").setAttribute("style", "display:none");
      document.getElementById("Grammar-form").setAttribute("style", "display:none");
      document.getElementById("Vocab-form").setAttribute("style", "display:none");
      document.getElementById("Level-form").setAttribute("style", "display:none");
      document.getElementById("CEF-form").setAttribute("style", "display:none");
    }
  </script>
  <script type="text/javascript">
   var showEnglishForm = function() {
      document.getElementById("menu-form").setAttribute("style", "display:none");
      document.getElementById("button-form").setAttribute("style", "display:block");
      document.getElementById("AboutTOEFL-form").setAttribute("style", "display:none");
      document.getElementById("Tips-form").setAttribute("style", "display:none");
      document.getElementById("Scoring-form").setAttribute("style", "display:none");
      document.getElementById("English-form").setAttribute("style", "display:block");
      document.getElementById("Grammar-form").setAttribute("style", "display:none");
      document.getElementById("Vocab-form").setAttribute("style", "display:none");
      document.getElementById("Level-form").setAttribute("style", "display:none");
      document.getElementById("CEF-form").setAttribute("style", "display:none");
    }
  </script>
  <script type="text/javascript">
   var showGrammarForm = function() {
      document.getElementById("menu-form").setAttribute("style", "display:none");
      document.getElementById("button-form").setAttribute("style", "display:block");
      document.getElementById("AboutTOEFL-form").setAttribute("style", "display:none");
      document.getElementById("Tips-form").setAttribute("style", "display:none");
      document.getElementById("Scoring-form").setAttribute("style", "display:none");
      document.getElementById("English-form").setAttribute("style", "display:none");
      document.getElementById("Grammar-form").setAttribute("style", "display:block");
      document.getElementById("Vocab-form").setAttribute("style", "display:none");
      document.getElementById("Level-form").setAttribute("style", "display:none");
      document.getElementById("CEF-form").setAttribute("style", "display:none");
    }
  </script>
   <script type="text/javascript">
   var showVocabForm = function() {
      document.getElementById("menu-form").setAttribute("style", "display:none");
      document.getElementById("button-form").setAttribute("style", "display:block");
      document.getElementById("AboutTOEFL-form").setAttribute("style", "display:none");
      document.getElementById("Tips-form").setAttribute("style", "display:none");
      document.getElementById("Scoring-form").setAttribute("style", "display:none");
      document.getElementById("English-form").setAttribute("style", "display:none");
      document.getElementById("Grammar-form").setAttribute("style", "display:none");
      document.getElementById("Vocab-form").setAttribute("style", "display:block");
      document.getElementById("Level-form").setAttribute("style", "display:none");
      document.getElementById("CEF-form").setAttribute("style", "display:none");
    }
  </script>
     <script type="text/javascript">
   var showLevelForm = function() {
      document.getElementById("menu-form").setAttribute("style", "display:none");
      document.getElementById("button-form").setAttribute("style", "display:block");
      document.getElementById("AboutTOEFL-form").setAttribute("style", "display:none");
      document.getElementById("Tips-form").setAttribute("style", "display:none");
      document.getElementById("Scoring-form").setAttribute("style", "display:none");
      document.getElementById("English-form").setAttribute("style", "display:none");
      document.getElementById("Grammar-form").setAttribute("style", "display:none");
      document.getElementById("Vocab-form").setAttribute("style", "display:none");
      document.getElementById("Level-form").setAttribute("style", "display:block");
      document.getElementById("CEF-form").setAttribute("style", "display:none");
    }
  </script>
  <script type="text/javascript">
   var showCEFForm = function() {
      document.getElementById("menu-form").setAttribute("style", "display:none");
      document.getElementById("button-form").setAttribute("style", "display:block");
      document.getElementById("AboutTOEFL-form").setAttribute("style", "display:none");
      document.getElementById("Tips-form").setAttribute("style", "display:none");
      document.getElementById("Scoring-form").setAttribute("style", "display:none");
      document.getElementById("English-form").setAttribute("style", "display:none");
      document.getElementById("Grammar-form").setAttribute("style", "display:none");
      document.getElementById("Vocab-form").setAttribute("style", "display:none");
      document.getElementById("Level-form").setAttribute("style", "display:none");
      document.getElementById("CEF-form").setAttribute("style", "display:block");
    }
  </script>


<!--Start Header-->
<header class="page1">
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="#" onClick="goToByScroll('page1'); return false;"><img height="30px" width="130px" src="images/logo2.png" alt=""></a></h1>
        <div class="menu_block">
          <ul class="sf-menu">
            <li class="men1"><a onClick="goToByScroll('page1'); return false;" href="#">Home </a> <strong class="hover"></strong></li>
            <li class="men1"><a onClick="goToByScroll('page2'); return false;" href="#">About</a><strong class="hover"></strong></li>
            <li class=" men2"><a onClick="goToByScroll('page3'); return false;" href="#">Services</a> <strong class="hover"></strong></li>
            <li class=" men3"><a onClick="goToByScroll('page4'); return false;" href="#">Contact</a> <strong class="hover"></strong></li>
           
          <?php 
            $cek = cek_login();
            
            if ($cek == 0){
              echo "<li class=\"men4\"><a onClick=\"goToByScroll('page5'); return false;\" href=\"#\">Login</a> <strong class=\"hover\"></strong></li>";
            }else{
              echo "<li class=\"men4\"><a onClick=\"goToByScroll('page5'); return false;\" href=\"#\">Profil</a> <strong class=\"hover\"></strong></li>";
            }
          ?>
          </ul>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</header>
<!--End Header-->

<!--Start Page1-->
<div id="page1" class="content">
  <div class="container_12">
    <div class="grid_12">
        <ul class="items">
          <li> <img src="images/spacer.gif" alt="">
            <div class="caption banner">
              <h2>Let Us Show You the Way to Get Success in TOEFL</h2>
              <?php 
                $cek = cek_login();
                
                if ($cek == 1){
                  echo "<br><a href=\"tes.php\" style=\"font-family:'Trebuchet MS'; font-size:42px;\">Click to Start</a>";
                }else{
                  echo "<h3> Login and Start Now</h3>";;
                }
              ?>
            </div>
        </ul>
    </div>
  </div>
</div>
<!-- End Page 1 -->

<!-- Start Page 2 -->
<div id="page2" class="content"> 
  <div class="container_12">
    <!-- Start menu-form -->
    <form id="menu-form">
      <div class="grid_12">
        <div class="slogan">
          <h3>Membantu Anda <span>Mengukur</span> Kemampuan<em> Bahasa Inggris </em> Anda</h3>
        </div>
      </div>
      <div class="grid_2">
          <div class="box 60px"> <img src="images/img1.png" alt=""><br><br>
            <div class="text1"><a href="#page2" onclick="showAboutTOEFL()">About TOEFL</a></div>
          </div>
        </div>
        <div class="grid_2">
           <div class="box 60px"> <img src="images/img2.png" alt=""><br><br>
            <div class="text1"><a href="#page2" onclick="showTipsForm()">Tips and Trick</a></div>
          </div>
        </div>
        <div class="grid_2">
          <div class="box 60px"> <img src="images/img3.png" alt=""><br><br>
            <div class="text1"><a href="#page2" onclick="showScoringForm()">Scoring</a></div>
          </div>
        </div>
        <div class="grid_2">
          <div class="box 60px"> <img src="images/img4.png" alt=""><br><br>
            <div class="text1"><a href="#page2" onclick="showEnglishForm()">English Tips</a></div>
          </div>
        </div>
        <div class="grid_2">
          <div class="box 60px"> <img src="images/img5.png" alt=""><br><br>
            <div class="text1"><a href="#page2" onclick="showGrammarForm()">Grammar</a></div>
        </div>
        </div>
        <div class="grid_2">
           <div class="box 60px"> <img src="images/img6.png" alt=""><br><br>
            <div class="text1"><a href="#page2" onclick="showVocabForm()">Vocabulary</a></div>
        </div>
        </div>
        <div class="grid_2">
          <div class="box 60px"> <img src="images/img7.png" alt=""><br><br>
            <div class="text1"><a href="#page2" onclick="showLevelForm()">Level Test</a></div>
          </div>
        </div>
        <div class="grid_2">
          <div class="box 60px"> <img src="images/img8.png" alt=""><br><br>
            <div class="text1"><a href="#page2" onclick="showCEFForm()">CEF</a></div>
        </div>
        <br><br><br><br><br><br><br><br>
        </div>
  </form>  
  <!-- End menu-form -->

  <!-- Start button-form -->
  <form id="button-form" style="display:none" class="grid_14">
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a href="#page2" onclick="showAboutTOEFL()"><h5>About TOEFL</h5></a></li>
        <li><a href="#page2" onclick="showTipsForm()" ><h5>Tips And Trick</h5></a></li>
        <li><a href="#page2" onclick="showScoringForm()"><h5>Scoring</h5></a></li>
        <li><a href="#page2" onclick="showEnglishForm()"><h5>English Tips</h5></a></li>
        <li><a href="#page2" onclick="showGrammarForm()"><h5>Grammar</h5></a></li>
        <li><a href="#page2" onclick="showVocabForm()"><h5>Vocabulary</h5></a></li>
        <li><a href="#page2" onclick="showLevelForm()"><h5>Level Test</h5></a></li>
        <li><a href="#page2" onclick="showCEFForm()"><h5>CEF</h5></a></li>
        <li><a href="#page2" onclick="showMenuForm()"><h5>Close</h5></a></li>
      </ul>
    </div>
  </form>
  <!-- End button-form -->

  <!-- Start AboutTOEFL-form -->
  <form id="AboutTOEFL-form" style="display:none" class="grid_14">
    <div class="box 1000px">
      <img src="images/toefl-1.jpg" alt=""><br><br>
        <div class="text2">TOEFL adalah singkatan dari Test Of English as a Foreign Language (Test Bahasa Inggris sebagai bahasa asing), yang diorganisir oleh sebuah lembaga di Amerika Serikat yang bernama ETS (Educational Testing Service). Tes ini diselenggarakan pertama kali diperkenalkan pada tahun 1963. Pada awalnya, TOEFL diperlukan bagi para pelajar di negara-negara yang bahasa utamanya bukan bahasa Inggris, tetapi ingin melanjutkan studi ke negara-negara yang bahasa resminya adalah bahasa Inggris, seperti Amerika Serikat, Kanada, dan negara-negara Eropa Barat. TOEFL terbagi menjadi 3 jenis, yaitu: <br><br><br>
        <p align="justify">1. PBT(Paper Based Test) TOEFL <br>
        Seperti namanya, tes ini dilakukan di atas kertas dengan tiga sesi ujian yaitu Listening, Structure, dan Reading. Jenis TOEFL ini memiliki rentang nilai atau skor dari 310-677 sebagai nilai paling maksimum. Tes ini berlangsung selama 2-2,5 jam. Saat ini, PBT-TOEFL sudah tidak diberlakukan lagi di lingkup internasional, kecuali beberapa negara saja. Namun, ada banyak instansi lokal di Indonesia yang masih mau menerima hasil score PBT-TOEFL.</p><br>
        <p align="justify">2. CBT(Computer Based Test) TOEFL <br>
        Tes ini menggunakan perangkat lunak resmi yang diterbitkan oleh ETS sebagai media pengujian. Dengan kata lain, peserta ujian mengerjakan soal-soal ujian TOEFL berbasis komputer. Pada tes jenis ini terdapat empat sesi ujian yaitu Listening, Structure, Reading, dan Writing. Selain itu, tes ini berlangsung selama 2-2,5 jam. CBT-TOEFL memiliki rentang nilai antara 0-330 sebagai nilai paling tinggi.</p><br>
        <p align="justify">3. iBT(internet Based Test) TOEFL <br>
        Disebut tes TOEFL berbasis internet. Jenis tes TOEFL inilah yang sudah berlaku dan diakui secara global. TOEFL jenis ini diperkenalkan dan diberlakukan di dunia internasional pada 2005 silam. Jenis tes TOEFL ini masih dilakukan di komputer, hanya saja kali ini tidak ada dukungan perangkat lunak sebagai media pengujian, namun dilakukan secara online atau dengan kata lain, peserta ujian akan mengerjakan soal-soal tes yang langsung disediakan oleh ETS secara online. Tes terdiri dari empat sesi ujian yaitu Listening, Writing, Reading, dan Speaking dengan nilai maksimum 120, dan berlangsung selama 4 jam. Jenis ujian pun dibagi menjadi dua bagian yaitu Individual Test dan Integrated Test. </p><br>

        Meskipun sejak TOEFL Internet Based Test diperkenalkan maka jenis sebelumnya tidak berlaku lagi, tetapi sampai saat ini, TOEFL Paper Based Test masih digunakan secara luas di berbagai lembaga pendidikan tinggi maupun untuk rekrutmen karyawan di Indonesia, atau di negara-negara yang bukan berbahasa Inggris.
        </div>
    </div>
  </form>
  <!-- End AboutTOEFL-form -->

  <!-- Start Tips-form -->
  <form id="Tips-form" style="display:none" class="grid_14">
    <div class="box 1000px">
      <img src="images/toefl-2.jpg"><br><br>
        <div class="text2">
        <p align="justify"><span>Tes TOEFL Listening Comprehension</span><br>
        Kunci Umum:<br>
        1. Pahami bentuk-bentuk perintah (direction) pada masing-masing bagian (part) dengan baik sebelum tes.<br>
        2. Bacalah pilihan pada masing-masing soal sebanyak mungkin ketika narator sedang membacakan direction dan contoh soal.<br>
        3. Dengarkan dengan penuh konsentrasi dan fokuskan perhatian anda pada percakapan yang sedang anda dengarkan.<br>
        4. Memaksimalkan kemampuan listening anda pada soal-soal pertama pada masing part.<br><br>
        Part A: short conversation<br>
        5. Fokuskan pendengaran anda pada orang kedua.<br>
        6. Jangan panik jika tidak bisa memahami kata demi kata dalam percakapan secara komplit. Anda hanya perlu menangkap ide atau isi percakapan.<br>
        7. Bila anda sama sekali tidak bisa memahami apa yang dibicarakan pembicara kedua, pilihlah jawaban yang paling berbeda dari apa yang anda dengar.<br>
        8. Pahami bentuk-bentuk funtional expresion (agreement (persetujuan), uncertainty (ketidakpastian), suggestion (sugesti), surprise(keterkejutan), idiomatic, expression , dan situasi ketika pembicaraan dilakukan.<br><br>
        Part B: longer conversation<br>
        9. Ketika narator membacakan direction part B anda sebaiknya membaca pilihan jawaban secara sekilas kemudian merekamnya dan memeperkirakan tema apa yang akan menjadi perbincangan.<br>
        10. Ketika menyimak conversation, anda harus mengetahui apa tema/topik yang dibicarakan.<br>
        11. Waspadalah terhadap masing-masing pertanyaan.<br>
        12. Cermati kondisi dan situasi yang terjadi selama percakapan berlangsung, yakni menyangkut tempat dan waktu pembicaraan, apa dan siapa yang dibicarakan.<br><br>
        Part C: talks <br>
        13. Bila anda memiliki waktu, lihatlah pilihan-pilihan jawaban yang tertera pada lembar soal dan temukan kata kuncinya.<br>
        14. Waspadailah pembicaraan pada kalimat pertama karena biasanya akan menjadi topik bagi kalimat-kalimat selanjutnya.<br>
        15. Fokuskan pendengaran anda pada hal-hal yang berkaitan dengan pertanyaan 5–W (what, who, when, where, why ) dan How.<br>
        16. Buatlah kesimpulan/inferasi atas situasi yang terjadi saat pembicaraan dilakukan.</p><br>

        <p align="justify"><span>Tes TOEFL Structure And Written Expression</span><br>
        Kunci umum:<br>
        1. Pahami bentuk-bentuk perintah (direction) pada masing-masing bagian (part) dengan baik sebelum tes.<br>
        2. Kerjakan soal-soal struktur terlebih dahulu.<br>
        3. Lanjutkan pada soal-soal written expression.<br>
              Kunci structure:<br>
        4. Pertama-tama perhatikan kalimat yang dipertanyakan dalam soal.<br>
        5. Perhatikan masing-masing jawaban yang tersedia, pilihlan yang paling tepat untuk menlengkapi kalimat yang dipersoalkan.<br>
        6. Jangan pernah mengiliminasi sebuah pilihan jawaban dengan hanya melihat pada jawaban tanpa melihat kalimat soal.<br>
        7. Pertama-tama perhatikan kata atau kelompok kata yang digaris bawahi dan temukan secara cepat bagian mana yang tidak tepat.<br> 
        8. Bila soal yang anda hadapi tidak bisa diidentifikasi hanya melihat kata atau kelompok kata yang bergaris bawah, segeralah membaca kalimat secara lengkap.</p><br>

        <p align="justify"><span>Tes TOEFL Reading Comprehension</span><br>
        Kunci umum:<br>
        1. Jangan terlalu lama membaca teks bacaan.<br>
        2. Perhatikan semua pertanyaan yang terdapat pada sebuah bacaan dan ingat-ingat kata kuncinya.<br>
        3. Jangan panik apabila tema bacaan bukan merupakan disiplin ilmu yang anda kuasai.<br>
        4. Lakukan previewing untuk mengetahui topik bacaan.<br>
        5. Perhatikan kalimat pertama dari sebuah bacaan paragraf untuk mengetahui main idea.<br>
        6. Pahami konteks yang terdapat pada bacaan untuk mengetahui arti kata tertentu.<br>
        7. Lakukan scanning untuk menemukan informasi tertentu yang berkaitan dengan permintaan soal.<br>
        8. Kumpulkan fakta dan data dalam bacaan untuk melakukan inferasi/ penyimpulan.<br>
        9. Berkonsentrasi selama membaca teks bacaan.<br>
        10. Tingkatkan kecepatan membaca anda.</p>
      </div>
    </div>
  </form>
  <!-- Tips-form -->

  <!-- Start Scoring-form -->
  <form id="Scoring-form" style="display:none" class="grid_14">
    <div class="box 1000px">
      <img src="images/toefl-3.jpg"><br><br>
      <img src="images/score.jpg" class="grid_4">
        <div class="text2">
        <p style="padding-left:360px; padding-right:15px" align="justify">Pernahkah Anda bertanya bagaimana cara menghitung skor TOEFL Anda? Saya yakin bagi yang belum tahu pasti sering bertanya demikian. Untuk menjawab rasa penasaran Anda, berikut akan diberikan cara menghitung skor TOEFL, agar Anda bisa menghitung berapa minimal soal yang harus Anda kerjakan dengan benar untuk mendapatkan target skor TOEFL yang Anda diinginkan. Tabel berikut digunakan untuk menghitung test TOEFL model Paper-Based Test (PBT). <br><br><br>
        Skor TOEFL PBT (Paper Based Test) dihitung dengan menggunakan sistem konversi. Artinya, setiap jawaban  yang benar memiliki nilai tertentu. Misalnya satu jawaban benar bernilai 20, dua jawaban benar bernilai 21,  tiga jawaban benar bernilai 23, dan seterusnya. Nilai jawaban benar dapat dilihat di tabel konversi. Setelah nilai pada masing-masing bagian sudah ditemukan, jumlahkan, bagi tiga, lalu dikalikan dengan sepuluh. Akhirnya akan didapat skor antara 220 (skor terendah) sampai 677 (skor tertinggi). Itulah skor TOEFL Anda. <br><br><br>
        Langkah pertama, koreksilah jawaban yang telah Anda buat dan hitunglah berapa jawaban yang benar. Lalu, cocokkan jumlah jawaban yang benar dengan nilai pada tabel konversi. Misalnya ada 32 jawaban benar pada listening comprehension, 35 jawaban benar pada bagian structure and written expression, dan 40 jawaban benar pada bagian  reading comprehension. Kemudian, cocokkan ketiga angka tersebut dengan nilai pada tabel konversi disamping:</p><br><br>       
        <img src="images/score2.png" class="grid_6"><br><br><br><br>
        <p style="padding-left:360px; padding-right:15px" align="justify"><br><br><br>Selanjutnya, hitunglah nilai konversi tersebut dengan cara berikut ini:<br>
        <span>Tambahkan</span> ketiga nilai yang telah dikonversi  =>>  52+60+55 = 167<br>
        <span>Bagilah</span> jumlah nilai tersebut dengan 3 (tiga)   =>>  167 : 3 = 55,6<br>
        <span>Kalikan</span> hasil tadi dengan 10 (sepuluh)  =>>  55,6 x 10 = 556 <br><br>
        Sehingga dapatlah hasil score/nilai TOEFL anda, yaitu sebesar 556.</p>
      </div>
    </div>
  </form>
  <!-- End Scoring-form -->

  <!-- Start English-form -->
  <form id="English-form" style="display:none" class="grid_14">
    <div class="box 1000px">
      <img src="images/toefl-4.jpg"><br><br>
      <div class="text2">
        Untuk fasih dalam berbahasa inggris tidaklah mudah, kita harus belajar setiap ahri secara rutin agar ilmu yang telah kita pelajari tetap kita ingat. Namun, kita tidak menyadari bahwa ada hal-hal/kebiasaan setiap hari yang dapat membantu meningkatkan kosakata dan cara berbicara dalam bahasa inggris. Kami merangkumnya sesuai dengan tes TOEFL untuk membantu anda, dan tentu saja anda harus konsisten agar anda tau dan fasih berbahasa inggris. <br><br><br>
        <p align="justify"><span>1. Write</span><br>
        Mengirim email, membuat catatan untuk diri sendiri dan menuliskan pengingat harian, menggunakan kata-kata baru dan ekspresi umum dalam bahasa inggris. Ini membantu dengan struktur kalimat dan kosa kata.</p><br>
        <p align="justify"><span>2. Listen</span><br>
        Mendengarkan musik, siaran online, radio , televisi dan film dalam bahasa Inggris. Semakin banyak Anda mendengarkan, semakin Anda akan memahami kosakata dan ekspresi. Musik membantu Anda mendapatkan ritme dan stres pola berbicara bahasa Inggris. Dengarkan erat dengan kata-kata.</p><br>
        <p align="justify"><span>3. Read</span><br>
        Membaca adalah cara terbaik untuk meningkatkan kosa kata Anda. Bacalah bahan bacaan berbahasa Inggris seperti surat kabar, majalah, buku, situs online selalu tersedia dan bahkan banner/iklan yang menggunakan bahasa inggris.</p><br> 
        <p align="justify"><span>4. Speak</span><br>
        Berkonsentrasi untuk berbicara secara keras dan jelas dengan pengucapan dan intonasi yang baik. Tambahkan emosi dan perasaan apa yang Anda katakan. Berlatih pidato yang sama dalam bahasa Anda sendiri dan kemudian mencoba untuk mencocokkan gerakan dan perasaan yang sama ketika Anda menggunakan bahasa Inggris</p><br>
        <p align="justify"><span>5. Keep a Jurnal</span><br>
        Tuliskan hal-hal yang Anda lakukan untuk mempersiapkan kuliah dan acara-acara lain di kehidupan sehari-hari Anda. Ini adalah cara yang bagus untuk mengatur pikiran dan berlatih menulis dalam bahasa Inggris. Anda dapat melacak kemajuan Anda sendiri. Membacanya untuk diri sendiri dan membacanya keras-keras</p><br>
        <p align="justify"><span>6. QWERTY</span><br>
        Standar Bahasa Inggris ( QWERTY ) keyboard komputer sangat berguna dalam kebiasaan sehari-hari. Lakukan praktek mengetik pada keyboard QWERTY untuk menjadi akrab dengan tombol dan tata letak kata</p><br>
      </div>
    </div>
  </form>
  <!-- End English-form -->

  <!-- Start CEF-form -->
  <form id="CEF-form" style="display:none" class="grid_14">
    <div class="box 1000px">
      <img src="images/toefl-8.png" alt=""><br><br>
        <div class="text2">
          Common European Framework of Reference for Languages (CEFR) adalah standar yang diakui secara internasional untuk menggambarkan kecakapan berbahasa. CEFR diakui secara luas di seluruh Eropa, dan semakin umum di seluruh dunia. saat ini, EFSET merupakan satu-satunya tes bahasa Inggris standar yang mengukur semua tingkat kecakapan secara akurat, mulai dari tingkat pemula hingga cakap, yang sesuai dengan CEFR. Tes bahasa Inggris standar lainnya dapat menilai beberapa tingkat kecakapan, namun bukan seluruh skala CEFR. <br><br><br>
          <p align="justify">1. <span>Apa itu CEFR?</span><br>
          CEFR adalah suatu cara untuk menggambarkan seberapa baik Anda berbicara dan memahami suatu bahasa asing. CEFR merupakan skala Eropa dan secara khusus dirancang untuk diterapkan pada bahasa Eropa mana pun, sehingga dapat digunakan untuk menggambarkan kecakapan bahasa Inggris, kecakapan bahasa Jerman, atau kecakapan bahasa Estonia Anda (jika Anda memiliki kecakapan tersebut). CEFR menetapkan enam level penguasaan bahasa asing, begitu pula dengan EFSET: </p><br>
          <img src="images/cefr.png" style="width:650px; height:160px;"><br><br><br>
          <p align="justify">2. <span>Darimana CEFR Berasal?</span><br>
          CEFR disusun oleh Dewan Eropa pada tahun 1990 sebagai bagian dari upaya yang lebih luas untuk mempromosikan kerja sama antara guru bahasa di semua negara di Eropa. Dewan Eropa juga ingin meningkatkan kejelasan bagi para pengusaha dan lembaga pendidikan yang perlu mengevaluasi kecakapan bahasa calon karyawan/mahasiswanya. Kerangka ini dimaksudkan untuk digunakan dalam pengajaran dan penilaian. <br><br> Alih-alih berupa suatu tes khusus, CEFR merupakan suatu kumpulan ‘pernyataan dapat melakukan’ yang mencantumkan fungsi-fungsi yang akan dapat Anda lakukan menggunakan bahasa asing di setiap tingkat kecakapan tertentu. </p><br>
          <p align="justify">3. <span>Siapa yang menggunakan CEFR?</span><br>
          CEFR digunakan secara luas dalam pengajaran bahasa di Eropa, baik di sektor pendidikan publik maupun di sekolah bahasa swasta. Di banyak negara, CEFR telah menggantikan sistem penentuan level yang sebelumnya digunakan dalam pengajaran bahasa asing. Sebagian besar kementerian pendidikan di Eropa menetapkan sasaran berbasis CEFR yang jelas bagi semua siswa yang lulus dari sekolah menengah, misalnya B2 dalam bahasa asing pertama dan B1 untuk bahasa asing kedua mereka. Bagi pencari kerja, banyak orang dewasa di Eropa menggunakan skor tes standar, seperti TOEIC, untuk menggambarkan tingkat kecakapan bahasa Inggris mereka. <br><br>Penerapan CEFR di luar Eropa jauh lebih terbatas, meskipun beberapa negara di Asia dan Amerika Latin telah menerapkannya dalam sistem pendidikan mereka.</p><br>
          <p align="justify">4. <span>Mengapa CEFR Penting?</span><br>
          Di Eropa, CEFR semakin menjadi cara standar untuk menggambarkan tingkat kecakapan bahasa asing Anda, terutama dalam lingkungan akademis. Jika Anda mempelajari lebih dari satu bahasa, seperti kebanyakan orang Eropa, CEFR merupakan cara standar yang mudah untuk mencantumkan kemampuan dua bahasa atau lebih di CV Anda. Di sekolah atau perguruan tinggi, CEFR merupakan kerangka standar di seluruh Eropa dan dapat digunakan tanpa syarat. <br><br>Namun, di lingkungan perusahaan, CEFR tidak begitu dipahami secara luas. Jika Anda memutuskan untuk menggunakan CEFR pada CV Anda untuk alasan profesional, Anda masih perlu menyertakan keterangan level, skor tes standar, dan contoh lingkungan penggunaan kemampuan bahasa Anda (studi di luar negeri, bekerja di luar negeri, dll.).</p><br>
          <p align="justify">5. <span>Bagaimana cara mengetahui Level CEFR Saya?</span><br>
          Cara terbaik untuk mengetahui level CEFR Anda adalah dengan mengikuti tes standar yang dirancang dengan baik. Dalam bahasa Inggris, EFSET adalah pilihan terbaik karena tersedia gratis secara online dan merupakan tes pertama yang selaras dengan CEFR. Anda perlu meluangkan waktu selama 50 menit untuk menyelesaikan tes dan mengetahui level CEFR Anda.</p><br>
          </div>
    </div>
  </form>
  <!-- End CEF-form -->

  <!-- Start Grammar-form -->
  <form id="Grammar-form" style="display:none" class="grid_14">
    <div class="box 1000px">
      <img src="images/toefl-5.jpg"><br><br>
        <div class="text2" style="padding-bottom:700px">
         Sangat penting untuk mengetahui dan paham tentang grammar (tata bahasa) untuk bisa sukses dalam ujian. Kebanyakan ujian (TOEFL atau TOEIC dan lain-lain) pastinya akan mengetes kemampuan grammar anda. Oleh sebab itu Anda perlu menulis bentuk kata dengan benar dan menempatkan kata-kata dalam urutan yang benar dalam kalimat. Pada bagian ini Anda dapat mempelajari tata bahasa dan melakukan tes praktek dengan CEF (Common European Framework) Level dan berdasarkan topik tertentu. Ada 6 Level Test berdasarkan CEFR namun yang umum digunakan hanya ada 4, yaitu A1, A2, B1, dan B2.<br><br><br>      
         <div class="grid_23" style="bg-color:white;">Level A1
          <div class="text1" style="font-size:14px;">
            <br><a href="grammar_adverb.php">Adverbs Of Frequency</a><br>
            <a href="grammar_comparatives.php">Comparatives</a><br>
            <a href="grammar_superlatives.php">Superlatives</a><br>
            <a href="grammar_goingto.php">Going To</a><br>
            <a href="grammar_uncountable.php">Common Uncountable Nouns</a><br>
            <a href="grammar_like.php">I'd Like</a><br>
            <a href="grammar_imperatives.php">Imperatives (+/-)</a><br>
            <a href="grammar_intensifier.php">Intensifier</a><br>
            <a href="grammar_modals.php">Modals: Can/Cant/Could/Couldnt</a><br>
            <a href="grammar_pastsimpleof.php">Past Simple Of To Be</a><br>
            <a href="grammar_pastsimple.php">Past Simple</a><br>
            <a href="grammar_possesive.php">Possesive</a><br>
            <a href="grammar_ofplace.php">Preposition Of Place</a><br>
            <a href="grammar_oftime.php">Preposition Of Time (In/On/At)</a><br>
            <a href="grammar_continuous.php">Present Continuous</a><br>
            <a href="grammar_simple.php">Present Simple</a><br>
          </div>
         </div>
         <div class="grid_23" style="bg-color:white;">Level A2
          <div class="text1" style="font-size:14px;">
            <br><a href="grammar_comparatives.php">Adjective - Comparatives</a><br>
            <a href="grammar_superlatives.php">Adjective - Superlatives</a><br>
            <a href="grammar_adverb.php">Adverbial phrases of time, place and frequency</a><br>
            <a href="grammar_adverbs.php">Adverb</a><br>
            <a href="grammar_count.php">Articles – with countable and uncountable nouns</a><br>
            <a href="grammar_uncountable.php">Countables and Uncountable</a><br>
            <a href="grammar_much.php">Much / Many</a><br>
            <a href="grammar_gerunds.php">Gerunds</a><br>
            <a href="grammar_goingto.php">Going To</a><br>
            <a href="grammar_imperatives.php">Imperatives</a><br>
            <a href="grammar_modals.php">Modals: Can / Could</a><br>
            <a href="grammar_haveto.php">Modals: Have To</a><br>
            <a href="grammar_should.php">Modals: Should</a><br>
            <a href="grammar_past.php">Past Continuous</a><br>
            <a href="grammar_pastsimple.php">Past Simple</a><br>
            <a href="grammar_phrasal.php">Phrasal Verbs – Common</a><br>
          </div>
         </div>
         <div class="grid_23" style="bg-color:white;">Level B1
         <div class="text1" style="font-size:14px;">
             <br><a href="grammar_adverbs.php">Adverb</a><br>
            <a href="grammar_both.php">Both, Either, Neither</a><br>
            <a href="grammar_intensifier.php">Broader range of intensifiers; So, Such, Too, Enough</a><br>
            <a href="grammar_comparatives.php">Comparatives</a><br>
            <a href="grammar_superlatives.php">Superlatives</a><br>
            <a href="grammar_questiontag.php">Question Tag</a><br>
            <a href="grammar_second.php">Conditional - 2nd</a><br>
            <a href="grammar_third.php">Conditional - 3rd</a><br>
            <a href="grammar_word.php">Connecting Words Expressing</a><br>
            <a href="grammar_embedded.php">Embedded Question</a><br>
            <a href="grammar_future.php">Future Continuous</a><br>
            <a href="grammar_must.php">Modals - must/can’t deduction</a><br>
            <a href="grammar_might.php">Modals – might, may, will, probably</a><br>
            <a href="grammar_have.php">Modals – should have</a><br>
            <a href="grammar_must.php">Modals - must/have to</a><br>
            <a href="grammar_past.php">Past Continuous</a><br>
            <a href="grammar_perfect.php">Past Perfect</a><br>
            <a href="grammar_pastsimple.php">Past Simple</a><br>
            <a href="grammar_ofplace.php">Preposition Of Place</a><br>
            <a href="grammar_presentperfect.php">Present Perfect Continuous</a><br>
            <a href="grammar_versus.php">Present Perfect VS Past Simple</a><br>
            <a href="grammar_speech.php">Reported Speech</a><br>
            <a href="grammar_passive.php">Simple Passive</a><br>
            <a href="grammar_goingto.php">Going To</a><br>
          </div>
         </div>
         <div class="grid_23" style="bg-color:white;">Level B2
          <div class="text1" style="font-size:14px;">
            <br><a href="grammar_future.php">Future Continuous</a><br>
            <a href="grammar_futureperfect.php">Future Perfect</a><br>
            <a href="grammar_futurepc.php">Future Perfect Continuous</a><br>
            <a href="grammar_mixed.php">Mixed Conditional</a><br>
            <a href="grammar_passive.php">Passive</a><br>
            <a href="grammar_perfect.php">Past Perfect</a><br>
            <a href="grammar_perfectc.php">Past Perfect Continuous</a><br>
            <a href="grammar_speech.php">Reported Speech</a><br>
         </div>
       </div>
      </div>
    </div>
  </form>
  <!-- End Grammar-form -->

  <!-- Start Vocab-form -->
  <form id="Vocab-form" style="display:none" class="grid_14">
    <div class="box 1000px">
      <img src="images/toefl-6.jpg"><br><br>
      <div class="text2">
        Mengapa memperluas pengetahuan Anda harus dengan cara menggunakan kata-kata / vocabulary? Anda akan dapat berkomunikasi (berbicara dan menulis) lebih jelas dan ringkas, orang akan memahami Anda lebih mudah, dan Anda akan meningkatkan persepsi (dan kenyataan) bahwa Anda adalah orang yang cerdas. Selain itu, belajar kata-kata baru adalah kegiatan yang menyenangkan - dan Anda bahkan dapat melakukan dengan orang-orang di sekitar Anda. Tantang teman, anggota keluarga, atau teman sekamar untuk belajar kata-kata baru dengan Anda. Kami menyediakan 7 tips untuk memudahkan anda belajar vocabulary:<br><br><br>
        <p align="justify">1. <span>Baca, baca, dan baca.</span><br>
        Semakin banyak Anda membaca - terutama novel dan karya sastra, dan juga majalah dan koran - semakin banyak kata yang anda ingat. Ketika Anda membaca dan mengungkap kata-kata baru, gunakan berbagai cara untuk mencoba mendapatkan makna dari konteks kalimat serta dari mencari definisi dari dalam kamus.</p><br>
        <p align="justify">2. <span>Keep a dictionary and thesaurus handy.</span><br>
        Gunakan versi apa pun yang Anda sukai - baik media cetak, perangkat lunak, atau online. Ketika Anda menemukan sebuah kata baru, cari di kamus untuk mendapatkan dua hal, yaitu pengucapan dan artinya (s). Selanjutnya, lihat id tesaurus dan menemukan kata-kata yang sama dan frase - serta kebalikannya (sinonim dan antonim, masing-masing) - dan mempelajari nuansa antara kata-kata tersebut.</p><br>
        <p align="justify">3. <span>Gunakan jurnal</span><br>
        Ini adalah ide yang baik untuk menyimpan daftar dari kata-kata baru yang Anda temukan sehingga Anda dapat merujuk/membuka kembali daftar dan perlahan-lahan membangun mereka ke dalam kosakata sehari-hari Anda.</p><br> 
        <p align="justify">4. <span>Pelajari kata sehari</span><br>
        Pelajari setidaknya satu kata dalam satu hari. Hapal dan ingat arti satu kata saja dalam satu hari akan membantu anda mengingat banyak kata-kata baru dengan mudah.</p><br>
        <p align="justify">5. <span>Go back to your roots</span><br>
        Salah satu alat yang paling kuat untuk belajar kata-kata baru - dan untuk mengartikan arti kata-kata baru lainnya - adalah belajar bahasa Latin dan Yunani. unsur bahasa Latin dan Yunani (prefiks, root, dan sufiks) adalah bagian penting dari bahasa Inggris dan alat yang berguna untuk belajar kata-kata baru. Sebab bahasa inggris berasal dari bahasa yunani dan latin.</p><br>
        <p align="justify">6. <span>Play some games</span><br>
        Carilah permainan kata yang menantang Anda dan membantu Anda menemukan makna baru dan kata-kata baru merupakan alat dan menyenangkan dalam pencarian Anda untuk memperluas kosakata Anda. Contohnya termasuk teka-teki silang, anagram, kata campur aduk, Scrabble, dan Boggle.</p><br>
        <p align="justify">7. <span>Terlibat dalam percakapan</span><br>
        Hanya berbicara dengan orang lain dapat membantu Anda belajar menemukan kata-kata baru. Seperti membaca, setelah Anda mendengar kata baru, ingat untuk menuliskan itu sehingga Anda bisa belajar nanti - dan kemudian perlahan-lahan tambahkan kata baru untuk kosakata Anda.</p><br>
      </div>
    </div>
  </form>
  <!-- End Vocab-form -->

    <!-- Start Level-form -->
  <form id="Level-form" style="display:none" class="grid_14">
    <div class="box 1000px">
      <img src="images/toefl-7.jpg"><br><br>
      <div class="text2">
        CEFR adalah standart untuk mengetahui tingkat kemampuan dalam bahasa inggris. Walaupun CEFR ini dibuat oleh Council of Europe namun sudah dipakai di seluruh dunia, bukan hanya di negara-negara Eropa saja. Standar ini memudahkan perusahaan maupun universitas untuk menetapkan standar minimum bagi calon karyawan/mahasiswanya. <br><br><br>        
        
        Untuk lebih memudahkan, kami menyediakan tabel perbandingan Level CEFR dengan ujian-ujian lain. Anda bisa membandingkan nilai ujian anda untuk mengetahui tingkatan Level CERF anda. Untuk TOEFL dan IELTS ada level CEFR tertentu yang tidak dapat digunakan sebagai perbandingan. <br><br>
        <br><img src="images/cef.jpg" style="width:500px;"><br><br><br><br>
      </div>
    </div>
  </form>
  <!-- End Level-form -->

  </div>
</div>
<!-- End Page 2 -->

<!-- Start Page 3 -->
<div id="page3" class="content">
  <div class="container_12">
    <div class="grid_12">
      <div class="slogan">
        <h3>Our <span>Services</span></h3>
        <div class="text3"> <br><br><br> Untuk mendapatkan score/nilai TOEFL yang tinggi tidaklah mudah. Dibutuhkan latihan secara rutin dan belajar yang serius, namun untuk melakukan tes TOEFL dibutuhkan biaya yang tidaklah murah. Oleh sebab itu dibutuhkan suatu sistem yang bersifat hemat waktu (time spaving), hemat tempat (space saving) dan hemat biaya (cost reduction). <br><br> Oleh sebab itu, kami membuat sebuah Simulasi TOEFL yang menyerupai tes TOEFL yang sesungguhnya. Website ini merupakan versi Online dari TOEFL PBT (Paper Based Test) dimana ada 3 hal yang akan diujikan, yaitu : <em>Listening Comprehension (Mendengarkan)</em>, <em>Structure and Written Expression (Tata Bahasa)</em> dan <em>Reading Comprehension (Membaca).</em> <br><br><br>
        </div><br>
      </div>
    </div>
    <div class="grid_3">
      <div class="box2 maxheight1"> <img src="images/listening.jpg" alt="">
        <div class="text1">Listening</div><br>
        <div class="text4">Learning Mode: <br><a href="listening1.php">Model Test 1</a> | <a href="listening2.php">Model Test 2</a> | <a href="listening3.php">Model Test 3</a> | <a href="listening4.php">Model Test  4</a> | <a href="listening5.php">Model Test 5</a></div></div>
    </div>
    <div class="grid_3">
      <div class="box2 maxheight1"> <img src="images/reading.jpg" alt="">
        <div class="text1">Reading</div><br>
        <div class="text4">Learning Mode: <br><a href="reading1.php">Model Test  1</a> | <a href="reading2.php">Model Test 2</a> | <a href="reading3.php">Model Test 3</a> | <a href="reading4.php">Model Test 4</a> | <a href="reading5.php">Model Test 5</a></div></div>
    </div>
    <div class="grid_3">
      <div class="box2 maxheight1"> <img src="images/structure.jpg" alt="">
        <div class="text1">Structure</div><br>
        <div class="text4">Learning Mode: <br><a href="structure1.php">Model Test 1</a> | <a href="structure2.php">Model Test 2</a> | <a href="structure3.php">Model Test 3</a> | <a href="structure4.php">Model Test 4</a> | <a href="structure5.php">Model Test 5</a></div></div>
    </div></div>
  </div>
</div>
<!--End Page3 -->

<!--Start Page4 -->
<div id="page4" class="content">
  <div class="container_12">
    <div class="grid_12">
      <div class="slogan3">
        <h3><span>Get in Touch</span></h3>
        <div class="text1"> Untuk dapat saling memudahkan, anda dapat mengunjungi kami dialamat berikut untuk bertanya atau memberikan masukan mengenai TOEFL lebih lanjut. Namun, anda juga dapat memberikan pertanyaan atau keluhan pada kolom dibawah ini. </div><br><br><br><br>
      </div>
    </div>
    <div class="clear"></div>
    <div class="map">
      <div class="grid_3">
        <div class="text1">Address</div>
        <address>
        <dl>
          <dt>The Company Name Inc.<br>
            Jalan Marakas No.21,<br>
            Medan Baru, 21181. </dt>
          <dd><span>Freephone:</span>+1 800 559 6580</dd>
          <dd><span>Telephone:</span>+1 800 603 6035</dd>
          <dd><span>FAX:</span>+1 800 889 9898</dd>
          <dd>E-mail: <a href="#" class="link-1">febrianifdamanik@gmail.com</a></dd>
          <dd>Twitter: <a href="#" class="link-1">@febrifed</a></dd>
        </dl>
        </address>
      </div>
      <div class="grid_3">
        <div class="text1">&nbsp;</div>
        <figure class="">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254832.60117456663!2d98.52940668065038!3d3.64227564268286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cc1c3eb2fd%3A0x23d431c8a6908262!2sMedan%2C+Medan+City%2C+North+Sumatra!5e0!3m2!1sen!2sid!4v1461213837236"></iframe>
        </figure>
      </div>
      <div class="grid_3 prefix_1">
        <div class="text1">Dont Be Shy! Say Hello!</div>
        <form action="prosescomment.php" method="POST">
              <div class="in">
                <input type="text" name="nama" placeholder="Name:">
                <br class="clear">
              </div><br>
              <div class="in">
                <label>
                <input type="text" name="mail" placeholder="E-mail:">
                <br class="clear">
              </label></div>
                <textarea name="pesan" cols="40" rows="3"></textarea>
              <br><br>
              <div class="btns"><input type="submit" class="link1" value="Send"></div>
        </form>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<!--End Page4 -->

<!--Start Page5 -->
<div id="page5" class="content">
  <div class="container_12">
    <div class="grid_12">
      <?php 
            $cek = cek_login();
            
            if ($cek == 0){
              echo "
      <div class=\"slogan\">
        <h3><a href=\"#page5\" onclick=\"showLoginForm()\"> Login</a><br><span>Belum terdaftar?</span> <a href=\"#page5\" onclick=\"showRegisterForm()\">Daftar Sekarang</a></h3>
      </div>
    </div>
    <div class=\"grid_3 prefix_4\">
      <!--Start Form Login-->
      <form method=\"POST\" action=\"proseslogin.php\" id=\"login-form\">
          <table>
            <tr>
            <td><input class=\"login\" type=\"text\" name=\"email\" placeholder=\"Email\"/></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
            <td><input class=\"login\" type=\"password\" name=\"password\" placeholder=\"Password\"/></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
            <td><input style=\"width:200px; height:30px; border:1px; font-family:'Trebuchet MS'; font-size:14px;\" type=\"submit\" name=\"submit\" value=\"Login\"/></td>
            </tr>
        </table>
      </form>
      <!--End Form Login-->
    </div>

    <div class=\"grid_3 prefix_4\">
      <!--Start Form Daftar-->
      <form method=\"POST\" action=\"prosesdaftar.php\" id=\"register-form\" style=\"display:none\">
         <table>
          <table>
            <tr>
            <td><input class=\"login\" type=\"text\" name=\"nama\" placeholder=\"Name\"/></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
            <td><input class=\"login\" type=\"text\" name=\"nname\" placeholder=\"Nick Name\"/></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td><input class=\"login\" type=\"text\" name=\"bln\" placeholder=\"dd/mm/yyyy\"</td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td><select name=\"gender\">
                <option class=\"loginb\" value=\"\">I am ..</option>
                <option class=\"loginb\" value=\"Male\">Male</option>
                <option class=\"loginb\" value=\"Female\">Female</option>
                </select></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
            <td><input class=\"login\" type=\"text\" name=\"email\" placeholder=\"Email\"/></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
            <td><input class=\"login\" type=\"password\" name=\"password\" placeholder=\"Password\"/></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
            <td><input style=\"width:200px; height:30px; border:1px; font-family:'Trebuchet MS'; font-size:14px;\" type=\"submit\" name=\"submit\" value=\"Daftar\"/></td>
            </tr>
        </table>
      </form>
      <!--End Form Daftar-->";

              }else{
                $email = $_SESSION['email'];
                $query = mysql_query("SELECT * FROM user where email='$email'");
                if ($query) {
                  while ($row = mysql_fetch_array($query)) {
                    echo "<div class=\"slogan\">
                            <h3>Welcome, <span>".$row['nname']."</span></h3
                          ></div>";
                    echo "
                    <div class=\"grid_5\" style='margin-bottom:-70px; margin-right:50px;'>
                      <div class=\"box4\">
                      <a href=\"proseslogout.php\" style='font-family:Trebuchet ms; font-size:19px; color:black;'> Logout</a><br><br>
                        <!--Start Profil Form-->
                        <form id='profil-form'>
                          <div class='text1'>
                            <p style='font-family:Trebuchet ms; font-size:18px; color:black;'>Profil <a href='#page6' onclick=\"showEditForm()\" ><img src='images/Edit-icon.png'></a></p>
                            <table class='login' style='font-size:16px;'>
                              <tr><td>Name  </td><td>  : ".$row['nama']."</td></tr>
                              <tr><td>Birthday  </td><td> :  ".$row['bln']."</td></tr>
                              <tr><td>Gender </td><td> :  ".$row['gender']."</td></tr>
                              <tr><td>Email </td><td>  : ".$row['email']."</td></tr>
                             </table><br><br>
                        
                          </div>
                        </form>
                        <!--End Profil Form-->

                        <!--Start Edit Form-->
                        <form id='edit-form' style='display:none;' action = \"prosesupdate.php\" method=\"POST\">
                          <div class='text1'>
                            <p style='font-family:Trebuchet ms; font-size:18px; color:black;'>Profil <a href='#page6' onclick=\"showProfilForm()\" ><img src='images/close.png'></a></p>
                            <table >
                              ";
                              $email = $_SESSION['email'];
                              $query = mysql_query("SELECT * FROM user where email='$email'");
                              if ($query) {
                                while ($row = mysql_fetch_array($query)) {
                                  echo "
                                  <tr><input class=\"login\" type=\"text\" name=\"nama\" value=\"".$row['nama']."\" ></tr><br>
                                  <tr><br><input class=\"login\" type=\"text\" name=\"nname\" value=\"".$row['nname']."\" ></tr><br>
                                  <tr><br><input class=\"login\" type=\"text\" name=\"bln\" value=\"".$row['bln']."\" ></tr><br>
                                  <tr><br><input class=\"login\" type=\"text\" name=\"gender\" value=\"".$row['gender']."\" ></tr><br>
                                  <tr><br><input class=\"login\" type=\"text\" name=\"email\" value=\"".$row['email']."\" ></tr><br>
                                  <tr><br><input class=\"login\" type=\"text\" name=\"password\" value=\"".$row['password']."\" ></tr><br>
                                  <tr><br>
                                  <input style=\"width:200px; height:30px; border:1px; font-family:'Trebuchet MS'; font-size:14px;\" type=\"submit\" value=\"Save\">
                                  </tr>
                                                              
                             </table><br><br>
                          
                          </div>
                        </form>
                        <!--End Edit Form-->
                      </div>
                    </div>";}
                  }
                    
                  echo 
                  "<div class=\"grid_7\" style='margin-right:-120px; padding-left:20px;'>
                    <div class=\"box4\" style=\"font-size:40px;\">
                      Your TOEFL Score, <br>";
                      $email = $_SESSION['email'];
                      $q = mysql_query("SELECT * FROM nilai_akhir where email='$email'");

                      
                      while ($row = mysql_fetch_array($q)) {
                      echo "<table class=\"score\">";
                        echo "
                        <h3 style=\"color:#666666; padding-left:10px; padding-right:-400px\"> <span >".$row['SkorAkhir']."</span> </h3>" ; 
                        $total_score = $row['SkorAkhir'];

                        echo "
                        <tr><td>Score Listening: </td> <td>".$row['Listening']."</td><td style=\"padding-left:50px\">Jumlah benar Listening: </td> <td>".$row['benar_listening']."</td></tr>
                        <tr><td>Score Structure: </td> <td>".$row['Structure']."</td><td style=\"padding-left:50px\">Jumlah benar Structure: </td> <td>".$row['benar_structure']."</td></tr>
                        <tr><td>Score Reading: </td> <td>".$row['nilai']."</td><td style=\"padding-left:50px\">Jumlah benar Reading: </td> <td>".$row['benar']."</td></tr>
                        </table>
                        <br><a style=\"font-size:16px; margin-left:10px;\" href=\"hapus_score.php?id=".$row['SkorAkhir']."\">Clear Score</a>";
                         
                     }
                    echo "</div>";
                  echo "</div>";
              }
             }
           }
          ?>

   </div>
   <div class="clear"></div>
  </div>
</div>
<!--End Page5 -->

<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="copy"> SIMULASI TOEFL ONLINE &copy; Febriani F Damanik (132406106) | <a href="#">Privacy Policy</a> <br> </div>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>
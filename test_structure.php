<?php
session_start();
require_once("connection.php");
if ($_SESSION['email']=='') {
    header("location: index.php");
  }else{
    mysql_error();
  }

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
<script type='text/javascript' src='http://code.jquery.com/jquery-1.10.2.min.js'></script>

<script type="text/javascript">
function confirm_click()
{
return confirm("Apakah Anda Yakin ingin Mengakhiri Test ?");
}
</script>


<!-- Script Timer -->
<script type="text/javascript">
  $(document).ready(function() {
     /** Membuat Waktu Mulai Hitung Mundur Dengan 
     * var detik = 0,
     * var menit = 25,
     * var jam = 1
     */
     var detik = 3;
     var menit = 25;
     var jam = 1;
                 
     /**
       * Membuat function hitung() sebagai Penghitungan Waktu
     */
    function hitung() {
       /** setTimout(hitung, 1000) digunakan untuk 
         * mengulang atau merefresh halaman selama 1000 (1 detik) 
       */
      setTimeout(hitung,1000);
       /** Jika waktu kurang dari 2 menit maka Timer akan berubah menjadi warna merah */
       if(menit < 2 && jam == 0){
             var peringatan = 'style="color:red"';
       };
       /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
          $('#timer').html(
                 '<h4 align="right"'+peringatan+' style="color:#991111;">Waktu : &nbsp;&nbsp;&nbsp;' + menit + ' menit : ' + detik + ' detik</h4>'
           );
 
           /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
           detik --;
             /** Jika var detik < 0
             * var detik akan dikembalikan ke 59
             * Menit akan Berkurang 1
           */
           if(detik < 0) {
             detik = 59;
             menit --;
              /** Jika menit < 0
              * Maka menit akan dikembali ke 59
              * Jam akan Berkurang 1
              */
           if(menit < 0) {
                  menit = 59;
                  jam --;
 
              /** Jika var jam < 0
                * clearInterval() Memberhentikan Interval dan submit secara otomatis
              */
           if(jam < 0) { clearInterval(); 
             /** Variable yang digunakan untuk submit secara otomatis di Form */ 
             var frmSoal = document.getElementById("formulir"); 
                                frmSoal.submit(); 
              } 
          } 
      } 
    }           
    /** Menjalankan Function Hitung Waktu Mundur */ 
    hitung();
  }); 
  // ]]>
</script>
</head>
<body>

<!--Start Header-->
<header class="page1">
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="#" onClick="goToByScroll('page1'); return false;"><img height="30px" width="1300px" src="images/logo2.png" alt=""></a></h1>
        <div class="menu_block">
        <nav class="">
          <ul class="sf-menu">
            <li class="timer"><div id="timer"></div></li>
            <li class="men1"><a onclick="return confirm_click();" href="exit_structure.php" >Exit</a><strong class="hover"></strong></li>
        </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<!--End Header-->

<div id="page2" class="content">
<div class="container_12">
  <div class="grid_14">
    <div class="box">
    <div style="color:#666666; font-size:30px; padding-bottom:20px; ">Structure and Written Expression
      </div>
         <div style="background-color:#666666; color:white; margin-left:150px; width:620px; padding:5px 0">Ada 40 pertanyaan pada bagian ini. <br>Di bagian grammar, pilih struktur kata yang sesuai. Di bagian written expression, terdapat kata dengan option di kalimat dan pilihlah kata yang salah/tidak tepat pada kalimat tersebut.
          <div class="box3"> <br>
          <form action="hasil_structure.php" method="POST" id="formulir">
            <?php
              include "connection.php";
              $soal = mysql_query("SELECT * FROM structure order by rand() limit 40"); 
              $no = 1;
              while($s = mysql_fetch_array($soal)){
              echo "$no. <b>".$s['pertanyaan']."</b><br>\n";
              echo "<input type=radio name=soal[".$s['no']."] value='a'>A. ".$s['a']."<br>\n";
              echo "<input type=radio name=soal[".$s['no']."] value='b'>B. ".$s['b']."<br>\n";
              echo "<input type=radio name=soal[".$s['no']."] value='c'>C. ".$s['c']."<br>\n";
              echo "<input type=radio name=soal[".$s['no']."] value='d'>D. ".$s['d']."<br><br><br>\n";
              $no++;
              }
              $jumlahsoal = $no - 1;
              echo "<input type='hidden' name='jumlahsoal' value= $jumlahsoal>";
            ?>
            <input style="width:200px; margin-left:180px; height:30px; border:1px; font-family:'Trebuchet MS'; font-size:15px;" type="submit" value="DONE"/><br><br>
        
          </form>
          </div>
        </div>
    </div>
  </div>    
</div>
</div>
</body>
</html>
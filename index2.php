<!DOCTYPE HTML>
<html>
<head>
<title>Contoh Table menggunakan div by @BayuWPP</title>
<style type="text/css">
.lebarkolom {
width:80%;    /* ukuran penuh layar table pada browser*/
margin:0 auto; /* opsional, supaya table berada di tengah jika dalam mode fixed,*/
               /* bertindak seperti <table align="center">*/
border: 0px solid #000; /* border, opsional */
}
.baris {
width: 100%;    /* harus 100% supaya penuh ke area table */
}
.kolom1 {
width: 60%; /* lebar kolom 1 70% untuk artikel-artikel */
              /* diberikan kompensasi seperlunya karena penggunaan margin,*/
              /*BayuWPP*/
              /* padding maupun border akan mempengaruhi lebar kolom */
float: left;  /* Konten di letakkan di sebelah kiri*/
}
.kolom2 {
width: 40%; /* lebar kolom 2 30% untuk list artikel*/
              /* diberikan kompensasi seperlunya karena penggunaan margin,*/
              /*bayubayyz.blogspot.com*/
              /* padding maupun border nantinya akan mempengaruhi lebar kolom */
float: right;  /* kolom yang lebih duluan akan ditempatkan di kiri, begitu seterusnya */
}
</style>
</head>

<body>
  <h3>Sistem Pendukung Keputusan</h3>
<div class="lebarkolom">
   <div class="baris">
      <div class="kolom1">
        <nav>
            <?php include "nav.php"; ?>
        </nav>
        <main>
            <div id="bg-green"></div>
            <div id="main-body">
                <?php include "page.php"; ?>
            </div>
        </main>   
    </div>
    <div class="kolom2">
        Kolom Kedua <!-- Di bagian ini Anda dapat membuatnya untuk menampilkan list artikel  atau lain-lain -->
    </div>
</div>
<div style="clear: both;"></div> <!-- selalu menempatkan tag ini sebelum penutup div lebar kolom -->
</div>
</body>
</html>
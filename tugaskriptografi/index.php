<?php
session_start();

if( !isset($_SESSION['login']) ) {
    header("location: login.php");
    exit;
}


?>


<?php require_once 'tampletes/header.php'; ?>

<div class="container">
    <style>
        body
        {
            background-image: url(images/.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }
    </style>
    <div class="jumbotron jumbotron-fluid mt-4 background-image: url(images/c.jpg); ">
            <style>
        body
        {
            background-image: url(images/b.jpg);

        }
    </style>
    <div class="container">


        <h2 class="display-4"> Halo ADMIN</h2>
        <hr>
        <p class="lead"><p>Sistem pendukung keputusan adalah sebuah sistem untuk mencari pendukung keputusan, yang mana keputusan diambil menggunakan sistem yang dibuat berdasarkan kebutuhan pemakaian, dalam membantu menentukan suatu keputusan</p>.
		<p>Metode Simple Additive Weighting merupakan  metode  penjumlahan  terbobot.  Konsep  dasar  metode  SAW  adalah mencari  penjumlahan  terbobot  dari  rating  kinerja  pada  setiap  alternatif  pada  semua kriteria. Metode SAW membutuhkan proses  normalisasi matrik  keputusan (X) ke suatu skala  yang dapat diperbandingkan dengan semua rating alternatif  yang ada. Metode  SAW mengenal adanya 2 atribut yaitu  atribut  keuntungan (benefit) dan atribut  biaya (cost).</p>Sistem pendukung keputusan dengan menggunakan metode SAW. Terdapat 4 kriteria yang dinilai dalam sistem ini yaitu C1 (Harga), C2 (Processor), C3 (RAM), C4 (VGA). Dari setiap kriteria terdapat bobot-bobot yang dapat diinputkan didalam sistem ini. Sistem ini bertujuan untuk menentukan keputusan para calon pembeli laptop dalam memilih laptop yang sesuai dengan kriteria-kriteria dan kebutuhan dibidang industri kreatif, dengan menggunakan perangkingan.</p>
    </div>
    </div>
</div>



<?php require_once 'tampletes/footer.php' ?>


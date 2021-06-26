<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $kelelahan = $_POST['kelelahan'];
    $suhu = $_POST['suhu'];
    $meler = $_POST['meler'];
    $bersin = $_POST['bersin'];
    $tenggorokan = $_POST['tenggorokan'];
    $otot = $_POST['otot'];
    $nafas = $_POST['nafas'];
    $dahak = $_POST['dahak'];
    $muntah = $_POST['muntah'];

    // buat query
    $sql = "INSERT INTO covid_19 (kelelahan, suhu, meler, bersin, tenggorokan, otot, nafas, dahak, muntah) VALUE ('$kelelahan', '$suhu', '$meler', '$bersin', '$tenggorokan', '$otot', '$nafas', '$dahak', '$muntah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: tampilan3.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: tampilan3.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>

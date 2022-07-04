<?php

include "koneksi.php";
//mengambil data inputan
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$absen = $_POST['absen'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$proses = mysqli_query($koneksi, "INSERT INTO mahasiswa(nama_mahasiswa, prodi) VALUES ('" . $nama . "','" . $absen . "','" . $tugas . "','" . $uts . "','" . $uas . "')") or die(mysqli_error($koneksi));

if ($proses) {
    echo "<script>alert('Data Berhasil Dsimpan')</script>";
} else echo "<script>alert('Data gagal Dsimpan')</script>";

$nilai_absen = $absen * 0.1;
$nilai_tugas = $tugas * 0.2;
$nilai_uts = $uts * 0.3;
$nilai_uas = $uas * 0.4;

//penjumlahan dari nilai-nilai yang sudah diinput
$nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

if ($nilai_mhs != "") {

    if ($nilai_akhir >= 80) {
        $grade = "A";
    } elseif ($nilai_akhir >= 70) {
        $grade = "B";
    } elseif ($nilai_akhir >= 60) {
        $grade = "C";
    } elseif ($nilai_akhir >= 50) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    for ($x = 0; $x <= $perulangan; $x++) {
        echo $npm_mhs . " Nilai Mata Kuliah Anda Adalah : " . $huruf_mutu . "<br>";
    }
}
?>
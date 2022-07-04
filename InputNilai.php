<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Akhir Mahasiswa</title>
    <link href="style_inputnilai.css" rel="stylesheet">
</head>

<body>
    <div class="utama">
        <form action="InputNilai.php" method="POST">
            <h1 align="center">Hitung Nilai Akhir Mahasiswa</h1>
            <div class="kiri">
                <label>NPM </label>
            </div>
            <div class="kanan">
                <input type="text" name="npm" placeholder="Masukkan NPM">
            </div>
            <br>
            <div class="kiri">
                <label>Nama Mahasiswa </label>
            </div>
            <div class="kanan">
                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap">
            </div>
            <br>
            <div class="kiri">
                <label>Nilai Absen </label>
            </div>
            <div class="kanan">
                <input type="text" name="absen" placeholder="Masukkan Nilai Absen">
            </div>
            <br>

            <div class="kiri">
                <label> Nilai Tugas </label>
            </div>
            <div class="kanan">
                <input type="text" name="tugas" placeholder="Masukkan Nilai Tugas">
            </div>
            <br>

            <div class="kiri">
                <label> Nilai UTS </label>
            </div>
            <div class="kanan">
                <input type="text" name="uts" placeholder="Masukkan Nilai UTS">
            </div>
            <br>

            <div class="kiri">
                <label> Nilai UAS </label>
            </div>
            <div class="kanan">
                <input type="text" name="uas" placeholder="Masukkan Nilai UAS">
            </div> <br>
            <input type="submit" value="Hitung">

        </form>
    </div>
</body>



<?php
error_reporting(0);
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$absen = $_POST['absen'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

if ($proses) {
    echo "<script>alert('Data gagal Di simpan')</script>";
} else echo "<script>alert('Data Berhasil Di simpan')</script>";

//menghitung nilai dari yang tadi kita input
$nilai_absen = $absen * 0.1;
$nilai_tugas = $tugas * 0.2;
$nilai_uts = $uts * 0.3;
$nilai_uas = $uas * 0.4;

//penjumlahan dari nilai-nilai yang sudah diinput
$nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

//menampilkan grade berdasarkan hasil nilai akhir

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
$i++;
"";

?>
<div class="tabel">
    <h1 Align="center"> Data Nilai Mahasiswa</h1>
    <table width="100%" bgcolor="#E5E3C9" cellspacing="1" align="center" cellpadding="4" border="1">
        <tr bgcolor="#E5E3C9">
            <th width="100" rowspan="2">NPM</th>
            <th width="100" rowspan="2">Nama Mahasiswa</th>
            <th width="100" colspan="4" align="center">Nilai</th>
            <th width="100" rowspan="2">Nilai Total</th>
            <th width="100" rowspan="2">Grade</th>
        </tr>
        <tr bgcolor="#E5E3C9">
            <th width="100">Absensi</th>
            <th width="100">Tugas</th>
            <th width="100">UTS</th>
            <th width="100">UAS</th>
        </tr>
        <tr bgcolor="white">
            <td align="center"><?php echo $npm; ?></td>
            <td align="center"><?php echo $nama; ?></td>
            <td align="center"><?php echo $absen; ?></td>
            <td align="center"><?php echo $tugas; ?></td>
            <td align="center"><?php echo $uts; ?></td>
            <td align="center"><?php echo $uas; ?></td>
            <td align="center"><?php echo $nilai_akhir; ?></td>
            <td align="center"><?php echo $grade; ?></td>
        </tr>
    </table>
    <?php $i++; ?>
</div>

</html>
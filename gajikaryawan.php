<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian</title>
</head>

<body>
    <?php
    // $namaKaryawan = ["Agus", "Dina", "Joko", "Ahmad", "Felicia"];
    // $gajiKaryawan = [8000000, 15000000, 25000000, 13000000, 12500000];
    // $levelJabatan = ["Junior Officer", "Ass.Manager", "Manager", "Middle Officier", "Middle Officier"];
    // $asalKaryawan = ["Semarang", "Bandung", "Jakarta", "Jakarta", "Bandung"];

    // Perhitungan Tunjangan
    $gajiKaryawan1 = 15000000;
    $gajiKaryawan2 = 10000000;
    $gajiAsli = 8000000;

    if ($gajiAsli >= $gajiKaryawan1) {
        $hasilTunjangan = (10 / 100) * $gajiAsli;
    } elseif ($gajiAsli <= $gajiKaryawan1 && $gajiAsli >= $gajiKaryawan2) {
        $hasilTunjangan = (12 / 100) * $gajiAsli;
    } else {
        $hasilTunjangan = (15 / 100) * $gajiAsli;
    }

    // Region Jakarta
    $asalKaryawan1 = "Jakarta";
    $asalKaryawan2 = "Bandung";
    $asalKaryawan3 = "Semarang";
    $gaji = 8000000;

    if ($asalKaryawan1) {
        $hasilPotong = (2.5 / 100) * $gaji;
    } elseif ($asalKaryawan2) {
        $hasilPotong = (2 / 100) * $gaji;
    } else {
        $hasilPotong = (1.8 / 100) * $gaji;
    }

    // Bonus Karyawan
    $namaJabatan1 = "Manager";
    $namaJabatan2 = "Ass Manager";
    $namaJabatan3 = "Middle Officier";
    $namaJabatan4 = "Junior Officier";
    $bonus1 = 250000;
    $bonus2 = 175000;
    $bonus3 = 125000;
    $bonus4 = 100000;
    $gajiKar = 800000;
    if ($namaJabatan1) {
        $hasil = $bonus1 + $gajiKar;
    } elseif ($namaJabatan2) {
        $hasil = $bonus2 + $gajiKar;
    } elseif ($namaJabatan3) {
        $hasil = $bonus2 + $gajiKar;
    } elseif ($namaJabatan4) {
        $hasil = $bonus2 + $gajiKar;
    }


    ?>

    <li>
        Nama anda: Agus
    </li>
    <li>
        Gaji Perbulan Anda: Rp. <?php echo number_format($gajiAsli); ?>
    </li>
    <li>
        Level Anda: <?php echo $namaJabatan4; ?>
    </li>
    <li>
        Alamat Anda: <?php echo $asalKaryawan3; ?>
    </li>
    <li>
        Tunjangan Anda: Rp. <?php echo number_format($hasilTunjangan); ?>
    </li>
    <li>
        Potongan Anda: Rp. <?php echo number_format($hasilPotong); ?>
    </li>
    <li>
        Bonus Anda: <?php echo number_format($hasil); ?>
    </li>
    <li>
        <?php $hasilTotal = $hasilTunjangan + $hasilPotong + $hasil; ?>
        Total Gaji Anda Yang Diterima: <?php echo $hasilTotal; ?>
    </li>
</body>

</html>
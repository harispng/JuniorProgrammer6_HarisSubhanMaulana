<!-- Bilangan Faktorial -->
<?php

$nilaiAwal = 1;
$hasilFaktor = $nilaiAwal;
$nilaiFaktor = 4;

while ($nilaiAwal <= $nilaiFaktor) {
    $hasilFaktor = $hasilFaktor * $nilaiAwal;
    $nilaiAwal++;
}

echo "Input = ";
echo $nilaiFaktor;
echo "<br>";
echo "Hasilnya = ";
echo $hasilFaktor;

echo "<br>";
echo "<br>";

// Memasukan dash "-" di bilangan genap
$inputBilangan = 10;

for ($i = 1; $i <= $inputBilangan; $i++) {
    if ($i % 2 == 0) {
        echo "-" . $i;
        echo "&nbsp";
    } elseif ($i % 2 == 1) {
        echo $i;
        echo "&nbsp";
    }
}

echo "<br>";
echo "<br>";

// GAJI Karyawan BAGIAN A

$gajiKaryawan1 = 15000000;
$gajiKaryawan2 = 10000000;
$gajiAsli = 9000000;

if ($gajiAsli >= $gajiKaryawan1) {
    echo "Tunjangan Anda Sebesar 10%";
} elseif ($gajiAsli <= $gajiKaryawan1 && $gajiAsli >= $gajiKaryawan2) {
    echo "Tunjangan Anda Sebesar 12%";
} else {
    echo "Tunjangan Anda Sebesar 15%";
}

// // Hasil Output Bila Gaji 15.000.000
// echo "Tunjangan Anda Sebesar 10%";
// // Hasil Output Bila Gaji 10.000.000
// echo "Tunjangan Anda Sebesar 12%";
// // Hasil Output Bila Gaji Yang Lainnya
// echo "Tunjangan Anda Sebesar 15%";

// Bagian B Regional
$asalKaryawan1 = "Jakarta";
$asalKaryawan2 = "Bandung";

if ($asalKaryawan) {
}



$duitPecahan = array(100000, 50000, 20000, 5000, 1000, 50);
$uangBudi = 1895250;
echo "<h4>Nominal : " . $uangBudi . "</h4>";
for ($i = 0; $i < count($duitPecahan); $i++) {
    if ($uangBudi % $duitPecahan[$i] < $duitPecahan) {
        echo floor($uangBudi / $duitPecahan[$i]) . " -> " . $duitPecahan[$i] . "<br/>";
        $uangBudi = $uangBudi % $duitPecahan[$i];
    }
}

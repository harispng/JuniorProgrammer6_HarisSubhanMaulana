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

// Pecahan Uang Budi
$duitPecahan = array(100000, 50000, 20000, 5000, 1000, 50);
$uangBudi = 1895250;
echo "<h4>Nominal : " . $uangBudi . "</h4>";
for ($i = 0; $i < count($duitPecahan); $i++) {
    if ($uangBudi % $duitPecahan[$i] < $duitPecahan) {
        echo floor($uangBudi / $duitPecahan[$i]) . " -> " . $duitPecahan[$i] . "<br/>";
        $uangBudi = $uangBudi % $duitPecahan[$i];
    }
}

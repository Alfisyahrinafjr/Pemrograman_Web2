<!DOCTYPE html>
<html>
<body>

<?php
$mahasiswa = [
    [
        "nama" => "Andi",
        "nim" => "2101001",
        "uts" => 87,
        "uas" => 65
    ],
    [
        "nama" => "Budi",
        "nim" => "2101002",
        "uts" => 76,
        "uas" => 79
    ],
    [
        "nama" => "Tono",
        "nim" => "2101003",
        "uts" => 50,
        "uas" => 41
    ],
    [
        "nama" => "Jessica",
        "nim" => "2101004",
        "uts" => 60,
        "uas" => 75
    ]
];

function nilaiHuruf($nilaiAkhir) {
    if ($nilaiAkhir >= 80) return "A";
    elseif ($nilaiAkhir >= 70) return "B";
    elseif ($nilaiAkhir >= 60) return "C";
    elseif ($nilaiAkhir >= 50) return "D";
    else return "E";
}

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr style='background-color: #d3d3d3;'>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
      </tr>";

foreach ($mahasiswa as $mhs) {
    $nilaiAkhir = 0.4 * $mhs["uts"] + 0.6 * $mhs["uas"];
    $huruf = nilaiHuruf($nilaiAkhir);

    echo "<tr>";
    echo "<td>{$mhs['nama']}</td>";
    echo "<td>{$mhs['nim']}</td>";
    echo "<td>{$mhs['uts']}</td>";
    echo "<td>{$mhs['uas']}</td>";
    echo "<td>" . number_format($nilaiAkhir, 1) . "</td>";
    echo "<td>$huruf</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>

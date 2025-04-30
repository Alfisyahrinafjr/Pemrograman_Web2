<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th {
            background-color: #d3d3d3;
        }
        table, th, td {
            border: 1px solid black;
            padding: 6px;
            text-align: left;
        }
        .revisi {
            background-color: red;
            color: white;
            text-align: center;
        }
        .tidak-revisi {
            background-color: green;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$mahasiswa = [
    [
        "nama" => "Ridho",
        "matkul" => [
            ["nama" => "Pemrograman I", "sks" => 2],
            ["nama" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama" => "Arsitektur Komputer", "sks" => 3],
        ]
    ],
    [
        "nama" => "Ratna",
        "matkul" => [
            ["nama" => "Basis Data I", "sks" => 2],
            ["nama" => "Praktikum Basis Data I", "sks" => 1],
            ["nama" => "Kalkulus", "sks" => 3],
        ]
    ],
    [
        "nama" => "Tono",
        "matkul" => [
            ["nama" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama" => "Komputasi Awan", "sks" => 3],
            ["nama" => "Kecerdasan Bisnis", "sks" => 3],
        ]
    ],
];

echo "<table>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
      </tr>";

$no = 1;
foreach ($mahasiswa as $mhs) {
    $totalSks = 0;
    foreach ($mhs["matkul"] as $mk) {
        $totalSks += $mk["sks"];
    }

    $jumlahMatkul = count($mhs["matkul"]);
    $keterangan = $totalSks < 7 
        ? "<td class='revisi'>Revisi KRS</td>" 
        : "<td class='tidak-revisi'>Tidak Revisi</td>";

    for ($i = 0; $i < $jumlahMatkul; $i++) {
        echo "<tr>";

        if ($i == 0) {
            echo "<td rowspan='{$jumlahMatkul}'>{$no}</td>";
            echo "<td rowspan='{$jumlahMatkul}'>{$mhs['nama']}</td>";
        }

        echo "<td>{$mhs['matkul'][$i]['nama']}</td>";
        echo "<td>{$mhs['matkul'][$i]['sks']}</td>";

        if ($i == 0) {
            echo "<td rowspan='{$jumlahMatkul}'>{$totalSks}</td>";
            echo $keterangan;
        }

        echo "</tr>";
    }

    $no++;
}
echo "</table>";
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Smartphone Samsung</title>
    <style>
        .tabel-container {
            display: inline-block;
            padding: 2px;
            border: 1px solid black; 
            font-family: 'Times New Roman', Times, serif;
        }

        table {
            border-collapse: separate;
            border-spacing: 0 2px; 
        }

        th, td {
            border: 1px solid black;   
            padding: 2px 10px;
            font-size: 14px;
            background-color: #fff;
        }

        th {
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$smartphones = [
    "Samsung Galaxy S22",
    "Samsung Galaxy S22+",
    "Samsung Galaxy A03",
    "Samsung Galaxy Xcover 5"
];
?>

<div class="tabel-container">
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php foreach ($smartphones as $hp): ?>
            <tr>
                <td><?= $hp ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>

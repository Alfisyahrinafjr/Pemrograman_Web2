<!DOCTYPE html>
<html>
<head>
    <title>Daftar Smartphone Samsung</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
        }
        .container {
            width: 400px;
            border: 1px solid black;
            padding: 3px;
        }
        .header {
            background-color: red;
            color: black;
            font-size: 25px;
            font-weight: bold;
            padding: 40px;
            text-align: left;
            border: 1px solid black;
            margin-bottom: 3px;
        }
        .item {
            border: 1px solid black;
            padding: 5px;
            margin-bottom: 3px;
        }
    </style>
</head>
<body>

<?php
$samsungPhones = [
    ["nama" => "Samsung Galaxy S22"],
    ["nama" => "Samsung Galaxy S22+"],
    ["nama" => "Samsung Galaxy A03"],
    ["nama" => "Samsung Galaxy Xcover 5"]
];
?>

<div class="container">
    <div class="header">Daftar Smartphone Samsung</div>
    <?php
    foreach ($samsungPhones as $phone) {
        echo "<div class='item'>" . $phone["nama"] . "</div>";
    }
    ?>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .tanda {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<?php
$nama = $nim = $jenis_kelamin = "";
$tandaNama = $tandaNim = $jenisKelamin = "";
$tampilkanOutput = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid = true;

    if (empty($_POST["nama"])) {
        $tandaNama = "Nama tidak boleh kosong";
        $valid = false;
    } else {
        $nama = htmlspecialchars($_POST["nama"]);
    }

    if (empty($_POST["NIM"])) {
        $tandaNim = "NIM tidak boleh kosong";
        $valid = false;
    } else {
        $nim = htmlspecialchars($_POST["NIM"]);
    }

    if (empty($_POST["jenis_kelamin"])) {
        $jenisKelamin = "Jenis kelamin tidak boleh kosong";
        $valid = false;
    } else {
        $jenis_kelamin = $_POST["jenis_kelamin"];
    }

    if ($valid) {
        $tampilkanOutput = true;
    }
}
?>

<form action="" method="post">
    Nama <input type="text" name="nama" value="<?php echo $nama; ?>">
    <span class="tanda">*<?php echo $tandaNama; ?></span><br>

    NIM <input type="text" name="NIM" value="<?php echo $nim; ?>">
    <span class="tanda">*<?php echo $tandaNim; ?></span><br>

    Jenis kelamin
    <span class="tanda">*<?php echo $jenisKelamin; ?></span><br>
    <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($jenis_kelamin == "Laki-laki") echo "checked"; ?>> Laki-Laki<br>
    <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($jenis_kelamin == "Perempuan") echo "checked"; ?>> Perempuan<br><br>

    <button type="submit">Submit</button>
</form>

<?php
if ($tampilkanOutput) {
    echo "<h3>Output:</h3>";
    echo $nama . "<br>";
    echo $nim . "<br>";
    echo $jenis_kelamin . "<br>";
}
?>

</body>
</html>

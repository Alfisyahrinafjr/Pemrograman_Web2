<!DOCTYPE html>
<html>
<body>

<form method="post">
    <label>Panjang :</label>
    <input type="text" name="panjang" value="<?php echo isset($_POST['panjang']) ? htmlspecialchars($_POST['panjang']) : ''; ?>"><br>

    <label>Lebar :</label>
    <input type="text" name="lebar" value="<?php echo isset($_POST['lebar']) ? htmlspecialchars($_POST['lebar']) : ''; ?>"><br>

    <label>Nilai :</label>
    <input type="text" name="nilai" value="<?php echo isset($_POST['nilai']) ? htmlspecialchars($_POST['nilai']) : ''; ?>"><br><br>

    <input type="submit" name="submit" value="Cetak"><br><br>
</form>

<?php
if (isset($_POST['submit'])) {
    $panjang = intval($_POST['panjang']);
    $lebar = intval($_POST['lebar']);
    $nilai_input = trim($_POST['nilai']);
    
    $nilai_array = explode(" ", $nilai_input);
    $jumlah_diperlukan = $panjang * $lebar;

    if (count($nilai_array) != $jumlah_diperlukan) {
        echo "<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>";
    } else {
        echo "<table border='1' cellspacing='0' cellpadding='11'>";
        $index = 0;
        for ($i = 0; $i < $lebar; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $panjang; $j++) {
                echo "<td>" . htmlspecialchars($nilai_array[$index++]) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
</body>
</html>

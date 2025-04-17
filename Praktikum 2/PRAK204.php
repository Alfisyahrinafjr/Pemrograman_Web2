<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Nilai: <input type="number" name="angka" required
            value="<?php if (isset($_POST['angka'])) echo $_POST['angka']; ?>"><br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $angka = $_POST['angka'];

        if ($angka < 0 || $angka > 999) {
            echo "<h3>Hasil: Anda menginput melebihi limit bilangan</h3>";
        } elseif ($angka == 0) {
            echo "<h3>Hasil: Nol</h3>";
        } elseif ($angka < 10) {
            echo "<h3>Hasil: Satuan</h3>";
        } elseif ($angka >= 10 && $angka < 20) {
            echo "<h3>Hasil: Belasan</h3>";
        } elseif ($angka >= 20 && $angka < 100) {
            echo "<h3>Hasil: Puluhan</h3>";
        } else {
            echo "<h3>Hasil: Ratusan</h3>";
        }
    }
    ?>
</body>
</html>

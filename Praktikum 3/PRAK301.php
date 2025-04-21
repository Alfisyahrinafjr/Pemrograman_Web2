<!DOCTYPE html>
<html lang="en">
<body>
    <form method="post">
        Jumlah Peserta : <input type="number" name="jumlah" value="<?php echo isset($_POST['jumlah']) ? $_POST['jumlah'] : ''; ?>">
        </label><br><input type="submit" name="submit" value="Cetak">
    </form>

    <br>

    <?php
    if (isset($_POST['submit'])) {
        $jumlah = (int) $_POST['jumlah'];
        $i = 1;

        while ($i <= $jumlah) {
            $warna = ($i % 2 == 1) ? "red" : "green";
            echo "<h2 style='color:$warna;'>Peserta ke-$i</h2>";
            $i++;
        }
    }
    ?>
</body>
</html>

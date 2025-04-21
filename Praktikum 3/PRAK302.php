<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Tinggi : <input type="number" name="tinggi" value="<?php echo isset($_POST['tinggi']) ? $_POST['tinggi'] : ''; ?>"><br>
        Alamat Gambar : <input type="text" name="gambar" value="<?php echo isset($_POST['gambar']) ? $_POST['gambar'] : ''; ?>"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

    <br>

    <?php
    if (isset($_POST['submit'])) {
        $tinggi = (int) $_POST['tinggi'];
        $gambar = htmlspecialchars($_POST['gambar']);

        $baris = 1;

        while ($baris <= $tinggi) {
            $spasi = 1;
            while ($spasi < $baris) {
                echo "<span style='display:inline-block;width:30px;'></span>";
                $spasi++;
            }

            $kolom = $tinggi;
            while ($kolom >= $baris) {
                echo "<img src='$gambar' width='30' height='30'>";
                $kolom--;
            }

            echo "<br>";
            $baris++;
        }
    }
    ?>
</body>
</html>

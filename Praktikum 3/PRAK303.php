<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Batas Bawah : <input type="number" name="bawah" value="<?php echo isset($_POST['bawah']) ? $_POST['bawah'] : ''; ?>"><br>
        Batas Atas : <input type="number" name="atas" value="<?php echo isset($_POST['atas']) ? $_POST['atas'] : ''; ?>"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

    <br>

    <?php
    if (isset($_POST['submit'])) {
        $bawah = (int) $_POST['bawah'];
        $atas = (int) $_POST['atas'];

        $star = "star.png";

        $i = $bawah;

        do {
            if ((($i + 7) % 5) == 0) {
                echo "<img src='$star' width='20' height='20'>";
            } else {
                echo "$i ";
            }
            $i++;
        } while ($i <= $atas);
    }
    ?>
</body>
</html>

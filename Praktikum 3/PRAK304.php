<!DOCTYPE html>
<html>
<body>
    <?php
    $jumlah = 0;

    if (isset($_POST['submit'])) {
        $jumlah = (int) $_POST['jumlah'];
    }

    if (isset($_POST['tambah'])) {
        $jumlah = (int) $_POST['jumlah'] + 1;
    }

    if (isset($_POST['kurang'])) {
        $jumlah = (int) $_POST['jumlah'] - 1;
        if ($jumlah < 0) {
            $jumlah = 0; 
        }
    }
    ?>

    <form method="post">
        Jumlah bintang: <input type="number" name="jumlah" value="<?php echo $jumlah; ?>">
        </label><br><input type="submit" name="submit" value="Submit">
    </form>

    <?php if (isset($_POST['submit']) || isset($_POST['tambah']) || isset($_POST['kurang'])): ?>
        <p>Jumlah bintang <?php echo $jumlah; ?></p>

        <?php
        $i = 0;
        while ($i < $jumlah) {
            echo '<img src="star.png" width="150" height="150">';
            $i++;
        }
        ?>

        <form method="post">
            <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
            <input type="submit" name="tambah" value="Tambah">
            <input type="submit" name="kurang" value="Kurang">
        </form>
    <?php endif; ?>
</body>
</html>

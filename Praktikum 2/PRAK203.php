<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Nilai: <input type="number" name="nilai" required value="<?php if (isset($_POST['nilai'])) echo $_POST['nilai']; ?>"><br>

        Dari:<br>
        <input type="radio" name="dari" value="C" <?php if (isset($_POST['dari']) && $_POST['dari'] == 'C') echo 'checked'; ?>> Celcius<br>
        <input type="radio" name="dari" value="F" <?php if (isset($_POST['dari']) && $_POST['dari'] == 'F') echo 'checked'; ?>> Fahrenheit<br>
        <input type="radio" name="dari" value="R" <?php if (isset($_POST['dari']) && $_POST['dari'] == 'R') echo 'checked'; ?>> Reamur<br>
        <input type="radio" name="dari" value="K" <?php if (isset($_POST['dari']) && $_POST['dari'] == 'K') echo 'checked'; ?>> Kelvin<br>

        Ke:<br>
        <input type="radio" name="ke" value="C" <?php if (isset($_POST['ke']) && $_POST['ke'] == 'C') echo 'checked'; ?>> Celcius<br>
        <input type="radio" name="ke" value="F" <?php if (isset($_POST['ke']) && $_POST['ke'] == 'F') echo 'checked'; ?>> Fahrenheit<br>
        <input type="radio" name="ke" value="R" <?php if (isset($_POST['ke']) && $_POST['ke'] == 'R') echo 'checked'; ?>> Reamur<br>
        <input type="radio" name="ke" value="K" <?php if (isset($_POST['ke']) && $_POST['ke'] == 'K') echo 'checked'; ?>> Kelvin<br>

        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
        $hasil = 0;

        switch ($dari) {
            case 'C': $celcius = $nilai; break;
            case 'F': $celcius = ($nilai - 32) * 5/9; break;
            case 'R': $celcius = $nilai * 5/4; break;
            case 'K': $celcius = $nilai - 273.15; break;
        }

        switch ($ke) {
            case 'C': $hasil = $celcius; $satuan = "°C"; break;
            case 'F': $hasil = $celcius * 9/5 + 32; $satuan = "°F"; break;
            case 'R': $hasil = $celcius * 4/5; $satuan = "°R"; break;
            case 'K': $hasil = $celcius + 273.15; $satuan = "°K"; break;
        }

        echo "<h3>Hasil Konversi: " . round($hasil, 1) . " $satuan</h3>";
    }
    ?>
</body>
</html>

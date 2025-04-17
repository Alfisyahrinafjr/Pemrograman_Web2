<!DOCTYPE html>
<body>
    <form action="" method="POST">
        Nama: 1 <input type="text" name="nama1"><br>
        Nama: 2 <input type="text" name="nama2"><br>
        Nama: 3 <input type="text" name="nama3"><br>
        <button type="submit" name="urut">Urutkan</button>
    </form>

    <?php
        if (isset($_POST['urut'])) {
            $n1 = $_POST['nama1'];
            $n2 = $_POST['nama2'];
            $n3 = $_POST['nama3'];
            
            if ($n1 <= $n2 && $n1 <= $n3) {
                if ($n2 <= $n3) {
                    $hasil = [$n1, $n2, $n3];
                } else {
                    $hasil = [$n1, $n3, $n2];
                }
            } elseif ($n2 <= $n1 && $n2 <= $n3) {
                if ($n1 <= $n3) {
                    $hasil = [$n2, $n1, $n3];
                } else {
                    $hasil = [$n2, $n3, $n1];
                }
            } else {
                if ($n1 <= $n2) {
                    $hasil = [$n3, $n1, $n2];
                } else {
                    $hasil = [$n3, $n2, $n1];
                }
            }

            foreach ($hasil as $nama) {
                echo $nama . "<br>";
            }
        }
    ?>
</body>
</html>
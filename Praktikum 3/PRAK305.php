<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <input type="text" name="input_str">
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $input = $_POST['input_str'];
        $panjang = strlen($input);

        echo "<br><strong>Input:</strong><br>";
        echo $input . "<br>";

        echo "<br><strong>Output:</strong><br>";

        $i = 0;
        while ($i < $panjang) {
            $char = $input[$i];
            $output = strtoupper($char); 
            $count = 1;

            while ($count < $panjang) {
                $output .= strtolower($char); 
                $count++;
            }

            echo $output; 
            $i++;
        }
    }
    ?>
</body>
</html>

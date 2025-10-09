<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            Name: <input type="text" name="fnama">
            <input type="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['fnama'];
            if (empty($nama)) {
                echo "Nama tidak boleh kosong";
            } else {
                echo "Halo, {$nama}";
            }
        }
        ?>
    </body>
</html>
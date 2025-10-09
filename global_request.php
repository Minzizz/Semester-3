<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            Nama: <input type="text" name="fnama"><br>
            <input type="submit">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_REQUEST['fnama'];
            if (empty($nama)) {
                echo "Nama tidak boleh kosong";
            } else {
                echo "Halo, {$nama}";
            }
        }
        ?>
    </body>
</html>
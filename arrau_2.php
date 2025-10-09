<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => "Elok Nuk Hamdana",
                'domisili' => "Malang",
                'jenis_kelamin' => "Perempuan"
            ];
            echo "Nama Dosen: " . $Dosen['nama'] . "<br>";
            echo "Domisili: " . $Dosen['domisili'] . "<br>";
            echo "Jenis Kelamin: " . $Dosen['jenis_kelamin'] . "<br>";
        ?>
        <table border="1">
            <tr>
                <th>Dosen</th>
                <th>Domisili</th>
                <th>Jenis Kelamin</th>
            </tr>
            <tr>
                <td><?php echo $Dosen['nama']; ?></td>
                <td><?php echo $Dosen['domisili']; ?></td>
                <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </table>
    </body>
</html>
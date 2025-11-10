<?php
$host = 'localhost';
$port = '5433';
$dbname = 'phpdatabase';
$user = 'postgres';
$pass = 'Azizsudjud101';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

pg_set_client_encoding($conn, "UTF8");

$sql = 'select
        "Nim" as "Nim",
        "Nama" as "Nama",
        "Email" as "Email",
        "Jurusan" as "Jurusan"
    from "TB_mahasiswa"
    order by "Nim"';

$result = pg_query($conn, $sql);
if (!$result) {
    die("Error in SQL query: " . pg_last_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoft" conten="width-device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Daftar Mahasiswa </h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row = pg_fetch_assoc($result)) : ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <?= htmlspecialchars($row["Nim"], ENT_QUOTES, 'UTF-8'); ?>
                </td>
                <td>
                    <?= htmlspecialchars($row["Nama"], ENT_QUOTES, 'UTF-8'); ?>
                </td>
                <td>
                    <?= htmlspecialchars($row["Email"], ENT_QUOTES, 'UTF-8'); ?>
                </td>
                <td>
                    <?= htmlspecialchars($row["Jurusan"], ENT_QUOTES, 'UTF-8'); ?>
                </td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Hapus</a>
                </td>
            </tr>
        <?php $i++;
        endwhile; ?>
    </table>
</body>

</html>
<?php
pg_free_result($result);
pg_close($conn);
?>
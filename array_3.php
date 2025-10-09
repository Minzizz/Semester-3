<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style3.css"/>
    </head>
    <body>
        <h2>Multidimensional Array</h2>
        <table>
            <tr>
                <th>Judul Film</th>
                <th>Tahun</th>
                <th>Rating</th>
            </tr>
            <?php
                $film = [
                    ["Inception", 2010, 8.8],
                    ["The Dark Knight", 2008, 9.0],
                    ["Interstellar", 2014, 8.6]
                ];

                foreach ($film as $f) {
                    echo "<tr>";
                    echo "<td>" . $f[0] . "</td>";
                    echo "<td>" . $f[1] . "</td>";
                    echo "<td>" . $f[2] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>

    </body>
</html>
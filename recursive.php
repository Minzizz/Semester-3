<?php
function tampulAnkga(int $jml, int $idx = 1) {
    echo "Perulangan ke-{$idx}<br>";
    if ($idx< $jml) {
        tampulAnkga($jml, $idx + 1);
    }
}
tampulAnkga(20);

?>
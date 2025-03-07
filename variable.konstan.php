<?php
    // medifinisikan konstan
    define ("phi", 3.14);
    define ("dbname", "inventori");
    define ("dbsrv", "localhost");

    $jari = 7;
    $luas = phi * $jari * $jari;
    $kell = 2 * phi * $jari;

    echo "Luas lingkaran dengan jari " . $jari ." : <br>";
    echo "<br/>kelilingnya: " . $kell . "<br>";
?>
<hr>
<?php
    echo "nama database : " . dbname . "<br>";
    echo "<br/>lokasi database: " . dbsrv . "<br>";
?>
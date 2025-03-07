<?php
    $ar_buah = array("Apel", "Jeruk", "Mangga", "Pisang", "Anggur");
    // menampilkan isi array
    echo $ar_buah[1];
    // menampilkan isi array dengan menggunakan loop
    echo "<br/>jumlah buah: " . count($ar_buah) . "<br>";
    // menampilkan seluruh buah
    echo "<ol>";
    foreach ($ar_buah as $buah) {
        echo "<li>" . $buah . "</li>";
    } echo "</ol>";

    // menambahkan elemen baru pada array
    $ar_buah[] = "Melon";
    $ar_buah[] = "Semangka";

    // menghapus buah index ke 1
    unset($ar_buah[1]);

    // mengubah index ke 2 menjadi "Nanas"
    $ar_buah[2] = "Nanas";

    // menampilkan seluruh buah dengan indexnya 
    echo "<ul>";
    foreach ($ar_buah as $key => $buah) {
        echo "<li>" . $key . " : " . $buah . "</li>";
    } 
    echo "</ul>";
?>
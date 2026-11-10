<?php
    $Nama= "Toko Mimin";
    $Jurusan= "BD-KAB";
    $NIM= "2502020536";

    $Harga = 1500;
    $Qty = 5;
    $Subtotal = $Harga * $Qty;

    $Diskon=0;
    // diskon 5% diberikan apabila subtotal lebih dari 5000
    if($Subtotal>5000){ 
        $Diskon = 0.05;
    }
    $nDiskon = $Subtotal * $Diskon;
    $nTotal = $Subtotal - $nDiskon;

    echo "<br>Nama: " . $Nama;
    echo "<br>Jurusan: " . $Jurusan;
    echo "<br>NIM: " . $NIM;
    echo "<br>Harga: " . $Harga;
    echo "<br>Jumlah: " . $Qty;
    echo "<br>Subtotal: " . $Subtotal;
    echo "<br>Diskon: " . $nDiskon;
    echo "<br>Total: " . $nTotal;
?>
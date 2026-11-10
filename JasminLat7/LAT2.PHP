<?php
    // JSon
    $json_trans = '{
    "idnota":"TR-001",
    "tgl":"2026-05-17",
    "jam":"13:25:20",
    "kasir":"Jasmin",
    "pelanggan":{
        "nama":"Jessica",
        "alamat":"Gang Macan, Kuta",
        "tlp":"087765343583"
     },
     "items":[
     {
     "kodebarang":"B0001",
     "namabarang":"sandal jepit kuda",
     "jenisbarang":"aksesoris",
     "hargajual":200000,
     "qty":20,
     "subtotal":4000000
     },{
     "kodebarang":"B0002",
     "namabarang":"sandal jepit macan",
     "jenisbarang":"aksesoris",
     "hargajual":150000,
     "qty":50,
     "subtotal":7500000
     }
     ],
     "total_item":70,
     "nTotal":11500000
    }';

    $jdata = json_decode($json_trans);

    echo $jdata->idnota;
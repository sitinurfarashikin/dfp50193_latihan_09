<h1>Transaksi </h1>

    
    <?php
    $transaksi = [

        'buat' =>[
        'tarikh' => ' 01 - 10 - 2021 ',
        'perkara' => 'terima barang dari pembekal',
        'masuk' => '100',
        'keluar' => '',
        'baki' => '100',
        ],

        'buat2' =>[
            'tarikh' => ' 03 - 10 - 2021 ',
            'perkara' => 'CBR Enterprice',
            'masuk' => '',
            'keluar' => '30',
            'baki' => '70',
        ]
    ];
    ?>

<table border="5" cellspacing="4">
        <tr>
            <th>Tarikh</th>
            <th>Perkara</th>
            <th>Masuk</th>
            <th>Keluar</th>
            <th>Baki</th>

        </tr>

        <?php
        foreach($transaksi as $done) {
         ?>
         <tr>
             <td><?php echo $done['tarikh']; ?></td>
             <td><?php echo $done['perkara']; ?></td>
             <td><?php echo $done['masuk']; ?></td>
             <td><?php echo $done['keluar']; ?></td>
             <td><?php echo $done['baki']; ?></td>
        </tr>
        <?php
        }
        ?>
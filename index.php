<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }
    </style>
</head>
<body>
<h1>Product </h1>
    <?php
    $air = [
        'nama' => 'Drinking Water ',
        'size' => '500 ml',
        'harga' => '70',
    ];
    ?>

    <table>
        <tr>
            <td>Nama : </td>
            <td><?php echo $air['nama']; ?></td>
        </tr>

        <tr>
            <td>Size : </td>
            <td><?php echo $air['size']; ?></td>
        </tr>

        <tr>
            <td>Harga : </td>
            <td><?php echo $air['harga']; ?> sen </td>
        </tr>
    </table>

    <?php require 'latihan2.php'; ?>

</body>
</html>
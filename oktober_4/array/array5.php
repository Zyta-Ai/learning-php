<?php 

    $data_siswa = [
        [
            "nama" => "Ayanokouji",
            "kelas" => "B",
            "umur" => 18,
        ],
    
        [
            "nama" => "Kariwizawa",
            "kelas" => "B",
            "umur" => 17,
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa SMK Ayanokouji</>

    <table border="1" width="500">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Umur</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            foreach($data_siswa as $item): 

            ?>    

            <tr>
                <td> <?php echo $item['nama']; ?> </td>
                <td> <?=$item['kelas']?> </td>
                <td> <?php echo $item['umur']; ?> </td>
            </tr>


            <?php
                endforeach;
            ?>
        </tbody>
        
    </table>

</body>
</html>
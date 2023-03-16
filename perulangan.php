<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Web Dev Bage - Perulangan</title>
</head>
<body>
    <h2>Masukkan Jumlah Perulangan</h2>
    <form action="perulangan.php" method="post">
        <input type="number" name="angka" placeholder="masukkan jumlah perulangan">
        <input type="submit" name="tambah" value="Tambah">
    </form>
    <br>

    <?php
    require 'Proses.php';

    $angka = $_POST['angka'] ?? 1;
    $data = [];
    $perulangan = new Perulangan();
    
    for ($i =1; $i <= $angka; $i++) {
        $data[] = $perulangan->Hasil($i);
        if ($perulangan->jumlah() == 5) {
            break;
        }
    }
        foreach ($data as $key => $item) :
            $i = $angka;
            echo 'Perulangan ke-' .$key + 1 . ' : ' . '<strong>' . $item . '</strong><br>';
        endforeach;
        
    ?>
</body>
</html>

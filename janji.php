<?php
echo "<head><title>Daftar Pasien</title></head>";

$nama = isset($_POST['name']) ? $_POST['name'] : '';
$telp = isset($_POST['telp']) ? $_POST['telp'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$jam = isset($_POST['jam']) ? $_POST['jam'] : '';
$dokter = isset($_POST['dokter']) ? $_POST['dokter'] : '';

if ($nama && $telp && $email && $email && $tanggal && $jam) {
    $fp = fopen("janjiPasien.txt", "a+");
    fputs($fp, "$dokter | $nama | $telp | $email | $tanggal |  $jam\n");
    fclose($fp);
} else {
    echo "Mohon isi semua data pada form.<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janji</title>
    <link rel="stylesheet" href="styleJanji.css">
</head>
<body>
    <section id="Output-janji">
        <div id="Bungkus">
        <table>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $nama?></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>: <?php echo $telp?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <?php echo $email?></td>
            </tr>
            <tr>
                <td>Tanggal Janji</td>
                <td>: <?php echo $tanggal?></td>
            </tr>
            <tr>
                <td>Jam Janji</td>
                <td>: <?php echo $jam?></td>
            </tr>
        </table>
        </div>
    </section>
    <div id="Tombol">
    <a href="index.html">
    <button>HOME</button>
    </a>    
    </div>
    
</body>
</html>
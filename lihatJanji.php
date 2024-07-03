<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindWell Clinic</title>
    <link rel="stylesheet" href="styleLihat.css">
</head>
<body>
    <header>
        <h1><u>MindWell Clinic</u></h1>
        <nav>
            <ul>
                <li><a href="index.html #jadwal">Jadwal Konsultasi</a></li>
                <li><a href="index.html #buat-janji">Buat Janji</a></li>
                <li><a href="#lihat-janji">Lihat Janji</a></li>
            </ul>
        </nav>
    </header>

    <?php
echo "<head><title>Lihat Janji</title></head>";

$fp = fopen("janjiPasien.txt", "r");

echo "<table class = 'isi' border=0>";
    echo "<tr>
<td class = 'atas'><strong>Dokter</td>
<td class = 'atas'><strong>Nama Pasien</td>
<td class = 'atas'><strong>No.Telepon</td>
<td class = 'atas'><strong>Email</td>
<td class = 'atas'><strong>Tanggal Janji</td>
<td class = 'atas'><strong>Jam Janji</td>
</tr>";

while ($isi = fgets($fp, 1000)) {
    $pisah = explode("|", $isi);

    echo "<tr>
    <td>$pisah[0]</td>
    <td>$pisah[1]</td>
    <td>$pisah[2]</td>
    <td>$pisah[3]</td>
    <td>$pisah[4]</td>
    <td>$pisah[5]</td>
    </tr>";
   
}

echo "</table>";
fclose($fp);
?>
        
    <script src="script.js"></script>

    <footer>
        <p>&copy; 2024 MindWell Clinic. All rights reserved.</p>
    </footer>
</body>
</html>

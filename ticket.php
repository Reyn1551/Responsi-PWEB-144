<?php
$ticketNumber = getTicketNumber();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $data = [
    'nama' => $_POST['nama'],
    'email' => $_POST['email'],
    'telp' => $_POST['telp'],
    'NIK' => $_POST['NIK'],
    'alamat' => $_POST['alamat'],
    'no_ticket' => $ticketNumber,
    'seat' => getSeatNumber()
  ];

  if (file_exists('data/DataPenonton.json')) {
    $json_data = file_get_contents('data/DataPenonton.json');
    $data_array = json_decode($json_data, true);
  } else {
    $data_array = [];
  }

  $data_array[] = $data;

  file_put_contents('data/DataPenonton.json', json_encode($data_array, JSON_PRETTY_PRINT));

}
function getTicketNumber()
{
  $file = "data/ticketNumber.txt";
  if ($file) {
    $lastNumber = file_get_contents($file);
  } else {
    $lastNumber = 0;
  }

  $nextNumber = $lastNumber + 1;

  file_put_contents($file, $nextNumber);

  $ticketNumber = 'PWEB-' . str_pad($nextNumber, 9, '0', STR_PAD_LEFT);

  return $ticketNumber;
}

function getSeatNumber()
{
  $file = "data/ticketNumber.txt";
  if ($file) {
    $lastNumber = file_get_contents($file);
  } else {
    $lastNumber = 0;
  }

  $nextNumber = $lastNumber;

  file_put_contents($file, $nextNumber);
  $seatNumber = $nextNumber;

  return $seatNumber;
}

$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telp = isset($_POST['telp']) ? $_POST['telp'] : '';
$NIK = isset($_POST['NIK']) ? $_POST['NIK'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$seatNumber = getSeatNumber();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ticket Konser</title>
  <link rel="stylesheet" href="style/styleTicket.css">
</head>

<body>
  <div class="cardWrap">
    <div class="card cardLeft">
      <h1>Ticket <span>Konser</span></h1>
      <div class="title">
        <h2><?php echo $ticketNumber ?></h2>
        <span>kode ticket</span>
      </div>
      <div class="name">
        <h2><?php echo $nama ?></h2>
        <span>nama</span>
      </div>
      <div class="seat">
        <h2><?php echo $email ?></h2>
        <span>email</span>
      </div>
    </div>
    <div class="card cardRight">
      <div class="eye">
        <div class="inner-circle">
          <div class="pupil"></div>
        </div>
      </div>
      <div class="number">
        <h3><?php echo $seatNumber ?></h3>
        <span>seat</span>
      </div>
      <div class="barcode"></div>
    </div>
  </div>
    <a class="homeButton" href="index.html">
      <button>Home</button>
    </a>
</body>

</html>
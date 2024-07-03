<?php
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $ticketNumber = isset($_POST['ticketNumber']) ? $_POST['ticketNumber'] : '';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Ticket</title>
        <link rel="stylesheet" href="style/styleTicket.css">
</head>

<body>
        <div id="infoTicket">
            <h1 style="color: black"><?php echo $email?></h1>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
                let email = "<?php echo $email ?>";
                let noTicket = "<?php echo $ticketNumber ?>";

                $.getJSON('data/DataPenonton.json', function (data) {
            
                    let found = false;
                    $.each(data, function (i, data) {
                        if (data.email === email && data.no_ticket === noTicket) {
                        
                            $('#infoTicket').html('<div class="cardWrap"><div class="card cardLeft"><h1>Ticket <span>Konser</span></h1><div class="title"><h2>'+data.no_ticket+'</h2><span>kode ticket</span></div><div class="name"><h2>'+data.nama+'</h2><span>nama</span></div><div class="seat"><h2>'+data.email+'</h2><span>email</span></div></div><div class="card cardRight"><div class="eye"><div class="inner-circle"><div class="pupil"></div></div></div><div class="number"><h3>'+data.seat+'</h3><span>seat</span></div><div class="barcode"></div></div></div><a class="homeButton" href="index.html"><button>Home</button></a>');

                            found = true;
                            return;
                        }
                    });

                    if (!found) {
                        $('#infoTicket').html('<p>Data tiket tidak ditemukan.</p>');
                    }
                });
    </script>
</body>

</html>
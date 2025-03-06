<?php
require_once "Cat.php";
$pet = new Cat("Bobby Kertanegara", 4);
$pet->setDesk("Bobby Kertanegara adalah seekor kucing yang dimiliki oleh Presiden Indonesia Prabowo Subianto. Prabowo menemukan Bobby pada sekitar 2017 di kediamannya di Jalan Kertanegara IV, Jakarta. Karena iba dengan nasib kucing tak bertuan itu, Prabowo pun mengadopsi dan merawatnya. Prabowo memberi nama kucing tersebut dengan nama Bobby. Meski dimiliki sejak 2017, publik baru mengenal Bobby Kertanegara pertengahan 2018.</");
$pet->setImage("https://akcdn.detik.net.id/visual/2024/10/21/bobby-kucing-bobby-prabowo-subianto-1_169.png?w=400&q=90");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hewan Peliharaanku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="display">Fan Page Kucing</h1>
        <div class="row">
            <div class="col-4">
                <h2>
                    <img class="rounded-circle" src="<?php echo $pet->getImage(); ?>" alt="">
                </h2>
            </div>
            <div class="col-8">
                <p><?php echo $pet->getDesk(); ?><p>
            </div>
        </div>
    </div>
</body>

</html>
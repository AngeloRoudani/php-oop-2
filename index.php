<?php


require __DIR__.'/models/AnimalProduct.php';
require __DIR__.'/models/DogProduct.php';
require __DIR__.'/models/CatProduct.php';

$flea = new CatProduct('StopPulci', './img/antipulci.jpg', '34.99 €', 'Medicinale','Adulti');
$flea->getKind('./img/cat.jpg');


$ball = new DogProduct('Pallina','./img/pallina_cane.webp', '5.99 €', 'Giocattolo', 'Ogni Età');
$ball->getKind('./img/dog.png');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Animals Planet</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="card">
                <?php echo $flea->getInfoProduct(); ?>
                
            </div>
            <div class="card">
                <?php echo $ball->getInfoProduct(); ?>
                
            </div>

        </div>
    </main>
</body>
</html>
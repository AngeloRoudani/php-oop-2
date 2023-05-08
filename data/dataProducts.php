<?php 

require_once __DIR__ . '/../Traits/Weightable.php';

$flea = new CatProduct('StopPulci', './img/antipulci.jpg', 34.99 , 'Medicinale','Adulti');
$flea->getKind('./img/cat.jpg');
$flea->setWeight('19-25');


$ball = new DogProduct('Pallina','./img/pallina_cane.webp', '5.99' , 'Giocattolo', 'Ogni Età');
$ball->getKind('./img/dog.png');
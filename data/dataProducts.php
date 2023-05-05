<?php 

require __DIR__ .'/DogProduct.php';
require __DIR__ .'/CatProduct.php';


$flea = new CatProduct('StopPulci', './img/antipulci.jpg', '34.99 €', 'Medicinale','Adulti', './img/cat.jpg');
$ball = new DogProduct('Pallina','./img/pallina_cane.webp', '5.99 €', 'Giocattolo', 'Ogni Età', './img/dog.png');
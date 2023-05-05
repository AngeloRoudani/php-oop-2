<?php 


$flea = new CatProduct('StopPulci', './img/antipulci.jpg', '34.99 €', 'Medicinale','Adulti');
$flea->getKind('./img/cat.jpg');


$ball = new DogProduct('Pallina','./img/pallina_cane.webp', '5.99 €', 'Giocattolo', 'Ogni Età');
$ball->getKind('./img/dog.png');
<?php


require __DIR__.'/models/AnimalProduct.php';
require __DIR__.'/models/DogProduct.php';
require __DIR__.'/models/CatProduct.php';
require __DIR__.'/data/dataProducts.php';
require_once __DIR__ . '/Traits/Weightable.php';


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
                <?php echo $flea->getInfoProduct();?>
                <div>
                <?php echo $flea->getWeight();
                    try {
                        echo $ball->calcDiscount();
                    } catch (Exception $e) {
                        var_dump($e);
                        echo "Si è verificato un errore: " . $e->getMessage();
                    } 
                 ?>
                </div>
                
                
            </div>
            <div class="card">
                <?php echo $ball->getInfoProduct();
                        try {
                            echo $ball->calcDiscount();
                        } catch (Exception $e) {
                            var_dump($e);
                            echo "Si è verificato un errore: " . $e->getMessage();
                        } 
                ?>
                
            </div>

        </div>
    </main>
</body>
</html>
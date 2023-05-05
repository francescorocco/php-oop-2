<?php

require_once __DIR__ . './Models/Product.php';
require_once __DIR__ . './Models/AnimalType.php';
require_once __DIR__ . './Models/AnimalFood.php';
require_once __DIR__ . './Models/AnimalKennel.php';
require_once __DIR__ . './Models/Toy.php';

$dog = new AnimalType('Dog');
$cat = new AnimalType('Cat');


$bouncing_ball = new Toy('Palla rimbalzante', 3, $dog, 'Rosso', "https://m.media-amazon.com/images/I/61oaFtJA3GL._AC_SY355_.jpg");
$bouncing_ball->material = "Plastic";

$purina_premium = new AnimalFood('Purina Premium', 30, $cat, 5, "https://m.media-amazon.com/images/I/71t4mAxmqHL._AC_SL1500_.jpg");
$purina_premium->composition = "Salmone";

$imac_kennel = new AnimalKennel('Cuccia Zeus', 75, $dog, 'Verde', "https://m.media-amazon.com/images/I/51LEAsE-JxL._AC_SY355_.jpg");
$imac_kennel->size = "53 x 46 x 47,6 cm"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style.css"/>
    <title>e-commerce</title>
</head>
<body>
    

    <div class="container d-flex">
        <div class="col-4">
            <?php echo $bouncing_ball->PrintToy()?>

        </div>
        <div class="col-4">
            <?php echo $purina_premium->PrintFood()?>
        </div>
        <div class="col-4">
            <?php echo $imac_kennel->PrintKennel()?>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>l
<?php

require_once __DIR__ . './Models/Product.php';
require_once __DIR__ . './Models/AnimalType.php';
require_once __DIR__ . './Models/AnimalFood.php';
require_once __DIR__ . './Models/AnimalKennel.php';
require_once __DIR__ . './Models/Toy.php';

$dog = new AnimalType();
$dog->name = 'Cane';
$dog->icon = 'fa-solid fa-dog';

$cat = new AnimalType();
$cat->name = 'Gatto';
$cat->icon = 'fa-solid fa-cat';



$bouncing_ball = new Toy('Palla rimbalzante', 3, $dog, 'Rosso', "https://m.media-amazon.com/images/I/61oaFtJA3GL._AC_SY355_.jpg");
$bouncing_ball->material = "Plastic";

$purina_premium = new AnimalFood('Purina Premium', 30, $cat, 5, "https://m.media-amazon.com/images/I/71t4mAxmqHL._AC_SL1500_.jpg");
$purina_premium->composition = "Salmone";

$imac_kennel = new AnimalKennel('Cuccia Zeus', 75, $dog, 'Verde', "https://m.media-amazon.com/images/I/51LEAsE-JxL._AC_SY355_.jpg");
$imac_kennel->size = "53 x 46 x 47,6 cm";


$products =[
            $bouncing_ball,
            $purina_premium,
            $imac_kennel
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>e-commerce</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($products as $product) {?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $product->image ?>" class="card-img-top" alt="<?php $product->name ?>"/>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $product->name?></h3>
                            <p class="card-text">Per: <?php echo $product->animal_type->name?></p>
                            <p class="card-text">Tipologia:<?php echo $product->getClassName()?></p>

                            <?php if ($product->getClassName() == 'Toy') { ?>
                                <p class="card-text">Colore:<?php echo $product->color?></p>
                            <?php } else if($product->getClassName() == 'AnimalKennel') { ?>
                                <p class="card-text">Grandezza:<?php echo $product->size?></p>
                            <?php } else if($product->getClassName() == 'AnimalFood') { ?>
                                <p class="card-text">Peso:<?php echo $product->weight?></p>
                                <p class="card-text">Coposto da:<?php echo $product->composition?></p>
                            <?php } ?>

                            <p class="card-text">Prezzo: <?php echo $product->price ?> €</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>l
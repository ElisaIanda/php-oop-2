<?php
//importo il file 
require_once __DIR__ . "/models/Products.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Food.php";
require_once __DIR__ . "/models/Toys.php";
require_once __DIR__ . "/models/Kennel.php";
require_once __DIR__ . "/models/Dog.php";
require_once __DIR__ . "/models/Cat.php";
require_once __DIR__ . "/db/db.php";
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop-2</title>

    <!-- THIRD PARTY LIBRARIES -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://brandodesign.it/wp-content/uploads/2017/07/logo_S.png"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"aria-current="page" href="toys.php">Toys</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kennel.php">Kennels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="food.php">Food</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        </nav>
    </header>
    <main>
        <div class="container mt-5 pb-5">

            <div class="row row-cols-3 g-5">
                <?php foreach ($toysList as $singleToy) { ?>
                    <div class="col text-center">
                        <div class="card h-100 p-r">
                            <div class="img-animal m-1">
                                <?php echo $singleToy->getCategory() ?>
                            </div>
                            <img src="<?php echo $singleToy->getImg() ?>" class="card-img-top ">
                            <div class="card-body ">
                                <h5 class="card-title mt-3">
                                    <?php echo $singleToy->getName() ?></h5>
                                <p class="card-text my-2">
                                    <b>Prezzo: </b>
                                    <?php echo $singleToy->getPrice() ?> €
                                </p>
                                <p class="card-text my-2">
                                    <b>Sconto: </b>
                                    <?php echo $singleToy->getDiscount() ?> %
                                </p>
                                <p class="card-text my-2">
                                    <b>Risparmi: </b>
                                    <?php echo $singleToy->getdiscountApplicato() ?> €
                                </p>
                                <p class="card-text my-2">
                                    <b>Brand: </b>
                                    <?php echo $singleToy->getBrand() ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </main>
</body>

</html>
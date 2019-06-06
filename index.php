<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sex & Coca & Html</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
    class Product {
        public $name;
        public $price;
        public $image_path;
        public $description;
    }

    $prod1 = new Product();
    $prod1->name = 'Coca';
    $prod1->description = 'This good Chain Coca';
    $prod1->image_path = 'coca.jpg';
    $prod1->price = '50$';

    $prod2 = new Product();
    $prod2->name = 'Coca';
    $prod2->description = 'This good Chain Coca';
    $prod2->image_path = 'coca2.jpg';
    $prod2->price = '50$';

    $prod3 = new Product();
    $prod3->name = 'Coca';
    $prod3->description = 'This good Chain Coca';
    $prod3->image_path = 'coca3.jpg';
    $prod3->price = '50$';

    $prod4 = new Product();
    $prod4->name = 'Coca';
    $prod4->description = 'This good Chain Coca';
    $prod4->image_path = 'coca.jpg';
    $prod4->price = '50$';

    $arrayProducts = [
            $prod1, $prod2, $prod3, $prod4
    ];
?>
    <header class="header">
        <nav class="nav">
            <h2>Sex & Coca</h2>
            <!-- unordered list-->
            <ul class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Gallery</a></li>
            </ul>
        </nav>
    </header>
    <section class="content">
        <?php foreach ($arrayProducts as $product):?>
            <div class="prod_item" style="background-image: url('images/<?php echo $product->image_path?>')">
                <h2><?php echo $product->name?></h2>
<!--                <img src="images/--><?php //echo $product->image_path?><!--" alt="coca">-->
                <h2>Price: <?php echo $product->price?></h2>
                <p><?php echo $product->description?></p>
                <div class="wrap">

                </div>
            </div>
        <?php endforeach;?>

    </section>


    <dl>
        <dt>HTML</dt>
        <dd>This is cool tehnology fo markup text in html stricture</dd>
        <dt>PHP</dt>
        <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat in modi rerum. Culpa cumque, expedita harum modi omnis provident quae quibusdam rem unde vel! Alias autem dolorum earum ex exercitationem expedita fugiat illum labore, laborum libero nesciunt officia omnis quos repellat reprehenderit similique sint sit tenetur, ut veniam! Necessitatibus, pariatur.</dd>
        <dt>JS</dt>
        <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore et ex ipsa laboriosam, minus quos tempore vel! Omnis, optio!</dd>
    </dl>

    <ul>
        <li>
            HTML
            <ul>
                <li>
                    Верстальщик
                </li>
                <li>
                    490$ (5$ for hour) English(intermediate)+200$
                </li>
            </ul>
        </li>
        <li>
            JS
            <ul>
                <li>
                    frontend developer
                </li>
                <li>
                    600$ (5$ for hour) English(intermediate)+200$
                </li>
            </ul>
        </li>
        <li>
            PHP
            <ul>
                <li>
                    full stack developer
                </li>
                <li>
                    1000$ (10$ for hour) English(intermediate)+200$
                </li>
            </ul>
        </li>
    </ul>
</body>
</html>
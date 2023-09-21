<?php


$dog = new Dog();
$cat = new Cat();

$productList = [
    // cibo
    new Food(
        name: "STERILISED Agnello e riso",
        category: $dog->getImg(),
        brand: "Ultra Premium",
        img: "https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001010/1.jpg?tr=q-50,w-554,h-554&v=-1690500536",
        price: 45.90
    ),

    new Food(
        name: "Adult STERILISED INDOOR",
        category: $cat->getImg(),
        brand: "Ultra Premium",
        img: "https://medias.ultrapremiumdirect.com/italy/production/catalog/products/003002/1.jpg?tr=q-50,w-554,h-554&v=752966793",
        price: 39.90
    ),

    new Food(
        name: "PUPPY mini & medium ",
        category: $dog->getImg(),
        brand: "Ultra Premium",
        img: "https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001001/1.jpg?tr=q-50,w-554,h-554&v=1981503595",
        price: 44.90
    ),

    // Giochi
    new Toys(
        name: "Kong Wild Knots Bear Small",
        category: $dog->getImg(),
        brand: "Nature Pet Shop",
        img: "https://www.naturepetshop.it/wp-content/uploads/kong_wild_knots_bear_small_medium.jpg",
        price: 10.90
    ),

    new Toys(
        name: "BECO ROPE",
        category: $dog->getImg(),
        brand: "Nature Pet Shop",
        img: "https://www.naturepetshop.it/wp-content/uploads/becorope-gioco-corda-2nodi-eco-compatibile-.jpg",
        price: 11.90
    ),

    new Toys(
        name: "BECO PELUCHE Estella",
        category: $cat->getImg(),
        brand: "Nature Pet Shop",
        img: "https://www.naturepetshop.it/wp-content/uploads/gioco-cane-in-stoffa-beco-con-squeaker-estella-lelefante.jpg",
        price: 9.99
    ),

    // cuccie

    new Kennel(
        name: "KANAK",
        category: $dog->getImg(),
        brand: "Brando",
        img: "https://brandodesign.it/wp-content/uploads/2017/09/brandodesign_KANAK_LOTO_stu.jpg",
        price: 1200.00
    ),

    new Kennel(
        name: "CAT60 legno",
        category: $cat->getImg(),
        brand: "Brando",
        img: "https://brandodesign.it/wp-content/uploads/2017/08/brandodesign_Cat60_cuccia_rovere_gatto.jpg",
        price: 379.00
    ),

    new Kennel(
        name: "CAT60 plexiglass",
        category: $cat->getImg(),
        brand: "Brando",
        img: "https://brandodesign.it/wp-content/uploads/2021/01/brandodesign_CAT60_cuccia_plexiglas_bianco_CAVALIERA_PRATO_cuscino_pelle_grigio.jpg",
        price: 340.00
    ),


];

$foodList = [

    // Giochi
    new Food(
        name: "STERILISED Agnello e riso",
        category: $dog->getImg(),
        brand: "Ultra Premium",
        img: "https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001010/1.jpg?tr=q-50,w-554,h-554&v=-1690500536",
        price: 45.90
    ),

    new Food(
        name: "Adult STERILISED INDOOR",
        category: $cat->getImg(),
        brand: "Ultra Premium",
        img: "https://medias.ultrapremiumdirect.com/italy/production/catalog/products/003002/1.jpg?tr=q-50,w-554,h-554&v=752966793",
        price: 39.90
    ),

    new Food(
        name: "PUPPY mini & medium ",
        category: $dog->getImg(),
        brand: "Ultra Premium",
        img: "https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001001/1.jpg?tr=q-50,w-554,h-554&v=1981503595",
        price: 44.90
    ),
];

$toysList = [

    // Giochi
    new Toys(
        name: "Kong Wild Knots Bear Small",
        category: $dog->getImg(),
        brand: "Nature Pet Shop",
        img: "https://www.naturepetshop.it/wp-content/uploads/kong_wild_knots_bear_small_medium.jpg",
        price: 10.90
    ),

    new Toys(
        name: "BECO ROPE",
        category: $dog->getImg(),
        brand: "Nature Pet Shop",
        img: "https://www.naturepetshop.it/wp-content/uploads/becorope-gioco-corda-2nodi-eco-compatibile-.jpg",
        price: 11.90
    ),

    new Toys(
        name: "BECO PELUCHE Estella",
        category: $cat->getImg(),
        brand: "Nature Pet Shop",
        img: "https://www.naturepetshop.it/wp-content/uploads/gioco-cane-in-stoffa-beco-con-squeaker-estella-lelefante.jpg",
        price: 9.99
    ),
];

$kennelList = [

    new Kennel(
        name: "KANAK",
        category: $dog->getImg(),
        brand: "Brando",
        img: "https://brandodesign.it/wp-content/uploads/2017/09/brandodesign_KANAK_LOTO_stu.jpg",
        price: 1200.00
    ),

    new Kennel(
        name: "CAT60 legno",
        category: $cat->getImg(),
        brand: "Brando",
        img: "https://brandodesign.it/wp-content/uploads/2017/08/brandodesign_Cat60_cuccia_rovere_gatto.jpg",
        price: 379.00
    ),

    new Kennel(
        name: "CAT60 plexiglass",
        category: $cat->getImg(),
        brand: "Brando",
        img: "https://brandodesign.it/wp-content/uploads/2021/01/brandodesign_CAT60_cuccia_plexiglas_bianco_CAVALIERA_PRATO_cuscino_pelle_grigio.jpg",
        price: 340.00
    ),
];

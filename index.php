<?php

// Restaurant information
$restaurantInfo = [
    'name' => 'Viva',
    'tagline' => 'Authentic Brazilian Cuisine',
    'established' => '2025',
    'description' => 'Welcome to Viva, where traditional Brazilian recipes meet modern culinary innovation. Our chefs prepare each dish with fresh, Brazilian ingredients and passion for authentic flavors.'
];

$featuredItems = [
    [
        'name' => 'Moqueca de Camarão',
        'description' => 'Traditional Bahian shrimp stew with coconut milk, dendê oil, peppers, and cilantro',
        'price' => '$22.00',
        'image' => 'moqueca.jpg'
    ],
    [
        'name' => 'Picanha Grelhada',
        'description' => 'Grilled prime cut of top sirloin cap served with farofa and vinaigrette',
        'price' => '$28.00',
        'image' => 'picanha.jpg'
    ],
    [
        'name' => 'Brigadeiro Gourmet',
        'description' => 'Rich Brazilian chocolate truffle made with condensed milk and Belgian cocoa',
        'price' => '$7.00',
        'image' => 'brigadeiro.jpg'
    ]
];

$currentPage = 'home';
require 'views/home.view.php';
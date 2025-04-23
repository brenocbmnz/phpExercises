<?php
// Full restaurant menu
$fullMenu = [
    'appetizers' => [
        [
            'name' => 'Caldinho de Feijão',
            'description' => 'Savory black bean broth with bits of bacon and cilantro, served in a shot glass',
            'price' => '$7.50'
        ],
        [
            'name' => 'Bolinho de Bacalhau',
            'description' => 'Crispy codfish fritters with herbs and a touch of lime',
            'price' => '$9.00'
        ],
        [
            'name' => 'Salada de Palmito',
            'description' => 'Heart of palm salad with arugula, cherry tomatoes, and Brazil nut vinaigrette',
            'price' => '$8.50'
        ]
    ],
    'mains' => [
        [
            'name' => 'Moqueca de Camarão',
            'description' => 'Bahian-style shrimp stew with coconut milk, peppers, tomatoes, and dendê oil',
            'price' => '$22.00'
        ],
        [
            'name' => 'Feijoada Completa',
            'description' => 'Traditional black bean stew with assorted pork cuts, served with rice, farofa, and orange',
            'price' => '$20.00'
        ],
        [
            'name' => 'Bobó de Camarão',
            'description' => 'Shrimp in a creamy cassava purée with coconut milk, peppers, and dendê oil',
            'price' => '$23.00'
        ],
        [
            'name' => 'Picanha Grelhada',
            'description' => 'Grilled top sirloin cap served with farofa, chimichurri, and vinaigrette',
            'price' => '$26.00'
        ],
        [
            'name' => 'Escondidinho de Carne Seca',
            'description' => 'Shredded sun-dried beef baked under a manioc and cheese purée crust',
            'price' => '$18.50'
        ]
    ],
    'desserts' => [
        [
            'name' => 'Brigadeiro Gourmet',
            'description' => 'Silky Brazilian chocolate truffle with Belgian cocoa and chocolate sprinkles',
            'price' => '$7.00'
        ],
        [
            'name' => 'Quindim',
            'description' => 'Glossy baked coconut and egg yolk custard, sweet and rich',
            'price' => '$6.50'
        ],
        [
            'name' => 'Pudim de Leite',
            'description' => 'Velvety condensed milk flan with a golden caramel topping',
            'price' => '$7.50'
        ]
    ],
    'drinks' => [
        [
            'name' => 'Caipirinha',
            'description' => 'Brazil’s iconic cocktail with cachaça, lime, and sugar',
            'price' => '$8.00'
        ],
        [
            'name' => 'Guaraná Antártica',
            'description' => 'Classic Brazilian soft drink made from guaraná fruit',
            'price' => '$3.50'
        ],
        [
            'name' => 'Café Brasileiro',
            'description' => 'Strong Brazilian coffee served in a demitasse cup',
            'price' => '$2.50'
        ]
    ]
];


$currentPage = 'menu';
require 'views/menu.view.php';

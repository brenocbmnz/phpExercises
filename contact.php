<?php
$contactInfo = [
    'address' => '123 Tropical Lane, Brazilian Quarter',
    'city' => 'Foodville',
    'zip' => '12345',
    'phone' => '+1 (555) 123-4567',
    'email' => 'info@vivabrazil.com',
    'hours' => [
        'Monday - Thursday' => '11:00 AM - 10:00 PM',
        'Friday - Saturday' => '11:00 AM - 11:00 PM',
        'Sunday' => '12:00 PM - 9:00 PM'
    ],
    'mapLink' => 'https://maps.example.com/vivabrazil'
];

$currentPage = 'contact';
require 'views/contact.view.php';

<?php

$telefoons = [
    ['merk' => 'Samsung', 'titel' => 'Galaxy S10', 'prijs' => '600'],
    ['merk' => 'Apple', 'titel' => 'Iphone 10', 'prijs' => '700'],
    ['merk' => 'Redmi', 'titel' => 'Note 8', 'prijs' => '700']
];

$total = 0;

foreach ($telefoon as $telefoons) {
    echo $telefoon['prijs'];
    $total = $total + $telefoon['prijs'];
}

echo $total;
?>
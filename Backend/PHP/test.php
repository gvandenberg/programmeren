<?php



$cursussen = [
    ['Naam' => 'Programmeren', 'Duur' => '2 uur', 'Datum' => '25/03/2021'],
    ['Naam' => 'Programmeren', 'Duur' => '2 uur', 'Datum' => '25/03/2021'],
    ['Naam' => 'Programmeren', 'Duur' => '2 uur', 'Datum' => '25/03/2021']
];


foreach ($cursussen as $cursus) {
    echo $cursus['Naam']. '<br>';
}
?>
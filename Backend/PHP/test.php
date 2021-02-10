<?php



$cursus = [
    ['Naam' => 'Programmeren', 'Duur' => '2 uur', 'Datum' => '25/03/2021'],
    ['Naam' => 'Programmeren', 'Duur' => '2 uur', 'Datum' => '25/03/2021'],
    ['Naam' => 'Programmeren', 'Duur' => '2 uur', 'Datum' => '25/03/2021']
];


foreach ($cursus as $cursu) {
    echo $cursu['Naam']. '<br>';
}
?>
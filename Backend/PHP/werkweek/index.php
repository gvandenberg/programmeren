<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Overzicht Werkweek</h1>
<form action="" method="post">
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Uren</th>
                <th>Minuten</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Maandag</td>
                <td><input type="number" name="maandaguren" id="day1" value="<?php if(isset($_POST['maandaguren'])){echo $_POST['maandaguren'];} else {echo 0;}?>" required></td>
                <td><input type="number" name="maandagminuten" id="day" value="<?php if(isset($_POST['maandagminuten'])){echo $_POST['maandagminuten'];} else {echo 0;}?>" required></td>
            </tr>
            <tr>
                <td>Dinsdag</td>
                <td><input type="number" name="dinsdaguren" id="day" value="<?php if(isset($_POST['dinsdaguren'])){echo $_POST['dinsdaguren'];} else {echo 0;}?>" required></td>
                <td><input type="number" name="dinsdagminuten" id="day" value="<?php if(isset($_POST['dinsdagminuten'])){echo $_POST['dinsdagminuten'];} else {echo 0;}?>" required></td>
            </tr>
            <tr>
                <td>Woensdag</td>
                <td><input type="number" name="woensdaguren" id="day" value="<?php if(isset($_POST['woensdaguren'])){echo $_POST['woensdaguren'];} else {echo 0;}?>" required></td>
                <td><input type="number" name="woensdagminuten" id="day" value="<?php if(isset($_POST['woensdagminuten'])){echo $_POST['woensdagminuten'];} else {echo 0;}?>" required></td>
            </tr>
            <tr>
                <td>Donderdag</td>
                <td><input type="number" name="donderdaguren" id="day" value="<?php if(isset($_POST['donderdaguren'])){echo $_POST['donderdaguren'];} else {echo 0;}?>" required></td>
                <td><input type="number" name="donderdagminuten" id="day" value="<?php if(isset($_POST['donderdagminuten'])){echo $_POST['donderdagminuten'];} else {echo 0;}?>" required></td>
            </tr>
            <tr>
                <td>Vrijdag</td>
                <td><input type="number" name="vrijdaguren" id="day" value="<?php if(isset($_POST['vrijdaguren'])){echo $_POST['vrijdaguren'];} else {echo 0;}?>" required></td>
                <td><input type="number" name="vrijdagminuten" id="day" value="<?php if(isset($_POST['vrijdagminuten'])){echo $_POST['vrijdagminuten'];} else {echo 0;}?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="bereken"></td>
            </tr>
        </tbody>
    </table>

</form>


<?php

if (isset($_POST['submit'])){
$maandag = ($_POST['maandaguren']*60) + $_POST['maandagminuten'];
$dinsdag = ($_POST['dinsdaguren']*60) + $_POST['dinsdagminuten'];
$woensdag = ($_POST['woensdaguren']*60) + $_POST['woensdagminuten'];
$donderdag = ($_POST['donderdaguren']*60) + $_POST['donderdagminuten'];
$vrijdag = ($_POST['vrijdaguren']*60) + $_POST['vrijdagminuten'];

$getallen = array("maandag"=>$maandag, "dinsdag"=>$dinsdag, "woensdag"=>$woensdag, "donderdag"=>$donderdag, "vrijdag"=>$vrijdag);
$totaalwerkdagen = count($getallen);
$max = max(array_keys($getallen));
$totaalmin = array_sum($getallen);

$uren = (int)($totaalmin / 60);
$minuten = $totaalmin - ($uren * 60);
$tijd = $uren." uur en ".$minuten." minuten" ;

echo "<table>
        <tbody>
            <tr>
                <td>Aantal werkdagen: </td>
                <td>$totaalwerkdagen</td>
            </tr>
            <tr>
                <td>Totale werktijd: </td>
                <td>$tijd</td>
            </tr>
            <tr>
                <td>Langste werkdag: </td>
                <td>$max</td>
            </tr>
        </tbody>
      </table>";

}
?>

</body>
</html>
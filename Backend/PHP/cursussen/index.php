<?php include 'includes/header.php'; ?>
<?php if (isset($_SESSION['ingelogd'])){
    echo 'Welkom ' .$_SESSION['ingelogd'];
}
?>
<form method="post" action="">
    <input type="text" name="naam" placeholder="Wat is je naam?"><br>
    <table class="table table-hover table-sm w-auto">
        <thead>
            <tr>
                <th>Cursus</th>
                <th>Omschrijving</th>
                <th>Prijs</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        <?php

            $items = [
                ['cursus' => 'Dreamwaver', 'omschrijving' => 'Basis webdesign', 'prijs' => '120'],
                ['cursus' => 'Javascript', 'omschrijving' => 'Programmeren in de browser', 'prijs' => '90'],
                ['cursus' => 'PHP', 'omschrijving' => 'Programmeren op de server', 'prijs' => '150'],
                ['cursus' => 'Dreamwaver Eindwerk', 'omschrijving' => 'Webdesign in de praktijk', 'prijs' => '180'],
                ['cursus' => 'Dreamwaver', 'omschrijving' => 'Webdesign thuis', 'prijs' => '280']
            ];


foreach ($items as $item) {
    echo "
    <tr>
        <td>".$item['cursus']."</td>
        <td>".$item['omschrijving']."</td>
        <td>€".$item['prijs']."</td>
        <td>";
    if (isset($_SESSION['ingelogd'])){
        echo "<input type='submit' value='Inschrijven'>";
    }
    echo "</td>
    </tr>";
}

echo "</tbody></table>
</form>";

if ($_POST) {
    if($_POST['naam']) {
        echo "Beste ".$_POST['naam'].", je hebt je ingeschreven voor een hele vreemde cursus";
    } else {
        echo "Iemand heeft zich ingeschreven voor een hele vreemde cursus";
    }
}


?>
        <?php include 'includes/footer.php'; ?>
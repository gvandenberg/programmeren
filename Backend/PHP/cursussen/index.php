    <?php include 'includes/header.php'; 

    if (isset($_SESSION['ingelogd'])){

        print '<a href="index.php">Home</a>
                <a href="uitloggen.php">Uitloggen</a>';

        } else {
        header('Location: inloggen.php');
    }
    ?>
    
    <?php if (isset($_SESSION['ingelogd'])){
        echo 'Welkom ' .$_SESSION['ingelogd'];
    }
    ?>

    <form method="post" action="">
    
            <input type="text" name="naam" placeholder="Wat is je naam?">
    
            <p></p>
    
            <table border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td>Cursus</td>
                    <td>Omschrijving</td>
                    <td>Prijs</td>
                    <td>&nbsp;</td>
                </tr>
    
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
            <td>
                <input type='submit' value='Inschrijven'>
            </td>
        </tr>";
    }
    
    echo "</table>
    </form>";
    
    if ($_POST) {
        if($_POST['naam']) {
            echo "Beste ".$_POST['naam'].", je hebt je ingeschreven voor een hele vreemde cursus";
        } else {
            echo "Iemand heeft zich ingeschreven voor een hele vreemde cursus";
        }
    }
    
    
    ?>
            
    
    </body>
    </html>




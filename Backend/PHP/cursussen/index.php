<?php include 'includes/header.php'; ?>
<?php if (isset($_SESSION['ingelogd'])){
    echo 'Welkom ' .$_SESSION['ingelogd'];
}
?>
<form method="post" action="">
    <input type="text" name="naam" placeholder="Wat is je naam?"><br>
    <table class="table table-hover table-sm w-auto m-2">
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
                $conn = mysqli_connect('localhost','root','','trainingen');
                $sql = "SELECT * FROM cursussen";
                $result = mysqli_query($conn, $sql);


                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                        <td>".$row['cursus']."</td>
                        <td>".$row['omschrijving']."</td>
                        <td>€".$row['prijs']."</td>
                        <td>";
                    if (isset($_SESSION['ingelogd'])){
                        echo "<input type='submit' value='Inschrijven'>";
                    }
                } 
            


            
                echo "</td>
                </tr>";
            

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
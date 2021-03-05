<?php


$id = $_GET['id'];
$conn = mysqli_connect('localhost','root','','trainingen');
$sql = "SELECT * FROM cursussen where id='$id'";
$result = mysqli_query($conn, $sql);


echo '<table>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<form method="POST">
    <div class="form-group">
        <label for="cursus">Cursus:</label>
        <input type="text" class="form-control" id="cursus" name="cursus" value="' . $row['cursus']. '" required>
    </div>
        <div class="form-group">
        <label for="omschrijving">Omschrijving:</label>
        <input type="text" class="form-control" id="omschrijving" name="omschrijving" value="' . $row['omschrijving']. '" required>
    </div>
    <div class="form-group">
        <label for="prijs">Prijs:</label>
        <input type="text" class="form-control" id="prijs" name="prijs" value="' . $row['prijs']. '" required>
    </div>
    <input type="submit" class="btn btn-default" value="bewerken" name="edit">
</form>';
}
echo '</tr>
</table';


if (isset($_POST['edit'])) {
    
    $cursus = $_POST['cursus'];
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];

    $sql = "UPDATE cursussen SET cursus='$cursus',omschrijving='$omschrijving',prijs='$prijs' WHERE id='$id'";

    
    if (mysqli_query($conn, $sql)) {
        echo "Bewerkt!";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: index.php");


}
?>





<?php



?>
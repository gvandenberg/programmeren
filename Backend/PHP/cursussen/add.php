<?php include 'includes/header.php'; ?>
<form method="POST">
    <div class="form-group">
        <label for="cursus">Cursus:</label>
        <input type="text" class="form-control" id="cursus" name="cursus" required>
    </div>
        <div class="form-group">
        <label for="omschrijving">Omschrijving:</label>
        <input type="text" class="form-control" id="omschrijving" name="omschrijving" required>
    </div>
    <div class="form-group">
        <label for="prijs">Prijs:</label>
        <input type="text" class="form-control" id="prijs" name="prijs" required>
    </div>
    <input type="submit" class="btn btn-default" value="toevoegen">
</form>

<?php

if ($_POST) {
    $conn = mysqli_connect('localhost','root','','trainingen');
    if(!$conn){
        die('Kan niet met de server verbinden!:' .mysql_error());
    }

    $cursus = $_POST['cursus'];
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];

    $sql = "INSERT INTO cursussen(cursus,omschrijving,prijs) 
     VALUES ('$cursus','$omschrijving','$prijs')";

    
    if (mysqli_query($conn, $sql)) {
        echo "Toegevoegd!";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: index.php");
}


?>
<?php include 'includes/header.php'; ?>
<form method="POST">
    <div class="form-group">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
        <div class="form-group">
        <label for="password">Wachtwoord:</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    </div>
        <div class="form-group">
        <label for="password1">Wachtwoord herhalen:</label>
        <input type="password" class="form-control" id="password1" name="password1" required>
    </div>
    <div class="form-group">
        <label for="naam_voluit">Volledige naam:</label>
        <input type="text" class="form-control" id="naam_voluit" name="naam_voluit" required>
    </div>
    <input type="submit" class="btn btn-default" value="Registreren">
</form>

<?php

if ($_POST) {
    $conn = mysqli_connect('localhost','root','','trainingen');
    if(!$conn){
        die('Kan niet met de server verbinden!:' .mysql_error());
    }


    $username = $_POST['username'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];
    $naam_voluit = $_POST['naam_voluit'];

    if ($password == $password1) {
        $sql = "INSERT INTO users(username,password,naam_voluit) 
        VALUES ('$username','$password','$naam_voluit')";

    
        if (mysqli_query($conn, $sql)) {
            echo "Geregistreerd!";
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        mysqli_close($conn);
        header("Location: inloggen.php");
    } else {
        echo 'Wachtwoorden komen niet overeen!';
    }

    
}


?>
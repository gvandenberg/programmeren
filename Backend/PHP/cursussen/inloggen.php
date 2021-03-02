<?php include 'includes/header.php'; ?>    
    
<form action="" method="post">
  <div class="mb-3 col-lg-2">
    <label for="InputUsername" class="form-label">Gebruikersnaam</label>
    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 col-lg-2">
    <label for="InputPassword" class="form-label">Wachtwoord</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>


    <?php
    if ($_POST){
        $conn = mysqli_connect('localhost','root','','trainingen');
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        $username = FALSE;

        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['username'] == $_POST['username']) {
                $username = TRUE;
                if ($row['password'] == $_POST['password']) {
                    $_SESSION['ingelogd'] = $row['username'];
                    header('Location: index.php');
                } else {
                    echo 'Verkeerd wachtwoord';
                }
            }
        } 
        if ($username == FALSE){
            echo 'Je gebruiksnaam klopt niet!';
        }
    }

        


    ?>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/header.php'; ?>    
    
    <form action="" method="POST">
        <input type="text" placeholder="gebruikersnaam" name="username">
        <input type="password" placeholder="wachtwoord" name="password">
        <input type="submit" name="submit" value="inloggen">
    </form>


    <?php
        if($_POST) {

        $users = [
            ['username' => 'admin', 'password' => 'admin'],
            ['username' => 'gert', 'password' => 'gert'],
            ['username' => 'marten', 'password' => 'marten']
        ];

        $username = 'false';

        foreach ($users as $user) {
            if ($user['username'] == $_POST['username']) {
                $username = 'true';
                if ($user['password'] == $_POST['password']) {
                    $_SESSION['ingelogd'] = $user['username'];
                    header('Location: index.php');
                } else {
                    echo 'Verkeerd wachtwoord';
                }

            }
        } 
        
        if ($username == 'false'){
            echo 'Je gebruiksnaam klopt niet!';
        }
            
        }

        


    ?>
</body>
</html>
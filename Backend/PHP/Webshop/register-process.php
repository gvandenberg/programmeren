<?php

require ('helper.php');
// error variable.
$error = array();

$firstName = validate_input_text($_POST['firstName']);
if (empty($firstName)){
    $error[] = "U heeft geen voornaam ingevuld!";
}

$lastName = validate_input_text($_POST['LastName']);
if (empty($lastName)){
    $error[] = "U heeft geen achternaam ingevuld!";
}

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "U heeft geen E-mailadres ingevuld!";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "U heeft geen wachtwoord ingevuld!";
}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)){
    $error[] = "U moet het wachtwoord nog een keer herhalen!";
}

$files = $_FILES['profileUpload'];
$profileImage = upload_profile('./assets/profile/', $files);

if(empty($error)){
    // register a new user
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require ('database/mysqli_connect.php');

    // make a query
    $query = "INSERT INTO user (user_id, first_name, last_name, email, password, profileImage, registerDate )";
    $query .= "VALUES(' ', ?, ?, ?, ?, ?, NOW())";

    // initialize a statement
    $q = mysqli_stmt_init($conn);

    // prepare sql statement
    mysqli_stmt_prepare($q, $query);

    // bind values
    mysqli_stmt_bind_param($q, 'sssss', $firstName, $lastName, $email, $hashed_pass, $profileImage);

    // execute statement
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q) == 1){

        // start a new session
        session_start();

        // create session variable
        $_SESSION['user_id'] = mysqli_insert_id($conn);

        header('location: login.php');
        exit();
    }else{
        print "Error while registration...!";
    }

}else{
    echo 'not validate';
}



















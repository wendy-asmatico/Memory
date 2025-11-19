<?php

require_once '../config/db.php';

function registerUser($db, $username, $password) {


    $stmt = $db->prepare("SELECT * FROM Users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        return "Nom utilisateur déjà pris.";
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $db->prepare("INSERT INTO Users (username, password_hash) VALUES (:username, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashedPassword);

    if ($stmt->execute()) {
        return "Inscription réussie ! Vous pouvez maintenant vous connecter.";
        exit();
    } else {
        return "Erreur lors de l'inscription. Veuillez réessayer.";
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $message = registerUser($db, $username, $password);
    echo "<script>alert('$message'); window.location.href = '../index.php';</script>";
}


?>
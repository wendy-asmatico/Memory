<?php

require_once '../config/db.php';
session_start();

function loginUser($db, $username, $password) {
    // Récupérer l'utilisateur depuis la base de données
    $stmt = $db->prepare("SELECT * FROM Users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() === 0) {
        return "Nom d'utilisateur ou mot de passe incorrect.";
    }

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier le mot de passe
    if (password_verify($password, $user['password_hash'])) {
        // Démarrer la session et stocker les informations de l'utilisateur
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        return "Connexion réussie !";
        header("Location: ../index.php");
        exit();
    } else {
        return "Nom d'utilisateur ou mot de passe incorrect.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $message = loginUser($db, $username, $password);
    echo "<script>alert('$message'); window.location.href = '../index.php';</script>";
}

?>
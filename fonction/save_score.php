<?php

session_start();
require_once '../config/db.php';

function score($db, $user_id, $level, $time) {

    if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

$stmt = $db->prepare("INSERT INTO scores (users_id, level, time) VALUES (:user_id, :level, :time)");

    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':level', $level);
    $stmt->bindParam(':time', $time);
    if ($stmt->execute()) {
        return "Score enregistré avec succès !";
        header("Location: ../classement.php");
        exit();
    } else {
        return "Erreur lors de la sauvegarde du classement. Veuillez réessayer.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$user_id = $_SESSION['user_id'];
$level = intval($_POST['level'] ?? 1);
$time = intval($_POST['time'] ?? 0);

    $message = score($db, $user_id, $level, $time);
    echo "<script>alert('$message'); window.location.href = '../index.php';</script>";
}

?>
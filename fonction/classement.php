<?php

require_once './config/db.php';

function getLeaderboard($db) {
    $stmt = $db->prepare("SELECT u.username, s.level, s.time 
                          FROM scores s 
                          JOIN users u ON s.users_id = u.id 
                          ORDER BY s.time ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$scores = getLeaderboard($db);
?>
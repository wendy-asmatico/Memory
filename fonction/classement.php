<?php

require_once './config/db.php';

function getLeaderboardLevel1($db) {
    $stmt = $db->prepare("SELECT u.username, s.level, s.time 
                          FROM scores s 
                          JOIN users u ON s.users_id = u.id 
                        WHERE s.level = 1
                          ORDER BY s.time ASC
                          LIMIT 20");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getLeaderboardLevel2($db) {
    $stmt = $db->prepare("SELECT u.username, s.level, s.time 
                          FROM scores s 
                          JOIN users u ON s.users_id = u.id 
                        WHERE s.level = 2
                          ORDER BY s.time ASC
                          LIMIT 20");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getLeaderboardLevel3($db) {
    $stmt = $db->prepare("SELECT u.username, s.level, s.time 
                          FROM scores s 
                          JOIN users u ON s.users_id = u.id 
                        WHERE s.level = 3
                          ORDER BY s.time ASC
                            
                          LIMIT 20");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUserScores($db, $userId) {
    $stmt = $db->prepare("SELECT level, time 
                          FROM scores 
                          WHERE users_id = :userId 
                          ORDER BY level ASC");
    $stmt->bindParam(':userId', $userId);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Récupérer les classements pour chaque niveau

$scores1 = getLeaderboardLevel1($db);
$scores2 = getLeaderboardLevel2($db);
$scores3 = getLeaderboardLevel3($db);

// Mets le temps en minutes 

function formatTime($timeInSeconds) {
    $minutes = floor($timeInSeconds / 60);
    $seconds = $timeInSeconds % 60;
    return sprintf("%02d:%02d", $minutes, $seconds);
}


?>
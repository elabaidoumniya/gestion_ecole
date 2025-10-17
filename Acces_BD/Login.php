<?php
require_once 'connexion.php';

function login($email, $password) {
    $conn = Connect();
    $sql = "SELECT * FROM utilisateurs WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}

function logout() {
    session_destroy();
}
?>

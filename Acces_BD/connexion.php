<?php
function Connect() {
    $env = parse_ini_file('.env');
    $serveur = $env['serveur'];
    $utilisateur = $env['utilisateur'];
    $password = $env['password'];
    $db_name = $env['db_name'];
    
    $conn = new mysqli($serveur, $utilisateur, $password, $db_name);
    
    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }
    return $conn;
}
?>

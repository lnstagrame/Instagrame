<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Vérifier si l'utilisateur est sur un ordinateur
if (strpos($user_agent, 'Windows') !== false || strpos($user_agent, 'Macintosh') !== false || strpos($user_agent, 'Linux') !== false) {
  header('Location: page-ordinateur.php');
  exit;
} else {
  // Afficher un message d'erreur en HTML
  echo '<html><body><h1>Erreur</h1><p>Cette page n\'est pas accessible depuis un téléphone portable ou une tablette.</p></body></html>';
  exit;
}
?>

<?php

require __DIR__.'/session.php';

$user = $_SESSION['user'] ?? null;

if (!$user) {
    header('location: login.php');
    exit;
}

?>

<h1>Página protegida</h1>

<p>Olá, <?php echo $user['email'];?></p>

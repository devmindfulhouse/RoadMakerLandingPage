<?php

require 'credential.php';

try {
    $bdd = new PDO('mysql:host=localhost;dbname=roadmaker;charset=utf8', $user, $password);
} catch (Exception $e) {

    die('Erreur : ' . $e->getMessage());
}

?>

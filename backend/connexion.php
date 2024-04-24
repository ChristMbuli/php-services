<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try {

    $conn = new PDO('mysql:host=b99n3bpodbzuzb2y1dwp-mysql.services.clever-cloud.com;dbname=b99n3bpodbzuzb2y1dwp;charset=utf8;', 'ukafny7tmbob0kpv', 'UDMydmpbyyvWbDWRRHIg');

} catch (Exception $e) {
    die('Erreur de connexion: ' . $e->getMessage());
}

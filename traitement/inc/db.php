<?php

//connexioin à la base de donnée
$pdo = new PDO("mysql:host=localhost;dbname=Planning", "root", "");

//récuperation d'erreur
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
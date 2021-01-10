<?php
$base = new PDO('mysql:host=localhost;dbname=tutorat_bdd', 'root', 'root');
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>
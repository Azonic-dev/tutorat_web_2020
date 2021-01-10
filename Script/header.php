<?php
$base = new PDO('mysql:host=localhost;dbname=tutorat_bdd', 'root', 'root');
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tutorat Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="Asset/css/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/22b44f4659.js" crossorigin="anonymous"></script>

</head>
<div class="row">
    <nav class="navbar navbar-dark " style="background-color: #1976D2">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-laptop-code fa-2x"></i>
                <strong>Tutorat Web</strong>
            </a>
        </div>
    </nav>
</div>
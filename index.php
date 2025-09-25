<?php
var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beispiel</title>
</head>
<body>
    <header>Beispiel
        <nav>
            <a href="?page=main">Startseite</a>
            <a href="?page=seite_1">Seite 1</a>
            <a href="#">Seite 2</a>
        </nav>
    </header>
    <main>
        <?php require 'content/' . $_GET['page'] . '.html'; ?>
    </main>
    <footer>Copyright 2025 (C)</footer>
</body>
</html>
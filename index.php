<?php
var_dump($_GET);

$navigation = [
        'main' => 'Startseite',
    'seite_1' => 'Seite 1',
];

$filename = 'content/main.html';

if(isset($_GET['page'])) {
    $filename = 'content/' . $_GET['page'] . '.html';
}
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
            <?php foreach ($navigation as $file => $label) { ?>
                    <a href="?page=<?php echo $file; ?>"><?php echo $label; ?></a>
            <?php } ?>
        </nav>
    </header>
    <main>
        <?php require $filename; ?>
    </main>
    <footer>Copyright 2025 (C)</footer>
</body>
</html>
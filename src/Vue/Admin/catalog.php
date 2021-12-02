<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/normalize.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/css/Admin/fragment/menu.css">
    <link rel="stylesheet" href="../../../public/css/Admin/catalog.css">
    <title>Catalogue</title>
</head>
<body>
    <div class="containerGeneral">
    <?php require_once('fragment/menu.php') ?>

    <div class="container">
        <div class="catalog">
            <h2>Liste des livres du catalogue</h2>
            <div class="import">
                <h3>Importer la liste des livres disponible</h3>
                <button id="importJson">Importer</button>
            </div>
        </div>
    </div>
    <script src="../../../public/js/Admin/catalog.js"></script>
</body>
</html>
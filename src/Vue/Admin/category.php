<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/normalize.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/Admin/fragment/menu.css">
    <link rel="stylesheet" href="../../public/css/Admin/catalog.css">
    <title>Gestion des catégories</title>
</head>
<body>
    <div class="containerGeneral">
    <?php require_once('fragment/menu.php') ?>

    <div class="container">
        <div class="formCategories">
            <h2>Gestion des catégories</h2>
            <fieldset>
                <legend>Ajout de catgorie</legend>
                <form action="CategoryController.php" method="POST">
                    <label for="categoryName">Nom de la catégorie</label>
                    <input type="text" name="categoryName" id="categoryName">
                    <input type="submit" value="Ajouter">
                </form>
            </fieldset>
        </div>
        <!-- <?php if ($categories) 
        {
           foreach($categories->fetch() as $category)
           {
               echo '<div>';
               echo $category;
               echo '</div>';
           }
        }
        ?> -->
    </div>
</body>
</html>
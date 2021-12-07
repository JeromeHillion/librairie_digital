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
    <link rel="stylesheet" href="../../public/css/Admin/category.css">
    <title>Gestion des catégories</title>
</head>

<body>
    <div class="containerGeneral">
        <?php require_once('fragment/menu.php') ?>

        <div class="container">
            <div class="formCategories">
                <h2 class="primary-color">Gestion des catégories</h2>
                <h3 class="secondary-color">Ajout de catégorie</h3>
                <form method="$_POST">
                    <input type="text" name="categoryName" id="categoryName" placeholder="Entrer le nom de la catégorie ...">
                    <input type="submit" id="btnAdd" value="Ajouter">
                </form>
            </div>
           
                <table>
                    <thead>
                        <tr>
                            <th width="50rem">Id</th>
                            <th width="800rem">Catégorie</th>
                            <th width="130rem">Action</th>
                        </tr>
                    </thead>
                    <tbody id="dataCategories">
                            
                    </tbody>
                </table>
            
        </div>
        <script src="../../public/js/Admin/category.js"></script>
</body>

</html>
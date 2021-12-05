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
    <link rel="stylesheet" href="../../public/css/Admin/book.css">
    <title>Catalogue</title>
</head>

<body>
    <div class="containerGeneral">
        <?php require_once('fragment/menu.php') ?>

        <div class="container">
            <div class="book">
                <h2>Ajout de livre</h2>
                <h3>Veuillez renseigner les champs suivants</h3>

                <form action="">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="">

                    <label for="isbn">ISBN</label>
                    <input type="text" name="isbn" id="">

                    <div class="section">
                    
                    <label for="category">Choisisser une catégorie :</label>
                    <select name="category">
                        <option value="">Choisisser une catégorie</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="hamster">Hamster</option>
                        <option value="parrot">Parrot</option>
                        <option value="spider">Spider</option>
                        <option value="goldfish">Goldfish</option>
                    </select>

                    <label for="author">Auteur</label>
                    <input type="text" name="author" id="">

                    </div>

                    <label for="cover">Image</label>
                    <input type="text" name="cover" id="">

                    <label for="publication">Date de publication</label>
                    <input type="date" name="publication" id="">

                    <label for="summary">Résumé</label>
                    <input type="text" name="summary" id="">
                </form>

            </div>
        </div>

</body>

</html>
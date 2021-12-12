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
                <h2 class="primary-color">Ajout de livre</h2>
                <h3 class="secondary-color">Veuillez renseigner les champs suivants</h3>

                <form>
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name">

                    <label for="isbn">ISBN</label>
                    <input type="text" name="isbn" id="isbn">

                    
                    <label for="category">Choisisser une catégorie :</label>
                   
                    <select name="category">
                    <?php foreach($categories as $category) : ?>
                        <option id="categorye" value=""><?=$category['name']?></option>
                        <?php endforeach; ?>
                    </select>

                    <label for="author">Auteur</label>
                    <input type="text" name="author" id="author">

                    <label for="cover">Image</label>
                    <input type="text" name="cover" id="cover">

                    <label for="publication">Date de publication</label>
                    <input type="date" name="publication" id="publication">

                    <label for="summary">Résumé</label>
                    <textarea rows="15" cols="150" name="summary" id="summary"></textarea>

                    <input type="submit" id="btnAdd" value="Ajouter">
                </form>

            </div>
            <?php if($books): ?>
                <table>
                    <thead>
                        <tr>
                        <th width="800rem">ISBN</th>
                            <th width="800rem">Catégorie</th>
                            <th width="800rem">Date de publication</th>
                            <th width="800rem">Catégorie</th>
                            <th width="800rem">Auteur(e)</th>
                            <th width="130rem">Action</th>
                        </tr>
                    </thead>
                    <tbody id="dataCategories">
                    <form>
                                <?php foreach($books as $book): ?>
                                <tr id = "<?= $book['id']?>">
                                    <td><?= $book['isbn']?></td>
                                    <td><?= $book['name']?></td>
                                    <td><?= $book['publication']?></td>
                                    <td><?= $book['category']?></td>
                                    <td><?= $book['author']?></td>
                                    <td><a href="#" >Modifier</a></td>
                                    <td><input type='submit' class='btnDelete' value ='supprimer'></td>
                                </tr>
                                <?php endforeach;?>
                                </form>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
        <script src="../../public/js/jquery.js"></script>
        <script src="../../public/js/Admin/book.js"></script>
</body>

</html>
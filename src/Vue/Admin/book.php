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
                <h1>Ajout de livre</h1>


                <form>
                    <h3 class="primary-color">Veuillez renseigner les champs suivants</h3>
                    <div class="name">
                        <label for="name">Nom</label>
                        <input type="text" name="name" id="name">
                        <span id="nameEmpty">Le champs est vide !</span>
                    </div>

                    <div class="isbn">
                        <label for="isbn">ISBN</label>
                        <input type="text" name="isbn" id="isbn">
                        <span id="invalidCharacters">Caractères invalide !</span>
                        <span id="mustContain">Le numéros doit contenir 13 caractères !</span>
                        <span id="isbnEmpty">Le champs est vide !</span>
                    </div>

                    <div class="category">
                        <label for="category">Choisisser une catégorie :</label>
                        <select name="category" id="category">
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category['name'] ?>"><?= $category['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="author">
                        <label for="author">Auteur</label>
                        <input type="text" name="author" id="author">
                        <span id="authorEmpty">Le champs est vide !</span>
                    </div>

                    <div class="cover">
                        <label for="cover">Url de l'image</label>
                        <input type="text" name="cover" id="cover">
                        <span id="coverEmpty">Le champs est vide !</span>
                    </div>

                    <div class="publication">
                        <label for="publication">Date de publication</label>
                        <input type="date" name="publication" id="publication">
                        <span id="publicationEmpty">Le champs est vide !</span>
                    </div>

                    <div class="summary">
                        <label for="summary">Résumé</label>
                        <textarea rows="10" name="summary" id="summary"></textarea>
                        <span id="summaryEmpty">Le champs est vide !</span>
                    </div>

                    <input type="submit" id="btnAdd" value="Ajouter">
                </form>

            </div>
            <?php if ($books) : ?>
                <table>
                    <thead>
                        <tr>
                            <th width="800rem">ISBN</th>
                            <th width="800rem">Nom</th>
                            <th width="800rem">Date de publication</th>
                            <th width="800rem">Catégorie</th>
                            <th width="800rem">Auteur(e)</th>
                            <th width="130rem">Action</th>
                        </tr>
                    </thead>
                    <tbody id="dataCategories">
                        <form>
                            <?php foreach ($books as $book) : ?>
                                <tr id="<?= $book['id'] ?>">
                                    <td><?= $book['isbn'] ?></td>
                                    <td><?= $book['name'] ?></td>
                                    <td><?= $book['publication'] ?></td>
                                    <td><?= $book['category'] ?></td>
                                    <td><?= $book['author'] ?></td>
                                    <td><a href="#">Modifier</a></td>
                                    <td><input type='submit' class='btnDelete' value='supprimer'></td>
                                </tr>
                            <?php endforeach; ?>
                        </form>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
        <script src="../../public/js/jquery.js"></script>
        <script src="../../public/js/Admin/book.js"></script>
</body>

</html>
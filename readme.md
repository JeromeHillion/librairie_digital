## Github

Pour initialiser un dépôt Git :

>git init

On fait un git status pour déterminer l’état des fichiers de notre répertoire :

>git status

L’étape suivante va donc ici être d’indexer nos fichiers afin qu’ils puissent ensuite être validés, c’est-à-dire ajoutés en base et qu’on puisse ainsi avoir un premier historique de version : 

>git add .

Pour valider ces fichiers et les ajouter en base, on va maintenant utiliser la commande git commit comme cela : 

>git commit -m "nom du commit"

On change le nom de la branch master en main
>git branch -M main

On ajoute l'adresse github pour pouvoir "sauvegarder" sur github
>git remote add origin "url commençant par https://github.com/"

Ajout d'une branch et basculer dessus
> git checkout -b nom de la branch
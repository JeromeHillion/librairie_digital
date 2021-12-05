<?php

namespace App\Manager;


class ApiManager
{


    function getJsonFile()
    {

        /* Pour récupérer l'URL complète de la page courante, On vérifie le nom du schéma (ou protocole), que ce soit http ou https */
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
        {
            $currentUrl = "https";
        } 
        else
        {
            $currentUrl = "http";
        }

        /* On ajoute :// à l'URL. */
        $currentUrl .= "://";

        /* On ajoute l'hôte (nom de domaine, ip) à l'URL. */
        $currentUrl .= $_SERVER['HTTP_HOST'];

        /* On ajoute l'emplacement de la ressource demandée à l'URL */
        $currentUrl .= '/Digital_libraryV2/src/Api/books.json';
   
        $jsonDatas = file_get_contents($currentUrl);
        $datas = json_decode($jsonDatas);

        return $datas;
    }
}

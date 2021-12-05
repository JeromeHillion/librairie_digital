'use strict'


/************************Déclaration de  Variables************************/

const btnImport = document.getElementById('importJson');

/************************DOM************************/

document.addEventListener("DOMContentLoaded", () => {
    
    let url = location.href;
    url = url.replace('Vue/Admin/catalog.php','Controller/CatalogController.php');
    



    btnImport.addEventListener('click', () => {

   
    fetch(url)
  
    .then(function(res) {
        if (res.ok) {
          return res.json();
        }
      })
      .then(function(value) {
        console.log(value);
      })
      .catch(function(err) {
        // Une erreur est survenue
      });

});

});




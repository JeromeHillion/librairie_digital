"use strict";

/************************Déclaration de  Variables************************/
let currentUrl = location.href;
const addUrl = currentUrl.replace(
  "BookController.php",
  "CrudBook/AddBookController.php"
);
const readUrl = currentUrl.replace(
  "BookController.php",
  "CrudBook/ReadBookController.php"
);

const deleteUrl = currentUrl.replace(
  "BookController.php",
  "CrudBook/DeleteBookController.php"
);


/************************DOM************************/

$(function () {
    add();
    $("#btnAdd").on("click", function (event) {
        event.preventDefault();
        let name = encodeURIComponent($("#name").val());
    let isbn = encodeURIComponent($("#isbn ").val());
    let category = encodeURIComponent($("#category option:selected").text());
    let author = encodeURIComponent($("#author").val());
    let cover = encodeURIComponent($("#cover").val());
    let publication = encodeURIComponent($("#publication").val());
    let summary = encodeURIComponent($("#summary").val());

    if (name != "" && isbn != "" && category != "" && author != "" && cover != "" && publication != "" && summary != "") {
      $.ajax(
        {
            url: addUrl,
            type: "POST",
            data: "name="+name+"&isbn="+isbn+"&category="+category+"&author="+author+"&cover="+cover+"&publication="+publication+"&summary="+summary
        }
    ); 
    }
      });
});



/************************Fonctions************************/

function add()
{
    let name = encodeURIComponent($("#name").val());
    let isbn = encodeURIComponent($("#isbn").val());
    let category = encodeURIComponent($("#category").val());
    let author = encodeURIComponent($("#author").val());
    let cover = encodeURIComponent($("#cover").val());
    let publication = encodeURIComponent($("#publication").val());
    let summary = encodeURIComponent($("#summary").val());

    if (name != "" && isbn != "" && category != "" && author != "" && cover != "" && publication != "" && summary != "") {
      $.ajax(
        {
            url: addUrl,
            type: "POST",
            data: "name="+name+"&isbn="+isbn+"&category="+category+"&author="+author+"&cover="+cover+"&publication="+publication+"&summary="+summary
        }
    ); 
    }
    
}
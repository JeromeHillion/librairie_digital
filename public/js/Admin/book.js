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

const invalidCharacters = $("#invalidCharacters").css("display", "none");
const mustContain = $("#mustContain").css("display", "none");

/************************DOM************************/

$(function () {
  $("#btnAdd").on("click", function (event) {
    event.preventDefault();
    add();
  });
});

/************************Fonctions************************/

function add() {
  let name = encodeURIComponent($("#name").val());
  let isbn = encodeURIComponent($("#isbn").val());
  let category = encodeURIComponent($("#category option:selected").text());
  let author = encodeURIComponent($("#author").val());
  let cover = encodeURIComponent($("#cover").val());
  let publication = encodeURIComponent($("#publication").val());
  let summary = encodeURIComponent($("#summary").val());

  if (
    name != "" &&
    isbn != "" &&
    category != "" &&
    author != "" &&
    cover != "" &&
    publication != "" &&
    summary != ""
  ) {
    if (verifIsbn(isbn)) {
      $("#isbn").css("border", "solid 1px #B71C1C");
      $("#invalidCharacters").css("display", "block");
    }

    if (isbn.length !=13) {
      $("#isbn").css("border", "solid 1px #B71C1C");
      $("#mustContain").css("display", "block");
      
    }
    $.ajax({
      url: addUrl,
      type: "POST",
      data:
        "name=" +
        name +
        "&isbn=" +
        isbn +
        "&category=" +
        category +
        "&author=" +
        author +
        "&cover=" +
        cover +
        "&publication=" +
        publication +
        "&summary=" +
        summary,
    });

    $("#dataCategories").append(
      "<tr>"+
      "<td>" +
        isbn +
        "</td>"+
        "<td>" +
        name +
        "</td>"+
        "<td>" +
        publication +
        "</td>"+
        "<td>" +
        category +
        "</td>"+
        "<td>" +
        author +
        "</td>"+
        "<td><a class='btnEdit'>Modifier</a></td>"+
        "<td><input type='button' class='btnDelete' value ='Supprimer'></td></tr>"
    );
  } else {
    errorForm();
  }
}
function verifIsbn(isbn) {
  const regex = /^[0-9]$/;
  return regex.test(isbn);
}

function errorForm() {
  if ($("#name").val() === "") {
    $("#name").css("border", "solid 2px #B71C1C");
    $("#name .empty").css("display", "block");
  }

  if ($("#isbn").val() === "") {
    $("#isbn").css("border", "solid 2px #B71C1C");
    $("#isbn .empty").css("display", "block");
  }
  

  if ($("#author").val() === "") {
    $("#author").css("border", "solid 1px #B71C1C");
    $("#name .empty").css("display", "block");
  }

  if ($("#cover").val() === "") {
    $("#cover").css("border", "solid 1px #B71C1C");
    $("#cover .empty").css("display", "block");
  }

  if ($("#publication").val() === "") {
    $("#publication").css("border", "solid 1px #B71C1C");
    $("#publication .empty").css("display", "block");
  }

  if ($("#summary").val() === "") {
    $("#summary").css("border", "solid 1px #B71C1C");
    $("#summary .empty").css("display", "block");
  }
}

"use strict";

/************************Déclaration de  Variables************************/
let currentUrl = location.href;
const addUrl = currentUrl.replace(
  "CategoryController.php",
  "CrudCategory/AddCategoryController.php"
);
const readUrl = currentUrl.replace(
  "CategoryController.php",
  "CrudCategory/ReadCategoryController.php"
);

const deleteUrl = currentUrl.replace(
  "CategoryController.php",
  "CrudCategory/DeleteCategoryController.php"
);

/************************DOM************************/

$(function () {
  $("#btnAdd").click(function (event) {
    event.preventDefault();
    add();
  });

  $(".btnDelete").click(function (event) {
    event.preventDefault();
    let trId = $(this).parent().parent().attr("id");
    deleteById(trId);
    $(this).parent().parent().remove();
  });
});

/************************Functions************************/

function add() {
  let name = $("#categoryName").val();

  if (name != "") {
    let req = "";
    $.ajax({
      type: "GET",
      url: readUrl,
      dataType: "json",
      success: function (data) {
        req = categoryExist(data, name);
        if (req === undefined) {
          $.ajax({
            url: addUrl,
            type: "POST",
            data: "name=" + name,
          });

          $("#dataCategories").append(
            "<tr><td>" +
              name +
              "</td><td><input type='button' class='btnDelete' value ='supprimer'></td></tr>"
          );
        } else {
          categoryExist(data, name);
        }
      },

      error: function () {
        console.log("json not found");
      },
    });
  } else {
    $("#categoryName").css("border-color", "#D50000");
    $("#empty").css("display", "block");
  }
}

function deleteById(id) {
  $.ajax({
    url: deleteUrl,
    type: "POST",
    data: "id=" + id,
  });
}

function categoryExist(data, name) {
  for (const category in data) {
    if (data[category]["name"] === name[0].toUpperCase() + name.slice(1)) {
      $("#categoryName").css("border-color", "#D50000");
      $("#exists").css("display", "block");
      return data[category]["name"];
    }
  }
}

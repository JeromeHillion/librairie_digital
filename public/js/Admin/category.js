"use strict";

/************************Déclaration de  Variables************************/
let form = document.querySelector("form");
let categoryName = document.getElementById("categoryName").value;
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

let table = (document.querySelector("table").style.display = "none");
let tbody = document.getElementById("dataCategories");

/************************DOM************************/

document.addEventListener("DOMContentLoaded", () => {
  getCategories();

  form.addEventListener("submit", (event) => {
    event.preventDefault();
    addCategory();
  });
});

/************************Functions************************/
function addCategory() {
  /* if (categoryName === "")
  {
    console.log(categoryName.value);
   
  } */

  /*   else
  { */
  const data = new URLSearchParams();
  for (const category of new FormData(form)) {
    data.append(category[0], category[1]);
  }

  fetch(addUrl, {
    method: "POST",
    body: data,
  })
    .then((response) => {
      return response.json();
    })
}
/* } */

async function getCategories() {
  await fetch(readUrl)
    .then((response) => response.json())
    .then((json) => showCategories(json))
    .catch((err) => console.log(err));
}

function showCategories(json) {
  if (json) {
    table = document.querySelector("table").style.display = "block";

    for (const category in json) {
      let tr = document.createElement("tr");
      let tdId = document.createElement("td");
      tdId.innerText = json[category]["id"];

      let tdName = document.createElement("td");
      tdName.innerText = json[category]["name"];

      let tdBtnDelete = document.createElement("td");
      let btnDelete = document.createElement("input");
      btnDelete.type = "submit";
      btnDelete.id = "btnDelete";
      btnDelete.value = "supprimer";

      tbody.append(tr);
      tr.append(tdId);
      tr.append(tdName);
      tr.append(tdBtnDelete);
      tdBtnDelete.append(btnDelete);
    }
  }
}

function deleteCategory() {}

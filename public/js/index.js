'use strict'
import Validation from "./form/Validation.js";
const submitForm = document.querySelector("form")

let form = new Validation();

document.addEventListener("DOMContentLoaded", () => {

    form.formValidation();


});




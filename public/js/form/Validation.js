let password = document.getElementById("password");
let verifyPassword = document.getElementById("verifyPassword");
let errorMessagePassword = document.querySelector(".errorMessagePassword");
let errorMessageVerifyPassword = document.querySelector(".errorMessageVerifyPassword");
let inputs = document.querySelectorAll("input");

class Validation {

    formValidation() {
        function success(input) {
            input.nextElementSibling.classList.remove("check");
            input.nextElementSibling.nextElementSibling.classList.add("error");
        }

        function error(input) {
            input.nextElementSibling.classList.add("check");
            input.nextElementSibling.nextElementSibling.classList.remove("error");
        }

        function validateName(name) {
            const regexpName = /^[\wýþÿÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûü-]+$/;

            return regexpName.test(name);
        }

        function validateEmail(email) {
            const regexpEmail = /^\w+(.\w+)?@\w+.\w{1,3}$/;
            return regexpEmail.test(email);
        }

        for (let input of inputs) {
            input.value = "";
            input.onblur = function () {
                if (input.type === "text") {
                    if (input.value) {
                        if (validateName(input.value)) {
                            success(input)
                        }
                    } else {
                        error(input)
                    }
                }

                if (input.type === "email") {
                    if (input.value && validateEmail(input.value)) {
                        success(input)
                    } else {
                        error(input)
                    }
                }

                if (input.type === "password") {
                    if (input.name === "password") {
                        if (input.value.length === 12) {
                            success(input);
                            errorMessagePassword.innerText = "";
                        } else {
                            error(input)
                            if (!input.value) {
                                errorMessagePassword.innerText = " Le champs est vide !";
                            } else if (input.value.length < 12) {
                                error(input)
                                errorMessagePassword.innerText = " Le champs doit contenir 12 caratères !"
                            } else {
                                success(input)
                                errorMessagePassword.innerText = "";
                            }
                        }
                    }

                    if (input.name === "verifyPassword") {
                        if (password.value === verifyPassword.value && password.value.length === 12 && verifyPassword.value.length === 12) {
                            success(password);
                            success(verifyPassword);
                            errorMessageVerifyPassword.innerText = ""
                        } else {
                            error(password);
                            error(verifyPassword);
                            console.log(password);
                            errorMessageVerifyPassword.innerText = " Les champs ne sont pas identique !";
                        }
                    }
                }
            }
        }
    }
}

export default Validation;
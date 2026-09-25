// Seleccionamos las variables y los inputs del formulario
const contacto_form = document.querySelector('#contacto_form');
const inputName = document.querySelector("#input_name");
const inputLastName = document.querySelector("#input_lastname");
const inputTel = document.querySelector('#input_tel');
const inputEmail = document.querySelector('#input_email');
const inputText = document.querySelector('#input_text');
const privacidad = document.getElementById("privacidad")


// Definimos las funciones que nos permitirán realizar la validación de los inputs
function validateName(input_name) {
    const regex = /^(?=.{2,20}$)[A-Za-zÁÉÍÓÚáéíóúÑñ]+( [A-Za-zÁÉÍÓÚáéíóúÑñ]+){0,2}$/u;
    
    const message = "El nombre deberá contener entre 2 y 20 letras y se podrá hacer uso de hasta dos espacios no consecutivos";

    return regex.test(input_name) ? true : message;
}

function validateLastName(input_lastname) {
    const regex = /^[A-Za-zÁÉÍÓÚáéíóúÑñ]{2,20}(?: [A-Za-zÁÉÍÓÚáéíóúÑñ]{2,20})?$/u;
    
    const message = "El/los apellidos deberán contener entre 2 y 20 letras y se podrá hacer uso de un único espacio";

    return regex.test(input_lastname) ? true : message;
}

function validateTel(input_tel) {
    let regex = /^\d{8,11}$/;

    const message = "El telefono deberá contener entre 8 y 11 dígitos";

    return regex.test(input_tel) ? true : message;;
}

function validateEmail(input_email) {
    let regex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;

    const message = "El correo electrónico similar a: xxxxx@xxx.xxx";

    return regex.test(input_email) ? true : message;
}

function validateText(input_text) {
    let regex = /^[A-Za-zÁÉÍÓÚÜáéíóúüÑñ0-9 _\-\.,º]{10,250}$/;

    const message = "Puede escribir entre 10 y 250 caracteres. Sólo se aceptan los siguientes símbolos especiales: . , _ - º ";

    return regex.test(input_text) ? true : message;
}

function validatePrivacy(value) {
    const message = 'Debe aceptar las políticas de privacidad y protección de datos.';

    return value ? true : message;
}

function validateField(inputElement, validator) {
    const value = inputElement.type === 'checkbox'
        ? inputElement.checked
        : inputElement.value.trim();

    const result = validator(value);

    // Funciona tanto para inputs normales como para el checkbox
    const smallElement = inputElement.parentElement
        .querySelector('.input_error');

    if (result !== true) {
        smallElement.textContent = result;
        smallElement.classList.add('error-visible');
        inputElement.classList.add('input-error');

        return false;
    }

    smallElement.textContent = '';
    smallElement.classList.remove('error-visible');
    inputElement.classList.remove('input-error');

    return true;
}

function validateOnBlur(inputElement, validator) {
    if (!inputElement) return;

    inputElement.addEventListener('blur', function () {
        validateField(inputElement, validator);
    });
}

privacidad.addEventListener('change', function () {
    validateField(privacidad, validatePrivacy);
});

if (contacto_form) {

    contacto_form.addEventListener('submit', function (e) {

        const camposValidos =
            validateField(inputName, validateName) &&
            validateField(inputLastName, validateLastName) &&
            validateField(inputTel, validateTel) &&
            validateField(inputEmail, validateEmail) &&
            validateField(inputText, validateText) &&
            validateField(privacidad, validatePrivacy);

        if (!camposValidos) {
            e.preventDefault();
            alert('Por favor, complete correctamente los campos obligatorios');
        }
    });
}

validateOnBlur(inputName, validateName);
validateOnBlur(inputLastName, validateLastName);
validateOnBlur(inputTel, validateTel);
validateOnBlur(inputEmail, validateEmail);
validateOnBlur(inputText, validateText);
validateOnBlur(privacidad, validatePrivacy);


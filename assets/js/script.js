var input = document.querySelector("#phone");
var iti = intlTelInput(input, {
    initialCountry: "ru", // Автоматический выбор страны по IP
    separateDialCode: true, // Отображать код страны отдельно
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js", // Для утилит, например, валидации
});
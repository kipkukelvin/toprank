document.addEventListener("DOMContentLoaded", function () {
    const phoneInput = document.querySelector("#phone");

    if (phoneInput) {
        const iti = window.intlTelInput(phoneInput, {
            initialCountry: "auto",
            geoIpLookup: function (callback) {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => callback(data.country_code))
                    .catch(() => callback("us"));
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js",
        });

        // Replace phone value with the full international number on submit
        phoneInput.form.addEventListener("submit", function () {
            phoneInput.value = iti.getNumber();
        });
    }
});

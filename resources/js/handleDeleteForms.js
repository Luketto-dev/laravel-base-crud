window.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll(".form-delete");

    // per ogni form, devo aggiungere un eventListener sul "submit"
    for (const form of forms) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

        const result = confirm("Sei sicuro di voler cancellare questo elemento?")

        if (result) {
            form.submit();
        }
        })
    }
})
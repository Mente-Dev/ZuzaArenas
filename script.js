// Script para validar o formulário de contato
document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.getElementById("contact-form");

    contactForm.addEventListener("submit", function (event) {
        event.preventDefault();

        // Validar e enviar o formulário (adicionar lógica aqui)
        alert("Formulário enviado com sucesso!"); // Exemplo simples
    });
});
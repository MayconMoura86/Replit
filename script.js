// Função para simular uma ligação
function makeCall() {
    window.location.href = "tel:+5511999999999"; // Substitua pelo número da sua empresa
}

// Função para abrir o WhatsApp
function openWhatsApp() {
    window.open("https://wa.me/5511999999999", "_blank"); // Substitua pelo número do WhatsApp da sua empresa
}

// Função para abrir o FaceTime
function openFaceTime() {
    alert("Abrindo FaceTime. Certifique-se de que o aplicativo está instalado e configurado.");
}

// Função para validar o formulário
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio padrão
    alert('Obrigado por entrar em contato! Em breve responderemos sua mensagem.');
    this.reset(); // Reseta o formulário
});
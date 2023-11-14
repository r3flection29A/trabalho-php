function validarFormulario() {
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const mensagem = document.getElementById('mensagem').value;
    const mensagemErro = document.getElementById('mensagem-erro');

    if (nome === "" || email === "" || mensagem === "") {
        alert("Preencha todos os campos!");
        return false;
    }

    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!email.match(emailRegex)) {
        mensagemErro.textContent = "Por favor, insira um email válido.";
        mensagemErro.style.color = "red";
        return false;
    }

    alert("Mensagem enviada com sucesso!")
    // mensagemErro.textContent = "Mensagem enviada com sucesso!";
    // mensagemErro.style.color = "green";
    return true;
}

const formulario = document.getElementById('formulario');
if (formulario) {
    formulario.addEventListener('submit', function (e) {
        e.preventDefault(); 
        validarFormulario(); 
    });
}

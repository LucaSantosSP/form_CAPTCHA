function valida() {
    if (grecaptcha.getResponse() == "") {
        alert("Você precisa marcar a caixa de validação");
        return false;
    }
}
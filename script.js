function validarFormulario() {
  const nome = document.getElementById("nome").value.trim();
  const email = document.getElementById("email").value.trim();
  const idade = document.getElementById("idade").value.trim();

  if (nome === "" || email === "" || idade === "") {
    alert("Preencha todos os campos.");
    return false;
  }

  const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!regexEmail.test(email)) {
    alert("E-mail inválido.");
    return false;
  }

  if (isNaN(idade) || idade < 1 || idade > 120) {
    alert("Idade inválida.");
    return false;
  }

  return true;
}

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Formulário com PHP e JS</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Cadastro de Usuário</h1>

  <form method="POST" onsubmit="return validarFormulario()">
    <input type="text" id="nome" name="nome" placeholder="Nome completo">
    <input type="email" id="email" name="email" placeholder="E-mail">
    <input type="number" id="idade" name="idade" placeholder="Idade" min="1" max="120">
    <button type="submit">Enviar</button>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $nome = htmlspecialchars($_POST["nome"]);
      $email = htmlspecialchars($_POST["email"]);
      $idade = htmlspecialchars($_POST["idade"]);

      echo "<p>Obrigado, <strong>$nome</strong>! Dados recebidos.</p>";

      $linha = "$nome | $email | $idade\n";
      file_put_contents("cadastros.txt", $linha, FILE_APPEND);
    }
  ?>

  <script src="script.js"></script>
</body>
</html>


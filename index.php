<?php 
$nome = "";
$email = "";
$telefone = "";
$servico = "";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $telefone = $_POST["phone"] ?? "";
    $servico = $_POST["subject"] ?? "";
    $mensagem = $_POST["message"] ?? "";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema Web II</title>
</head>
<body>

  <h1>Cadastro de Usuário</h1>
  <p>Preencha os dados abaixo.</p>

  <form method="POST" action="">
    
    <label>Nome:</label><br>
    <input class="form-control" id="name" name="name" type="text">
  
    <label>E-mail:</label><br>
    <input class="form-control" id="email" name="email" type="email">
  
    <label>Telefone:</label><br>
    <input class="form-control" id="phone" name="phone" type="tel">
  
    <label>Assunto:</label><br>
    <select class="form-control" id="subject" name="subject">
  
    <label>Mensagem:</label><br>
  
    <button type="submit">Cadastrar</button>
  </form>

 <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
  <h2>Dados recebidos</h2>

  <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
  <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
  <p><strong>Telefone:</strong> <?= htmlspecialchars($telefone) ?></p>
  <p><strong>Serviço:</strong> <?= htmlspecialchars($servico) ?></p>
  <p><strong>Mensagem:</strong> <?= htmlspecialchars($mensagem) ?></p>
<?php endif; ?>

</body>
</html>

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
  <title>Formulário de Contato</title>
</head>
<body>

  <h1>Cadastro de Usuário</h1>
  <p>Preencha os dados abaixo.</p>

  <form method="POST" action="">
    
    <label>Nome:</label><br>
    <input type="text" name="name" required><br><br>
  
    <label>E-mail:</label><br>
    <input type="email" name="email" required><br><br>
  
    <label>Telefone:</label><br>
    <input type="tel" name="phone" required><br><br>
  
    <label>Assunto:</label><br>
    <select name="subject" required>
      <option value="">Selecione</option>
      <option value="Reparos Hidráulicos">Reparos Hidráulicos</option>
      <option value="Desentupimentos">Desentupimentos</option>
      <option value="Caça-vazamentos">Caça-vazamentos</option>
      <option value="Instalações">Instalações</option>
    </select><br><br>

    <label>Mensagem:</label><br>
    <textarea name="message" rows="4" required></textarea><br><br>
  
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

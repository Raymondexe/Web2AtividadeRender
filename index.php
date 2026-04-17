<?php
$nome = "";
$email = "";
$telefone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $telefone = $_POST["telefone"] ?? "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade: Formulário Desenvolvimento Web II</title>

    <link rel="stylesheet" href="./Css/style.css">
</head>

<body>
    <form method="POST" action="">
        <label for="nome">Insira o seu nome Completo:</label><br>
        <input type="text" id="nome" name="nome" required placeholder="Exemplo: João Vitor Rodrigues"><br><br>

        <label for="email">Insira o seu email:</label><br>
        <input type="email" id="email" name="email" required placeholder="Exemplo: joao@gmail.com"><br><br>

        <label for="telefone">Insira o seu telefone:</label><br>
        <input type="text" id="telefone" name="telefone" required placeholder="Exemplo: (11) 99999-0909"><br><br>

        <button type="submit">Cadastrar</button>


        <h2>Resultado</h2>
        <p id="resultado">Nenhum dado enviado ainda.</p>
    </form>
    
    <script src="./JS/scriptForms.js"></script>

</body>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <h2>Dados recebidos pelo servidor</h2>
    <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
    <p><strong>E-mail:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
  <?php endif; ?>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Dados Enviados</title>
</head>

<body>

    <main>
        <div class="box-view">
            <div class="area">
                <h2>Dados Enviados</h2>
            </div>

            <p><strong>Nome do Cliente:</strong> <?php echo htmlspecialchars($nome); ?></p><br><br>
            <p><strong>Idade do Cliente:</strong> <?php echo htmlspecialchars($idade); ?></p><br><br>
            <p><strong>Altura do Cliente:</strong> <?php echo htmlspecialchars($altura); ?> metros</p><br><br>
            <p><strong>Peso do Cliente:</strong> <?php echo htmlspecialchars($peso); ?> kg</p><br><br>

            <a href="formulario.php" class="btn">Voltar ao Formulário</a>
        </div>
    </main>


</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <nav>
        <a href="index.php">Home</a>
        <a href="formulario.php">Formulário</a>
        <a href="sobre.php">Sobre</a>
    </nav>

    <main>
        <div class="form-box">
            <div class="area">
                <h2>Formulário de Cadastro</h2>
            </div>
            <form action="processa_formulario.php" method="POST">
                <label for="nome">Nome do Cliente:</label><br>
                <input type="text" id="nome" name="nome" required class="form-control"><br><br>

                <label for="idade">Idade do Cliente:</label><br>
                <input type="number" id="idade" name="idade" required class="form-control"><br><br>

                <label for="altura">Altura do Cliente (em metros):</label><br>
                <input type="number" id="altura" name="altura" step="0.01" required class="form-control"><br><br>

                <label for="peso">Peso do Cliente (em kg):</label><br>
                <input type="number" id="peso" name="peso" step="0.01" required class="form-control"><br><br>

                <button type="submit" class="btn" style="background-color: #06d106">Enviar</button>
                <button type="reset" class="btn" style="background-color: #ffb338">Limpar</button>
            </form>
        </div>
    </main>


</body>

</html>
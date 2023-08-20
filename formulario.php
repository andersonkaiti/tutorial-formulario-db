<?php
    if (isset($_POST["submit"])) {
        // print_r("Nome: ".$_POST["nome"]);
        // print_r("<br>");
        // print_r("E-mail: ".$_POST["email"]);
        // print_r("<br>");
        // print_r("Telefone: ".$_POST["telefone"]);
        // print_r("<br>");
        // print_r("Sexo: ".$_POST["genero"]);
        // print_r("<br>");
        // print_r("Data de nascimento: ".$_POST["data-nascimento"]);
        // print_r("<br>");
        // print_r("Cidade: ".$_POST["data-nascimento"]);
        // print_r("<br>");
        // print_r("Cidade: ".$_POST["cidade"]);
        // print_r("<br>");
        // print_r("Estado: ".$_POST["estado"]);
        // print_r("<br>");
        // print_r("Endereço: ".$_POST["endereco"]);

        include_once("config.php");

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $sexo = $_POST["genero"];
        $datanascimento = $_POST["data-nascimento"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $endereco = $_POST["endereco"];

        $result = mysqli_query($conexao,
        "INSERT INTO usuarios(nome, email, telefone, sexo, datanascimento, cidade, estado, endereco)
        VALUES ('$nome', '$email', '$telefone', '$sexo', '$datanascimento', '$cidade', '$estado', '$endereco')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><strong>Formulário de Clientes</strong></legend>
                <br>
                <div class="input-box">
                    <input type="text" name="nome" id="nome" class="input-user" required>
                    <label for="name" class="label-input">Nome completo</label>
                </div>
                <br><br>
                <div class="input-box">
                    <input type="text" name="email" id="email" class="input-user" required>
                    <label for="email" class="label-input">E-mail</label>
                </div>
                <br><br>
                <div class="input-box">
                    <input type="tel" name="telefone" id="telefone" class="input-user" required>
                    <label for="telefone" class="label-input">Telefone</label>
                </div>
                <p>Sexo: </p>
                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" name="genero" id="outro" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data-nascimento"><strong>Data de nascimento:</strong></label>
                <input type="date" name="data-nascimento" id="data-nascimento" required>
                <br><br><br>
                <div class="input-box">
                    <input type="text" name="cidade" id="cidade" class="input-user" required>
                    <label for="cidade" class="label-input">Cidade</label>
                </div>
                <br><br>
                <div class="input-box">
                    <input type="text" name="estado" id="estado" class="input-user" required>
                    <label for="estado" class="label-input">Estado</label>
                </div>
                <br><br>
                <div class="input-box">
                    <input type="text" name="endereco" id="endereco" class="input-user" required>
                    <label for="endereco" class="label-input">Endereço</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>
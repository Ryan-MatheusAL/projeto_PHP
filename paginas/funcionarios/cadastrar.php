<?php
    if(isset($_POST['submit'])){
        include_once('mysql/config.php');
    //print_r($_POST['nome']);
        $nome = $_POST['nome'];
        //print"<br>";
    //print_r($_POST['tel']);
        $tel = $_POST['tel'];
        //print"<br>";
    //print_r($_POST['rg']);
        $rg = $_POST['rg'];
        //print"<br>";
    //print_r($_POST['cpf']);
        $cpf = $_POST['cpf'];
        //print"<br>";
    //print_r($_POST['nomeM']);
        $nomeM = $_POST['nomeM'];
        //print"<br>";
    //print_r($_POST['nomeP']);
        $nomeP = $_POST['nomeP'];
        //print"<br>";
    //print_r($_POST['civil']);
        $civil = $_POST['civil'];
        //print"<br>";
    //print_r($_POST['data_nascimento']);
        $data_nasc = $_POST['data_nascimento'];
        //print"<br>";
    //print_r($_POST['grau']);
        $grau = $_POST['grau'];
        //print"<br>";
    //print_r($_POST['formacao']);
        $formacao = $_POST['formacao'];
        //print"<br>";
    //print_r($_POST['genero']);
        $genero = $_POST['genero'];
        //print"<br>";
    //print_r($_POST['endereco']);
        $endereco = $_POST['endereco'];
        //print"<br>";
    //print_r($_POST['cidade']);
        $cidade = $_POST['cidade'];
        // print"<br>";
    //print_r($_POST['estado']);
        $estado = $_POST['estado'];
        // print"<br>";
    //print_r($_POST['casaN']);
        $casaN = $_POST['casaN'];
        
        $result = mysqli_query($conexao, "INSERT INTO funcionario(nome, nome_mae, nome_pai, telefone, rg, cpf, civil, grau_instrucao,
            formacao, endereco, estado, cidade, num_casa, genero, data_nasc) VALUES ('$nome', '$nomeM', '$nomeP', '$tel', '$rg', '$cpf',
            '$civil', '$grau', '$formacao', '$endereco', '$estado', '$cidade', '$casaN',  '$genero', '$data_nasc')");
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Cadastro | Funcionario</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="#" method="POST">
        <div class="da-fu">
            <fieldset>
                <legend>Cadastro Funcionario</legend>
                <div class="container">
                    <input type="text" name="nome" class="inputUser" required>
                    <label for="nome" class="labelInput" >Nome Completo</label>
                </div>
                <div class="container">
                    <input type="tel" name="tel" class="inputUser" required>
                    <label for="tel" class="labelInput" >Telefone</label>
                </div>
                <div class="container">
                    <input type="rg" name="rg" class="inputUser" maxlength="9" minlength="9" required>
                    <label for="rg" class="labelInput" >RG</label>
                </div>
                <div class="container">
                    <input type="cpf" name="cpf" class="inputUser" maxlength="12" minlength="12" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="container">
                    <input type="text" name="nomeM" class="inputUser" required>
                    <label for="nomeM" class="labelInput" >Nome mãe - completo</label>
                </div>
                <div class="container">
                    <input type="text" name="nomeP" class="inputUser" required>
                    <label for="nomeP" class="labelInput" >Nome pai - completo</label>
                </div>
                <label for="data_nascimento"><b>Data Nascimento</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <div class="container">
                    <label for="civil">Estado Civil</label>
                    <select name="civil" id="civil" class="inputUser">
                        <option value=""></option>
                        <option value="solteiro">Solteiro(a)</option>
                        <option value="casado">Casado(a)</option>
                        <option value="divorciado">Divorciado(a)</option>
                        <option value="viuvo">Viúvo(a)</option>
                    </select> 
                </div>
                <br><br>
                <div class="container">
                    <input type="text" name="grau" class="inputUser" required>
                    <label for="grau" class="labelInput">Grau instrução</label>
                </div>
                <div class="container">
                    <input type="text" name="formacao" class="inputUser" required>
                    <label for="formacao" class="labelInput">Formação</label>
                </div>
                <br>
                <div class="container">
                    <p>Genero:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                </div>
                <br><br>
                <div class="container">
                    <input type="text" name="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput" >Endereço</label>
                </div>
                <div class="container">
                    <input type="text" name="estado" class="inputUser" required>
                    <label for="estado" class="labelInput" >Estado</label>
                </div>
                <div class="container">
                    <input type="text" name="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput" >Cidade</label>
                </div>
                <div class="container">
                    <input type="text" name="casaN" class="inputUser" required>
                    <label for="casaN" class="labelInput" >Número da casa</label>
                </div>
                <br><br>
                <br><br>
                <input type="submit" name="submit" id="submit">
                
            </fieldset>
        </div>
    </form>
</body>
</html>
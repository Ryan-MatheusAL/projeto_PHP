<?php
include_once("mysql/config.php");

$sql = "SELECT * FROM funcionario ORDER BY id_funcionario ";

$result = $conexao->query($sql);
//print_r($result);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <style>
            .table-bg{
                background: rgba(0, 0, 0, 0.6);
                color: white;
                border-radius: 15px 15px 0 0;
                width: 100%;
                padding: 5px;
            }
            th, td{
                padding: 10px;
                border: 2px ;
                align-items: center;
            }
            
        </style>
    </head>
    <body>
        <div class="m-5">
            <table class="table text-white table-bg">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Funcionario</th>
                    <th scope="col">Nome da Mãe</th>
                    <th scope="col">Nome do Pai</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Estado Civil</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Formação</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Num Casa</th>
                    <th scope="col">. . .</th>
                </tr>
                </thead>
                <tbody>
                    <?php

                        while($user_data = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>".$user_data['id_funcionario']."</td>";
                            echo "<td>".$user_data['nome']."</td>";
                            echo "<td>".$user_data['nome_mae']."</td>";
                            echo "<td>".$user_data['nome_pai']."</td>";
                            echo "<td>".$user_data['telefone']."</td>";
                            echo "<td>".$user_data['civil']."</td>";
                            echo "<td>".$user_data['data_nasc']."</td>";
                            echo "<td>".$user_data['genero']."</td>";
                            echo "<td>".$user_data['formacao']."</td>";
                            echo "<td>".$user_data['endereco']."</td>";
                            echo "<td>".$user_data['estado']."</td>";
                            echo "<td>".$user_data['cidade']."</td>";
                            echo "<td>".$user_data['num_casa']."</td>";
                            echo "<td>Ações</td>";
                        }

                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
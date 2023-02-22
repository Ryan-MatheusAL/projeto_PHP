<!DOCTYPE html>
<html>
<head>    
    <title>Dados dos jogadores</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="dp-menu">
        <div>
            <ul>
                <li><a href="index.php?menuop=home">Home</a><li>
                <li><a href="index.php?menuop=funcionarios">Funcionarios</a>
                    <ul>
                        <li><a href="index.php?menuop=cadastrar">Cadastrar</a></li>
                    </ul>
                </li>
                <li><a href="index.php?menuop=la">?</a></li>                         
            </ul>   
        </div>
    </nav>
    <?php
        $menuop = (isset($_GET['menuop']))?$_GET['menuop']:"home";
        switch ($menuop) {
            case 'home':
                include("paginas/home/home.php");
                break;
            case 'funcionarios':
                include("paginas/funcionarios/funcionarios.php");
                break;
            case 'cadastrar':
                include("paginas/funcionarios/cadastrar.php");
                break;          
            default:
                include("paginas/home/home.php");
                break;
        }
    ?>
</body>
</html>

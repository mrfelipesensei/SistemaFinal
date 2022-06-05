<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>

    <link rel="stylesheet" href="../css/styleAllCliente.css">
</head>
<body>
    <?php
        require_once '../dao/funcionarioDAO.php';
        $funcionarioDAO = new funcionarioDAO();
        $funcionarios = $funcionarioDAO->getAllFunc();
    ?>

    <a href="../index.php">Voltar</a>
    <br><br>

    <div>
        <table border="1">
            <tr>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Email</td>
                <td>Usuário</td>
                <td>Senha</td>
                <td>Perfil</td>
                <td>Sexo</td>
                <td>Data de Nascimento</td>
                <td>Excluir</image>
                </td>
                
            </tr>

            <?php
                foreach ($funcionarios as $funcionario) {
                    echo    "<tr>";
                    echo     "<td>{$funcionario['nome']}</td>";
                    echo     "<td>{$funcionario['telefone']}</td>";
                    echo     "<td>{$funcionario['email']}</td>";
                    echo     "<td>{$funcionario['user']}</td>";
                    echo     "<td>{$funcionario['pass']}</td>";
                    echo     "<td>{$funcionario['nome_perfil']}</td>";
                    echo     "<td>{$funcionario['sexo']}</td>";
                    echo     "<td>{$funcionario['datanasc']}</td>";
                    echo     "<td><a href='../controller/excluirFuncControl.php?telefone={$funcionario['telefone']}' onclick='return excluir()'>Excluir</a></td>";
                    echo     "</tr>";
                }

            ?>

        </table>

        <script>
            function excluir(){
                var ok = confirm('Você está certo disso?')
                    if (ok) {
                        return true
                    }else{
                        return false
                    }
            }
        </script>

    </div>
</body>
</html>
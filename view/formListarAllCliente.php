<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <?php
        require_once '../dao/clienteDAO.php';
        $clienteDAO = new clienteDAO();
        $clientes = $clienteDAO->getAllCliente();

    ?>

    <a href="../index.php">Voltar</a>
    <br><br>

    <div>
        <table border="1">
            <tr>
                <td>Nome</td>
                <td>Telefone</td>
                <td>Email</td>
                <td>Sexo</td>
                <td>Data de Nascimento</td>
                <td>Alterar</td>
                <td>Excluir</td>
            </tr>

            <?php
                foreach ($clientes as $cliente) {
                    echo    "<tr>";
                    echo     "<td>{$cliente['nome']}</td>";
                    echo     "<td>{$cliente['telefone']}</td>";
                    echo     "<td>{$cliente['email']}</td>";
                    echo     "<td>{$cliente['sexo']}</td>";
                    echo     "<td>{$cliente['datanasc']}</td>";
                    echo     "<td><a href='formAlterarCliente.php?telefone={$cliente['telefone']}'>Alterar</a></td>";
                    echo     "<td><a href='../controller/excluirClienteControl.php?telefone={$cliente['telefone']}' onclick='return excluir()'>Excluir</a></td>";
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
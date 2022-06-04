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
        require_once '../dao/pedidoDAO.php';
        $pedidoDAO = new pedidoDAO();
        $pedidos = $pedidoDAO->getAllPedido();
        
    ?>

    <a href="../index.php">Voltar</a>
    <br><br>

    <div>
        <table border="1">
            <tr>
                <td>Proteínas</td>
                <td>Quantidade</td>
                <td>Carboidratos</td>
                <td>Quantidade</td>
                <td>Email</td>
                <td>Endereço</td>
                <td>Horário</td>
                <!--
                <td>Alterar</td>
                <td>Excluir</td>
                -->
            </tr>

            <?php
                foreach ($pedidos as $pedido) {
                    echo    "<tr>";
                    echo     "<td>{$pedido['proteina']}</td>";
                    echo     "<td>{$pedido['quantidade1']}</td>";
                    echo     "<td>{$pedido['carboidrato']}</td>";
                    echo     "<td>{$pedido['quantidade2']}</td>";
                    echo     "<td>{$pedido['email']}</td>";
                    echo     "<td>{$pedido['endereco']}</td>";
                    echo     "<td>{$pedido['horario']}</td>";
                    /*
                    echo     "<td><a href='formAlterarCliente.php?telefone={$cliente['telefone']}'>Alterar</a></td>";
                    echo     "<td><a href='../controller/excluirClienteControl.php?telefone={$cliente['telefone']}' onclick='return excluir()'>Excluir</a></td>";
                    */
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
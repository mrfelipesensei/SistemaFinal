<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>
<body>
    <h1>Popeye Foods</h1>
    <div>
        <img src="../css/popeye.png" alt="Personagem Popeye" id="popeye">
    </div>

    <h2>Confira nosso cardápio:</h2>

    <table class="cardapio">
        <thead>
            <tr>
                <th>Proteínas</th>
                <th>Carboidratos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Omelete de Espinafre</td>
                <td>Salada de Brócolis</td>
            </tr>
            <tr>
                <td>Lombinho Assado</td>
                <td>Abóbora Cozida</td>
            </tr>
            <tr>
                <td>Almôndegas</td>
                <td>Salada de Espinafre</td>
            </tr>
            <tr>
                <td>Frango Grelhado</td>
                <td>Salada de Tomate</td>
            </tr>
            <tr>
                <td>Patinho Moído</td>
                <td>Batata Doce Cozida</td>
            </tr>

        </tbody>
    </table>

    <div>
        <img id="food" src="../css/food.jpg" alt="exemplo de marmita saudável">
    </div>

    <h3>Faça seu pedido:</h3>

    <div class="conteiner">
        <form action="../controller/cadastrarPedidoControl.php" method="post">
            <div class="itens">
                <label for="proteina">Proteínas:</label>
                <select id="proteina" name="proteina">
                    <option value="Omelete de Espinafre">Omelete de Espinafre</option>
                    <option value="Lombinho Assado">Lombinho Assado</option>
                    <option value="Almôndegas">Almôndegas</option>
                    <option value="Frango Grelhado">Frango Grelhado</option>
                    <option value="Patinho Moído">Patinho Moído</option>
                </select>
            </div>

            <div>
                <p class="quant">Quantidade:</p>

                <input type="radio" name="qt1" value="10" checked>
                <label class="qt" for="qt10">10</label>
                
                <input type="radio" name="qt1" value="20">
                <label class="qt" for="qt20">20</label>

                <input type="radio" name="qt1" value="30">
                <label class="qt" for="qt30">30</label>
            </div>
            <br>

            <div class="itens">
                <label for="carb">Carboidratos:</label>
                <select id="carb" name="carboidrato">
                    <option value="Salada de Brócolis">Salada de Brócolis</option>
                    <option value="Abóbora Cozida">Abóbora Cozida</option>
                    <option value="Salada de Espinafre">Salada de Espinafre</option>
                    <option value="Salada de Tomate">Salada de Tomate</option>
                    <option value="Batata Doce Cozida">Batata Doce Cozida</option>
                </select>
            </div>

            <div>
                <p class="quant">Quantidade:</p>

                <input type="radio" name="qt2" value="10" checked>
                <label class="qt" for="qt10">10</label>
                
                <input type="radio" name="qt2" value="20">
                <label class="qt" for="qt20">20</label>

                <input type="radio" name="qt2" value="30">
                <label class="qt" for="qt30">30</label>
            </div>
            <br>

            <div>
                <input type="email" name="email" placeholder="seunome@email.com" class="inputs" maxlength="30" required>
                <br><br>
                <input type="text" name="endereco" placeholder="Endereço de entrega" maxlength="35">
            </div>

            <div>
                <p id="qhora">Qual melhor horário para entrega?</p>
                <select id="hora" name="horario">
                    <option value="9h à 11h">9h à 11h</option>
                    <option value="13h à 18h">13h à 18h</option>
                    <option value="19h à 21h">19h à 21h</option> 
                </select>
            </div>
            <br>

            <input id="pecaja" type="submit" value="Peça Já!" class="submit">

        </form>
        <br><br>

        <div>
            <form action="../index.php">
                <input type="submit" value="Voltar" id="cadastro" class="submit2">
            </form>
        </div>

    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="icon.png">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizarria Gusteau´V</title>
</head>

<body>

    <header>
        <h1><span>f</span>Pizzaria Gusteau´V<span>f</span></h1>
    </header>

    <?php

    error_reporting(0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pizzaria_vg";

    //Criar a conexão

    $conn2 = new mysqli($servername, $username, $password, $dbname);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $sabor = $_POST["sabor"];
        $side = $_POST["side"];
        $coca = $_POST["coca"];
        $pix = $_POST["pix"];



        $sql2 = "INSERT INTO pizzaria (nome, endereco, sabor, side, coca, pix) VALUES ('$nome', '$endereco', '$sabor', '$side', '$coca', '$pix')";
    }

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

        $sql = "INSERT INTO cpf (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    }

    $conn->close();

    $conn2->close();


    ?>

    <table class="tablesalgada">

        <tr>
            <th class="titlespace">Salgadas</th>
        </tr>

        <tr>
            <td class="space">Calabresa
                <img class="image img1" src="https://diariodonordeste.verdesmares.com.br/image/contentid/policy:1.3277542:1663012513/Pizza-de-calabresa.jpg" alt="">
            </td>
        </tr>

        <tr class="space2">
            <td>Margherita
                <img class="image img2" src="https://s2-receitas.glbimg.com/RL-dN3YlvejAXwiPYoguGlE2p_0=/0x0:1280x800/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_1f540e0b94d8437dbbc39d567a1dee68/internal_photos/bs/2022/C/H/HXf1trQZGtIylAzO2SUg/pizza-margherita-receita.jpg" alt="">
            </td>
        </tr>

        <tr class="space3">
            <td>Portuguesa
                <img class="image img3" src="https://folhadomate.com/wp-content/uploads/2016/09/48388-receita-de-pizza-portuguesa-1.jpg" alt="">
            </td>
        </tr>

        <tr class="space4">
            <td>Quatro Queijos
                <img class="image img4" src="https://www.portalumami.com.br/app/uploads/2021/07/Pizza-4-queijos.jpg" alt="">
            </td>
        </tr>

        <tr class="space5">
            <td>Frango Com Catupiri
                <img class="image img5" src="https://s2-receitas.glbimg.com/JXpit4TnOmCLL8jXiXlJJEtbRJk=/0x0:600x399/984x0/smart/filters:strip_icc()/s.glbimg.com/po/rc/media/2012/06/13/14/31/15/151/2607201005261284043239.jpg" alt="">
            </td>
        </tr>
    </table>

    <table class="tabledoce">
        <tr>
            <th class="titlespace2">Doces</th>
        </tr>

        <tr class="space6">
            <td>Chocolate C/ <br> Morango
                <img class="image img6" src="https://diariodonordeste.verdesmares.com.br/image/contentid/policy:1.3277542:1663012513/Pizza-de-calabresa.jpg" alt="">
            </td>
        </tr>

        <tr class="space7">
            <td>Chocolate Branco
                <img class="image img7" src="https://www.thecandidcooks.com/wp-content/uploads/2022/10/dessert-nutella-pizza-feature.jpg" alt="">
            </td>
        </tr>

        <tr class="space8">
            <td>Sorvete
                <img class="image img8" src="https://www.designi.com.br/images/preview/10896685.jpg" alt="">
            </td>
        </tr>

        <tr class="space9">
            <td>Nutella
                <img class="image img9" src="https://harald.com.br/wp-content/uploads/2022/11/pizza-de-chocolate-com-avela-com-leitinho-lateral-960x440-1.jpg" alt="">
            </td>
        </tr>

    </table>

    <h2 class="pedidoh"><span class="regs">j</span> Enviar Pedido <span class="regs">j</span></h2>

    <form class="pedidof" action="" method="post">

        <label for="nome">Nome:</label>
        <input class="pedidoi" type="text" name="nome" id="" required autocomplete="off"><br>
        <label for="endereco">Endereço:</label>
        <input class="pedidoi" type="text" name="endereco" id="" required autocomplete="off"><br>
        <label for="sabor">Sabor:</label>
        <select name="sabor" id="">
            <optgroup label="Salgadas">
                <option value="sabor">
                    Calabresa
                </option>
                <option value="sabor">
                    Magherita
                </option>
                <option value="sabor">
                    Portuguesa
                </option>
                <option value="sabor">
                    Quatro Queijos
                </option>
                <option value="">
                    Frango com Catupiri
                </option>
            </optgroup>
            <optgroup label="Doces">
                <option value="sabor">
                    Chocolate C/ Morango
                </option>
                <option value="">
                    Chocolate Branco
                </option>
                <option value="">
                    Sorvete
                </option>
                <option value="">
                    Nutella
                </option>
            </optgroup>
        </select> <br>
        <label for="side">Tamanho:</label>
        <select name="side" id="">
            <option value="40cm"> Famlilía - [69,99R$ / 40CM]</option>
            <option value="30cm"> Média - [53,90R$ / 30CM]</option>
            <option value="20cm">Broto - [18,00R$ / 20CM]</option>
        </select> <br>
        <label for="coca">Acompanhamento:</label>
        <select name="coca" id="">
            <optgroup label="Nenhum Acompanhamento">
                <option value="none">
                    Nenhum
                </option>
            </optgroup>
            <optgroup label="Bebidas">
                <option value="coca">
                    Coca - Cola / 2L
                </option>
                <option value="pepsi">
                    Pepsi / 2L
                </option>
                <option value="guarana">
                    Guarana / 2L
                </option>
                <option value="sprite">
                    Sprite / 2L
                </option>
                <option value="fantal">
                    Fanta Laranja / 2L
                </option>
                <option value="fantau">
                    Fanta Uva / 2L
                </option>
            </optgroup>
        </select> <br>
        <label for="pix">Pagamento:</label>
        <select name="pix" id="">
            <option value="pix">Pix - [Valor Real]</option>
            <option value="card">Cartão - [Taxa = 2,00R$]</option>
            <option value="money">Dinheiro a Vista - [Valor Real]</option>
        </select> <br>



        <input class="enviar" type="submit" value="Enviar Pedido">



    </form>


    <h2 class="registroh">Registrar Usuário</h2>

    <form class="registrof" action="" method="post">

        <label for="nome">Nome:</label>
        <input class="infi" type="text" name="nome" id="" required autocomplete="off"><br>
        <label for="email">Email:</label>
        <input class="infi" type="email" name="email" id="" required autocomplete="off"><br>
        <label for="senha">Senha:</label>
        <input class="infi" type="password" name="senha" id="" required>

        <input class="enviar" type="submit" value="Cadastrar">

    </form>





    <footer>
        <p class="logo"><span>f</span>Pizzaria Gusteau´V<span>f</span></p>
        <p class="foti">Feito Por Gustavo Couto / Vitor Martins | Junho 2024</p>
    </footer>
    <script src="style.js"></script>
</body>

</html>
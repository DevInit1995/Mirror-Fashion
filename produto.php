<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/produto.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&family=Monomakh&family=Noto+Sans+Warang+Citi&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <?php $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">'; ?>
    <?php
    $cabecalho_title = "Produto da Mirror Fashion";
    ?>

    <title><?php print $cabecalho_title; ?></title>
</head>

<body>
    <?php include("cabecalho.php"); ?>
    <div class="produto-back">
        <div class="container">
            <div class="produto">
                <h1>Fuzzy Cardigan</h1>
                <p>por apenas R$ 129,00</p>

                <form action="checkout.php" method="POST">
                    <fieldset class="cores">
                        <legend>Escolha a cor</legend>

                        <input type="radio" name="cor" id="verde">
                        <label for="verde">
                            <img src="/img/produtos/foto2-verde.png" alt="Produto na cor verde">
                        </label>

                        <input type="radio" name="cor" id="rosa">
                        <label for="rosa">
                            <img src="/img/produtos/foto2-rosa.png" alt="Produto na cor rosa">
                        </label>

                        <input type="radio" name="cor" id="azul">
                        <label for="azul">
                            <img src="/img/produtos/foto2-azul.png" alt="Produto na cor azul">
                        </label>

                        <input class="tamanho" type="range" min="36" max="46" value="42" step="2" name="tamanho">
                        <output for="tamanho" name="valorTamanho">42</output>
                    </fieldset>

                    <input type="submit" class="comprar" value="Comprar">
                    <input type="hidden" name="nome" value="Fuzzy Cardian">
                    <input type="hidden" name="preco" value="129,00">
                </form>
            </div>
        </div>

        <div class="detalhes">
            <h2>Detalhes do produto</h2>

            <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente
                material italiano com estampa desenhada pelos artesãos da
                comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
                mesmo pela nossa entrega a jato.
            </p>

            <table>
                <thead>
                    <tr>
                        <th>Características</th>
                        <th>Detalhe</th>
                    </tr>
                </thead>
            </table>

            <tbody>
                <tr>
                    <td>Modelo</td>
                    <td>Cardigã 7845</td>
                </tr>
                <tr>
                    <td>Material</td>
                    <td>Algodão e poliester</td>
                </tr>
                <tr>
                    <td>Cores</td>
                    <td>Azul, Rosa e Verde</td>
                </tr>
                <tr>
                    <td>Lavagem</td>
                    <td>Lavar a mão</td>
                </tr>
            </tbody>
        </div>

        <?php print $cabecalho_css; ?>
    </div>
    <?php include("rodape.php"); ?>
    <script src="js/bannerRotativo.js"></script>
    <script src="js/produto.js"></script>
</body>

</html>
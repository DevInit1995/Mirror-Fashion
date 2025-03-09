<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="/css/validacao.css">
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--jQuery Mask Plugin-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <title>Checkout Mirror Fashion</title>
</head>

<body>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
        <div class="container-fluid">
            <div class="navbar-nav d-flex align-items-center">
                <span class="bi bi-house ms-2"></span>
                <a class="nav-link active d-flex align-items-center" href="sobre.php">Sobre</a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex align-items-center">
                    <span class="bi bi-question ms-2"></span>
                    <a class="nav-link active" aria-current="page" href="#">Ajuda</a>

                    <span class="bi bi-line ms-2"></span>
                    <a class="nav-link d-flex align-items-center" href="#">Perguntas frequentes</a>

                    <span class="bi bi-phone ms-2"></span>
                    <a class="nav-link d-flex align-items-center" href="#">Entre em contato</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">

            <div class="row">
                <div class="p-3">
                    <div class="col-sm-4">
                        <div class="card w-100">
                            <div class="card-header">
                                <h1>Ótima escolha!</h1>
                                <p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="col-m-8 col-lg-9">
                    <div class="row">
                        <fieldset class="col-md-6">
                            <legend>Dados pessoais</legend>
                            <div class="form-group">
                                <label for="nome">Nome completo</label>
                                <div class="input-group">
                                    <span class="input-group-text">N</span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nome"
                                        name="nome"
                                        autofocus
                                        pattern="[a-z\s]+$"
                                        required
                                        title="Informe o seu nome completo." />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="email@exemplo.com" required
                                        pattern="[^@\s]+@[^@\s]+\.[^@\s]+"
                                        title="Endereço de email inválido" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <div class="input-group">
                                    <span class="input-group-text bi bi-person"></span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="cpf"
                                        name="cpf"
                                        placeholder="000.000.000-00"
                                        title="Informe o número do seu CPF"
                                        data-mask="999.999.999-99"
                                        required />
                                </div>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="sim" name="spam" checked />
                                    Quero receber span da Mirror Fashion
                                </label>
                            </div>
                        </fieldset>

                        <fieldset class="col-md-6">
                            <legend>Cartão de crédito</legend>
                            <div class="form-group">
                                <label for="numero-cartao">Número - CVV</label>
                                <div class="input-group">
                                    <span class="input-group-text">CVV</span>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="numero-cartao"
                                        name="numero-cartao"
                                        data-mask="9999 9999 9999 9999 - 999"
                                        required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <div class="input-group">
                                    <span class="input-group-text bi bi-flag"></span>
                                    <select
                                        name="bandeira-cartao"
                                        id="bandeira-cartao"
                                        class="form-control"
                                        required>

                                        <option value="master">MasterCard</option>
                                        <option value="visa">VISA</option>
                                        <option value="amex">American Express</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="validade-cartao">Validade</label>
                                <div class="input-group">
                                    <span class="input-group-text bi bi-bar-chart-line"></span>
                                    <input
                                        type="month"
                                        class="form-control"
                                        id="validade-cartao"
                                        name="validade-cartao"
                                        required />
                                </div>
                            </div>
                        </fieldset>
                    </div>

                    <div class="p-3">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <span class="bi bi-cart"></span>
                            Confirmar Pedido
                        </button>
                    </div>
                </form>
            </div>

            <div class="card w-50">
                <div class="card text-bg text-black">
                    <h2 class="text-center card-title">Sua compra</h2>
                    <div class="card-body">
                        <dl>
                            <dt>Cor</dt>
                            <dd><?= $_POST['cor'] ?></dd>

                            <dt>Tamanho</dt>
                            <dd><?= $_POST['tamanho'] ?></dd>

                            <dt>Produto</dt>
                            <dd><?= $_POST['nome'] ?></dd>

                            <dt>Preço</dt>
                            <dd><?= $_POST['preco'] ?></dd>
                        </dl>

                        <div class="form-group">
                            <label for="qt">Quantidade</label>
                            <input id="qt" class="form-control" type="number" min="0" max="99" value="1">
                        </div>
                        <div class="form-group">
                            <label for="total">Total</label>
                            <output for="qt valor" id="total" class="form-control">
                                <?= $_POST["preco"] ?>
                            </output>
                        </div>

                        <img src="img/produtos/foto2-verde.png" alt="Fuzzy Cardigan"
                            class="img-thumbnail img-responsive d-xl-none">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bannerRotativo.js"></script>
    <script src="js/converteMoeda.js"></script>
    <script src="js/testaConversao.js"></script>
    <script src="js/total.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/inputmask-plugin.js"></script>

</body>

</html>
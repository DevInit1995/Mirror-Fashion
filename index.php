<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/estilos.css" />
  <link rel="stylesheet" href="/css/mobile.css" media="(max-width: 940px)" />
  <link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script'
    rel='stylesheet'>
  <link rel="shortcut icon" href="#" />

  <?php
  $cabecalho_title = "Home da Mirror Fashion";
  ?>
  <title><?php print $cabecalho_title; ?></title>
</head>

<body>
  <?php include("cabecalho.php"); ?>

  <!--
    <div id="pai">
      <h1>Sou um título</h1>
      <h2>Sou um subtítulo</h2>
    </div>
    
    <div class="exemplo">
      <img src="/img/familia-pelho.jpg" alt="box model" />
    </div>
    -->

  <div class="container destaque">
    <section class="busca">
      <h2>Busca</h2>

      <form>
        <input type="search" />
        <input type="image" src="img/busca.png" />
      </form>
    </section>

    <section class="menu-departamentos">
      <h2>Departamentos</h2>

      <nav>
        <ul>
          <li>
            <a href="#">Blusas e Camisas</a>
            <ul>
              <li><a href="#">Manga curta</a></li>
              <li><a href="#">Manga comprida</a></li>
              <li><a href="#">Camisa social</a></li>
              <li><a href="#">Camisa casual</a></li>
            </ul>
          </li>
          <li><a href="#">Calças</a></li>
          <li><a href="#">Saias</a></li>
          <li><a href="#">Vestidos</a></li>
          <li><a href="#">Sapatos</a></li>
          <li><a href="#">Bolsas e Carteiras</a></li>
          <li><a href="#">Acessórios</a></li>
        </ul>
      </nav>
    </section>

    <a href="#" class="pause"></a>
    <img src="/img/destaque-home.png" alt="Promoção: Big City Night" />
  </div>

  <div class="container paineis">
    <section class="painel painel-compacto novidades">
      <h2>Novidades</h2>

      <ol>
        <!--primeiro produto-->
        <li>
          <a href="produto.html">
            <figure>
              <img src="/img/produtos/miniatura1.png" />
              <figcaption>Fuzz Cardigan por R$ 129, 90</figcaption>
            </figure>
          </a>
        </li>

        <li>
          <a href="produto.html">
            <figure>
              <img src="/img/produtos/miniatura2.png" />
              <figcaption>Fuzz Cardigan por R$ 129, 90</figcaption>
            </figure>
          </a>
        </li>

        <li>
          <a href="produto.html">
            <figure>
              <img src="/img/produtos/miniatura3.png" />
              <figcaption>Fuzz Cardigan por R$ 129, 90</figcaption>
            </figure>
          </a>
        </li>

        <li>
          <a href="produto.html">
            <figure>
              <img src="/img/produtos/miniatura4.png" />
              <figcaption>Fuzz Cardigan por R$ 129, 90</figcaption>
            </figure>
          </a>
        </li>

        <li>
          <a href="produto.html">
            <figure>
              <img src="/img/produtos/miniatura5.png" />
              <figcaption>Fuzz Cardigan por R$ 129, 90</figcaption>
            </figure>
          </a>
        </li>

        <li>
          <a href="produto.html">
            <figure>
              <img src="/img/produtos/miniatura6.png" />
              <figcaption>Fuzz Cardigan por R$ 129, 90</figcaption>
            </figure>
          </a>
        </li>
      </ol>
      <button type="button">Mostra mais</button>
    </section>

    <section class="painel painel-compacto mais-vendidos">
      <h2>Mais Vendidas</h2>

      <ol>
        <!--primeiro produto-->
        <li>
          <a href="produto.php">
            <figure>
              <img src="/img/produtos/miniatura15.png" />
              <figcaption>Fuzz Cardigan por R$ 129, 90</figcaption>
            </figure>
          </a>
        </li>

        <li>
          <a href="produto.php">
            <figure>
              <img src="/img/produtos/miniatura14.png" />
              <figcaption>Fuzz Cardigan por R$ 129, 90</figcaption>
            </figure>
          </a>
        </li>

        <li>
          <a href="produto.php">
            <figure>
              <img src="/img/produtos/miniatura13.png" />
              <figcaption>Fuzz Cardigan por R$ 129, 90</figcaption>
            </figure>
          </a>
        </li>

        <li>
          <a href="produto.php">
            <figure>
              <img src="/img/produtos/miniatura12.png" />
              <figcaption>Fuzz Cardigan por R$ 129, 90</figcaption>
            </figure>
          </a>
        </li>

        <li>
          <a href="produto.php">
            <figure>
              <img src="/img/produtos/miniatura11.png" />
              <figcaption>Fuzz Cardigan por R$ 129, 90</figcaption>
            </figure>
          </a>
        </li>

        <li>
          <a href="produto.php">
            <figure>
              <img src="/img/produtos/miniatura10.png" />
              <figcaption>Fuzz Cardigan por R$ 129, 90</figcaption>
            </figure>
          </a>
        </li>
      </ol>
      <button type="button">Mostrar mais</button>
    </section>
  </div>

  <?php include("rodape.php"); ?>
  <script src="js/index.js"></script>
  <script src="js/bannerRotativo.js"></script>
</body>

</html>
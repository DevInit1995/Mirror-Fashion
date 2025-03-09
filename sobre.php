<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/sobre.css" />
  <link rel="stylesheet" href="/css/estilos.css" />
  <link rel="stylesheet" href="/css/mobile-sobre.css" />
  <link rel="shortcut icon" href="#" />

  <?php
  $cabecalho_title = "Sobre da Mirror Fashion";
  ?>
  <title><?php print $cabecalho_title; ?></title>
</head>

<div>
  <?php include("cabecalho.php"); ?>

  <h1>A Mirror Fashion</h1>

  <section>
    <p class="paragrafo">
      Fundada há <?php print date("Y") - 1932; ?> anos, a <strong>Mirror Fashion A Mirror Fashion</strong> é a maior empresa
      comércio eletrônico no segmento de moda em todo o mundo. Fundada em
      1932, possui filiais em 124 países, sendo líder de mercado com mais de
      90% de participação em 118 deles. Nosso centro de distribuição fica em
      <a href="https://maps.google.com.br/?q=Jacarezinho">Jacarezinho, no Paraná.</a>
    </p>

    <p>
      De lá, saem 48 aviões que distribuem nossos produtos às casas do mundo
      todo. Nosso centro de distribuição: Compre suas roupas e acessórios na
      Mirror Fashion. Acesse nossa loja ou entre em contato se tiver dúvidas.
      Conheça também nossa <a href="#historia">história</a> e nossos
      <a href="#diferenciais">diferenciais</a>.
    </p>
  </section>

  <h2 id="historia">História</h2>
  <hr />

  <figure id="familia-pelho">
    <img src="/img/familia-pelho.jpg" alt="Foto Família Pelho" />
    <figcaption>Família Pelho</figcaption>
  </figure>

  <section>
    <em>A fundação em 1932 ocorreu no momento da descoberta econônica do
      interior do Paraná. A família Pelho, tradicional da região, investiu
      todas as suas economias nessa nova iniciativa, revolucionária para a
      época. O fundador Eduardo Simões Pelho, dotado de particular visão
      administrativa, guiou os negócios da empresa durante mais de 50 anos,
      muitos deles ao lado de seu filho E. S. Pelho Filho, atual CEO. O nome
      da empresa é inspirado no nome da família. O crescimento da empresa foi
      praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países.
      Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje,
      já atendeu 740 milhões de usuários diferentes, em bilhões de diferentes
      pedidos. O crescimento em número de funcionários é também assombroso.
      Hoje, é a maior empregadora do Brasil, mas mesmo após apenas 5 anos de
      sua existência, já possuía 30 mil funcionários. Fora do Brasil, há 240
      mil funcionários, além dos 890 mil brasileiros nas instalações de
      Jacarezinho e nos escritórios em todo país. Dada a importância econômica
      da empresa para o Brasil, a família Pelho já recebeu diversos prêmios,
      homenagens e condecorações. Todos os presidentes do Brasil já visitaram
      as instalações da Mirror Fashion, além de presidentes da União Européia,
      Ásia e o secretário-geral da ONU.</em>
  </section>

  <section>
    <h2 id="diferenciais">Diferenciais</h2>
    <hr />

    <ul>
      <li>Menor preço do varejo, garantido</li>
      <li>Se você achar uma loja mais barata, leva o produto de graça</li>
      <li>Pague em reais, dólares, euros ou bitcoins</li>
      <li>Todas as compras com frete grátis para o mundo todo</li>
      <li>Maior comércio eletrônico de moda do mun</li>
      <li>
        Atendimento via telefone, email, chat, twitter, facebook, carta, fax e
        telegrama
      </li>
      <li>Presente em 124 países</li>
      <li>Mais de um milhão de funcionários em todo o mundo</li>
    </ul>
  </section>

  <figure id="centro-distribuicao">
    <img src="/img/centro-distribuicao.png" alt="Foto Centro distribuição" />
    <figcaption>Centro de distribuição da Mirror Fashion</figcaption>
  </figure>

  <iframe id="aprentacao" width="560" height="315"
    src="https://www.youtube.com/embed/Tb06abHE4hY?si=cpnh0457dtZ0WQ1w"
    title="YouTube video player"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin"
    allowfullscreen></iframe>


  <iframe id="localizacao" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.449840638976!2d-46.63490682466918!3d-23.588194778781357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a2b2ed7f3a1%3A0xab35da2f5ca62674!2sAlura%20-%20Escola%20Online%20de%20Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1740939447292!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <div id="rodape">
    <img src="/img/logo.png" alt="Foto logo" />

    &copy; Copyright Mirror Fashion

  </div>

  <?php include("rodape.php"); ?>
</div>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>

</html>
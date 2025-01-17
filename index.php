<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - Salão Novo Estilo Itapira</title>
  <link rel="shortcut icon" href="multimidia/icon/faviconsalao.jpg " type="image/x-icon">
  <link rel="stylesheet" href="style/index.css" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>

  <?php
      require_once "header.php";
      require_once "nav.php";
  ?>
  
  <main class="p-3 mb-2 bg-body-tertiary">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <picture>
            <source media="(min-width: 620px)" srcset="multimidia/Midia.jpg" >
            <img src="multimidia/mobile/midiamobile.jpg" class="d-block w-100" alt="..." id="imgcarousel">
          </picture>
          <div class="carousel-caption d-none d-md-block" id="textocarrossel">
            <p id="carouselblue">Seu cabelo, nosso talento.</p>
          </div>
        </div>

        <div class="carousel-item">
          <picture>
            <source media="(min-width: 620px)" srcset="multimidia/Midia.jpg">
            <img src="multimidia/mobile/midiamobile.jpg" class="d-block w-100" alt="..." id="imgcarousel">
          </picture>
          <div class="carousel-caption d-none d-md-block" id="textocarrossel">
            <p id="carouselred">Aqui é Onde os sonhos capilares se tornam realidade.</p>
          </div>
        </div>

        <div class="carousel-item">
          <picture>
            <source media="(min-width: 620px)" srcset="multimidia/Midia.jpg">
            <img src="multimidia/mobile/midiamobile.jpg" class="d-block w-100" alt="..." id="imgcarousel">
          </picture>
          <div class="carousel-caption d-none d-md-block" id="textocarrossel">
            <p id="carouselblue">Onde a arte do cabelo encontra a ciência da beleza.</p>
          </div>
        </div>

        <div class="carousel-item">
          <picture>
            <source media="(min-width: 620px)" srcset="multimidia/Midia.jpg">
            <img src="multimidia/mobile/midiamobile.jpg" class="d-block w-100" alt="..." id="imgcarousel">
          </picture>
          <div class="carousel-caption d-none d-md-block" id="textocarrossel">
            <p id="carouselred">Realçando sua beleza natural com cada toque.</p>
          </div>
        </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>

    <section class="Artistaindex">
      <h1>Artista</h1>
        
      <div id="imgartistaindex">
        <picture>
          <source media="(min-width: 620px)" srcset="multimidia/artista.jpg">
          <img src="multimidia/mobile/artistamobile.jpg" alt="">
        </picture>
        </div>

      <div id="botaoartista">
        <a href="sobre.php">
          <button id="botaocssartista"><span>Saiba mais</span><img src="multimidia/icon/portaiconindex.png" alt="" id="imgportaindex"></button>
        </a>
      </div>
    </section>
    
    <section class="Servicoindex">
      <h1>Serviços</h1>

      <div id="divblockmasculino">
        <div id="textoservicomasculino">
          <h4 class="servicos">Cortes de Cabelo Masculino</h4>
          <p>Cortes clássicos e modernos para atender ao seu estilo e personalidade.</p>
        </div>
      </div>

      <div id="divblockfeminino">
        <div id="textoservicofeminino">
          <h4>Progressiva Feminino</h4>
          <p>Alisamento e tratamento para cabelos femininos.</p>
        </div>
      </div>

      <div id="divblockfeminino">
        <div id="textoservicofeminino">
          <h4>Limpeza de Pele</h4>
          <p>Tratamentos faciais para limpeza profunda e revitalização da pele.</p>
        </div>
      </div>

      <div id="botaoservicos">
        <a href="servicos.php">
          <button id="botaocssservicos">Saiba mais <img src="multimidia/icon/portaiconindex.png" alt="" id="imgportaindex"></button>
        </a>
      </div>
    </section>

  </main>
  <?php
        require_once "footer.php";
  ?>

</body>

</html>
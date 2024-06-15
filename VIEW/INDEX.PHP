<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php header('Content-type: text/html, charset= utf-8'); ?>
    <link rel="icon" type="image/x-icon" href="index/assets/IMG/ICON.PNG" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotografia Comercial BH</title>
    <link rel="stylesheet" href="index/assets/CSS/style.css">
</head>

<main>
  <header id="navbar">
    <nav class="navbar-container container">
      <a href="/" class="home-link">
        <div class="navbar-logo"></div>
        <img src="index/ASSETS/IMG/LOGO.PNG" width="80vw">
      </a>
      <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div id="navbar-menu" aria-labelledby="navbar-toggle">
        <ul class="navbar-links">
          <li class="navbar-item"><a class="navbar-link" href="/about">Fotografia Corporativa</a></li>
          <li class="navbar-item"><a class="navbar-link" href="/contact">Design de Interiores</a></li>
          <li class="navbar-item"><a class="navbar-link" href="/contact">Sobre nos</a></li>
        </ul>
      </div>
    </nav>
  </header>
    <!-- Landing Area -->
    <div id="landing">      
    <div id="landing-text">  
    <div id="landing-text-inner">
          <h1>Fotografia comercial BH</h1>
          <h2>Fotografias corporativas para executivos, profissionais e empresas</h2>
          <a href="#images" class="btn" id="view-work">
            View Work
          </a>
        </div>


      </div>
      <div id="landing-image"></div>
    </div>



      
      <div id="images" class="caption">
      <h3>Fotografia de executivos</h3>
      <p>Oferecemos aos nossos clientes fotografias para executivos, com o proposíto de construção de sua identidade profissional e pessoal.</p>
      <img class="img" src="index/assets/IMG/executivos.png"  alt="">
      </div>
      <img src="" alt="">
      <div class="caption">
        <h3>Fotografias corporativas</h3>
        <p>Fotografias para construção da sua marca e sua identidade enquanto empresa e time.</p>
      </div>
      <img src="https://source.unsplash.com/1600x900/?nature,flowers" alt="">
      <div class="caption">
        <h3>Photo Three</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, tenetur.</p>
      </div>
      <img src="https://source.unsplash.com/1600x900/?nature,animals" alt="">
      <div class="caption">
        <h3>Photo Four</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, tenetur.</p>
      </div>
      <img src="https://source.unsplash.com/1600x900/?nature,clouds" alt="">
      <div class="caption">
        <h3>Photo Five</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, tenetur.</p>
      </div>
    </div>
  </main>

  <footer>
    <h3>Entre em contato</h3>
    <p>Email or call us to set up a consult</p>
    <p>Email:
      <strong>contact@acmephotos.test</strong>
    </p>
    <p>Telefone:
      <strong>(31) 9 8881-4800</strong>
    </p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="index/assets/JS/script.js"></script>
</body>

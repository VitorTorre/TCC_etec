<?php
session start()
include 'MySQL/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Dybit</title>
    <link rel="stylesheet" href="style.css"> <!-- Corrigido o nome do arquivo -->
    <link rel="shortcut icon" href="22-11-2024/imgs/logo-Dybit-3.jpg" type="x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="script.js" defer></script> <!-- Corrigido o nome do arquivo -->
</head>
<body>
    <header>
        <h1>Livraria Dybit</h1>
        <nav>
            <ul>
                <li><a href="home-Dybit.php">Home</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="livros.php">Livros</a></li>
                <li><a href="Reading.php">Dinamismo</a></li>
            </ul>
        </nav>
    </header>

    <main>
      <section id="livros">
        <h2>Best-sellers</h2>
        <section id="filtrar">
            <label for="genero-literario">Generos</label>
        
            <label for="acao-e-aventura">Ação e Aventura</label>
            <input type="checkbox" name="acao-e-aventura" id="acao-e-aventura">
            <br><br>
            <label for="drama">Drama</label>
            <input type="checkbox" name="drama" id="drama">
            <br>
            <label for="ficcao">Ficção</label>
            <input type="checkbox" name="ficcao" id="ficcao">
            <br><br>
            <label for="suspense">Suspense</label>
            <input type="checkbox" name="suspense" id="suspense">
            <br>
            <label for="misterio">Mistério</label>
            <input type="checkbox" name="misterio" id="misterio">
            <br>
            <label for="best-sellers">Best Sellers</label>
            <input type="checkbox" name="best-sellers" id="best-sellers">
            <br>
            <label for="reais">Preço</label>
            <input type="number" name="valor" id="reais" placeholder="Valor máximo">
        </section>
        <div class="livro" data-id="1">
            <img src="22-11-2024/imgs/o-poder-do-habito.jpg" alt="Capa do Livro 1">
            <h3>O Poder do Agora</h3>
            <p>Preço: R$ 29,90</p>
            <button class="btn-comprar" type='Comprar()'>Comprar</button>
        </div>
        <div class="livro" data-id="2">
            <img src="22-11-2024/imgs/Os-segredos-da-mente-milionaria.jpg" alt="Capa do Livro 2">
            <h3>Os Segredos da mente milhonária</h3>
            <p>T.Harv Eker</p>
            <p>Preço: R$ 39,90</p>
            <button class="btn-comprar" type='Comprar()'>Comprar</button>
        </div>
        <div class="livro" data-id="3">
            <img src="22-11-2024/imgs/Os-7-habitos-das-pessoas-altamente-eficazes.jpg" alt="Capa do Livro 3">
            <h3>Os 7 hábitos de pessoas altamente saudáveis</h3>
            <p>T.Harv Eker</p>
            <p>Preço: R$ 39,90</p>
            <button class="btn-comprar" type='Comprar()'>Comprar</button>
        </div>
        </section>        <br><br><br><br><br><br>
        <section id="livros">
        <div class="livro" data-id="4">
            <a href="livro.php?data-id=1">Ver livro com ID 1
          <img src="22-11-2024/imgs/a-carteira-Machado-de-Asis.jpg" alt="Capa do Livro 4">
          <h3> a-carteira-Machado-de-Asis.pdf </h3>
          <p>Por Machado-de-Asis</p>
          <p>Preço: R$ 59,90</p>
          <button class="btn-comprar">Comprar</button></a>
          <button class="btn-leitura" form="reading-books"><a href="reading-books.html">Leitura</a></button>        
      </div>
      <div class="livro" data-id="5">
        <img src="22-11-2024/imgs/Dom-Casmuro.jpg" alt="Capa do Livro 5">
        <h3> Dom Casmuro </h3>
        <p>Por Machado-de-Asis</p>
        <p>Preço: R$ 49,90</p>
        <button class="btn-comprar">Comprar</button>
        <button class="btn-leitura" form="reading-books.php"><a href="reading-books.html">Leitura</a></button>        
    </div>
    <div class="livro" data-id="6">
        <img src="22-11-2024/imgs/iracema.jpg" alt="Capa do Livro 6">
        <h3> Iracema </h3>
        <p>Por Machado-de-Asis</p>
        <p>Preço: R$ 20,90</p>
        <button class="btn-comprar">Comprar</button>
        <button class="btn-leitura" form="reading-books.php"><a href="reading-books.html">Leitura</a></button>        
    </div>
    </section>
    </main>

    <footer>
        <p>&copy; 2024 Livraria Online. Todos os direitos reservados.</p>
    </footer>

</body>
</html>

    
</body>
</html>
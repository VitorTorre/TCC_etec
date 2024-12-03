<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros: Biblioteca dinâmica</title>
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
                <li><a href="TCC Definitivo(index).html">Home</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="livros.php">Livros</a></li>
                <li><a href="contato.html">contato</a></li>
                <li><a href="listagem-de-livros.html">Dinamismo</a></li>
            </ul>
        </nav>
    </header>
    <section id="info-compra-do-livro">
    <main>
        <h1 id="idlivros">Livro: A Carteira - Machado de Assis</h1>
        <br>
        <button>  
            <img src="22-11-2024/imgs/a-carteira-Machado-de-Asis.jpg" height="200px" width="200px" alt="Capa do Livro A Carteira">
        </button>

        <div class="pagina">
            <!-- Exibição do PDF -->
            <embed src="Livros-pdf/a-carteira-Machado-de-Asis.pdf" type="application/pdf" width="100%" height="600px">    
            
            <br><br>
            
            <!-- Exibição do PDF via Google Drive -->
            <iframe src="https://drive.google.com/file/d/1Dzj0CGd9IftdAtWIM-cpF8iD00EPqbrL/view?pli=1" 
                style="width: 100%; height: 600px;" frameborder="0"></iframe>
            </div>
        </main>
        <div class="livro" data-id="1">
            <h3 id="titulo">A carteira de Machado de Asis</h3>
            <img src="" id="idlivro" alt="">
            <p>Romance</p>
            <p>Preço: R$ 29,00</p>
            <form action="MySQL/compra.php" method="post">
                <input type="hidden" name="id_livro.php" value="1">
                <input type="hidden" name="preco" value="29,90">
                <button class="btn-comprar" onclick="compra()"></button>
            </form>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Livraria Online. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

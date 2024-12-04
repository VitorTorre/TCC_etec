<? php
session start()
include 'MySQL/conexao.php';

// Verifica se o usuário está logado
if (!isset($_SESSION["usuario"])) {
  header("Location: count-user.php");
  exit;
}

// Exibe dados do usuário
$email = $_SESSION["usuario"];
$query = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($query);
$usuario = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Dybit</title>
</head>
<body>
<div class="preload" data-preaload>
        <div class="circle"></div>
        <div class="topbar">
        <div class="container">
    
          <address class="topbar-item">
            <div class="icon">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
            </div>
    
            <span class="span">
              Endereço: São josé Dos Campos
            </span>
          </address>
    
          <div class="separator"></div>


          <div class="topbar-item item-2">
          <div class="icon">
            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
          </div>

          <span class="span">Texto</span>
        </div>

        <a href="Telefone:(00)0000-000" class="topbar-item link">
        <div class="icon">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+1 123 456789</span>
    </a>

    <div class="separator"></div>

    <a href="biblioteca:dinamica1414@gmail.com" class="topbar-item link">
        <div class="icon">
        <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">biblioteca1414@gmail.com</span>
    </a>

    </div>
  </div>


  <header class="header" data-header>
    <div class="container">

        <a href="#" class="logo">
            <img src="img.jpg" width="160" height="50" alt="Biblioteca dinâmica - Home">
        </a>

        <nav class="navbar" data-navbar>

            <button class="close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>

            <a href="#" class="logo">
                <img src="22-11-2024/imgs/logo-Dybit-2.jpg" width="160" height="50" alt="Biblioteca dinâmica - Home">
            </a>

            <ul class="navbar-list">

              <li class="navbar-item">
                <a href="home-Dybit.html" class="navbar-link hover-underline active">
                    <div class="separator"></div>

                    <span class="span">Home</span>
                </a>
              </li>

              <li class="navbar-item">
                <a href="sobre.html" class="navbar-link hover-underline active">
                    <div class="separator"></div>

                    <span class="span">Sobre</span>
                </a>
              </li>

              <li class="navbar-item">
                <a href="listagem-de-livros.html" class="navbar-link hover-underline active">
                    <div class="separator"></div>

                    <span class="span">Livros</span>
                </a>
              </li>

              <li class="navbar-item">
                <a href="contatos.html" class="navbar-link hover-underline active">
                    <div class="separator"></div>

                    <span class="span">Contato</span>
                </a>
              </li>

              <li class="navbar-item">
                <a href="" class="navbar-link hover-underline active">
                    <div class="separator"></div>

                    <span class="span">Dinamismo</span>
                </a>
              </li>

            </ul>

            <div class="text-center">
                <p class="headline-1 navbar-title">Visite-nos</p>

                <address class="body-4">
                    Biblioteca, SJC <br>
                    Brasil
                </address>

                <p class="body-4 navbar-text">Horario: das 10:00 as 19:00</p>

                <a href="biblioteca:dinamica1414@gmail.com" class="body-4 sidebar-link">biblioteca:dinamica1414@gmail.com</a>

                <div class="separator"></div>

                <p class="contacat-label">Requisito de livros</p>

                <a href="tel:+546474567657657" class="body-1 contact-number hover-underline"> +88-123-123456</a>
            </div>
        </nav>

        <a href="Libary view.html" class="btn btn-secondary">
            <span class="text text-1">Conheça nossos livros</span>

            <span class="text text-2" aria-hidden="true">Conheça nossos livros</span>
        </a>
        <p class="text">Biblioteca dinâmica</p>
    </div> 
        <h1>Bem-vindo, <?= $usuario["nome"] ?>!</h1>
        <p>Email: <?= $usuario["email"] ?></p>
        <a href="logout.php">Sair</a>

    
</body>
</html>

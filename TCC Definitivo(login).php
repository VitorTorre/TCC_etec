<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="TCC definitivo(login).css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Login</title>
    <link rel="shortcut icon" href="22-11-2024/imgs/logo-Dybit-3.jpg" type="image/x-icon">
    
    <link rel="preload" as="image" href="img.jpg">
    <link rel="preload" as="image" href="img.jpg">
    <link rel="preload" as="image" href="img.jpg">



</head>


<body id="top">

    <div class="preload" data-preaload>
        <div class="circle"></div>
        <!--<p class="text">Login</p>-->
    </div>
    
    <div class="wrapper">
        <div class="form-container sign-in">
            <form action="count-user.php" method="POST">
                <h3>Login</h3>
                <div class="username">
                    <input type="text" name="sign-in-username" required>
                    <label id="sign-in-username-label" for="sign-in-username"><i class="fa-solid fa-user"></i>Email</label>
                </div>
                <div class="password">
                    <input type="password" name="sign-in-password" required>
                    <label id="sign-in-password-label" for="sign-in-password"><i class="fa-solid fa-lock"></i> Senha</label>
                </div>
                <div class="frgt-pass">Esqueceu a senha?</div>
                <button class="login-btn">Login</button>
                <p class="dnt-have-account">Não possui uma conta? 
                <span onclick="signup()">Criar uma</span></p>
            </form>
        </div>
        <div class="form-container sign-up">
            <form action="cadastro_de_usuario.php" method="POST">
                <h3>Cadastro</h3>
                <div class="username">
                    <input type="text" name="username" required>
                    <label for="signup-username"><i class="fa-solid fa-user"></i> Nome de usuario</label>
                </div>
                <div class="email">
                    <input type="text" name="email" required>
                    <label for="signup-email"><i class="fa-solid fa-envelope"></i> Email</label>
                </div>
                <div class="password">
                    <input type="password" name="password" required>
                    <label for="signup-email"><i class="fa-solid fa-lock"></i> Senha</label>
                </div>
                <button type="submit" class="signup-btn">Criar conta</button>
                <p class="alrd-have-account">Já possui conta? <span onclick="signin()">Entre</span></p>
            </form>
        </div>
    </div>

   <script>
    let wrapper = document.querySelector('.wrapper');

    let signup =()=>{
        wrapper.classList.add("animated-signin");
        wrapper.classList.remove("animated-signup");
    }

    let signin =()=>{
        wrapper.classList.add("animated-signup");
        wrapper.classList.remove("animated-signin");
    }
   </script>

</body>
</html>
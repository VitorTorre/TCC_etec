<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Compra</title>
    <link rel="stylesheet" href="Compra.css">
</head>
<body>
    <div class="container">
        <h1>Loja Online</h1>
        <div class="product">
            <img src="https://via.placeholder.com/200" alt="Produto">
            <h2>Produto </h2>
            <p>Preço: R$ 00,99</p>
            <a href="Transacao.php"><button class="btn" onclick="comprar()">Comprar</button></a>
            
        </div>
    </div>

    <script>
        function comprar() {
            alert("Produto adicionado ao carrinho!");
        }
    </script>
</body>
</html>

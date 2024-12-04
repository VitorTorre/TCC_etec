<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transação de Compra</title>
    <link rel="stylesheet" href="Transacao.css">
</head>
<body>


    <div class="container">
        <h1>Detalhes da Compra</h1>

        <div class="product-info">
            <img src="22-11-2024/imgs/a-Carteira-Machado-de-Asis.jpg" alt="Produto">
            <div class="details">
                <h2>A Carteira</h2>
                <p>Preço Unitário: R$ 37.90</p>

                <label for="quantidade">Quantidade:</label>
                <input type="number" id="quantidade" name="quantidade" min="1" value="1" onchange="atualizarPreco()">

                <p id="preco-total">Preço Total: R$ 37,90</p>
            </div>
        </div>

        <div class="buttons">
            <a href="finalizacao.php"><button class="btn" onclick="finalizarCompra()">Finalizar Compra</button></a>
            
            <a href="Libary view.php"><button class="btn cancel" onclick="cancelarCompra()">Cancelar</button></a>
            
        </div>
    </div>

    <script>
        const precoUnitario = 37.90;

        function atualizarPreco() {
            const quantidade = document.getElementById('quantidade').value;
            const precoTotal = (precoUnitario * quantidade).toFixed(2);
            document.getElementById('preco-total').innerText = `Preço Total: R$ ${precoTotal}`;
        }

        function finalizarCompra() {
            const quantidade = document.getElementById('quantidade').value;
            const precoTotal = (precoUnitario * quantidade).toFixed(2);
            alert(`Compra finalizada! Produto(s): ${quantidade} | Preço Total: R$ ${precoTotal}`);
        }

        function cancelarCompra() {
            alert("Compra cancelada.");
        }
    </script>
</body>
</html>

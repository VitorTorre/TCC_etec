<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalização de Compra</title>
    <link rel="stylesheet" href="finalizacao.css">
</head>
<body>
    <div class="container">
        <h1>Finalização da Compra</h1>

        <!-- Resumo do Produto -->
        <div class="product-summary">
            <img src="https://via.placeholder.com/200" alt="Produto">
            <div class="details">
                <h2>A Republica</h2>
                <p><strong>Quantidade:</strong> <span id="quantidade-final">1</span></p>
                <p><strong>Preço Total:</strong> R$ <span id="preco-total-final">20,90</span></p>
            </div>
        </div>

        <!-- Formulário de Pagamento -->
      

            <button type="submit" class="btn"><a href="Libary view.php">Voltar</button>
        </form>

        <div id="confirmation-message" style="display:none;">
            <h3>Compra Concluída com Sucesso!</h3>
            <p>Obrigado pela sua compra.</p>
        </div>
    </div>

    <script>
        const form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Impede o envio real do formulário

            // Aqui você pode processar o pagamento ou fazer qualquer outro processo
            document.getElementById('confirmation-message').style.display = 'block';
            form.style.display = 'none';
        });
    </script>
</body>
</html>

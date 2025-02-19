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
            <img src="22-11-2024/imgs/Dom-Casmuro.jpg" alt="Produto">
            <div class="details">
                <h2>Dom Casmuro</h2>
                <p><strong>Quantidade:</strong> <span id="quantidade-final">1</span></p>
                <p><strong>Preço Total:</strong> R$ <span id="preco-total-final">34,90</span></p>
            </div>
        </div>

    

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

        const params = new URLSearchParams(window.location.search);
        const resultado = params.get('resultado');

        if(resultado) {
            document.body.InnerHTML = "Compra deu:" + resultado;
        } else {
            document.body.InnerHTML "Nenhum resultado encontrado";
        }
    </script>
</body>
</html>

<?php
// Recuperar código de compra
$codigo_compra = $_GET['codigo_compra'];

// Conectar ao banco de dados
$conn = mysqli_connect("localhost", "usuario", "senha", "banco");

// Verificar se a conexão foi estabelecida
if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}

// Recuperar dados da compra
$query = "SELECT * FROM compras WHERE codigo_compra = '$codigo_compra'";
$result = mysqli_query($conn, $query);
$compra = mysqli_fetch_assoc($result);

// Exibir opções de pagamento
?>
<h2>Pagamento</h2>
<p>Código de compra: <?= $compra['codigo_compra'] ?></p>
<p>Preço: R$ <?= $compra['preco'] ?></p>

<form action="pagamento.php" method="post">
  <input type="hidden" name="codigo_compra" value="<?= $compra['codigo_compra'] ?>">
  <input type="radio" name="metodo_pagamento" value="cartao"> Cartão de crédito
  <input type="radio" name="metodo_pagamento" value="pix"> Pix
  <button>Pagar</button>
</form>
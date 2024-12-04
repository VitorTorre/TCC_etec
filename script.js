const { query } = require("express");

function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

/**
 * 
 */
function btnFiltrar() {
    // Acessa o primeiro elemento com a classe
    document.querySelectorAll("btnFiltrar").style.diisplay = "";
    document.querySelector("btn-fFiltrar").style.display = "block";
    document.querySelector("btn btn-secondary").style.display = "block";

    
  const btnFiltrar = document.getElementById('filtrar');
  const genero = document.getElementById('genero').value;
  const autor = document.getElementById('autor').value;
  const preco = document.getElementById('preco').value;

   // Aplica lógica de filtro aqui
  // Exemplo:
  if (genero !== "" && autor !== "" && preco !== "") {
    // Filtre os dados aqui
  }
}


  
const formLogin = document.getElementById('form-login');
const btnLogin = document.getElementById('btn-login');
const mensagem = document.getElementById('mensagem');

formLogin.addEventListener('submit', async (e) => {
  e.preventDefault();

  const usuario = document.getElementById('usuario').value;
  const senha = document.getElementById('senha').value;

  // Requisição para o servidor
  const resposta = await fetch('/login', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ usuario, senha }),
  });

  const dados = await resposta.json();

  if (dados.autenticado) {
    // Login bem-sucedido
    window.mensagem.innerHTML = 'Login efetuado com sucesso!';
    // Redirecionar para página protegida
    window.location.href = '/pagina-protegida';
  } else {
    // Erro de autenticação
    mensagem.innerHTML = 'Usuário ou senha inválidos!';
  }
});

function Comprar() {
  document.addEventListener("DOMContentLoaded", () => {
      const comprarBotoes = document.querySelectorAll(".btn-comprar");

      comprarBotoes.forEach(botao => {
          botao.addEventListener("click", (event) => {
              const livro = event.target.closest(".livro");
              const titulo = livro.querySelector("h3").textContent;
              const preco = livro.querySelector("p:nth-child(4)").textContent.split(":")[1].trim();

              abrirModalPagamento(titulo, preco);
          });
      });
  });
}

function abrirModalPagamento(titulo, preco) {
  // Cria o modal
  const modal = document.createElement("div");
  modal.classList.add("modal");
  modal.innerHTML = `
      <div class="modal-content">
          <h2>Pagamento</h2>
          <p>Livro: <strong>${titulo}</strong></p>
          <p>Preço: <strong>${preco}</strong></p>
          <p>Escolha o método de pagamento:</p>
          <button class="btn-metodo" data-metodo="cartao">Cartão de Crédito</button>
          <button class="btn-metodo" data-metodo="pix">PIX</button>
          <button class="btn-fechar">Cancelar</button>
      </div>
  `;
  document.body.appendChild(modal);

  // Adiciona os eventos de clique nos botões
  modal.querySelectorAll(".btn-metodo").forEach(btn => {
      btn.addEventListener("click", () => {
          const metodo = btn.getAttribute("data-metodo");
          processarPagamento(metodo, titulo, preco);
          fecharModal(modal);
      });
  });

  modal.querySelector(".btn-fechar").addEventListener("click", () => {
      fecharModal(modal);
  });
}

function processarPagamento(metodo, titulo, preco) {
  let mensagem = `Pagamento para o livro "${titulo}" no valor de ${preco} foi realizado com sucesso usando ${metodo === "cartao" ? "Cartão de Crédito" : "PIX"}.`;
  alert(mensagem);
}

function fecharModal(modal) {
  modal.remove();
}

function logout(){
  let 
}

function btn_comprar(){
  let comprar = `Pagamento para o livro "${titulo}" no valor de ${preco} foi realizado com sucesso usando ${metodo === "cartao" ? "Cartão de Crédito" : "PIX"}.`;
  window.
}

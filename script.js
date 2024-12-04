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
  document.querySelector("btn btn-secondary").style.display = "block";

  const btnFiltrar = document.getElementById('filtrar');
  const filtros = document.getElementById('filtros');
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


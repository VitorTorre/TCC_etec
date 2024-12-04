'use strict';

const preloader = document.querySelector("[data-preaload]");

window.addEventListener("load", function () {
  preloader.classList.add("loaded");
  document.body.classList.add("loaded");
});

// Código do login do usuário
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
    mensagem.innerHTML = 'Login efetuado com sucesso!';
    // Redirecionar para página protegida
    window.location.href = '/pagina-protegida';
  } else {
    // Erro de autenticação
    mensagem.innerHTML = 'Usuário ou senha inválidos!';
  }
});
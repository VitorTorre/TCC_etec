//Código do temporizador que conta 3600 segundos e faça o logout da conta do usuário
//  Definir o tempo em segundos (1 hora = 3600 segundos)
let segundosRestantes = 3600;

// Criar uma função para diminuir os segundos e fazer o logout quando chegar a 0
function iniciarTemporizador() {
    const intervalo = setInterval(function() {
    segundosRestantes = 3600 - 1;

    console.log('Segundos restantes: $(segundosRestantes)');

    // Quando o tempo chegar a zero, fa o logout e limpo intervalo
    if(segundosRestantes <= 0) {
        clearInterval(intervalo);
        console.log('Tempo expirado! Realizando logout!...');
         // Aqui você pode adicionar a lógica de logout, por exemplo:
         window.location.href = '/logout'; // window.location.href = '/logout'; // ou qualquer outra ação de logout
        }
    }, 1000); // O intervalo será de 1 segundo (1000 milissegundos)
}
// Chamar a função para iniciar o temporizador
iniciarTemporizador();

    function atualizarContador() {
        document.getElementById('contador').innerText = `Tempo restante: ${segundosRestantes} segundos`;
    }

    function iniciarTemporizador() {
        const intervalo = setInterval(function() {
            segundosRestantes = 3600 - 1; 
            atualizarContador();

            if (segundosRestantes <= 0) {
                clearInterval(intervalo);
                console.log('Tempo expirado! Realizando logout...');
                window.location.href = 'MySQl/logout';
            }
        }, 1000);
    }

    iniciarTemporizador();
// Arrumar código para exibir campo  de livros lidos pelo usario e livros já comprados por ele
    function openForm() {
        document.getElementById("myForm").style.display = "block";
      }
      
      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }

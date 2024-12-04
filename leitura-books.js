document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.btn-comprar');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const livroDiv = button.closest('.livro');
            const livroId = livroDiv.getAttribute('data-id');
            const livroTitulo = livroDiv.querySelector('h3').innerText;
            alert(`Você comprou ${livroTitulo}! (ID: ${livroId})`);
        });
    });
});

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

var url = 'Livros-pdf/a-carteira-Machado-de-Asis.pdf';

        // Carregar o PDF
        pdfjsLib.getDocument(url).promise.then(function (pdf) {
            console.log('PDF carregado');
            
            // Renderizar a primeira página
            pdf.getPage(1).then(function(page) {
                var scale = 1.5;
                var viewport = page.getViewport({ scale: scale });
                
                // Preparar o canvas usando as dimensões da página
                var canvas = document.getElementById('pdf-canvas');
                var context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Renderizar a página no canvas
                page.render({
                    canvasContext: context,
                    viewport: viewport
                });
            });
        });
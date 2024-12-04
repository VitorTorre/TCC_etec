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

CREATE TABLE livros (
  idlivro INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255) NOT NULL,
  autor VARCHAR(255) NOT NULL,
  genero VARCHAR(100) NOT NULL,
  descricao TEXT NOT NULL
);
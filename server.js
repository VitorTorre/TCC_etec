import "dotenv/config";
import express from "express";
import routes from "./src/routes/index.js";

const PORT = 3000;
const app = express();

app.use(express.json()); // Chame o middleware antes das rotas

const routes = (app) => {
    app.route("/").get((req, res) => res.status(200).send("rota inicial"));
}

configurarRotas(); // Chame a função para configurar as rotas

app.use(rotas); // Chame as rotas importadas

app.listen(PORT, () => {
    console.log(`Servidor rodando na porta ${PORT}`);
  });

export default routes;
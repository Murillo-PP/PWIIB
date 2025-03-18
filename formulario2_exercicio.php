1- Crie um formulário HTML que solicite o nome e a idade de um usuário. Ao enviar o formulário com o método GET, exiba o nome e a idade do usuário na página seguinte.

2-Crie um formulário HTML que receba dois números e, ao enviar com o método GET, exiba a soma desses dois números.

3-Crie um formulário HTML que peça o nome do usuário. Quando o formulário for enviado com o método GET, exiba uma mensagem personalizada dizendo "Olá, [nome]".

4-Crie um formulário de login que receba o nome de usuário e senha.
 Quando o formulário for enviado com o método POST,
  verifique se o nome de usuário e a senha são válidos
   (pode ser um simples exemplo de validação).

5-Crie um formulário HTML que receba dois números e,
 ao enviar com o método POST, exiba o produto desses números.

6-Crie um formulário HTML que receba
 o nome e a mensagem de um usuário.
 Quando o formulário for enviado com o método POST,
  exiba a mensagem do usuário.

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
    <div class="container">
        <h1>Exercicio 1</h1>
        <form action="salvar_dados.php" method="get">
            <label>Nome</label>
            <input type="nome" name="nome" value="">
            <br>
            <label>Idade</label>
            <input type="date" name="idade" value="">
            <br>
            <button type="submit">
                Exibir
            </button>
        </form>

        <h1>Exercicio 2</h1>
        <form action="salvar_dado.php" method="get">
        </form>
    </div>
  </body>

  </html>
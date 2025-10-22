<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Formulário de Cadastro</title>
  <style>
    body {
      background-color: cornsilk;
    }

    .container {
      display: flex;
      justify-content: center;
    }


    form {
      height: 100%;
      width: 500px;
      display: flex;
      padding: 10px;
      gap: 10px;
      flex-direction: column;
    }

    h2 {
      background-color: purple;
      padding: 14px;
      border-radius: 10px;
      color: #fff;
    }

    .input-form {
      padding: 10px;
    }

    input[type='submit'] {
      background-color: purple;
      border: none;
      border-radius: 6px;
      color: #fff;
      padding: 10px;
      font-size: 1.2rem;
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="./main.php" method="post">
      <h2>Cadastro</h2>
      <input type="text" class="input-form" name="nome" id="nome" placeholder="Nome:" required>
      <input type="text" class="input-form" name="senha" id="senha" placeholder="Senha:" required>
      <input type="text" class="input-form" name="conf_senha" id="conf_senha" placeholder="Confirme a sua Senha:" required>
      <input type="text" class="input-form" name="rua" id="rua" placeholder="Rua:" required>
      <input type="text" class="input-form" name="bairro" id="bairro" placeholder="Bairro:" required>
      <input type="number" class="input-form" name="numero" id="numero" placeholder="Número:" required>
      <input type="text" class="input-form" name="cep" id="cep" placeholder="CEP:" required>
      <input type="text" class="input-form" name="cidade" id="cidade" placeholder="Cidade:" required>
      <input type="text" class="input-form" name="estado" id="estado" placeholder="Estado:" required>
      <input type="text" class="input-form" name="pais" id="pais" placeholder="País:" required>
      <input type="submit" name="button-submit" />
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>
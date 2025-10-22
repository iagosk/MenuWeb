<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Web Menu</title>
    <style>
        body {
            background-color: cornsilk;
            height: 100vh;
        }

        .container {
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: #fff;
        }

        h1 {
            background-color: purple;
            padding: 12px;
            border-radius: 6px;
        }

        .links {
            display: flex;
            gap: 50px;
        }

        .links > a {
            background-color: coral;
            border-radius: 6px;
            text-decoration: none;
            padding: 6px;
            color: #fff;
        }
    </style>
</head>

<body>
<<<<<<< HEAD
    <div class="sidebar">
        <header>
            <h2>Web Menu</h2>
        </header>
        <hr />
        <div class="user-area">
          <?php if(isset($user)) { ?>
            <h3>Usuário: <?php echo "<br/> {$user->Nome}" ?></h3>
          <?php } ?>
=======
    <div class="container">
        <div class="title">
            <h1>Menu Web.</h1>
        </div>
        <br />
        <div class="links">
            <a href="./form_cadastro.php">Cadastrar-se</a>
            <a href="./form_login.php">Entrar</a>
>>>>>>> a03b9925a65c08a7918df915d3349e45d577d784
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>
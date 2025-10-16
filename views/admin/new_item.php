<!-- Esta é a página de índice para o usuário administrador. -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<title>Web Menu - Novos Itens</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        background-color: cornsilk;
        height: 100vh;
    }

    header {
        background-color: purple;
        color: #fff;
        padding: 30px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    hr {
        background-color: #fff !important;
        border: 2px solid #fff;
        border-radius: 8px;
        height: 3px;
        width: 220px;
    }

    nav {
        background-color: coral;
        display: flex;
    }

    nav>a {
        flex-grow: 1;
        text-align: center;
        padding: 18px;
        color: #fff;
        text-decoration: none;
        position: relative;
        transition: all 0.6s ease;
    }

    nav>a::after {
        content: "";
        background-color: purple;
        border-radius: 5px;
        height: 4px;
        width: 0;
        position: absolute;
        bottom: 0px;
        left: -2px;
        transition: width 0.5s ease;
    }

    nav>a:hover::after {
        width: 100%;
    }

    .container {
        height: 100%;
        width: 100%;
    }

    main {
        height: 100%;
        width: 100%;
    }

    iframe {
        height: 100%;
        width: 100%;
    }

    .form-prato {
        height: 100%;
        width: 100%;
        background: coral;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    form {
        background-color: cornsilk;
        border-radius: 14px;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        height: 100%;
        width: 100%;
        display: flex;
        align-items: start;
        justify-content: center;
        flex-direction: column;
        overflow: hidden;
    }

    .title {
        background-color: purple;
        color: #fff;
        width: 100%;
        padding: 30px;
        border-radius: 5px;
    }

    .all-inputs {
        padding: 3px;
    }

    .input-form {
        border: 2px solid purple;
        border-radius: 5px;
        flex-grow: 1;
        margin: 8px;
        padding: 8px;
        font-size: 1.1em;
        width: 100%;
    }

    .button-form {
        background-color: purple;
        color: #fff;
        margin: 12px;
        padding: 12px;
        border: none;
        border-radius: 6px;
    }

    footer {
        color: #fff;
        padding: 30px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        position: fixed;
        bottom: 0;
    }

    footer>p>button {
        background-color: purple;
        color: #fff;
        border: none;
        border-radius: 10px;
        padding: 12px;
        cursor: pointer;
    }

    footer>p>button:hover {
        transform: scale(1.1);
    }
</style>
</head>

<body>
    <header>
        <h1>Web Menu</h1>
        <br />
        <hr />
        <br />
        <h3>Adicionar Novos Itens</h3>
    </header>
    <div class="container">
        <nav>
            <a href="./prato_principal.php" target="frame">Prato</a>
            <a href="./acompanhamentos.php" target="frame">Acompanhamentos</a>
            <a href="./proteinas.php" target="frame">Proteínas</a>
        </nav>
        <main class="conteudo">
            <iframe src="./frame.php" frameborder="0" name="frame"></iframe>
        </main>
    </div>
    <script>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
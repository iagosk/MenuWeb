<!-- Esta é a página de índice para o usuário administrador. -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <title>Web Menu - Novos Itens</title>
    <style>
        .sidebar {
            background-color: gray;
            height: 100vh;
            position: fixed;
            transition: all .5s ease;
            z-index: 1;
        }
        
        .sidebar > ul {
            width: 100%;
            padding: 40px;
        }

        .buttonSidebar {
            background: purple;
            color: #fff;
            border: none;
            border-radius: 0px 12px 12px 0px;
            padding: 10px;
            position: fixed;
            top: 50%;
            left: 0px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: all .5s ease;
            z-index: 1;
            opacity: 0;
        }

        .buttonSidebar:hover {
            transform: scale(1.05);
        }

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
            background-color: #fff;
            border: 2px solid #fff;
            border-radius: 8px;
            height: 3px;
            width: 220px;
        }

        nav {
            background-color: gray;
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
            height: 3px;
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
    <div class="sidebar">
        <header>
            <h2>Web Menu</h2>
        </header>
        <ul>
            <li>Adicionar Novos Itens</li>
            <li>Remover Itens</li>
            <li>Atualizar Itens</li>
            <li>Projects</li>
            <li>Contacts</li>
        </ul>
    </div>
    <button class="buttonSidebar">
        <i class="fi fi-rr-angle-right"></i>
    </button>
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
    <footer>
        <p>
            <button id="next">Ir para o Cardápio</button>
        </p>
    </footer>
</body>
<script>
    const sidebar = document.querySelector(".sidebar");
    const buttonSidebar = document.querySelector("button.buttonSidebar");
    const widthSidebar = sidebar.getBoundingClientRect();
    const i = document.querySelector("button > i");
    const buttonNext = document.querySelector("button#next");

    buttonNext.addEventListener("click", () => {
        window.location.href = "../cardapio.php";
    });

    let clicked = true;
    
    sidebar.style.left = `-${widthSidebar.width}px`;
    
    buttonSidebar.addEventListener("click", () => {
        if (clicked) {
            console.log(widthSidebar.width)
            sidebar.style.left = "0px";
            buttonSidebar.style.left = `${widthSidebar.width}px`;
            clicked = false;
            i.classList.remove("fi-rr-angle-right");
            i.classList.add("fi-rr-angle-left");
        } else {
            clicked = true;
            sidebar.style.left = `-${widthSidebar.width}px`;
            buttonSidebar.style.left = `0px`;
            i.classList.remove("fi-rr-angle-left");
            i.classList.add("fi-rr-angle-right");
        }
    })
</script>

</html>
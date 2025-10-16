<!-- Iframe para o formulário de proteínas -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário das Proteínas</title>
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

        main {
            background-color: #fff;
            height: 100vh;
            width: 100%;
        }

        iframe {
            height: 100%;
            width: 100%;
        }

        .form-proteina {
            height: 100%;
            width: 100%;
            background: cornsilk;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        form {
            background-color: cornsilk;
            height: 100%;
            width: 90%;
            margin-top: 80px;
            display: flex;
            align-items: center;
            justify-content: start;
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
            width: 60px;
            margin: 8px;
            padding: 8px;
            font-size: 1.2em;
            width: 100%;
        }

        .input-form:hover {
            border: 3px solid lime;
            outline: none;
        }

        .button-form {
            background-color: purple;
            color: #fff;
            width: 100%;
            padding: 18px;
            position: absolute;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 110px;
            font-size: 1.1rem;
        }

        .button-form:hover {
            transform: scale(1.05);
        }

        .input {
            width: 90%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        button {
            background-color: purple;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 6px 12px;
            font-size: 1.2rem;
            cursor: pointer;
        }

        button:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <div class="form-proteina">
        <form action="">
            <h2 class="title">Adicionar novas proteínas.</h2>
            <br />
            <p class="all-inputs">
            <p class="input">
                <input type="text" name="nome_proteina" id="nome_proteina" class="input-form" placeholder="Item..." required>
                <button>+</button>
            </p>
            </p>
            <p class="input">
                <input class="button-form" type="submit" value="Enviar" />
            </p>
        </form>
    </div>
</body>

<script>
    const button = document.querySelector("button");

    button.addEventListener("click", (event) => {
        event.preventDefault();
        const body = document.querySelector("body");
        const inputs = document.querySelector("p.all-inputs");
        // const button = document.createElement("button");
        const p = document.createElement("p");
        const input = document.createElement("input");

        input.type = "text";
        input.placeholder = "Novo item...";
        input.setAttribute("class", "input-form");
        input.setAttribute("id", "nome_proteina");

        // button.innerHTML = "+";
        // button.addEventListener("click", (event) => {
        //     event.preventDefault();
        // })

        p.setAttribute("class", "input");
        p.appendChild(input);
        p.appendChild(button);
        inputs.prepend(p);
    });
</script>

</html>
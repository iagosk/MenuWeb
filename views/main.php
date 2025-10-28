<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <title>Página Inicial</title>
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
            overflow: hidden !important;
        }

        iframe {
            height: 100%;
            width: 100%;
        }

        .sidebar {
            background-color: purple;
            height: 100vh;
            position: fixed;
            transition: all .5s ease;
            z-index: 1;
        }

        .sidebar>header {
            background-color: purple;
            color: #fff;
            padding: 30px;
        }

        .sidebar>ul {
            width: 100%;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: start;
            flex-direction: column;
            list-style: none;
        }

        .sidebar>hr {
            background-color: #fff;
            border: 2px solid #fff;
        }

        .sidebar>ul>li {
            margin: 10px;
        }

        .sidebar>ul>li>a {
            background-color: coral;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.2rem;
            border-radius: 6px;
            padding: 8px;
            transition: all .5s ease;
        }

        .buttonSidebar {
            background: coral;
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
            opacity: 1;
        }

        .buttonSidebar:hover {
            transform: scale(1.05);
        }

        .user-area {
            color: #fff;
            padding: 30px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <header>
            <h2>Web Menu</h2>
        </header>
        <hr />
        <?php print_r($resultData) ?>
        <hr />
        <ul>
            <li><a href="./form_update.php" target="frame_index">Atualizar Endereço</a></li>
            <li><a href="./cardapio.php" target="frame_index">Acessar Cardápio</a></li>
        </ul>
    </div>
    <button class="buttonSidebar">
        <i class="fi fi-rr-angle-right"></i>
    </button>
    <iframe src="./cardapio.php" frameborder="0" name="frame_index">

    </iframe>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>
        const sidebar = document.querySelector(".sidebar");
        const buttonSidebar = document.querySelector("button.buttonSidebar");
        const widthSidebar = sidebar.getBoundingClientRect();
        const i = document.querySelector("button > i");
        const links = [...document.querySelectorAll("ul > li > a")];

        let clicked = true;

        sidebar.style.left = `-${widthSidebar.width}px`;

        function ClickSidebar() {
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
        }

        buttonSidebar.addEventListener("click", () => {
            ClickSidebar();
        });

        links.forEach(a => {
            a.addEventListener("click", () => {
                ClickSidebar();
            });
        });
    </script>
</body>

</html>
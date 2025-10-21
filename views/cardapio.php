<!-- <?php
include_once('./class/User.php');

// //  Instãncia para conectar o arquivo 'connect.php' com esta página.
// include_once('../connection/connect.php');

// // Variável que armazena string de consulta que será usada de argumento no método seguinte.

// $sql = "SELECT * FROM segunda";

// // Varável para consulta da tabela 'segunda' presente no banco de dados.
// $result = $connection->query($sql);
?> -->

<!-- Página de índice para usuário padrão do sistema. -->

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Cardápio</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: cornsilk;
      height: 100vh;
      overflow-x: hidden;
    }

    .navbar {
      background-color: purple;
      color: #fff;
    }

    section {
      display: flex;
      justify-content: space-between;
      flex-direction: column;
    }

    section>h2 {
      background-color: purple;
      color: #fff;
      border-radius: 10px;
      margin: 20px;
      padding: 20px;
    }

    form {
      width: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    input.submit-button {
      background-color: coral;
      border: none;
      border-radius: 6px;
      margin: 12px;
      padding: 12px;
      font-weight: bold;
      font-size: 1.1rem;
      color: #fff;
      width: 100%;
    }

    .card {
      background-color: cornsilk;
      position: relative;
      outline: none;
      border: none;
      margin: 30px;
      transition: all .5s ease;
    }


    .card:hover {
      transform: scale(.99);
    }

    label {
      border: 5px solid gray;
      border-radius: 10px;
      cursor: pointer;
    }

    .card-title {
      font-weight: bold;
      color: gray;
    }

    .check {
      margin: 20px;
      height: 20px;
      width: 20px;
      position: absolute;
      right: 0;
      z-index: 1;
    }

    .check:checked {
      accent-color: purple;
      color: #fff !important;
    }

    .check:checked~label {
      border: 5px solid coral;
      background-color: coral;
    }

    .check:checked~label>.g-0>.col-md-8>.card-body>.card-title {
      color: #fff !important;
    }

    .carousel {
      margin: 30px;
    }

    .carousel-inner {
      width: 100%;
      display: flex;
      align-items: center;
    }

    .carousel-control-prev {
      background-color: coral;
      height: 100px;
      top: 40%;
    }

    .carousel-control-next {
      background-color: coral;
      height: 100px;
      top: 40%;
    }

    #button-prev {
      display: none;
    }

    #button-submit {
      display: none;
    }
  </style>
</head>

<body>
  <nav class="navbar">
    <div class="container-fluid">
      <h2>WEB Menu</h2>
    </div>
  </nav>
  <!-- <nav class="row">
          <a href="#" class="col-4 col-md-12">Prato</a>
          <a href="#" class="col-4 col-md-12">Acompanhamento</a>
          <a href="#" class="col-4 col-md-12">Proteína</a>
      </nav> -->
  <div class="container">
    <form action="" id="form-pedido">
      <div id="carouselExample" class="carousel slide col-12">
        <div class="carousel-inner row">
          <div class="carousel-item active col-12">
            <section>
              <h2>Prato Principal</h2>
              <div class="card mb-3 " style="max-width: 540px;">
                <input type="checkbox" class="check" name="prato" id="prato-01" value="Arroz Parbolizado">
                <label for="prato-01">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Arroz Parbolizado</h5>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
              <div class="card mb-3" style="max-width: 540px;">
                <input type="checkbox" class="check" name="prato" id="prato-02" value="Macarrão Parafuso">
                <label for="prato-02">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Macarrão Parafuso</h5>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
              <div class="card mb-3" style="max-width: 540px;">
                <input type="checkbox" class="check" name="prato" id="prato-03" value="Macarrão Espaguete">
                <label for="prato-03">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Macarrão Espaguete</h5>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
              <div class="card mb-3" style="max-width: 540px;">
                <input type="checkbox" class="check" name="prato" id="prato-04" value="Cuscuz Temperado">
                <label for="prato-04">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Cuscuz Temperado</h5>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
            </section>
          </div>
          <div class="carousel-item">
            <section>
              <h2>Acompanhamentos</h2>
              <div class="card mb-3" style="max-width: 540px;">
                <input type="checkbox" class="check" name="prato" id="prato-05" value="Farofa">
                <label for="prato-05">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Farofa</h5>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
              <div class="card mb-3" style="max-width: 540px;">
                <input type="checkbox" class="check" name="prato" id="prato-06" value="Vinagrete">
                <label for="prato-06">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Vinagrete</h5>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
              <div class="card mb-3" style="max-width: 540px;">
                <input type="checkbox" class="check" name="prato" id="prato-07" value="Salada na Maionese">
                <label for="prato-07">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Salada na Maionese</h5>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
              <div class="card mb-3" style="max-width: 540px;">
                <input type="checkbox" class="check" name="prato" id="prato-08" value="Batata Doce">
                <label for="prato-08">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Batata Doce</h5>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
            </section>
          </div>
          <div class="carousel-item">
            <section>
              <h2>Proteínas</h2>
              <div class="card mb-3" style="max-width: 540px;">
                <input type="checkbox" class="check" name="prato" id="prato-09" value="Filé Mignom">
                <label for="prato-09">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Filé Mignom</h5>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
              <div class="card mb-3" style="max-width: 540px;">
                <input type="checkbox" class="check" name="prato" id="prato-010" value="Frango">
                <label for="prato-010">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Frango</h5>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
              <div class="card mb-3" style="max-width: 540px;">
                <input type="checkbox" class="check" name="prato" id="prato-011" value="Peixe Tilápia">
                <label for="prato-011">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Peixe Tilápia</h5>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
              <div class="card mb-3" style="max-width: 540px;">
                <input type="checkbox" class="check" name="prato" id="prato-012" value="Costela de Porco">
                <label for="prato-012">
                  <div class="row g-0">
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Costela de Porco</h5>
                      </div>
                    </div>
                  </div>
                </label>
              </div>
            </section>
          </div>
        </div>
        <div class="buttons">
          <button class="carousel-control-prev" id="button-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
        </div>
      </div>

      <input class="submit-button" type="button" data-bs-target="#carouselExample" data-bs-slide="next" id="button-form" value="Continuar">
      <input class="submit-button" type="submit" id="button-submit" value="Enviar">
    </form>
  </div>
  <h1><?php $user->MostrarDados()?></h1>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <script>
    let num = 0;
    const buttonForm = document.querySelector("input#button-form");
    const buttonSubmit = document.querySelector("input#button-submit");
    const buttonPrev = document.querySelector("#button-prev");

    buttonForm.addEventListener("click", () => {
      num++;

      if (num >= 2) {
        buttonSubmit.style.display = "block";
        buttonForm.style.display = "none";
      }
      if (num >= 0) {
        buttonPrev.style.display = "block";
      } else {
        buttonPrev.style.display = "none";
      }
    });

    document.getElementById('form-pedido').addEventListener('submit', function(e) {
      e.preventDefault(); // Evita o comportamento padrão do evento.

      let pedidos = [...document.querySelectorAll(".check")]; // Array com todos os inputs do tipo checkbox do formulario.

      let pedidosChecked = pedidos.filter(pedido => pedido.checked); // Array filtrado com apenas os inputs do tipo checkbox que estiveren marcados.

      let titulo = `Pedido Gerado pelo App: *MenuWeb*.`;
      // Título da mensagem que será enviada pela mensagem.
       
      let pedido = `${titulo}\n\n*Pedido da Marmita:*\n\n`;
      // Pedido que será enviado pela mensagem.
      const numero = '5584994382503';
      // número de destino da mensagem.

        pedidosChecked.forEach(pedidoCheck => {
          pedido += `${pedidoCheck.value}\n`;
          // Para cada elemento do array de inputs checkbox marcados, o elemento será adicionado no pedido.
        });
      window.open(`https://wa.me/${numero}?text=${encodeURIComponent(pedido)}`);
      // envio da mensagem.
    });

  </script>
</body>

</html>
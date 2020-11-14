<?php

require $_SERVER['DOCUMENT_ROOT'] . "/Mega-Triunfo/Projeto/public/html/partials/head.php";
require $_SERVER['DOCUMENT_ROOT'] . "/Mega-Triunfo/Projeto/public/html/partials/header.php";

include $_SERVER['DOCUMENT_ROOT'] . "/Mega-Triunfo/Projeto/private/php/cardManage.php";

?>

<body class='d-flex flex-column vh-100 align-content-center justify-content-around text-center'>

  <main class='container d-flex justify-content-center align-items-center'>
    <div class='row bg-white container-shadow container-size'>
      <div class='col-3 container-card d-flex align-items-center vh-80'>
        <div class='container d-flex flex-wrap justify-content-center'>
          <img src='https://via.placeholder.com/300x200' class='img-fluid mt-3 d-block'>
          <img src='https://via.placeholder.com/600x300' class='img-fluid mt-1 d-block'>
          <span class='h4 mt-3'>Nome do Baralho</span>
          <button id='btn-new-card' class='manage-card-buttons mt-3'>
            Nova carta
            <span class='manage-card-buttons-border'></span>
          </button>
          <button id='btn-close-deck' class='manage-card-buttons mt-3'>
            Fechar baralho
            <span class='manage-card-buttons-border'></span>
          </button>
        </div>
      </div>

      <div class='col-6 d-flex flex-wrap align-content-center justify-content-center container-card '>
        <h1 class='h2 mb-5'>Cadastro de Carta</h1>

        <form class='row mx-auto' id='create-card-form'>

          <div class="col-10 input-group image-container m-2 mx-auto">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="cardImage">
              <label class="custom-file-label" for="cardImage">Escolher foto da carta</label>
            </div>
          </div>

          <div class='col-6 mt-3 text-center'>
            <label for='name' class='d-block'>Nome</label>
            <input type='text' id='cardname' name='name' class='input-form' required>
          </div>

          <div class='col-6 mt-3 text-center'>
            <label for='attribute1' class='d-block'>Valor do Atributo 1</label>
            <input type='text' id='cardattribute1' name='attribute1' class='input-form' required>
          </div>

          <div class='col-6 mt-3 text-center'>
            <label for='attribute2' class='d-block'>Valor do Atributo 2</label>
            <input type='text' id='cardattribute2' name='attribute2' class='input-form' required>
          </div>

          <div class='col-6 mt-3 text-center'>
            <label for='attribute3' class='d-block'>Valor do Atributo 3</label>
            <input type='text' id='cardattribute3' name='attribute3' class='input-form' required>
          </div>

          <div class='col-6 mt-3 text-center'>
            <label for='attribute4' class='d-block'>Valor do Atributo 4</label>
            <input type='text' id='cardattribute4' name='attribute4' class='input-form' required>
          </div>

          <div class='col-6 mt-3 text-center'>
            <label for='specialAttribute' class='d-block'>Atributo Especial</label>
            <input type='text' id='specialAttributeName' name='specialAttribute' class='input-form input-special-attribute' placeholder='Nome'>
            <input type='text' id='specialAttributeValue' name='specialAttribute' class='input-form input-special-value' placeholder='Val'>
            <select id='specialAttributeRef' name='specialAttribute' class='input-form input-special-value'>
              <option value='X'>X</option>
              <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
              <option value='4'>4</option>
            </select>
          </div>

          <div class='card-buttons d-flex mx-auto mt-5'>
            <button type='submit' id='btn-save-card' name="action" value="Salvar" class='m-2 manage-card-buttons'>
              <i class="fas fa-save"></i>
              <span class='manage-card-buttons-border'></span>
            </button>

            <button type='submit' id='btn-delete-card' name="action" value="Excluir" class='m-2 manage-card-buttons'>
              <i class="fas fa-trash-alt"></i>
              <span class='manage-card-buttons-border'></span>
            </button>
          </div>

          <!--Conversão da variável PHP em JS -->
          <script>
            var $PHPEditCardArray = '';
            $PHPEditCardArray = <?php echo $jsCardQuery; ?>;
          </script>

        </form>
      </div>

      <div class='col-3 d-flex flex-wrap justify-content-center container-card'>
        <div class='table-container table-scrollbar' id='deck-list'>
          <table class='table table-sm table-hover table-bordered'>
            <thead class='thead-color'>
              <tr class='table-fixed-header'>
                <th scope='col table-fixed-header' id='cardCount'>Cartas ()</th>
                <th scope='col'><i class='fas fa-star text-warning'></i></th>
                <th scope='col'><i class='fas fa-tasks'></i></i></th>
              </tr>
            </thead>
            <tbody class="noselect">
              <!-- Substituir depois por código PHP que vai atualizar com o banco de dados-->
              <?php require $_SERVER['DOCUMENT_ROOT'] . "/Mega-Triunfo/Projeto/private/php/cardSelect.php"; ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
    </div>


</body>

</html>
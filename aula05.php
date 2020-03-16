<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aula 05- Criação de menu e botões</title>
    <!-- Toda importação de CSS deve ser feita no HEAD -->

    <!-- primeiro importar a fonte -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="aula05.css">
  </head>


  <body>

    <div class="site">

        <div class="topo">
          <h1>Aula 05- Criação de menu e botões</h1>

          <div class="menu">,
            <!-- ul é uma lista não ordenada -->
            <!-- li é um item da lista, e o a é um link que está nesse item -->
            <ul>
              <li><a href="#">Página inicial</a></li>
              <li><a href="#">Cadastrar-se</a></li>
              <li><a href="#">Contato</a></li>
              <li><a href="#">Ajuda</a></li>
              <li><a href="#">Login</a></li>
            </ul>
          </div>

        </div>

        <div class="conteudo">
          <h2>Patrimônio histórico brasileiro: vira lata caramelo</h2> <br>   <!-- geralmente botões são links -->
        <!--Então usaremos links para costruir os botões:  -->
        <a href="#" class="botao botao-rosa"> Botão rosa </a>
        <a href="#" class="botao botao-verde"> Botão verde</a>
        <a href="#" class="botao botao-cinza"> Botão cinza</a>

        </div>

        <div class="rodape">
          Desenvolvido por Eloisa Groshevis
        </div>

    </div>

  </body>

</html>

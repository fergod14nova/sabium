<!-- 
Escreva um programa que leia todos os caracteres de um arquivo texto e imprima em ordem crescente as percentagens das ocorrências das letras encontradas. Os caracteres que não são letras devem ser ignorados. Exemplo de texto contido em arquivo txt "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam eget ligula eu lectus lobortis condimentum. Aliquam nonummy auctor massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla at risus. Quisque purus magna, auctor et, sagittis ac, posuere eu, lectus. Nam mattis, felis ut adipiscing." Resultado Total de letras: 283
Percentuais: "a" = 9,54% "b" = 1,06% "c" = 4,24% ... "z" = 0,00%
 -->

 <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  <!-- configurando do CSS -->
  <style>
    body {
      width: 100%; height: auto;
      margin: 0; padding: 0;
      font-family: Arial, Helvetica, sans-serif;
      
    }

    .h1 {
      text-align: center;
      font-size: 30px;
    }

    .questao {
      width: 800px; height: auto;
      text-align: left;
      float: none;

    }

    .form-group {
      margin: 5px !important;
    }

    .inputValores {
      float: left;
    }

    .resultado {
      float: right;
      width: 200px; height: 200px;
    }
    #imgFundo {
      width: 150px; height: 150px;
      overflow: hidden;
      display: none;

    }

  </style>

  <title>Teste</title>
</head>
<body>
  <header>
    <h1 class="h1">Prova Técnica - SABIUM SISTEMAS</h1>
  </header>
  <div class="container">
    <!-- Repositório do GitHub -->
    <a href="https://github.com/fergod14nova/sabium" target="_blank" class="btn btn-primary btn-sm">Ir para Repositório</a>
    <a href="Questao4.html" class="btn btn-success btn-sm">Questão4</a>
    <br><br>
    <!-- Repositório do GitHub -->

    <!-- Formulário de envio de arquivos -->
    <form enctype="multipart/form-data" action="#" method="POST" class="form-control">

    <!-- MAX_FILE_SIZE deve preceder o campo input -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" class="btn btn-dark btn-lg"/>
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    Enviar esse arquivo: <input name="userfile" type="file" />
    <input type="submit" value="Enviar arquivo" class="btn btn-outline-dark btn-md"/>
    </form>

    <?php
    //  Definindo variável global -- Indicando aonde ficará salvo os arquivos enviados
    $uploaddir = 'C/xampp/tmp/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    $destino = "/htdocs/sabium/uploads/";

    echo '<pre>';
    if (move_uploaded_file($uploadfile,$destino)) {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        echo "Possível ataque de upload de arquivo!\n";
        echo $_FILES['error'];
    }

    echo 'Aqui está mais informações de debug:';
    print_r($_FILES);

    print "</pre>";
      
    ?>
  </div>
</body>
</html>
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
    <a href="Questao1.html" class="btn btn-success btn-sm">Questão1</a>
    <a href="Questao2.html" class="btn btn-success btn-sm">Questão2</a>
    <a href="Questao3.html" class="btn btn-success btn-sm">Questão3</a>
    <a href="Questao4.html" class="btn btn-success btn-sm">Questão4</a>
    <a href="Questao5.php" class="btn btn-success btn-sm">Questão5</a>
    <br><br>
    <!-- Repositório do GitHub -->

    <!-- Formulário de envio de arquivos -->
    <form enctype="multipart/form-data" action="#" method="POST" class="form-control">
      <div class="form-group row">
        <input name="arquivoTxt" type="file" class="form-control"/>
        <input type="submit" value="Enviar arquivo" class="btn btn-outline-dark btn-md"/>
      </div>
    </form>

    <?php
   
    $dir = "uploads/";
    // Definindo a variável e verificando se a mesma foi configurada, caso não seja, o seu valor será null
    $arquivo = isset($_FILES["arquivoTxt"]) ? $_FILES["arquivoTxt"] : null ;

    // Verificando se a variável está definida
    if(!empty($arquivo)){
      // movendo o arquivo para a pasta uploads
      if(move_uploaded_file($arquivo["tmp_name"], "$dir".$arquivo["name"])){
        echo "Arquivo enviado com sucesso! <br>";

        $endereço = "uploads/".$arquivo['name']; //caminho do arquivo
        $arquivoLocal = file_get_contents($endereço); //abrindo o arquivo na memória do php
    
        // pegando a string que contém o arquivo txt e medido o seu tamanho
        $len = strlen($arquivoLocal);

        // Criando o array para armazenar os valores
        $count = array();

        for ($i = 0; $i < $len; $i++) {
            // pega um caractere de cada vez
            $c = strtolower($arquivoLocal[$i]);

            // se for letra, contabiliza
            if ('a' <= $c && $c <= 'z') {
                // se a letra ainda não foi contabilizada, adiciona no array
                if (! array_key_exists($c, $count)) {
                    $count[$c] = 1;
                } else {
                    // se a letra já existe no array, aumenta o contador
                    $count[$c]++;
                }
            }
            // se não for letra, não faz nada e vai para o próximo caractere
        }
        
        // Exibindo dados
        foreach ($count as $char => $repeticao) {
          echo "<br> A letra <strong>".$char."</strong> se repete ".$repeticao." vezes";
        }

      } else {
        echo "Nenhum arquivo selecionado";
      }
    }
      
    ?>
  </div>
</body>
</html>
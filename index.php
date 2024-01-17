<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./images/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href=".\css\style.css">
    <title>Teste de Personalidade</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="alert alert-warning" role="alert">
            Este teste não deverá ser utilizado como comprovação ou laudo de qualquer especie, resultado e teste gerados com intuito meramente educativo e sem fins lucrativos! (Perguntas e descrições meramente ilustrativas)
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h1>Teste de Personalidade</h1>
        </div>
      </div>
      <?php
      include './entities/facet.php';
      include './entities/factor.php';
      include './entities/test.php';
      include './services/converter.php';
      
      use ObjectFacet\Facet;
      use ObjectFactor\Factor;
      use ObjectTest\Test;
      use ResultConverter\Converter;

      if(!isset($_POST['answers'])){
      ?>
      <div class="row">
        <div class="col text-center">
          <figure>
            <img id="img-01" src="./images/image01.png" alt="Orientação para Preenchimento do Questionario">
            <figcaption>Imagem 01 - Orientação para Preenchimento do Questionario</figcaption>
          </figure>
          <form method="post">
            <input type="hidden" id="start" name="start">
            <input type="hidden" id="termination" name="termination">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="name">Nome Completo: </label>
          <input type="text" id="name" name="name" class="form-control" value="Exemplo nome" required>
        </div>
        <div class="col">
          <label for="sex">Sexo: </label>
          <select name="sex" id="sex" class="form-control" required>
            <option>Masculino</option>
            <option>Feminino</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="birth">Data Nascimento: </label>
          <input type="date" id="birth" name="birth" class="form-control" value="2000-05-13" required>
        </div>
        <div class="col">
          <label for="schooling">Escolaridade: </label>
          <select name="schooling" id="schooling" class="form-control" required>
            <option>Ensino Fundamental</option>
            <option>Ensino Médio</option>
            <option>Ensino Superior Incompleto</option>
            <option>Ensino Superior Completo</option>
            <option>Mestrado</option>
            <option>Doutorado</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="hidden" name="answers[]" value="0"> <!-- reference value to occupy first position array -->
          <?php 
          $questions = json_decode(file_get_contents('./json/questions.json'),true);
          foreach ($questions as $key => $value) {
          ?>
          <input id="<?php echo $key; ?>" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" value="<?= rand(1, 7) ?>">
          <label for="<?php echo $key; ?>"><?php echo $key; ?> - <?php echo $value; ?></label><br>
          <?php 
          if ($key == 63) echo"</div><div class='col'>";
          }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
            <input type="submit" class="btn btn-outline-dark" value="Enviar Respostas" onclick="timeSubmit()">
          </form>
        </div>
      </div>
      <?php
      } else {
      $rules = json_decode(file_get_contents('./json/rules.json'),true);
      
      $converter = new Converter($rules["questionsToInverter"]);
      $questionsArray = $converter->Convert($_POST['answers']);
      #object instantiation
      $factors['n'] = new Factor(
        "NEUROTICISMO",
        [
          new Facet($rules['facetName']['n1'], $rules['facetDescription']['n1'], $questionsArray, $rules['requiredQuestions']['n1'], $rules['percentileValues']['facets']['n1'], $rules['classificationReference'], $rules['definitionReference']['facets']['n1'], $rules['seemReference']['facets']['n1']),
          new Facet($rules['facetName']['n2'], $rules['facetDescription']['n2'], $questionsArray, $rules['requiredQuestions']['n2'], $rules['percentileValues']['facets']['n2'], $rules['classificationReference'], $rules['definitionReference']['facets']['n2'], $rules['seemReference']['facets']['n2']),
          new Facet($rules['facetName']['n3'], $rules['facetDescription']['n3'], $questionsArray, $rules['requiredQuestions']['n3'], $rules['percentileValues']['facets']['n3'], $rules['classificationReference'], $rules['definitionReference']['facets']['n3'], $rules['seemReference']['facets']['n3']),
          new Facet($rules['facetName']['n4'], $rules['facetDescription']['n4'], $questionsArray, $rules['requiredQuestions']['n4'], $rules['percentileValues']['facets']['n4'], $rules['classificationReference'], $rules['definitionReference']['facets']['n4'], $rules['seemReference']['facets']['n4'])
        ],
        $rules['percentileValues']['factors']['n'],
        $rules['classificationReference'],
        $rules['definitionReference']['factors']['n'],
        $rules['seemReference']['factors']['n']
      );
      $factors['e'] = new Factor(
        "EXTROVERSÃO",
        [
          new Facet($rules['facetName']['e1'], $rules['facetDescription']['e1'], $questionsArray, $rules['requiredQuestions']['e1'], $rules['percentileValues']['facets']['e1'], $rules['classificationReference'], $rules['definitionReference']['facets']['e1'], $rules['seemReference']['facets']['e1']),
          new Facet($rules['facetName']['e2'], $rules['facetDescription']['e2'], $questionsArray, $rules['requiredQuestions']['e2'], $rules['percentileValues']['facets']['e2'], $rules['classificationReference'], $rules['definitionReference']['facets']['e2'], $rules['seemReference']['facets']['e2']),
          new Facet($rules['facetName']['e3'], $rules['facetDescription']['e3'], $questionsArray, $rules['requiredQuestions']['e3'], $rules['percentileValues']['facets']['e3'], $rules['classificationReference'], $rules['definitionReference']['facets']['e3'], $rules['seemReference']['facets']['e3']),
          new Facet($rules['facetName']['e4'], $rules['facetDescription']['e4'], $questionsArray, $rules['requiredQuestions']['e4'], $rules['percentileValues']['facets']['e4'], $rules['classificationReference'], $rules['definitionReference']['facets']['e4'], $rules['seemReference']['facets']['e4'])
        ],
        $rules['percentileValues']['factors']['e'],
        $rules['classificationReference'],
        $rules['definitionReference']['factors']['e'],
        $rules['seemReference']['factors']['e']
      );
      $factors['s'] = new Factor(
        "AGRADABILIDADE",
        [
          new Facet($rules['facetName']['s1'], $rules['facetDescription']['s1'], $questionsArray, $rules['requiredQuestions']['s1'], $rules['percentileValues']['facets']['s1'], $rules['classificationReference'], $rules['definitionReference']['facets']['s1'], $rules['seemReference']['facets']['s1']),
          new Facet($rules['facetName']['s2'], $rules['facetDescription']['s2'], $questionsArray, $rules['requiredQuestions']['s2'], $rules['percentileValues']['facets']['s2'], $rules['classificationReference'], $rules['definitionReference']['facets']['s2'], $rules['seemReference']['facets']['s2']),
          new Facet($rules['facetName']['s3'], $rules['facetDescription']['s3'], $questionsArray, $rules['requiredQuestions']['s3'], $rules['percentileValues']['facets']['s3'], $rules['classificationReference'], $rules['definitionReference']['facets']['s3'], $rules['seemReference']['facets']['s3'])
        ],
        $rules['percentileValues']['factors']['s'],
        $rules['classificationReference'],
        $rules['definitionReference']['factors']['s'],
        $rules['seemReference']['factors']['s']
      );
      $factors['r'] = new Factor(
        "CONSCIENCIOSIDADE",
        [
          new Facet($rules['facetName']['r1'], $rules['facetDescription']['r1'], $questionsArray, $rules['requiredQuestions']['r1'], $rules['percentileValues']['facets']['r1'], $rules['classificationReference'], $rules['definitionReference']['facets']['r1'], $rules['seemReference']['facets']['r1']),
          new Facet($rules['facetName']['r2'], $rules['facetDescription']['r2'], $questionsArray, $rules['requiredQuestions']['r2'], $rules['percentileValues']['facets']['r2'], $rules['classificationReference'], $rules['definitionReference']['facets']['r2'], $rules['seemReference']['facets']['r2']),
          new Facet($rules['facetName']['r3'], $rules['facetDescription']['r3'], $questionsArray, $rules['requiredQuestions']['r3'], $rules['percentileValues']['facets']['r3'], $rules['classificationReference'], $rules['definitionReference']['facets']['r3'], $rules['seemReference']['facets']['r3'])
        ],
        $rules['percentileValues']['factors']['r'],
        $rules['classificationReference'],
        $rules['definitionReference']['factors']['r'],
        $rules['seemReference']['factors']['r']
      );
      $factors['a'] = new Factor(
        "ABERTURA À EXPERIÊNCIA",
        [
          new Facet($rules['facetName']['a1'], $rules['facetDescription']['a1'], $questionsArray, $rules['requiredQuestions']['a1'], $rules['percentileValues']['facets']['a1'], $rules['classificationReference'], $rules['definitionReference']['facets']['a1'], $rules['seemReference']['facets']['a1']),
          new Facet($rules['facetName']['a2'], $rules['facetDescription']['a2'], $questionsArray, $rules['requiredQuestions']['a2'], $rules['percentileValues']['facets']['a2'], $rules['classificationReference'], $rules['definitionReference']['facets']['a2'], $rules['seemReference']['facets']['a2']),
          new Facet($rules['facetName']['a3'], $rules['facetDescription']['a3'], $questionsArray, $rules['requiredQuestions']['a3'], $rules['percentileValues']['facets']['a3'], $rules['classificationReference'], $rules['definitionReference']['facets']['a3'], $rules['seemReference']['facets']['a3'])
        ],
        $rules['percentileValues']['factors']['a'],
        $rules['classificationReference'],
        $rules['definitionReference']['factors']['a'],
        $rules['seemReference']['factors']['a']
      );
      $test = new Test($factors, $_POST['start'], $_POST['termination'], $_POST['name'], $_POST['sex'], $_POST['birth'], $_POST['schooling'], $rules['seemReference']['test']);
      ?>
      <div class="row">
        <div class="col text-left">
          Data Realização: <?php echo $test->GetDate()->format('d/m/Y'); ?>
        </div>
        <div class="col text-right">
          Tempo: <?php echo $test->GetDuration(); ?>
        </div>
      </div>
      <div class="row">
        <div class="col">
          Nome: <?php echo $test->GetName(); ?>
        </div>
        <div class="col">
          Sexo: <?php echo $test->Getsex(); ?>
        </div>
      </div>
      <div class="row">
        <div class="col">
          Idade: <?php echo $test->GetAge(); ?>
        </div>
        <div class="col">
          Escolaridade: <?php echo $test->GetSchooling(); ?>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <h4>Aplicação</h4>
        </div>
      </div>
      <?php 
      foreach ($test->factors as $factor) {
      ?>
      <div class="row overflow color">
        <div class="col">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Escala</th>
                <th scope="col">Escore</th>
                <th scope="col">Escore Bruto</th>
                <th scope="col">Percentil</th>
                <th scope="col">Classificação</th>
                <th scope="col">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $factor->Table();
              $facets = $factor->GetFacets();
              foreach ($facets as $facet) {
                $facet->Table();
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <?php
      }
      ?>
      <div class="row">
        <div class="col text-center">
          <h3>Teste: <?php echo $test->GetSeem() ?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <div id="curve_chart" class="overflow color"></div>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <button type="button" class="btn btn-outline-dark" onClick="reloadPage()">Voltar</button>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
    <!-- jQuery; Popper.js; Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <?php if(isset($_POST['answers'])) {?>
    <!-- Google Charts JS -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Factor/Facet', 'Percentil'],
          <?php
          foreach ($test->factors as $factor) {
            $factor->Chart();
            $facets = $factor->GetFacets();
            foreach ($facets as $facet) {
              $facet->Chart();
            }
          }
          ?>
        ]);

        var options = {
          title: 'Análise gráfica de Percentil ',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    <?php } ?>
    <!-- JavaScript -->
    <script src="./js/index.js"></script>
  </body>
</html>
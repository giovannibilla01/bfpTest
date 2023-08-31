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
    <title>Bateria Fatorial de Personalidade</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <h1>Bateria Fatorial de Personalidade</h1>
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
            <img src="./images/image01.png" alt="Orientação para Preenchimento do Questionario">
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
          <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="col">
          <label for="sex">Sexo: </label>
          <select name="sex" id="sex" class="form-control" required>
            <option></option>
            <option>Masculino</option>
            <option>Feminino</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="birth">Data Nascimento: </label>
          <input type="date" id="birth" name="birth" class="form-control" required>
        </div>
        <div class="col">
          <label for="schooling">Escolaridade: </label>
          <select name="schooling" id="schooling" class="form-control" required>
            <option></option>
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
          <input id="1" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="1">1 - Procuro seguir as regras sociais sem questioná-las</label><br>
          <input id="2" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="2">2 - Tento fazer com que as pessoas se sintam bem.</label><br>
          <input id="3" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="3">3 - Gosto de falar sobre mim.</label><br>
          <input id="4" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="4">4 - Tenho um coração mole.</label><br>
          <input id="5" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="5">5 - Falo tudo o que penso.</label><br>
          <input id="6" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="6">6 - Gosto de fazer coisas que nunca fiz antes.</label><br>
          <input id="7" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="7">7 - Acredito que as pessoas tem boas intenções.</label><br>
          <input id="8" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="8">8 - Sou divertido.</label><br>
          <input id="9" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="9">9 - Tomo cuidado com o que falo.</label><br>
          <input id="10" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="10">10 - Dificilmente perdoo.</label><br>
          <input id="11" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="11">11 - Divirto-me quando estou entre muitas pessoas.</label><br>
          <input id="12" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="12">12 - Respeito os sentimentos alheios.</label><br>
          <input id="13" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="13">13 - Mesmo quando preciso resolver alguma coisa para mim, costumo adiar até o último momento.</label><br>
          <input id="14" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="14">14 - Tento influenciar os outros.</label><br>
          <input id="15" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="15">15 - Sou generoso(a).</label><br>
          <input id="16" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="16">16 - Estou satisfeito comigo mesmo(a).</label><br>
          <input id="17" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="17">17 - Não falo muito.</label><br>
          <input id="18" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="18">18 - Posso agredir fisicamente as pessoas quando fico muito irritado.</label><br>
          <input id="19" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="19">19 - Resolvo meus problemas sem pensar muito.</label><br>
          <input id="20" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="20">20 - Preocupo-me com todos.</label><br>
          <input id="21" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="21">21 - Geralmente me sinto feliz.</label><br>
          <input id="22" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="22">22 - Preciso de estímulo para começar a fazer as coisas.</label><br>
          <input id="23" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="23">23 - Tenho pouco interesse por exposições de arte.</label><br>
          <input id="24" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="24">24 - Divirto-me contrariando as pessoas.</label><br>
          <input id="25" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="25">25 - Com frequência tomo decisões precipitadas.</label><br>
          <input id="26" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="26">26 - Facilmente coloco as minhas idéias em prática.</label><br>
          <input id="27" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="27">27 - Uso as pessoas para conseguir o que desejo.</label><br>
          <input id="28" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="28">28 - Posso lidar com muitas tarefas ao mesmo tempo.</label><br>
          <input id="29" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="29">29 - Quase sempre me sinto desanimado.</label><br>
          <input id="30" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="30">30 - Suspeito das intenções das pessoas.</label><br>
          <input id="31" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="31">31 - Atualmente defendo idéias diferentes daquelas que defendia antigamente.</label><br>
          <input id="32" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="32">32 - Consigo o que eu quero.</label><br>
          <input id="33" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="33">33 - Tenho pouca curiosidade para conhecer novos estlos musicais.</label><br>
          <input id="34" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="34">34 - Dedico-me muito para fazer as coisas.</label><br>
          <input id="35" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="35">35 - Espero pela decisão dos outros.</label><br>
          <input id="36" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="36">36 - Interesso-me por teorias que tentam explicar o universo.</label><br>
          <input id="37" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="37">37 - Tenho pouca paciência para terminar tarefas muito longas ou difíceis.</label><br>
          <input id="38" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="38">38 - Sou uma pessoa tímida.</label><br>
          <input id="39" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="39">39 - Tenho alguns inimigos.</label><br>
          <input id="40" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="40">40 - Acho que minha vida é vazia e sem emoção.</label><br>
          <input id="41" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="41">41 - Começo rapidamente as tarefas que tenho para fazer.</label><br>
          <input id="42" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="42">42 - Acho pouco interessantes exposições fotográficas.</label><br>
          <input id="43" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="43">43 - Respeito o ponto de vista dos outros.</label><br>
          <input id="44" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="44">44 - Tenho dificuldade para me adaptar a trabalhos que envolvam uma rotina fixa.</label><br>
          <input id="45" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="45">45 - Antes de agir, penso no que pode acontecer.</label><br>
          <input id="46" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="46">46 - Sinto-me mal se não cumpro algo que prometi.</label><br>
          <input id="47" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="47">47 - Adoro atividades em grupo.</label><br>
          <input id="48" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="48">48 - Tudo o que posso ver a minha frente é mais desprazer do que prazer.</label><br>
          <input id="49" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="49">49 - Gosto de ir a lugares que não conheço.</label><br>
          <input id="50" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="50">50 - Converso com muitas pessoas diferentes quando vou a festas.</label><br>
          <input id="51" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="51">51 - Ajo impulsivamente quando alguma coisa está me aborrecendo.</label><br>
          <input id="52" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="52">52 - Gosto de ter uma vida social agitada.</label><br>
          <input id="53" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="53">53 - Participar de atividades que envolvam criatividade e/ou fantasia me empolga.</label><br>
          <input id="54" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="54">54 - Me esforço para ter destaque na escola ou no trabalho.</label><br>
          <input id="55" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="55">55 - Geralmente faço o que meus amigos e parentes querem, embora não concorde com eles, com<br> medo que se afastem de mim.</label><br>
          <input id="56" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="56">56 - Tenho pouco interesse por idéias abstratas.</label><br>
          <input id="57" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="57">57 - Acho que os outros zombam de mim.</label><br>
          <input id="58" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="58">58 - Costumo fazer sacrifícios para conseguir o que quero.</label><br>
          <input id="59" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="59">59 - Acho natural que os valores morais mudem ao longo do tempo.</label><br>
          <input id="60" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="60">60 - Tenho muito medo de que os meus amigos deixem de gostar de mim.</label><br>
          <input id="61" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="61">61 - Tento incentivar as pessoas.</label><br>
          <input id="62" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="62">62 - Sou uma pessoa com pouca imaginação.</label><br>
          <input id="63" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="63">63 - Faço coisas consideradas perigosas.</label><br>
        </div>
        <div class="col">
          <input id="64" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="64">64 - Penso sobre o que preciso fazer para alcançar meus objetivos.</label><br>
          <input id="65" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="65">65 - Sou uma pessoa nervosa.</label><br>
          <input id="66" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="66">66 - Costumo ficar calado quando estou entre estranhos.</label><br>
          <input id="67" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="67">67 - Resolvo meus problemas com rapidez.</label><br>
          <input id="68" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="68">68 - Confio no que as pessoas dizem.</label><br>
          <input id="69" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="69">69 - Acho que não existe uma verdade absoluta.</label><br>
          <input id="70" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="70">70 - Por mais que me esforce, sei que não sou capaz de superar os obstáculos que tenho que enfrentar no dia a dia.</label><br>
          <input id="71" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="71">71 - Envolvo-me rapidamente com os outros.</label><br>
          <input id="72" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="72">72 - Gosto de pensar sobre soluções diferentes para problemas complexos.</label><br>
          <input id="73" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="73">73 - Deixo de fazer as coisas que desejo por medo de ser criticado pelos outros.</label><br>
          <input id="74" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="74">74 - Acredito que a maioria dos valores morais são dependentes da época e do lugar.</label><br>
          <input id="75" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="75">75 - Fico muito tímido quando estou entre desconhecidos.</label><br>
          <input id="76" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="76">76 - Preocupo-me em agir segundo as leis.</label><br>
          <input id="77" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="77">77 - Meu humor  varia constantemente.</label><br>
          <input id="78" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="78">78 - Necessito estar no centro das atenções.</label><br>
          <input id="79" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="79">79 - Sinto-me muito inseguro quando tenho que fazer coisas que nunca fiz antes.</label><br>
          <input id="80" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="80">80 - As pessoas dizem que sou muito detalhista.</label><br>
          <input id="81" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="81">81 - Evito discussões filosóficas.</label><br>
          <input id="82" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="82">82 - Não gosto de expressar as minhas idéias, pois tenho medo de ser ridicularizado.</label><br>
          <input id="83" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="83">83 - Sou capaz de assumir tarefas importantes.</label><br>
          <input id="84" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="84">84 - Gosto de manter a rotina.</label><br>
          <input id="85" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="85">85 - Acho que faço bem as coisas.</label><br>
          <input id="86" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="86">86 - Sou uma pessoa irritável.</label><br>
          <input id="87" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="87">87 - Costumo enganar as pessoas.</label><br>
          <input id="88" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="88">88 - Gosto de trabalhos artísticos que são considerados estranhos.</label><br>
          <input id="89" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="89">89 - Tenho muita dificuldade em tomar decisões na minha vida.</label><br>
          <input id="90" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="90">90 - Vivo minhas emoções intensamente.</label><br>
          <input id="91" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="91">91 - Gosto de fazer coisas que exigem muito de mim.</label><br>
          <input id="92" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="92">92 - Sofro quando encontro alguém que está com dificuldades.</label><br>
          <input id="93" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="93">93 - É comum terem inveja de mim.</label><br>
          <input id="94" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="94">94 - Sempre que posso, mudo o trajeto nos meus percursos diários.</label><br>
          <input id="95" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="95">95 - Tenho dificuldade de terminar as tarefas, pois me distraio muito com outras coisas.</label><br>
          <input id="96" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="96">96 - Preocupo-me com aqueles que estão numa situação pior que a minha.</label><br>
          <input id="97" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="97">97 - Sou comunicativo.</label><br>
          <input id="98" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="98">98 - Acho que os outros podem tentar me prejudicar.</label><br>
          <input id="99" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="99">99 - Sinto uma incontrolável vontade de falar, mesmo que seja com quem não conheço.</label><br>
          <input id="100" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="100">100 - Eu paro de fazer as coisas quando elas ficam muito difíceis.</label><br>
          <input id="101" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="101">101 - Escolho as palavras com cuidado.</label><br>
          <input id="102" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="102">102 - Com frequência, passo por períodos em que fico extremamente irritável, incomodando-me com qualquer coisa.</label><br>
          <input id="103" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="103">103 - Raramente mostro um trabalho a outras pessoas antes de revisá-lo cuidadosamente.</label><br>
          <input id="104" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="104">104 - Importo-me com os sentimentos dos outros.</label><br>
          <input id="105" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="105">105 - Faço muitas coisas durante as minhas horas de folga.</label><br>
          <input id="106" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="106">106 - Estou cansado de viver.</label><br>
          <input id="107" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="107">107 - Gosto de quebrar regras.</label><br>
          <input id="108" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="108">108 - Costumo tomar a iniciativa e conversar com os outros.</label><br>
          <input id="109" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="109">109 - Respeito autoridades.</label><br>
          <input id="110" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="110">110 - Sou uma pessoa insegura.</label><br>
          <input id="111" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="111">111 - Quando estou entre um grupo, gosto que me dêem atenção.</label><br>
          <input id="112" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="112">112 - Meus amigos dizem que eu trabalho / estudo demais.</label><br>
          <input id="113" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="113">113 - Sinto-me entediado quando tenho que fazer as mesmas coisas.</label><br>
          <input id="114" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="114">114 - Exijo muito de mim mesmo.</label><br>
          <input id="115" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="115">115 - Tenho dificuldade para participar de atividades que exijam imaginação ou fantasia.</label><br>
          <input id="116" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="116">116 - Gosto de programar detalhadamente as coisas que tenho para fazer.</label><br>
          <input id="117" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="117">117 - Usualmente, tomo a iniciativa nas situações.</label><br>
          <input id="118" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="118">118 - Sinto-me muito mal quando recebo alguma crítica.</label><br>
          <input id="119" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="119">119 - Acredito que as pessoas tenham uma natureza ruim.</label><br>
          <input id="120" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="120">120 - Dificilmente fico sem jeito.</label><br>
          <input id="121" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="121">121 - Só me aproximo de uma pessoa quando estou certo de que ela concorda com as minhas opiniões e <br>atitudes, para evitar críticas ou desaprovação.</label><br>
          <input id="122" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="122">122 - Sei o que quero para minha vida.</label><br>
          <input id="123" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="123">123 - Frequentemente questiono regras e costumes sociais.</label><br>
          <input id="124" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="124">124 - Tenho uma grande dificuldade em dormir.</label><br>
          <input id="125" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="125">125 - Preocupo-me em agradar as pessoas.</label><br>
          <input id="126" name="answers[]" class="inputAnswers" type="text" maxlength="1" size="1" required>
          <label for="126">126 - Sou disposto a rever meus posicionamentos sobre diferentes assuntos.</label><br>            
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
        "SOCIALIZAÇÃO",
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
        "REALIZAÇÃO",
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
        "ABERTURA",
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
          Tempo: 
          <?php
          $interval = $test->GetDuration(); 
          if ($interval->h != 0) {
            echo $interval->h . " Horas " . $interval->i . " Minutos " . $interval->s . " Segundos";
          } else {
            echo $interval->i . " Minutos " . $interval->s . " Segundos";
          }
        ?>
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
          Idade: <?php echo $test->GetAge() . " Anos"; ?>
        </div>
        <div class="col">
          Escolaridade: <?php echo $test->GetSchooling(); ?>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <h4>Aplicação : Com Parecer</h4>
        </div>
      </div>
      <?php 
      foreach ($test->factors as $factor) {
      ?>
      <div class="row">
        <div class="col">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Escala</th>
                <th scope="col">Escore</th>
                <th scope="col">Escore Bruto</th>
                <th scope="col">Percentil</th>
                <th scope="col">Classificação</th>
                <th scope="col">Parecer</th>
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
          <h3>Parecer do Teste: <?php echo $test->GetSeem() ?></h3>
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
    <!-- JavaScript -->
    <script src="./js/index.js"></script>
  </body>
</html>
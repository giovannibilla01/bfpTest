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
      /* business rule description area! */
      #questions with reverse result
      $questionsToInverter = [1,10,16,17,18,19,23,24,27,30,33,38,39,42,56,57,62,63,66,81,84,87,98,107,115,119];
      #reference values for classifying the percentile result
      $classificationReference = [
        1 => [
          1 => 15,
          2 => "Muito Baixo"
        ],
        2 => [
          1 => 30,
          2 => "Baixo"
        ],
        3 => [
          1 => 71,
          2 => "Médio"
        ],
        4 => [
          1 => 85,
          2 => "Alto"
        ],
        5 => [
          1 => 101,
          2 => "Muito Alto"
        ]
      ];
      #seem reference for general test
      $seemReference['test'] = 3;
      $factors = [];
      #factor: NEUROTICISMO
      $percentileValues['n'] = [
        5 => 1.66,
        10 => 1.92,
        15 => 2.13,
        20 => 2.30,
        25 => 2.45,
        30 => 2.59,
        35 => 2.73,
        40 => 2.87,
        45 => 3.00,
        50 => 3.12,
        55 => 3.25,
        60 => 3.39,
        65 => 3.54,
        70 => 3.68,
        75 => 3.86,
        80 => 4.05,
        85 => 4.25,
        90 => 4.52,
        95 => 4.94
      ];
      $definitionReference['n'] = [
        "Muito Baixo" => "texto exemplo muito baixo n factor", 
        "Baixo" => "texto exemplo baixo n factor", 
        "Médio" => "texto exemplo medio n factor", 
        "Alto" => "texto exemplo alto n factor", 
        "Muito Alto" => "texto exemplo muito alto n factor"
      ];
      $seemReference['n'] = 2;
      #facet: N1 - VULNERABILIDADE
      $facetName['n1'] = "N1";
      $facetDescription['n1'] = "VULNERABILIDADE"; 
      $requiredQuestions['n1'] = [ 55, 60, 73, 75, 79, 82, 89, 110, 118 ];
      $percentileValues['n1'] = [
        5 => 1.57,
        10 => 1.86,
        15 => 2.14,
        20 => 2.33,
        25 => 2.57,
        30 => 2.71,
        35 => 2.89,
        40 => 3.11,
        45 => 3.29,
        50 => 3.44,
        55 => 3.57,
        60 => 3.78,
        65 => 3.89,
        70 => 4.11,
        75 => 4.33,
        80 => 4.56,
        85 => 4.86,
        90 => 5.14,
        95 => 5.67
      ];
      $definitionReference['n1'] = [
        "Muito Baixo" => "texto exemplo muito baixo n1 ", 
        "Baixo" => "texto exemplo baixo n1 ", 
        "Médio" => "texto exemplo medio n1 ", 
        "Alto" => "texto exemplo alto n1 ", 
        "Muito Alto" => "texto exemplo muito alto n1 "
      ];
      $seemReference['n1'] = [
        "operation" => "between",
        "value" => [
          1 => 15,
          2 => 50
        ]
      ];
      
      #facet: N2 - INSTABILIDADE EMOCIONAL
      $facetName['n2'] = "N2";
      $facetDescription['n2'] = "INSTABILIDADE EMOCIONAL"; 
      $requiredQuestions['n2'] = [ 25, 51, 65, 77, 86, 102 ];
      $percentileValues['n2'] = [
        5 => 1.50,
        10 => 1.83,
        15 => 2.17,
        20 => 2.33,
        25 => 2.50,
        30 => 2.83,
        35 => 3.00,
        40 => 3.25,
        45 => 3.33,
        50 => 3.50,
        55 => 3.83,
        60 => 4.00,
        65 => 4.25,
        70 => 4.50,
        75 => 4.67,
        80 => 5.00,
        85 => 5.25,
        90 => 5.67,
        95 => 6.17
      ];
      $definitionReference['n2'] = [
        "Muito Baixo" => "texto exemplo muito baixo n2 ", 
        "Baixo" => "texto exemplo baixo n2 ", 
        "Médio" => "texto exemplo medio n2 ", 
        "Alto" => "texto exemplo alto n2 ", 
        "Muito Alto" => "texto exemplo muito alto n2 "
      ];
      $seemReference['n2'] = [
        "operation" => "less",
        "value" => [
          1 => 50
        ]
      ];

      #facet: N3 - PASSIVIDADE
      $facetName['n3'] = "N3";
      $facetDescription['n3'] = "PASSIVIDADE"; 
      $requiredQuestions['n3'] = [ 13, 22, 35, 37, 95, 100 ];
      $percentileValues['n3'] = [
        5 => 1.50,
        10 => 1.83,
        15 => 2.17,
        20 => 2.33,
        25 => 2.50,
        30 => 2.67,
        35 => 2.83,
        40 => 3.00,
        45 => 3.20,
        50 => 3.40,
        55 => 3.60,
        60 => 3.80,
        65 => 4.00,
        70 => 4.17,
        75 => 4.33,
        80 => 4.60,
        85 => 4.83,
        90 => 5.00,
        95 => 5.50
      ];
      $definitionReference['n3'] = [
        "Muito Baixo" => "texto exemplo muito baixo n3 ", 
        "Baixo" => "texto exemplo baixo n3 ", 
        "Médio" => "texto exemplo medio n3 ", 
        "Alto" => "texto exemplo alto n3 ", 
        "Muito Alto" => "texto exemplo muito alto n3 "
      ];
      $seemReference['n3'] = [
        "operation" => "less",
        "value" => [
          1 => 50
        ]
      ];

      #facet: N4 - DEPRESSÃO
      $facetName['n4'] = "N4";
      $facetDescription['n4'] = "DEPRESSÃO"; 
      $requiredQuestions['n4'] = [ 16, 29, 40, 48, 70, 106, 121, 124 ];
      $percentileValues['n4'] = [
        5 => 1.00,
        10 => 1.14,
        15 => 1.25,
        20 => 1.38,
        25 => 1.50,
        30 => 1.63,
        35 => 1.75,
        40 => 1.83,
        45 => 2.00,
        50 => 2.00,
        55 => 2.14,
        60 => 2.29,
        65 => 2.50,
        70 => 2.63,
        75 => 2.88,
        80 => 3.17,
        85 => 3.50,
        90 => 3.88,
        95 => 4.63
      ];
      $definitionReference['n4'] = [
        "Muito Baixo" => "texto exemplo muito baixo n4 ", 
        "Baixo" => "texto exemplo baixo n4 ", 
        "Médio" => "texto exemplo medio n4 ", 
        "Alto" => "texto exemplo alto n4 ", 
        "Muito Alto" => "texto exemplo muito alto n4 "
      ];
      $seemReference['n4'] = [
        "operation" => "between",
        "value" => [
          1 => 15,
          2 => 50
        ]
      ];

      #factor: EXTROVERSÃO
      $percentileValues['e'] = [
        5 => 2.87,
        10 => 3.19,
        15 => 3.44,
        20 => 3.62,
        25 => 3.77,
        30 => 3.89,
        35 => 4.02,
        40 => 4.15,
        45 => 4.25,
        50 => 4.38,
        55 => 4.48,
        60 => 4.58,
        65 => 4.68,
        70 => 4.80,
        75 => 4.93,
        80 => 5.07,
        85 => 5.24,
        90 => 5.44,
        95 => 5.72
      ];
      $definitionReference['e'] = [
        "Muito Baixo" => "texto exemplo muito baixo e factor", 
        "Baixo" => "texto exemplo baixo e factor", 
        "Médio" => "texto exemplo medio e factor", 
        "Alto" => "texto exemplo alto e factor", 
        "Muito Alto" => "texto exemplo muito alto e factor"
      ];
      $seemReference['e'] = 2;
      #facet: E1 - COMUNICAÇÃO
      $facetName['e1'] = "E1";
      $facetDescription['e1'] = "COMUNICAÇÃO"; 
      $requiredQuestions['e1'] = [ 17, 38, 66, 97, 105, 120 ];
      $percentileValues['e1'] = [
        5 => 2.00,
        10 => 2.50,
        15 => 3.00,
        20 => 3.17,
        25 => 3.50,
        30 => 3.67,
        35 => 3.83,
        40 => 4.00,
        45 => 4.17,
        50 => 4.33,
        55 => 4.50,
        60 => 4.67,
        65 => 4.83,
        70 => 5.00,
        75 => 5.17,
        80 => 5.33,
        85 => 5.67,
        90 => 6.00,
        95 => 6.33
      ];
      $definitionReference['e1'] = [
        "Muito Baixo" => "texto exemplo muito baixo e1 ", 
        "Baixo" => "texto exemplo baixo e1 ", 
        "Médio" => "texto exemplo medio e1 ", 
        "Alto" => "texto exemplo alto e1 ", 
        "Muito Alto" => "texto exemplo muito alto e1 "
      ];
      $seemReference['e1'] = [
        "operation" => "greater",
        "value" => [
          1 => 30
        ]
      ];
      
      #facet: E2 - ALTIVEZ
      $facetName['e2'] = "E2";
      $facetDescription['e2'] = "ALTIVEZ"; 
      $requiredQuestions['e2'] = [ 3, 5, 14, 78, 93, 99, 111 ];
      $percentileValues['e2'] = [
        5 => 2.00,
        10 => 2.29,
        15 => 2.57,
        20 => 2.71,
        25 => 2.86,
        30 => 3.09,
        35 => 3.17,
        40 => 3.33,
        45 => 3.43,
        50 => 3.57,
        55 => 3.71,
        60 => 3.86,
        65 => 4.00,
        70 => 4.14,
        75 => 4.43,
        80 => 4.57,
        85 => 4.83,
        90 => 5.14,
        95 => 5.57
      ];
      $definitionReference['e2'] = [
        "Muito Baixo" => "texto exemplo muito baixo e2 ", 
        "Baixo" => "texto exemplo baixo e2 ", 
        "Médio" => "texto exemplo medio e2 ", 
        "Alto" => "texto exemplo alto e2 ", 
        "Muito Alto" => "texto exemplo muito alto e2 "
      ];
      $seemReference['e2'] = [
        "operation" => "between",
        "value" => [
          1 => 30,
          2 => 85
        ]
      ];

      #facet: E3 - DINAMISMO
      $facetName['e3'] = "E3";
      $facetDescription['e3'] = "DINAMISMO"; 
      $requiredQuestions['e3'] = [ 21, 26, 32, 108, 117 ];
      $percentileValues['e3'] = [
        5 => 3.00,
        10 => 3.40,
        15 => 3.80,
        20 => 4.00,
        25 => 4.20,
        30 => 4.20,
        35 => 4.40,
        40 => 4.60,
        45 => 4.60,
        50 => 4.80,
        55 => 5.00,
        60 => 5.00,
        65 => 5.20,
        70 => 5.40,
        75 => 5.60,
        80 => 5.80,
        85 => 5.80,
        90 => 6.20,
        95 => 6.40
      ];
      $definitionReference['e3'] = [
        "Muito Baixo" => "texto exemplo muito baixo e3 ", 
        "Baixo" => "texto exemplo baixo e3 ", 
        "Médio" => "texto exemplo medio e3 ", 
        "Alto" => "texto exemplo alto e3 ", 
        "Muito Alto" => "texto exemplo muito alto e3 "
      ];
      $seemReference['e3'] = [
        "operation" => "greater",
        "value" => [
          1 => 30
        ]
      ];

      #facet: E4 - INTERAÇÕES SOCIAIS
      $facetName['e4'] = "E4";
      $facetDescription['e4'] = "INTERAÇÕES SOCIAIS"; 
      $requiredQuestions['e4'] = [ 8, 11, 47, 50, 52, 71, 90 ];
      $percentileValues['e4'] = [
        5 => 2.83,
        10 => 3.33,
        15 => 3.67,
        20 => 3.86,
        25 => 4.14,
        30 => 4.29,
        35 => 4.43,
        40 => 4.57,
        45 => 4.71,
        50 => 4.86,
        55 => 5.00,
        60 => 5.17,
        65 => 5.33,
        70 => 5.50,
        75 => 5.67,
        80 => 5.83,
        85 => 6.00,
        90 => 6.29,
        95 => 6.57
      ];
      $definitionReference['e4'] = [
        "Muito Baixo" => "texto exemplo muito baixo e4 ", 
        "Baixo" => "texto exemplo baixo e4 ", 
        "Médio" => "texto exemplo medio e4 ", 
        "Alto" => "texto exemplo alto e4 ", 
        "Muito Alto" => "texto exemplo muito alto e4 "
      ];
      $seemReference['e4'] = [
        "operation" => "greater",
        "value" => [
          1 => 30
        ]
      ];

      #factor: SOCIALIZAÇÃO
      $percentileValues['s'] = [
        5 => 3.97,
        10 => 4.35,
        15 => 4.57,
        20 => 4.74,
        25 => 4.88,
        30 => 4.99,
        35 => 5.10,
        40 => 5.21,
        45 => 5.29,
        50 => 5.39,
        55 => 5.49,
        60 => 5.57,
        65 => 5.65,
        70 => 5.75,
        75 => 5.85,
        80 => 5.94,
        85 => 6.05,
        90 => 6.18,
        95 => 6.35
      ];
      $definitionReference['s'] = [
        "Muito Baixo" => "texto exemplo muito baixo s factor", 
        "Baixo" => "texto exemplo baixo s factor", 
        "Médio" => "texto exemplo medio s factor", 
        "Alto" => "texto exemplo alto s factor", 
        "Muito Alto" => "texto exemplo muito alto s factor"
      ];
      $seemReference['s'] = 2;
      #facet: E1 - AMABILIDADE
      $facetName['s1'] = "S1";
      $facetDescription['s1'] = "AMABILIDADE"; 
      $requiredQuestions['s1'] = [ 2, 4, 12, 15, 20, 43, 46, 61, 92, 96, 104, 125 ];
      $percentileValues['s1'] = [
        5 => 3.92,
        10 => 4.42,
        15 => 4.73,
        20 => 4.92,
        25 => 5.09,
        30 => 5.25,
        35 => 5.42,
        40 => 5.50,
        45 => 5.58,
        50 => 5.73,
        55 => 5.83,
        60 => 5.92,
        65 => 6.08,
        70 => 6.17,
        75 => 6.26,
        80 => 6.36,
        85 => 6.50,
        90 => 6.64,
        95 => 6.82
      ];
      $definitionReference['s1'] = [
        "Muito Baixo" => "texto exemplo muito baixo s1 ", 
        "Baixo" => "texto exemplo baixo s1 ", 
        "Médio" => "texto exemplo medio s1 ", 
        "Alto" => "texto exemplo alto s1 ", 
        "Muito Alto" => "texto exemplo muito alto s1 "
      ];
      $seemReference['s1'] = [
        "operation" => "greater",
        "value" => [
          1 => 30
        ]
      ];

      #facet: S2 - PRÓSOCIABILIDADE
      $facetName['s2'] = "S2";
      $facetDescription['s2'] = "PRÓSOCIABILIDADE"; 
      $requiredQuestions['s2'] = [ 18, 24, 27, 63, 76, 87, 107, 109 ];
      $percentileValues['s2'] = [
        5 => 3.71,
        10 => 4.25,
        15 => 4.57,
        20 => 4.86,
        25 => 5.00,
        30 => 5.19,
        35 => 5.38,
        40 => 5.50,
        45 => 5.63,
        50 => 5.75,
        55 => 5.88,
        60 => 6.00,
        65 => 6.13,
        70 => 6.25,
        75 => 6.29,
        80 => 6.50,
        85 => 6.57,
        90 => 6.75,
        95 => 7.00
      ];
      $definitionReference['s2'] = [
        "Muito Baixo" => "texto exemplo muito baixo s2 ", 
        "Baixo" => "texto exemplo baixo s2 ", 
        "Médio" => "texto exemplo medio s2 ", 
        "Alto" => "texto exemplo alto s2 ", 
        "Muito Alto" => "texto exemplo muito alto s2 "
      ];
      $seemReference['s2'] = [
        "operation" => "greater",
        "value" => [
          1 => 30
        ]
      ];

      #facet: S3 - CONFIANÇA NAS PESSOAS
      $facetName['s3'] = "S3";
      $facetDescription['s3'] = "CONFIANÇA NAS PESSOAS"; 
      $requiredQuestions['s3'] = [ 7, 10, 30, 39, 57, 68, 98, 119 ];
      $percentileValues['s3'] = [
        5 => 3.00,
        10 => 3.38,
        15 => 3.63,
        20 => 3.88,
        25 => 4.13,
        30 => 4.25,
        35 => 4.38,
        40 => 4.50,
        45 => 4.63,
        50 => 4.75,
        55 => 5.00,
        60 => 5.13,
        65 => 5.13,
        70 => 5.25,
        75 => 5.50,
        80 => 5.63,
        85 => 5.75,
        90 => 6.00,
        95 => 6.25
      ];
      $definitionReference['s3'] = [
        "Muito Baixo" => "texto exemplo muito baixo s3 ", 
        "Baixo" => "texto exemplo baixo s3 ", 
        "Médio" => "texto exemplo medio s3 ", 
        "Alto" => "texto exemplo alto s3 ", 
        "Muito Alto" => "texto exemplo muito alto s3 "
      ];
      $seemReference['s3'] = [
        "operation" => "between",
        "value" => [
          1 => 30,
          2 => 85
        ]
      ];

      #factor: REALIZAÇÃO
      $percentileValues['r'] = [
        5 => 3.50,
        10 => 3.85,
        15 => 4.11,
        20 => 4.30,
        25 => 4.46,
        30 => 4.58,
        35 => 4.70,
        40 => 4.83,
        45 => 4.94,
        50 => 5.03,
        55 => 5.13,
        60 => 5.24,
        65 => 5.33,
        70 => 5.43,
        75 => 5.54,
        80 => 5.65,
        85 => 5.78,
        90 => 5.95,
        95 => 6.18
      ];
      $definitionReference['r'] = [
        "Muito Baixo" => "texto exemplo muito baixo r factor", 
        "Baixo" => "texto exemplo baixo r factor", 
        "Médio" => "texto exemplo medio r factor", 
        "Alto" => "texto exemplo alto r factor", 
        "Muito Alto" => "texto exemplo muito alto r factor"
      ];
      $seemReference['r'] = 2;
      #facet: R1 - COMPETENCIA
      $facetName['r1'] = "R1";
      $facetDescription['r1'] = "COMPETENCIA"; 
      $requiredQuestions['r1'] = [ 28, 41, 58, 64, 67, 72, 83, 85, 91, 122 ];
      $percentileValues['r1'] = [
        5 => 3.50,
        10 => 3.90,
        15 => 4.20,
        20 => 4.43,
        25 => 4.60,
        30 => 4.80,
        35 => 4.90,
        40 => 5.00,
        45 => 5.14,
        50 => 5.29,
        55 => 5.40,
        60 => 5.50,
        65 => 5.60,
        70 => 5.70,
        75 => 5.86,
        80 => 6.00,
        85 => 6.10,
        90 => 6.29,
        95 => 6.50
      ];
      $definitionReference['r1'] = [
        "Muito Baixo" => "texto exemplo muito baixo r1 ", 
        "Baixo" => "texto exemplo baixo r1 ", 
        "Médio" => "texto exemplo medio r1 ", 
        "Alto" => "texto exemplo alto r1 ", 
        "Muito Alto" => "texto exemplo muito alto r1 "
      ];
      $seemReference['r1'] = [
        "operation" => "greater",
        "value" => [
          1 => 50
        ]
      ];

      #facet: R2 - PONDERAÇÃO
      $facetName['r2'] = "R2";
      $facetDescription['r2'] = "PONDERAÇÃO"; 
      $requiredQuestions['r2'] = [ 9, 19, 45, 101 ];
      $percentileValues['r2'] = [
        5 => 2.75,
        10 => 3.25,
        15 => 3.75,
        20 => 4.00,
        25 => 4.00,
        30 => 4.25,
        35 => 4.50,
        40 => 4.75,
        45 => 4.75,
        50 => 5.00,
        55 => 5.25,
        60 => 5.25,
        65 => 5.50,
        70 => 5.50,
        75 => 5.75,
        80 => 6.00,
        85 => 6.25,
        90 => 6.50,
        95 => 6.75
      ];
      $definitionReference['r2'] = [
        "Muito Baixo" => "texto exemplo muito baixo r2 ", 
        "Baixo" => "texto exemplo baixo r2 ", 
        "Médio" => "texto exemplo medio r2 ", 
        "Alto" => "texto exemplo alto r2 ", 
        "Muito Alto" => "texto exemplo muito alto r2 "
      ];
      $seemReference['r2'] = [
        "operation" => "greater",
        "value" => [
          1 => 50
        ]
      ];

      #facet: R3 - EMPENHO
      $facetName['r3'] = "R3";
      $facetDescription['r3'] = "EMPENHO"; 
      $requiredQuestions['r3'] = [ 34, 54, 80, 103, 112, 114, 116 ];
      $percentileValues['r3'] = [
        5 => 3.00,
        10 => 3.29,
        15 => 3.57,
        20 => 3.86,
        25 => 4.00,
        30 => 4.17,
        35 => 4.43,
        40 => 4.57,
        45 => 4.71,
        50 => 4.86,
        55 => 5.00,
        60 => 5.14,
        65 => 5.29,
        70 => 5.43,
        75 => 5.57,
        80 => 5.71,
        85 => 5.86,
        90 => 6.14,
        95 => 6.43
      ];
      $definitionReference['r3'] = [
        "Muito Baixo" => "texto exemplo muito baixo r3 ", 
        "Baixo" => "texto exemplo baixo r3 ", 
        "Médio" => "texto exemplo medio r3 ", 
        "Alto" => "texto exemplo alto r3 ", 
        "Muito Alto" => "texto exemplo muito alto r3 "
      ];
      $seemReference['r3'] = [
        "operation" => "greater",
        "value" => [
          1 => 50
        ]
      ];

      #factor: ABERTURA
      $percentileValues['a'] = [
        5 => 3.54,
        10 => 3.78,
        15 => 3.95,
        20 => 4.08,
        25 => 4.18,
        30 => 4.30,
        35 => 4.39,
        40 => 4.48,
        45 => 4.56,
        50 => 4.65,
        55 => 4.73,
        60 => 4.82,
        65 => 4.91,
        70 => 5.03,
        75 => 5.16,
        80 => 5.29,
        85 => 5.47,
        90 => 5.66,
        95 => 5.90
      ];
      $definitionReference['a'] = [
        "Muito Baixo" => "texto exemplo muito baixo a factor", 
        "Baixo" => "texto exemplo baixo a factor", 
        "Médio" => "texto exemplo medio a factor", 
        "Alto" => "texto exemplo alto a factor", 
        "Muito Alto" => "texto exemplo muito alto a factor"
      ];
      $seemReference['a'] = 2;
      #facet: A1 - ABERTURA DE IDEIAS
      $facetName['a1'] = "A1";
      $facetDescription['a1'] = "ABERTURA DE IDEIAS"; 
      $requiredQuestions['a1'] = [ 23, 33, 36, 42, 53, 56, 62, 81, 88, 115 ];
      $percentileValues['a1'] = [
        5 => 2.90,
        10 => 3.30,
        15 => 3.50,
        20 => 3.70,
        25 => 3.90,
        30 => 4.00,
        35 => 4.10,
        40 => 4.30,
        45 => 4.40,
        50 => 4.60,
        55 => 4.70,
        60 => 4.80,
        65 => 5.00,
        70 => 5.10,
        75 => 5.30,
        80 => 5.50,
        85 => 5.70,
        90 => 6.00,
        95 => 6.30
      ];
      $definitionReference['a1'] = [
        "Muito Baixo" => "texto exemplo muito baixo a1 ", 
        "Baixo" => "texto exemplo baixo a1 ", 
        "Médio" => "texto exemplo medio a1 ", 
        "Alto" => "texto exemplo alto a1 ", 
        "Muito Alto" => "texto exemplo muito alto a1 "
      ];
      $seemReference['a1'] = [
        "operation" => "between",
        "value" => [
          1 => 15,
          2 => 85
        ]
      ];

      #facet: A2 - LIBERALISMO
      $facetName['a2'] = "A2";
      $facetDescription['a2'] = "LIBERALISMO"; 
      $requiredQuestions['a2'] = [ 1, 31, 59, 69, 74, 123, 126 ];
      $percentileValues['a2'] = [
        5 => 3.14,
        10 => 3.57,
        15 => 3.71,
        20 => 4.00,
        25 => 4.14,
        30 => 4.29,
        35 => 4.43,
        40 => 4.57,
        45 => 4.71,
        50 => 4.86,
        55 => 5.00,
        60 => 5.14,
        65 => 5.29,
        70 => 5.43,
        75 => 5.57,
        80 => 5.71,
        85 => 6.00,
        90 => 6.14,
        95 => 6.43
      ];
      $definitionReference['a2'] = [
        "Muito Baixo" => "texto exemplo muito baixo a2 ", 
        "Baixo" => "texto exemplo baixo a2 ", 
        "Médio" => "texto exemplo medio a2 ", 
        "Alto" => "texto exemplo alto a2 ", 
        "Muito Alto" => "texto exemplo muito alto a2 "
      ];
      $seemReference['a2'] = [
        "operation" => "between",
        "value" => [
          1 => 15,
          2 => 85
        ]
      ];

      #facet: A3 - BUSCA POR NOVIDADES
      $facetName['a3'] = "A3";
      $facetDescription['a3'] = "BUSCA POR NOVIDADES"; 
      $requiredQuestions['a3'] = [ 6, 44, 49, 84, 94, 113 ];
      $percentileValues['a3'] = [
        5 => 2.83,
        10 => 3.33,
        15 => 3.50,
        20 => 3.75,
        25 => 4.00,
        30 => 4.00,
        35 => 4.23,
        40 => 4.33,
        45 => 4.50,
        50 => 4.67,
        55 => 4.83,
        60 => 5.00,
        65 => 5.00,
        70 => 5.17,
        75 => 5.33,
        80 => 5.50,
        85 => 5.67,
        90 => 6.00,
        95 => 6.17
      ];
      $definitionReference['a3'] = [
        "Muito Baixo" => "texto exemplo muito baixo a3 ", 
        "Baixo" => "texto exemplo baixo a3 ", 
        "Médio" => "texto exemplo medio a3 ", 
        "Alto" => "texto exemplo alto a3 ", 
        "Muito Alto" => "texto exemplo muito alto a3 "
      ];
      $seemReference['a3'] = [
        "operation" => "between",
        "value" => [
          1 => 15,
          2 => 85
        ]
      ];

      $converter = new Converter($questionsToInverter);
      $questionsArray = $converter->Convert($_POST['answers']);
      #object instantiation
      $factors['n'] = new Factor(
        "NEUROTICISMO",
        [
          new Facet($facetName['n1'], $facetDescription['n1'], $questionsArray, $requiredQuestions['n1'], $percentileValues['n1'], $classificationReference, $definitionReference['n1'], $seemReference['n1']),
          new Facet($facetName['n2'], $facetDescription['n2'], $questionsArray, $requiredQuestions['n2'], $percentileValues['n2'], $classificationReference, $definitionReference['n2'], $seemReference['n2']),
          new Facet($facetName['n3'], $facetDescription['n3'], $questionsArray, $requiredQuestions['n3'], $percentileValues['n3'], $classificationReference, $definitionReference['n3'], $seemReference['n3']),
          new Facet($facetName['n4'], $facetDescription['n4'], $questionsArray, $requiredQuestions['n4'], $percentileValues['n4'], $classificationReference, $definitionReference['n4'], $seemReference['n4'])
        ],
        $percentileValues['n'],
        $classificationReference,
        $definitionReference['n'],
        $seemReference['n']
      );
      $factors['e'] = new Factor(
        "EXTROVERSÃO",
        [
          new Facet($facetName['e1'], $facetDescription['e1'], $questionsArray, $requiredQuestions['e1'], $percentileValues['e1'], $classificationReference, $definitionReference['e1'], $seemReference['e1']),
          new Facet($facetName['e2'], $facetDescription['e2'], $questionsArray, $requiredQuestions['e2'], $percentileValues['e2'], $classificationReference, $definitionReference['e2'], $seemReference['e2']),
          new Facet($facetName['e3'], $facetDescription['e3'], $questionsArray, $requiredQuestions['e3'], $percentileValues['e3'], $classificationReference, $definitionReference['e3'], $seemReference['e3']),
          new Facet($facetName['e4'], $facetDescription['e4'], $questionsArray, $requiredQuestions['e4'], $percentileValues['e4'], $classificationReference, $definitionReference['e4'], $seemReference['e4'])
        ],
        $percentileValues['e'],
        $classificationReference,
        $definitionReference['e'],
        $seemReference['e']
      );
      $factors['s'] = new Factor(
        "SOCIALIZAÇÃO",
        [
          new Facet($facetName['s1'], $facetDescription['s1'], $questionsArray, $requiredQuestions['s1'], $percentileValues['s1'], $classificationReference, $definitionReference['s1'], $seemReference['s1']),
          new Facet($facetName['s2'], $facetDescription['s2'], $questionsArray, $requiredQuestions['s2'], $percentileValues['s2'], $classificationReference, $definitionReference['s2'], $seemReference['s2']),
          new Facet($facetName['s3'], $facetDescription['s3'], $questionsArray, $requiredQuestions['s3'], $percentileValues['s3'], $classificationReference, $definitionReference['s3'], $seemReference['s3'])
        ],
        $percentileValues['s'],
        $classificationReference,
        $definitionReference['s'],
        $seemReference['s']
      );
      $factors['r'] = new Factor(
        "REALIZAÇÃO",
        [
          new Facet($facetName['r1'], $facetDescription['r1'], $questionsArray, $requiredQuestions['r1'], $percentileValues['r1'], $classificationReference, $definitionReference['r1'], $seemReference['r1']),
          new Facet($facetName['r2'], $facetDescription['r2'], $questionsArray, $requiredQuestions['r2'], $percentileValues['r2'], $classificationReference, $definitionReference['r2'], $seemReference['r2']),
          new Facet($facetName['r3'], $facetDescription['r3'], $questionsArray, $requiredQuestions['r3'], $percentileValues['r3'], $classificationReference, $definitionReference['r3'], $seemReference['r3'])
        ],
        $percentileValues['r'],
        $classificationReference,
        $definitionReference['r'],
        $seemReference['r']
      );
      $factors['a'] = new Factor(
        "ABERTURA",
        [
          new Facet($facetName['a1'], $facetDescription['a1'], $questionsArray, $requiredQuestions['a1'], $percentileValues['a1'], $classificationReference, $definitionReference['a1'], $seemReference['a1']),
          new Facet($facetName['a2'], $facetDescription['a2'], $questionsArray, $requiredQuestions['a2'], $percentileValues['a2'], $classificationReference, $definitionReference['a2'], $seemReference['a2']),
          new Facet($facetName['a3'], $facetDescription['a3'], $questionsArray, $requiredQuestions['a3'], $percentileValues['a3'], $classificationReference, $definitionReference['a3'], $seemReference['a3'])
        ],
        $percentileValues['a'],
        $classificationReference,
        $definitionReference['a'],
        $seemReference['a']
      );
      $test = new Test($factors, $_POST['start'], $_POST['termination'], $_POST['name'], $_POST['sex'], $_POST['birth'], $_POST['schooling'], $seemReference['test']);
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" href="./style.css">

<body class=box>

  <div id="reciboImprimir">
    <div id="button">
      <p>
        <input type="hidden" name="gerarRecibo">
        <button type="submit" class="submit" onclick="voltar()">
          <span>Voltar</span>
        </button>
      </p>
      <div id="reciboPraImprimir" class="bordaRecibo">
        <h1>Recibo Salarial</h1>
        <div>
          <label class="aoLado" id="primeiraVia">
            <h3>1º Via</h3>
          </label>
          <label id="valorLabel"><b class="aoLado" id="valorPago"></b></label>
        </div>
        <div>
          <p id="texto2" class="texto"></p>
          <p id="texto3" class="texto"> Eu, <b><?=$_POST['empregadoInput']?></b>Incidindo na base de cálculo de encargos sociais e fiscais para todos os efeitos legais.</p>
          <br>
          <p id="texto4" class="texto">Ass:</p>
          <p id="texto5" class="texto"> ―――――――――――――――――――― </p>
        </div>
        <div>
          <p id="dataImpressao"></p>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
    </form>

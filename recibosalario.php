<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" href="./style.css">

<body class=box>
  
  <?php
  $valor = $_POST("valorInput");
  $empregado = $_POST("empregadoInput");
  $aTitulo = $_POST("aTituloInput");
  $empregador = $_POST("empregadorInput");
  $cpfCnpj = $_POST("cpfCNPJInput");
  $cidade = $_POST("cidadeInput");
  $data = $_POST("dataInput");
  $formasPagamento = $_POST("radio");
  $remuneracaoMensal = $_POST("remuneracaoMensalInput");

  $variaveis='
  <p>"Eu, <b> '.$empregado' </b> declaro para todos os efeitos, ter recebido a título de <b> '.$aTitulo' </b>, a importância de: <b> R$'.$valor',00 </b>, e em concordância com o disposto no <b> Art. 462, da CLT </b>, tenho plena consciência de que o respectivo valor será descontado, pelo empregador: <b> '.$empregador' </b>, de CPF/CNPJ <b> Nº '.$cpfCnpj' </b>, do pagamento da minha remuneração mensal relativa à folha do mês de <b>'.$remuneracaoMensal</b><p>.;

echo "$variaveis";

?>
  <div style="padding-left:300px" ;>
   <input type="hidden" name="gerarRecibo">
   <button type="submit" class="submit" onclick="imprimir()">
  </div>
   
</body>
</html>

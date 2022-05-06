<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Recibo Salarial</title>
    <style>
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="container" class="bordaRecibo">
    <h1 id ="tituloRecibo">Gerador de Recibo Salarial</h1>
        <h2><p>Preencha o recibo corretamente para a emissão do recibo salarial.</p></h2>
        <form action="recibosalario.php" method="post">
        <div id = "conteudoRecibo">
            <div id="valor">
                <h3>Valor:</h3>
                <input type="float" name="valorInput" id="valorInput" size="30" maxlength="8" placeholder="Ex: 1250,00">
                <p id="valorPequeno">Valor recebido</p>
            </div>
              <div id="empregado">
                <h3>Empregado:</h3>
                <input type="text" name="empregadoInput" id="empregadoInput" size="100" maxlength="150" placeholder="Ex: Renato">
            </div>
             <div id="aTitulo" class="aoLado">
               <h3>À titulo de:</h3>
               <input type="text" name="aTituloInput" id="aTituloInput" size="100" maxlength="150" placeholder="">
               <p id="aTituloPequeno">Ex.: Adiantamento salarial, assistência médica, odontológica, etc.</p>
           </div>
             <div id="remuneracaoMensal">
                <h3>Remuneração mensal relativa à folha do mês:</h3> 
                <input type="text" name="remuneracaoMensaoInput" id="remuneracaoMensalInput" size="75" maxlength="150" placeholder = "Ex: março de 2022">
            </div>
              <div id="empregador">
                <h3>Empregador:</h3>
                <input type="text" name="empregador" id="empregadorInput" size="100" maxlength="150" placeholder="">
            </div>
              <div id="cpfCNPJ">
                <h3>CPF ou CNPJ:</h3>
                <input type="float" name="cpfCNPJInput" id="cpfCNPJInput" size="30" maxlength="14" placeholder="">
            </div>
            <div id="cidadeData">
                <div id="cidade" class="aoLado">
                  <h3>Cidade:</h3>
                  <input type="text" name="cidadeInput" id="cidadeInput" size="75" maxlength="150" >
              </div>
              <div id="data" class="aoLado">
                <h3>Data:</h3>
                <input type="date" name="dataInput" id="dataInput" placeholder="datetime">
            </div>
          </div>
          <div id="formasPagamento">
                <h3>Forma de Pagamento:</h3>
                <label class="radio">
                    <input type="radio" name="pagamento" value="dinheiro" checked>
                    Dinheiro
                </label>
                <label class="radio">
                    <input type="radio" name="pagamento" value="pix" checked>
                    Pix
                </label>
                <label class="radio">
                    <input type="radio" name="pagamento" value="cheque" checked>
                    Cheque
                </label>
                <label class="radio">
                    <input type="radio" name="pagamento" value="transferencia" checked>
                    Transferência/Depósito
                </label>
              </div>
            <br>
          <div id="duasVias">
            <h3>Duas vias?</h3>
            <input type="checkbox">
            Sim
          </div>
          <div class="button">
                <p>
                    <input type="hidden" name="gerarRecibo">
                    <button type="submit" class="submit" onclick="imprimir()">
                        <span>Gerar Recibo</span>
                    </button>
                </p>
            </div>
       </div>  
    </div>
</body>
</html>

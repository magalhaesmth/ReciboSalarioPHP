function imprimir(){
  var divReciboTudo = document.getElementById("container").style.display = "none";
  var divReciboImprimido = document.getElementById("reciboImprimir").style.display = "block";
  getDados();
}
function voltar(){
  var divReciboTudo = document.getElementById("container").style.display = "block";
  var divReciboImprimido = document.getElementById("reciboImprimir").style.display = "none";
}
function imprimir(){
  window.print();
}

function getDados(){
  var valor = document.getElementById("valorInput");
  var empregado = document.getElementById("empregadoInput");
  var aTitulo = document.getElementById("aTituloInput");
  var empregador = document.getElementById("empregadorInput");
  var cpfCnpj = document.getElementById("cpfCNPJInput");
  var cidade = document.getElementById("cidadeInput");
  var data = document.getElementById("dataInput");
  var formasPagamento = document.getElementsByClassName("radio");
  var remuneracaoMensal = document.getElementById("remuneracaoMensalInput");


  document.getElementById("valorPago").innerHTML = `R$ ${valorInput.value},00 #`;
  document.getElementById("dataImpressao").innerHTML = `${cidadeInput.value}  -  ${dataInput.value}`;
  
}
/**
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
                <p id="texto3" class="texto">Incidindo na base de cálculo de encargos sociais e fiscais para todos os efeitos legais.</p>
                <br>
                <p id="texto4" class="texto">Ass:</p>
                <p id="texto5" class="texto"> ―――――――――――――――――――― </p>
            </div>
            <div>
                <p id="dataImpressao"></p>
            </div>
        </div>
    </div>
              **/

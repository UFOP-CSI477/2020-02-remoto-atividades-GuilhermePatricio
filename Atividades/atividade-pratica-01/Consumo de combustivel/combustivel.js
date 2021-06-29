//Variavel que guarda os dados de todos os veiculos adicionados
var dadosVeiculos = {

    combustivel:0,
    km:0,
    desempenho:0,
    qtdVeiculos:0
}

//verifica se o campo é um numero
function validarNum(campo){

    if ( campo.length == 0 || isNaN (parseFloat(campo))) {
        window.alert("Informe um valor valido!");
      
        return false;
    }
    return true;
}

//Limpa os campos
function limparCampos(){

    document.formDados.combustivel.value = "";
    document.formDados.kmRodados.value = "";
}

//Oculta as tabelas
function ocultarTabelas(){
    
    var tabelaVeiculo = document.getElementById("veiculos");
    var tabelaRelatorio = document.getElementById("relatorio");
    
    tabelaVeiculo.style = "display:none";
    tabelaRelatorio.style = "display:none";

    document.getElementById("btnConcluir").disabled = true;
}

//Habilita determinada tabela
function habilitarTabela(tabela){

    var tabela = document.getElementById(tabela);
    tabela.style = "display:initial";

}
//Calcula o desempenho de um veiculo e atualiza os dados dos veiculos
function calcularDesempenho(combustivel,km){

    let Km = parseFloat(km);
    let comb =  parseFloat(combustivel);
    let desempenho = Km/comb;

    dadosVeiculos.combustivel += comb;
    dadosVeiculos.km += Km;
    dadosVeiculos.desempenho += desempenho;

    return desempenho;
}

//Adiciona 1 veiculo na tabela de veiculos
function adicionarVeiculo(combustivel,km){

    if (!(validarNum(combustivel) && validarNum(km))){
        return;
    }

    document.getElementById("btnConcluir").disabled = false;
    habilitarTabela("veiculos");

    dadosVeiculos.qtdVeiculos += 1;

    let desempenho = calcularDesempenho(combustivel,km);

    var tabela = document.getElementById("tabelaVeiculos");
    var qtdLinhas = tabela.rows.length;
    var linha = tabela.insertRow(qtdLinhas);

    var cellId = linha.insertCell(0);
    var cellCombustivel = linha.insertCell(1);
    var cellKm = linha.insertCell(2);
    var cellDesempenho = linha.insertCell(3);

    cellId.innerHTML = dadosVeiculos.qtdVeiculos;
    cellCombustivel.innerHTML = combustivel;
    cellKm.innerHTML = km;
    cellDesempenho.innerHTML = desempenho.toFixed(2);

    
    limparCampos();
}

//Adiciona as informaçoes dos veiculos na tabela de relatorio
function elaborarRelatorio(){

    document.getElementById("btnConcluir").disabled = true;

    habilitarTabela("relatorio");

    var tabela = document.getElementById("tabelaRelatorio");
    var qtdLinhas = tabela.rows.length;
    var linha = tabela.insertRow(qtdLinhas);

    var cellCombustivel = linha.insertCell(0);
    var cellKm = linha.insertCell(1);
    var cellMediaConsumo = linha.insertCell(2);
    var cellMediaKM = linha.insertCell(3);
    var cellMediaDesempenho = linha.insertCell(4);

    cellCombustivel.innerHTML = dadosVeiculos.combustivel;
    cellKm.innerHTML = dadosVeiculos.km.toFixed(2);

    cellMediaConsumo.innerHTML = (dadosVeiculos.combustivel/dadosVeiculos.qtdVeiculos).toFixed(2);
    cellMediaKM.innerHTML = (dadosVeiculos.km/dadosVeiculos.qtdVeiculos).toFixed(2);
    cellMediaDesempenho.innerHTML = (dadosVeiculos.km/dadosVeiculos.combustivel).toFixed(2);
}



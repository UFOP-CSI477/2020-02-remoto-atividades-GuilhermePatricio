var listaParticipantes = new Array();

//verifica se existe algum campo vazio
function validar(campo) {
    if ( campo.length == 0 ){
        window.alert("Preencha todos os campos!");
        return false;
    }
    return true;
}

//verifica se o campo é um numero
function validarNum(campo){
    if ( campo.length == 0 || isNaN (parseInt(campo))) {
        window.alert("Informe um valor valido!");
        document.formDados.tempo.value = "";
        return false;
    }
    return true;
}
//Limpa os campos
function limparCampos(){
    document.formDados.largada.value = "";
    document.formDados.competidor.value = "";
    document.formDados.tempo.value = "";
}

//Limpa a informação das tabelas
function limparTabelas(){

    document.getElementById("btnResultado").disabled = false;
    ocultarCampos();


    var tabela = document.getElementById("tabelaLargada");
    var qtdLinhas = tabela.rows.length;

    for(var i = 1; i<qtdLinhas; i++){
        tabela.deleteRow(1);
     }
    
    tabela = document.getElementById("tabelaResultado");
    qtdLinhas = tabela.rows.length;
     
    
    for(var i = 1; i<qtdLinhas; i++){
        tabela.deleteRow(1);
     }
}

//Define o objeto participante
function Participante(largada,competidor,tempo){
    this.largada = largada;
    this.competidor = competidor;
    this.tempo = parseInt(tempo);
}

//Adiciona um participante na tabela de largada
function adicionarParticipante(largada,competidor,tempo){
    
    if (!(validarNum(largada) && validar(competidor) && validarNum(tempo))){
        return;
    }

    habilitarCampo("dadosParticipantes");
    habilitarCampo("btnResultado");
    habilitarCampo("btnRecomecar");

    var tabela = document.getElementById("tabelaLargada");
    var qtdLinhas = tabela.rows.length;
    var linha = tabela.insertRow(qtdLinhas);

    var cellLargada = linha.insertCell(0);
    var cellCompetidor = linha.insertCell(1);
    var cellTempo = linha.insertCell(2);

    cellLargada.innerHTML = largada;
    cellCompetidor.innerHTML = competidor;
    cellTempo.innerHTML = tempo;

    const participante = new Participante(largada,competidor,tempo);
    listaParticipantes.push(participante);

    limparCampos();
}

//Preenche a tabela de resultados
function preencherTabelaResultado(){

    habilitarCampo("resultado");
    document.getElementById("btnRecomecar").disabled = false;

    //Ordela a lista de participantes pelo menor tempo
    listaParticipantes.sort(function(a,b){
        if(a.tempo > b.tempo){  
            return 1;
        }
        if(a.tempo < b.tempo){
            return -1;
        }
        return 0;
    });

    //Define o tamanho da tabela a ser preenchida baseado no tamanho da tabela de largada
    var tamTabela = document.getElementById("tabelaLargada").rows.length-1;

    var tabela = document.getElementById("tabelaResultado");
    
    //Preenche a tabela
    for(var i = 0; i<tamTabela; i++){

        var qtdLinhas = tabela.rows.length;
        var linha = tabela.insertRow(qtdLinhas);
        var cellPosicao = linha.insertCell(0);
        var cellLargada = linha.insertCell(1);
        var cellCompetidor = linha.insertCell(2);
        var cellTempo = linha.insertCell(3);
        var cellResultado = linha.insertCell(4);

        cellPosicao.innerHTML = i+1;
        cellLargada.innerHTML = listaParticipantes[i].largada;
        cellCompetidor.innerHTML = listaParticipantes[i].competidor;
        cellTempo.innerHTML = listaParticipantes[i].tempo;
        
        if(i==0){
            cellResultado.innerHTML = "Vencedor (a)!";
        }
        else if(listaParticipantes[0].tempo == listaParticipantes[i].tempo){
            cellResultado.innerHTML = "Vencedor (a)!";
            cellPosicao.innerHTML = 1;
        }
        else{
            cellResultado.innerHTML = "-";
        }

        document.getElementById("btnResultado").disabled = true; 
    }
}

//Oculta as tabelas
function ocultarCampos(){
    
    var tabelaParticipante = document.getElementById("dadosParticipantes");
    var tabelaResultado = document.getElementById("resultado");
    
    tabelaParticipante.style = "display:none";
    tabelaResultado.style = "display:none";

    document.getElementById("btnResultado").style = "display:none";
    document.getElementById("btnRecomecar").style = "display:none";
    document.getElementById("btnRecomecar").disabled = true;
}

//Habilita determinada campo
function habilitarCampo(campo){

    var campo = document.getElementById(campo);
    campo.style = "display:initial";

}
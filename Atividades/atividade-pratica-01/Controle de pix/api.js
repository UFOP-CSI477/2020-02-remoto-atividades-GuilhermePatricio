var recebimento = 0;
var envio = 0;

//Verifica se o campo de texto/select esta vazio
function validar(campo) {

    if ( campo.length == 0 ){
        window.alert("Preencha todos os campos!");
        return false;
    }
    return true;
}

//Verifica se uma opção foi selecionada
function validarRadio(radio){

    if(radio[0].checked){
        return true;
    }
    else if(radio[1].checked){
        return true;
    }
    
    window.alert("Preencha todos os campos!");
    return false;
}

//Verifica se o campo é um numero
function validarNum(campo){
    if ( campo.length == 0 || isNaN (parseInt(campo))) {
        window.alert("Informe um valor valido!");
        document.formDados.valor.value = "";
        return false;
    }
    return true;
}

//Limpa os campos
function limparCampos(){

    document.formDados.tipoChave.value = "";
    document.formDados.chave.value = "";
    document.formDados.bancos.value = "";
    document.formDados.valor.value = "";
    document.formDados.data.value = "";

    let radio = document.formDados.operacao;
    for (let i = 0; i < radio.length; i++) {
        radio[i].checked = false;
    }
}

//Limpa os campos do relatorio
function limparRelatorio(){
    document.getElementById("valorEnviado").value = "";
    document.getElementById("valorRecebido").value = "";
    document.getElementById("saldo").value = "";
}

//Preenche o select com o nome dos bancos
function preencherSelectBancos(data) {
    
    let bancos = document.formDados.bancos;

    for( let index in data ) {
        const { ispb, name} = data[index];

        let option = document.createElement("option");
        option.value = ispb;
        option.innerHTML = name;

        bancos.appendChild(option);
    }
}

//Carrega os bancos da api
function carregarBancos() {

    fetch("https://brasilapi.com.br/api/banks/v1")
        .then(response => response.json())
        .then(data => preencherSelectBancos(data))
        .catch(error => console.error(error))
}

//Preenche o select com os tipos de chave
function preencherSelectChaves(){
    
    let chave = document.formDados.tipoChave;

    let opcaoChave = {

        CPF: "CPF",
        CNPJ: "CNPJ",
        email: "e-mail",
        NumCel: "Número de celular",
        chaveRand: "Chave aleatória"
    }

    for( let index in opcaoChave ) {
        id = index;
        tipoChave = opcaoChave[index];

        let option = document.createElement("option");
        option.value = id;
        option.innerHTML = tipoChave;

        chave.appendChild(option);
    }
}

//Muda o placeholder de chave de acordo com a chave escolhida
function definirChave(chave){
    
    switch(chave.value){
        case("CPF"):
            document.formDados.chave.value.placeholder = "Digite o CPF";break;
        case("CNPJ"):
            document.formDados.chave.value.placeholder = "Digite o CNPJ";break;
        case("email"):
            document.formDados.chave.value.placeholder = "Digite o e-mail";break;
        case("NumCel"):
            document.formDados.chave.value.placeholder = "Digite o Numero do celular";break;
        case("chaveRand"):
            document.formDados.chave.value.placeholder = "Digite a Chave";break;
    }
}

//Soma os valores de acordo com o tipo de transação
function adicionarTransacao(){

    if(!(validarNum(document.formDados.valor.value) && validar(document.formDados.tipoChave.value) &&  validar(document.formDados.data.value) && validar(document.formDados.chave.value) && validar( document.formDados.bancos.value) && validarRadio(document.getElementsByName("operacao")))){
        
        return;
    }
    
    limparRelatorio();

    let radio = document.getElementsByName("operacao");

    for (let i = 0; i < radio.length; i++) {

        if (radio[i].checked && radio[i].value=="R") {
            recebimento += parseFloat(document.formDados.valor.value);
            console.log(parseFloat(document.formDados.valor.value));
        }

        else if(radio[i].checked && radio[i].value=="E"){
            envio += parseFloat(document.formDados.valor.value);
        }
    }

    document.formDados.valor.value = "";

    window.alert("Transferencia computada!");
}

//Faz a diferença dos valores de recebimento e envio e exibe na tela os resultados
function fazerRelatorio(){

    limparCampos();

    document.getElementById("valorEnviado").value = "R$ " + envio;
    document.getElementById("valorRecebido").value = "R$ " + recebimento;
    document.getElementById("saldo").value = "R$ " + (recebimento - envio);

  
    envio = 0;
    recebimento = 0;
}


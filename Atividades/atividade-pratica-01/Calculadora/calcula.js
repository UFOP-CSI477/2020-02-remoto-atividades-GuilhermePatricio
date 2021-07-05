//Objeto que armazena qual operação aritmetica sera realizada, e um dos numeros que serão usados na conta
let calculadora = {
    
    operacao:null,
    num:null
}

//Realiza a soma de dois valores
function somar(n1,n2){

    return n1 + n2;  
}

//Realiza a subtração de dois valores
function subtrair(n1,n2){
    
    return n1 - n2;
}

//Realiza a multiplicação de dois valores
function multiplicar(n1,n2){

    return n1 * n2;
}

//Realiza a divisão de dois valores
function dividir(n1,n2){

    if(n2 == 0){
        console.log("oi");
        return "Não ÷ por zero";
    }
    else{
        return n1 / n2;
    }
}

//Limpa os campos
function limpar(){

    resultado.innerHTML = "";
    previa.innerHTML ="";
    calculadora.num = null;
    calculadora.operacao = null;
}

//Trata o caso de numeros decimais, adicionando o ponto quando se deve
function ponto(){
    
    if(isNaN(resultado.innerHTML) || resultado.innerHTML == ""){
        resultado.innerHTML = "0.";
        previa.innerHTML = "0."
    }

    else if(!(resultado.innerHTML.includes("."))){
        resultado.innerHTML += "."
        previa.innerHTML += "."
    }
}

//Coloca o numero selecionado no display da calculadora
function obterNumero(numero){

    if(isNaN(resultado.innerHTML)){
        resultado.innerHTML = numero.value;
       
    }
    
    else{
        resultado.innerHTML += numero.value;
        
    }

    previa.innerHTML += numero.value;
}

//Coloca a operação aritmetica selecionada no display da calculadora, e salva qual operação deve ser realizada
function obterOperacao(operacao){

      if(resultado.innerHTML == "" || isNaN(resultado.innerHTML)){
     
        previa.innerHTML = "0" + operacao.value;
       
    }

    else{
       
        if(calculadora.num == null){
            calculadora.num = parseFloat(resultado.innerHTML);
        }

        else if(calculadora.operacao != null){
           calculadora.num = calculadora.operacao(calculadora.num,parseFloat(resultado.innerHTML));
        }

        resultado.innerHTML = operacao.value;
        previa.innerHTML += operacao.value;
    }

    switch(operacao.value){
        case("+"):
            calculadora.operacao = somar;break;
        case("-"):
            calculadora.operacao = subtrair;break;
        case("*"):
            calculadora.operacao = multiplicar;break;
        case("/"):
            calculadora.operacao = dividir;break;
    }
}

//Chama a operação aritmetica que foi selecionada e exibe o resultado no display
function recuperarResultado(){

    if(!(isNaN(resultado.innerHTML)) && calculadora.operacao != null){
        let resul = calculadora.operacao(calculadora.num,parseFloat(resultado.innerHTML));
        resultado.innerHTML = resul;
        previa.innerHTML += " = " + resul;
        calculadora.num = resul;
    }

    else{
        resultado.innerHTML = "= " + previa.innerHTML;
    }
    calculadora.operacao = null;
}

//Função % da calculadora, retorna o valor decimal da % digitada e realiza operações aritmeticas com o mesmo caso seja requisitado
function porcentagem(){
    var porcentagem = parseFloat(resultado.innerHTML);
 
    if(calculadora.operacao != null){
        porcentagem /= 100;
        porcentagem *= calculadora.num;
        resultado.innerHTML = porcentagem;
    }

    else{
        resultado.innerHTML = porcentagem/100;
    }
}


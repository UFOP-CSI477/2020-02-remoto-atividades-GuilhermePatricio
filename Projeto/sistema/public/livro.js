 // Buscar elemento pai
 var elemento_pai = document.body;
    
 // Criar elemento
 var elemento = document.createElement('div');

 elemento.id = "elemento";

function preencheLivros(data){

    let url;
    let thumb;
    let titulo;
    let autor;
    let html;

   


    for(let index in data){
       titulo = data[index].volumeInfo.title;
       autor =  data[index].volumeInfo.authors;

       

       criaCard(titulo);
    
    

}

}

function criaCard(titulo){

    var T = document.createElement('p');
    
    T.id = "titulo";

    // Criar o nó de texto
    var texto = document.createTextNode(titulo);
    
    // Anexar o nó de texto ao elemento h1
    
    T.appendChild(texto);
    
    // Agora sim, inserir (anexar) o elemento filho (titulo) ao elemento pai (body)
    elemento_pai.appendChild(elemento);
    elemento.appendChild(T);
    
}
function pesquisarLivro(livro){

    if(livro ==""){
        document.getElementById("alerta").style = "visibility:visible";
        return;
    }
    
    document.getElementById("alerta").style = "visibility:hidden";
    fetch(`https://www.googleapis.com/books/v1/volumes?q=` + livro)
        .then(response => response.json())
        .then(data => preencheLivros(data.items))
        .catch(error => console.error(error))
    
}
 
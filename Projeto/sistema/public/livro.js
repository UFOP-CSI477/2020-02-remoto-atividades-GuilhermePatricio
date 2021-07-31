 var elemento_pai = document.body;
 var div = document.createElement('div');
 div.id = "elemento";
 div.className = "card";

function preencheLivros(data){

    let url;
    let thumb;
    let titulo;
    let autor;
    let html;

   


    for(let index in data){
        titulo = data[index].volumeInfo.title;
        autor =  data[index].volumeInfo.authors;

        if(data[index].volumeInfo.readingModes.image == true){
            thumb =  data[index].volumeInfo.imageLinks.thumbnail;
        }

        else{
            continue;
        }
            
       criaCard(titulo,autor,thumb);
    
}

}

function criaCard(titulo,autor,thumb){

    var elemento_pai = document.body;
    var div = document.createElement('div');
    div.id = "elemento";
    div.className = "card";

    var pThumb = document.createElement('img');
    pThumb.id = "thumb";
    pThumb.className = "card-img-top";
    pThumb.src = thumb;
    
    var cardBody = document.createElement('div');
    cardBody.id = "cardBody";
    cardBody.className = "card-body";

    var pTitulo = document.createElement('h5');
    pTitulo.id = "titulo";
    pTitulo.className = "card-title";
    var textTitulo = document.createTextNode(titulo);
    
    var pAutor = document.createElement('p');
    pAutor.id = "autor";
    pAutor.className = "card-text";
    var textAutor = document.createTextNode(autor);

    var pAdicionar = document.createElement('a');
    pAdicionar.id = "adiciona";
    pAdicionar.className = "btn btn-primary";
    pAdicionar.href = "#";


    pTitulo.appendChild(textTitulo);
    pAutor.appendChild(textAutor);
    

    elemento_pai.appendChild(div);
    div.appendChild(pThumb);
    div.appendChild(cardBody);
    cardBody.appendChild(pTitulo);
    cardBody.appendChild(pAutor);
    cardBody.appendChild(pAdicionar);

    
    
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
 
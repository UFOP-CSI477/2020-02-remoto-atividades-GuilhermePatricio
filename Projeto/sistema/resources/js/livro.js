var livros = {
    titulo: null,
    autor: null,
    thumb: null
}

var elemento_pai = document.body;
 var div = document.createElement('div');
 div.id = "pai";
 div.className = "row";


function preencheLivros(data){

    let url;
    let thumb;
    let titulo;
    let autor;
    let html;

    for(let index in data){
        titulo = data[index].volumeInfo.title;
        autor =  data[index].volumeInfo.authors;

        if(data[index].volumeInfo.imageLinks){
            thumb =  data[index].volumeInfo.imageLinks.thumbnail;
        }

        else{
            thumb = "thumb.jpeg";
        }
            
       criaCard(titulo,autor,thumb,index);
    
    }

}

function criaCard(titulo,autor,thumb,index){
    
    var card = document.createElement('div');
    card.id = index;
    card.className = "card";
    card.style = style="height:490px";

    var imgThumb = document.createElement('img');
    imgThumb.id = "thumb";
    imgThumb.className = "card-img-top";
    imgThumb.src = thumb;
    
    var cardBody = document.createElement('div');
    cardBody.id = "cardBody";
    cardBody.className = "card-body";

    var hTitulo = document.createElement('h5');
    hTitulo.id = "titulo";
    hTitulo.className = "card-title";
    var textTitulo = document.createTextNode(titulo);
    
    var pAutor = document.createElement('p');
    pAutor.id = "autor";
    pAutor.className = "card-text";
    var textAutor = document.createTextNode(autor);

    var btAdicionar = document.createElement('input');
    btAdicionar.id = "adiciona";
    btAdicionar.type = "button";
    btAdicionar.className = "btn btn-danger";
    btAdicionar. onclick = function(){
        
    }
   
    hTitulo.appendChild(textTitulo);
    pAutor.appendChild(textAutor);;

    elemento_pai.appendChild(div);
    div.appendChild(card);
    card.appendChild(imgThumb);
    card.appendChild(cardBody);
    cardBody.appendChild(hTitulo);
    cardBody.appendChild(pAutor);
    cardBody.appendChild(btAdicionar);

}

function pesquisarLivro(livro){
    
    let elemento = document.getElementById("pai");
    if(elemento){
        elemento.textContent = "";  
    }
    
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
 
function backgroud(){
    document.body.style.backgroundImage = "url()";
    document.getElementById("bg").style.backgroundImage = "url()";
}
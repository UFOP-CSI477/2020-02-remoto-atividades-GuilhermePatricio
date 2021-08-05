var elemento_grid = document.body;
var div = document.createElement('div');
div.id = "grid";
div.className = "row";

function preencheLivros(data){

    let url;
    let thumb;
    let titulo;
    let autor;

    for(let index in data){
        titulo = data[index].volumeInfo.title;
        autor =  data[index].volumeInfo.authors;
        url = data[index].volumeInfo.previewLink;
            
        if(data[index].volumeInfo.imageLinks){
            thumb = data[index].volumeInfo.imageLinks.thumbnail;
        }

        else{
            thumb = "thumb.png";
        }
            
       criaCard(titulo,autor,thumb,index,url);
    
    }

}

function criaCard(titulo,autor,thumb,index,url){
    
    let card = document.createElement('div');
    card.id = index;
    card.className = "card";
    card.style = style="height:490px";

    let imgThumb = document.createElement('img');
    imgThumb.id = "thumb";
    imgThumb.className = "card-img-top";
    imgThumb.src = thumb;
    
    let cardBody = document.createElement('div');
    cardBody.id = "cardBody";
    cardBody.className = "card-body";

    let hTitulo = document.createElement('h5');
    hTitulo.id = "titulo";
    hTitulo.className = "card-title";
    let textTitulo = document.createTextNode(titulo);
    
    let pAutor = document.createElement('p');
    pAutor.id = "autor";
    pAutor.className = "card-text";
    let textAutor = document.createTextNode(autor);

    let btAdicionar = document.createElement('input');
    btAdicionar.id = "adiciona";
    btAdicionar.type = "button";
    btAdicionar.className = "btn btn-danger";
    btAdicionar.value = "Adicionar";
    btAdicionar.onclick = function(){

        document.getElementById("titulo").value = titulo;
        document.getElementById("autor").value = autor;
        document.getElementById("thumb").value = thumb;
        document.getElementById("url").value = url;
        document.getElementById("favorito").value = 0;
        document.getElementById("nota").value = 0;
        document.getElementById("dadosLivro").submit();
    
    }

    hTitulo.appendChild(textTitulo);
    pAutor.appendChild(textAutor);
   
    
    elemento_grid.appendChild(div);
    div.appendChild(card);
    card.appendChild(imgThumb);
    card.appendChild(cardBody);
    cardBody.appendChild(hTitulo);
    cardBody.appendChild(pAutor);
    cardBody.appendChild(btAdicionar);

}

function pesquisarLivro(livro){
    
    let elemento = document.getElementById("grid");
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
    document.title = "Meus livros";
}

function confirma(id,classe){


        if(classe == "removerFav"){

            document.getElementById(id).onsubmit = function() {
        
                return confirm("deseja remover esse livro dos favoritos ?");
             };
        }

        else if(classe == "adicionarFav"){

            document.getElementById(id).onsubmit = function() {
        
                return confirm("deseja adicionar esse livro aos favoritos ?");
             };
        }
        
        else if(classe == "removerLivro"){

            document.getElementById(id).onsubmit = function() {
        
                return confirm("deseja remover esse livro ?");
             };
        }

        else if(classe == "avaliar"){

            document.getElementById(id).onsubmit = function() {
        
                return confirm("deseja avaliar esse livro ?");
             };
        }

}


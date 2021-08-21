# **CSI606-2020-02 - Remoto - Trabalho Final - Resultados**
## *Aluna(o): Guilherme Silva Patricio

--------------

<!-- Este documento tem como objetivo apresentar o projeto desenvolvido, considerando o que foi definido na proposta e o produto final. -->

### Resumo

  Esse trabalho visa criar um banco de dados de livros, onde o usuário pode exibir quais livros possui, quais seus livros favoritos, e qual a nota atribuída para eles.

### 1. Funcionalidades implementadas
<!-- Descrever as funcionalidades que eram previstas e foram implementas. -->

    - Pesquisar livros.
    - Adicionar os livros que você possui ao seu perfil.
    - Visualizar informações adiconais sobre os livros.
    - Avaliar os livros.
    - Adicionar os livros aos favoritos.
    - Exibir seus livros favoritos.
    - Remover seus livros dos favoritos.
    - Remover livros vinculados ao seu perfil.
  
### 2. Funcionalidades previstas e não implementadas
<!-- Descrever as funcionalidades que eram previstas e não foram implementas, apresentando uma breve justificativa do porquê elas não foram incluídas -->
      Todas as funcionalidades previstas foram implementadas.
### 3. Principais desafios e dificuldades
<!-- Descrever os principais desafios encontrados no desenvolvimento do trabalho, quais foram as dificuldades e como elas foram superadas e resolvidas. -->

 Os principais desafios foram:
 
    - Criar uma interface apropriada e funcional: esse problema foi resolvido obser-vando interfaces de outras aplicações que ofereciam funcionalidades similares, além da 
      tentativa e erro, para observar como a interface se encaixaria da melhor forma.
    
    - Adicionar o token @csrf em um formulário criado dinamicamente em Java Script: esse problema não foi resolvido, mas foi contornado criando o formulário na página principal
      em HTML e preenchendo e realizando o submit do mesmo via JS.
    
    - Não atualizar a página ao fazer submit do formulário: esse problema foi resolvido com a criação de um inframe e definindo o target do formulário para esse inframe.

### 4. Instruções para instalação e execução
<!-- Descrever o que deve ser feito para instalar (ou baixar) a aplicação, o que precisa ser configurando (parâmetros, banco de dados e afins) e como executá-la. -->
  
    -Executar o comando php artisan serve dentro da pasta sistema.
    -Utilizar o banco de dados SQLite.

### 5. Referências
<!-- Referências podem ser incluídas, caso necessário. Utilize o padrão ABNT. -->

KATZ, Nevin. Create a Star Rating Widget with CSS in 9 Steps. Medium. Disponível em: <https://medium.com/codex/create-a-star-rating-widget-with-css-in-9-steps-fe323352dba4>. Acesso em: 17 de ago. de 2021.


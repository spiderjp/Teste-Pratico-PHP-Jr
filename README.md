# TESTE-PRATICO-PHP-JR
Teste Prático PHP Jr
## Pensamento Lógico e Tecnologias Usadas:

- Tecnologias usadas: PHP, eES6+, HTML, CSS, MySQL Workbench, Xampp;
- Pensamento Lógico:
1.Instalar as tecnologias, criar a pasta e o arquivo "index.php" para ser o principal; :fa-thumbs-up:
2.Fazer a integração do banco de dados com php via Xampp e Apache; :fa-thumbs-up:
3.Criar o modelo do banco de dados, o banco, tabelas, registros, relacionamentos e chaves primárias e estrangeiras; :fa-thumbs-up:
4.Exibir no programa os dados da tabela definidos por meio de uma tabela; :fa-thumbs-up:
5.Criar as marcações de hipertextos e a estilização da página; :fa-thumbs-up:
6.Integrar a API ViaCEP para buscar preencher os dados dos campos de entrada; :fa-thumbs-up:
7.Criar tabela para vendas, onde poderá adicionar e excluir itens; :fa-thumbs-up:
8.Mostrar Valor Total dos produtos embaixo da tabela criada;  :fa-thumbs-down:
9.Criar filtro de pesquisa com AJAX e PHP;  :fa-thumbs-down:
10.Criar Janela Modal para quando finalizar o preenchimento dos dados, mostrando os produtos e os valores, além do valor total. :fa-thumbs-down:

Observação: Os positivos são os que consegui fazer e os negativo que não consegui pela falta de conhecimento ou tempo.

## Criação do Banco de Dados:

A criação fora por Workbench, de acordo com os requisitos, os campos e as tabelas foram criadas. 
O BD é "Vendas" e as tabelas "Fornecedores" e "Produtos".
Como os fornecedores podem ter diversos produtos, então a relação é de muitos para muitos, 
onde criei uma chave primária na tabela "Produtos" que 
tornou a chave estrangeira na tabela "Fornecedores", sendo essa a "Referência" (no caso o ID do produto).

:fa-comment-o: Pensamento do Programador: Deveria ter criado uma tabela para fazer essa ligação de forma melhorada, 
talvez sendo a tabela "Fornecimentos", pois assim quando mostrasse a tabela na tela, não precisasse mostrar as duas separadas :fa-meh-o:


## PHP e a Implementação:

A implementação PHP e a utilização foram feitas com sucesso, claro que preciso estudar e revisar conteúdos, porém a implementação via Xampp
e Apache com o BD teve êxito e a utilização principal está em mostrar os dados adicionados das tabelas do BD no HTML.

Para a implementação, utilizei esse código:

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "vendas";

    //Criando conexão para acessar banco de dados

    $conex = mysqli_connect($servidor,$usuario,$senha,$dbname);

    //Fazendo uma query (solicitação) para buscar os dados especificados de duas determinadas tabelas

    $resultado_produtos = "SELECT * FROM produtos";
    $resultado_fornecedores = "SELECT * FROM fornecedores";

    //Executando as queries (chamadas)


    $resultado_produtos2 = mysqli_query($conex, $resultado_produtos);
    $resultado_fornecedores2 = mysqli_query($conex, $resultado_fornecedores);



## GitHub:

Eu criei apenas duas branchs, a main e a master, por conta de não ter usado durante o desenvolvimento, só instalando agora para enviar os arquivos.
O motivo de não ter criado outras e feito merge é por considerar a master a principal, onde os códigos/ arquivos estão "completos".

## ES6+, HTML e CSS/Boostrap

Não tive problemas com os quatros, conquanto, utilizei a identação para todos, a utilização dos principais comandos.


## AJAX e PHP

Não consegui concluir no prazo combinado o filtro de pesquisas AJAX e PHP, apesar de ter usado AJAX antes com ES6+, com PHP, mesmo pesquisando,
analisando e assistindo alguns códigos e aulas, não encontrei um em pouco tempo para poder implementar de forma legível e simples no meu código.


## PHP e ViaCEP

A utilização da API do ViaCEP por meio do ES6+ fora positiva, contudo, tive de usá-lo em script interno e não externo, por ter dado problemas com
o externo (não compreendi ou achei o real motivo de ter acontecido), por isso, o motivo maior de ter ficado "enorme" o arquivo principal.


### Considerações Finais

## Pensamentos sobre o Teste

O teste não era complexo, apenas trabalhoso, fácil de entender a lógica, os requesitos e o objetivo dele, além do que deveria ser feito são interessantes,
intrigantes e me incentiva a estudar mais PHP e as outras tecnologias, para relembrar, aprofundar e aperfeiçoar meus conhecimentos em cada uma delas.


## "Problemas Pessoais"

Os problemas pessoais que relatei no e-mail era referente a falta de computador para a realização da atividade, mas com a nova oportunidade, busquei encontrar
um compoutador para iniciar o teste, mesmo que seja apenas para praticar, talvez por isso, não tive também tempo suficiente para implementar determinados
códigos. Isso não é desculpa, apenas espero que compreenda o motivo de não ter conseguido criar uma aplicação mais bem feita e agradável em pouco tempo.

## Agradecimentos

Agradeço pela oportunidade de fazer parte de um teste para ver minhas habilidades o quão apurado está ou quão necessário é estudar ou revisar determinados pontos.
Desculpe pela demora ;D
Pode ter certeza que buscarei arrumar o código e prencher todos os requisitos.



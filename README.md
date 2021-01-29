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


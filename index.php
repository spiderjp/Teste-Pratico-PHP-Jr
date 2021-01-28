<?php

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

    ?>




<!DOCTYPE html>


<html lang="PT-br">

<head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="tabelavendas.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Sistema de Vendas</title>

        <script>

            //Tive que utilizar no head, por ter testado como arquivo externo e não ter funcionado
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

</head>

<body>


    <h1>Seja bem-vindo(a)!</h1>

    <br />

    <p>Digite o produto que deseja vender para ver se existe no estoque:</p>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <div class="form-group">
            <label for="formGroupExampleInput">Nome produto:</label>
            <input type="text" class="form-control" id="nome_produto" placeholder="Livro">
            <button type="submit" class="btn btn-warning mb-3">Pesquisar</button>
    </div>

    </form>



    <br />
    <br />



    <h2>Lista de Produtos:</h2>

        <table border="2">

            <tr>
                <th>Nome</th>
                <th>Referência (ID)</th>
                <th>Preço</th>
            </tr>
        
        

            <?php

            // Imprimindo os dados do banco de dados que estão em cada coluna, mas pela linha

            while($row_produto = mysqli_fetch_assoc($resultado_produtos2)){ ?>

            

            <tr>

                <td><?php echo  $row_produto["Nome"] . "<br />"; ?></td>
                <td><?php echo  $row_produto["Referência"] . "<br />"; ?></td>
                <td><?php echo  $row_produto["Preço"] . "<br />"; ?></td>

            </tr>

            <?php } ?>

        </table>

        <!--Não consegui criar um código para que os fornecedores aparecessem na tabela acima-->

            <br />

        <h2>Lista de fornecedores:</h2>

        <table border="2">

            <tr>
                <th>Nome</th>
                <th>Produto Fornecido</th>
            </tr>
        
        

            <?php

            // Imprimindo os dados do banco de dados que estão em cada coluna, mas pela linha

            while($row_produto = mysqli_fetch_assoc($resultado_fornecedores2)){ ?>

            

            <tr>

                <td><?php echo  $row_produto["Nome"] . "<br />"; ?></td>
                <td><?php echo  $row_produto["Referência"] . "<br />"; ?></td>

            </tr>

            <?php } ?>

        </table>


        <!---Formúlario da Venda-->

        <br />

        <h4>Preencha os campos para criar sua lista:</h4>

        <br />

                <div id="fPessoas">
                    
        <form id="formulario_vendas">

            <div class="form-group">
                <label for="txtCodigo">Código Compra</label>
                <input type="text" class="form-control" id="txtCodigo" aria-describedby="emailHelp" placeholder="Código" readonly>
            </div>

            <div class="form-group">
                <label for="slProduto">Produto</label>
                <select id="slProduto" class="form-control">
                    
                    <option value="Livro" selected>1 - Livro</option>
                    <option value="Oculos">2 - Óculos de Praia</option>
                    <option value="Colar">3 - Colar de Rubi</option>
                    <option value="Fone">4 - Fone de Ouvido</option>
                    <option value="Violao">5 - Violão</option>
                    <option value="Celular">6 - Celular</option>
                    <option value="Impressora">7 - Impressora</option>
                </select>
            </div>

            <div class="form-group">
                <label for="txtFornecedor">Fornecedor</label>
                <input type="text" class="form-control" id="txtFornecedor" aria-describedby="emailHelp" placeholder="Nome">
            </div>

            <div class="form-group">
                <label for="txtPreco">Preço</label>
                <input type="text" class="form-control" id="txtPreco" placeholder="R$30.00">
            </div>
            
            <div class="form-group">
                <label for="txtData">Data</label>
                <input type="date" class="form-control" id="txtData" placeholder="dd/mm/aaaa">
            </div>

            <button type="button" class="btn btn-primary btn-lg"
                    onclick="cadProdutos(txtFornecedor.value, txtPreco.value, slProduto.value, txtData.value)">
                Inserir
            </button>
            <button type="button" class="btn btn-primary btn-lg"
                    onclick="altProdutos(txtFornecedor.value, txtPreco.value, slProduto.value, txtData.value)">
                Salvar
            </button>
            <button type="button" class="btn btn-primary btn-lg"
                    onclick="delRegistro()">
                Excluir
            </button>
        </form>
    </div>

    <br />
    <br />

    <div id="dGridProdutos">

        <table id="tbProdutos">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
        </table>
    </div>

        <!--Não alterei praticamente nada do formulário do ViaCEP, 
        apenas criei um id e adicionei bootstrap, além de integrar os campos com php-->

    <hr>


        <p>Digite o CEP para encontrar o endereço de entrega:</p>

        <form method="get" action=".">
        <label>Cep:
        <input name="cep" class="form-control" type="text" id="cep" value=""  maxlength="9"
               onblur="pesquisacep(this.value);" required/></label><br />
        <label>Rua:
        <input name="rua" class="form-control" type="text" id="rua" size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" class="form-control" type="text" id="bairro" size="40" /></label><br />
        <label>Cidade:
        <input name="cidade" class="form-control" type="text" id="cidade" size="40" /></label><br />
        <label>Estado:
        <input name="uf" class="form-control" type="text" id="uf" size="2" /></label><br />
        <label>IBGE:
        <input name="ibge" class="form-control" type="text" id="ibge" size="8" /></label><br /><br />
        <input type="submit" class="btn btn-success btn-lg" value="Enviar">
      </form>

      <br />
      


</body>
</html>
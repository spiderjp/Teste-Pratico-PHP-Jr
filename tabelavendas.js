var produtos, index;

function cadProdutos(produto, fornecedor, preco, data) {
    produtos = document.getElementById("tbProdutos");    
    var qtdlLinhas = produtos.rows.length;
    var linha = produtos.insertRow(qtdlLinhas);
    var linhaParam;

    var cellCodigo = linha.insertCell(0);
    var cellProduto = linha.insertCell(1);
    var cellFornecedor = linha.insertCell(2);
    var cellPreco = linha.insertCell(3);
    var cellData = linha.insertCell(4);
   

    cellCodigo.innerHTML = qtdlLinhas;
    cellProduto.innerHTML = produto;
    cellFornecedor.innerHTML = fornecedor;
    cellPreco.innerHTML = preco;
    cellData.innerHTML = data;

    preencheCamposForm();

}

function altProdutos(produto, fornecedor, preco, data) {

    produtos.rows[index].cells[1].innerHTML = produto;
    produtos.rows[index].cells[2].innerHTML = fornecedor;
    produtos.rows[index].cells[3].innerHTML = preco;
    produtos.rows[index].cells[4].innerHTML = data;

}

function preencheCamposForm() {

    for(var i = 0; i < produtos.rows.length; i++) 
    {
        produtos.rows[i].onclick = function() 
        {
            index = this.rowIndex;
            document.getElementById("txtCodigo").value = produtos.rows[index].cells[0].innerText;
            document.getElementById("slProduto").value = produtos.rows[index].cells[1].innerText;
            document.getElementById("txtPreco").value = produtos.rows[index].cells[2].innerText;
            document.getElementById("txtFornecedor").value = produtos.rows[index].cells[3].innerText;
            document.getElementById("txtData").value = produtos.rows[index].cells[4].innerText;
        }
    }
}

function delRegistro() {

    for(var i = 0; i < produtos.rows.length; i++) 
    {
        if (index == i) {
            produtos.deleteRow(index);
            return;
        }
    }
}
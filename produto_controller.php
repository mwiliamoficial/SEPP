<?php

    require "../../lista_produtos/produtos.model.php";
    require "../../lista_produtos/produtos.service.php";
    require "../../lista_produtos/conexao.php";

    $produto = new Produtos();
    $produto->__set('nome_produto', $_POST['nomeProduto']);
    $produto->__set('fornecedor', $_POST['fornecedor']);
    $produto->__set('desc_produto', $_POST['descricao']);
    $produto->__set('valor', $_POST['valor']);
    $produto->__set('data', $_POST['data']);

    $conexao = new Conexao();

    $produtosService = new ProdutosServ($conexao, $produto);
    $produtosService->inserir();

    header('Location: index.php?inclusao=1');

?>
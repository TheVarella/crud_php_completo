<?php
    //Atribuindo os valores passados por POST
    $codigo_categoria = $_POST['select_alterar'];
    $novo_texto = $_POST['c_novo_texto'];   
    
    //Verificar se existe a categoria cadastrada!
    //Importando a conexao
    require("connect.php");

    //Criando a SQL de pesquisa
    $sql_pesquisa = 
    "SELECT * FROM `categoria` WHERE `descricao_categoria` = '$novo_texto'";

    //executando a pesquisa
    $resultado_pesquisa = mysqli_query($conexao,$sql_pesquisa); 
    
    //Transformando a pesquisa em numero!
    $numero_resultado = mysqli_num_rows($resultado_pesquisa);   

    //Se não existir... cadastra!
    //Se existir... voltamos para o formulario!
    if($numero_resultado != 0)
    {
        echo "Existe categoria com este nome já cadastrado!";
    }
    else
    {
        echo "Pode cadastrar!";
    }
?>
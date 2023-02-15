<?php
    include_once 'conexao.php';

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }    

    if (!empty($dadoscad['btncad'])) {

        $vazio = false;

        $dadoscad = array_map('trim', $dadoscad);
        if (in_array("", $dadoscad)) {
            $vazio = true;

            echo "<script>
            alert('Preencher todos os campos!');
            parent.location = 'formulario.php';
            </script>";
            

        } else if(!filter_var($dadoscad['email'], FILTER_VALIDATE_EMAIL)) {
            $vazio = true;

            echo "<script>
            alert('Informe um e-mail válido!!');
            parent.location = 'formulario.php';
            </script>";
            
        }

        if(!$vazio) {

            $senha = password_hash($dadoscad['senha'], PASSWORD_DEFAULT);
              
    
           $sql = "INSERT into cliente (nome,telefone,cpf,datanascimento,cep,numerocasa,email,status) values (:nome,:telefone,:cpf,:datanascimento,:cep,:numerocasa,:email,:status)";

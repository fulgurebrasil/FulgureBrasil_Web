<?php

    require_once "Usuario.class.php";

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $objetoUsuario = new Usuario($id, $nome, $email, $senha);
    $objetoUsuario->atualizarUsuario();
    header("Location: todosUsuarios.php");

?>
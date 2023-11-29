<?php
include_once('config.php');

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['dt_nascimento']) && isset($_POST['id'])){

    $id = $_POST['id'];

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dt_nascimento = $_POST['dt_nascimento'];

    $sql_query = "UPDATE usuarios SET nomeusu = '$nome', emailusu = '$email', dt_nascimento = '$dt_nascimento' WHERE id = '$id'";
    mysqli_query($conn, $sql_query);
    
    header("location: index.php");
}

?>
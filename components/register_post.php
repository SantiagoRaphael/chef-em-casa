<?php

function connectDataBase(){
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'banco_de_dados';

    $connection = mysqli_connect($server, $user, $password, $database);

    if(!$connection){
        die("Conexão falhou" . mysqli_connect_error());
    }

    return $connection;

}

//connectDataBase();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $connection = connectDataBase();

    //proteção básica SQL INJECTION

    $name = mysqli_real_escape_string($connection, $name);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (name, email, password) VALUES ('$name','$email', '$password')";

    if(mysqli_query($connection, $query)){
        echo "Usuário Cadastrado com sucesso!";
    }else{
        echo "Erro ao cadastrar o usuário: " . mysqli_error($connection);
    }
}





?>
<form action="./register_post.php" method="post">
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">

    <input type="submit" value="Salvar">
</form>
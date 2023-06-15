<?php
$dbhost = 'localhost';
$dbUsername='root';
$dbPassword='';
$dbName='concessionaria';

$conexao  = new mysqli($dbhost, $dbUsername, $dbPassword, $dbName);

/*if($conexao-> connect_errno)
{
    echo"Erro";
}
else
{
    echo"Conexão efetuada com sucesso";
}*/


    /*if(isset($_POST['submit'])){


    include_once(conexao.php);

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $mensagem = $_POST['mensagem'];

    $result = mysqli_query($conexao, "INSERT INTO cliente(nome,email,numero,mensagem) VALUES('$nome','$email','$numero','$mensagem')");
   
   }*/

?>

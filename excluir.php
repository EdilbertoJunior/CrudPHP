<?php
include('conexao.php');
$idteste = $_GET['idteste'];


$sql = "delete from tblteste where idteste='$idteste'";

$qry = mysqli_query($conn,$sql);
if($qry){
    header("Location:index.php");
} else {
    echo "Deu ruim...Bobão <a href='index.php'>Voltar</a>";
}
<?php
 include('conexao.php');
 $sql = "select * from tblteste";
 $qry = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
<h1>Usuarios</h1>
<hr>
    <a href="cadastrar.php">CADASTRAR USUARIO</a>  ----
    <a href="aumentaridade.php">AUMENTAR IDADE</a>

     <table border='1'>
            <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Idade</td>
                    <td>Ações</td>
            </tr>

    <?php

        while ($linha=mysqli_fetch_array($qry)){
            
            echo "<tr>";
             echo "<td>".$linha['idteste']."</td>";
             echo "<td>".$linha['nome']."</td>";
             echo "<td>".$linha['idade']."</td>";
             echo "
             <td> 
                <a href='editar.php?idteste={$linha["idteste"]}'>Editar </a>
                <a href='excluir.php?idteste={$linha["idteste"]}'>Excluir </a>
                
             </td>
            ";
            echo "</tr>";
        }

    ?>
    </table>


</body>
</html>
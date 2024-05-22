@ -0,0 +1,45 @@
<?php 
// exemplo de acesso a dados usando POO
// por meio de uma classe Model, gerando lista de objetos 

include_once 'conexao.php';
include_once './MODEL/Departamento.php';

$sql = "Select * from departamento;";
$con = Conexao::conectar();
$dados = $con->query($sql);

foreach ($dados as $linha){
    $dpto = new \MODEL\Departamento();
    $dptp->setID($linha['id']);
    $dpto->setDescricao($linha['descricao']);
    
    $lstDpto[] = $dpto;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Departamento</title>
</head>
<body>
    <h1> Listar Departamento </h1>
    <table> 
        <tr> 
            <th>ID</th>
            <th>Descrição</th>
        </tr>

        <?php foreach($lstDpto as  $dpto) {?>
        <tr>
            <td><?php echo $dpto->getID();?></td>
            <td><?php echo $dpto->getDescricao();?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
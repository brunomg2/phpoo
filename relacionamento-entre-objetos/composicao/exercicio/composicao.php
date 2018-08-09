<?php
require_once 'class/Empresa.class.php';
require_once 'class/Pessoa.class.php';

$empresa = new Empresa('HD Consultoria','Rua do centro');
$empresa->addFuncionario('bruno','Programador');
$empresa->addFuncionario('carlos','design');
$empresa->addFuncionario('Jose','Gerente de Projetos');

// echo '<pre>';
// var_dump($empresa);
// echo '</pre>';

// echo '<hr>';
echo "<h1>A empresa {$empresa->getNome()} possui ".count($empresa->getFuncionario()) .' Funcionários</h1>';

?>

<table border="1" width="50%">
    <tr>
        <th>Nome</th>
        <th>Cargo</th>
    </tr>

    <?php foreach($empresa->getFuncionario() as $funcionario): ?>
        <tr>
            <td><?= $funcionario->getNome() ;?></td>
            <td><?= $funcionario->getCargo() ;?></td>
        </tr>
    <?php endforeach; ?>

</table>

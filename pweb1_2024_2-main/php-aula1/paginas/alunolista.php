<?php
include "./aula03_funcao.php";
include "../db.class.php";

head();


$db = new db();
$db->conn();

if(!empty($_GET['id'])){
  $db->destroy($_GET['id']);
}


$dados = $db->all();

//var_dump($dados);
//exit;


?>

<div class ="col">
  <h3>Listagem de Alunos</h3>

  <div class="container-fluid">
    <form class="d-flex" role="search">

    <div class="col-4">
      <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
    </div>
    <div class="col-4">
      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      <a class="btn btn-outline-primary" href="./alunoform.php">Novo</a>
    </div>
    </form>
  </div>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
    <?php

    foreach($dados as $item){
      //var_dump($item);
      //exit;
    echo "<tr>
      <th scope='row'>$item->id</th>
      <td>$item->nome</td>
      <td>$item->cpf</td>
      <td>@$item->telefone</td>
      <td><a href='alunoform.php?id=$item->id'>Editar</a></td>
      <td><a onclick='return confirm(\"Deseja excluir?\")' href='alunolista.php?id=$item->id'>Deletar</a></td>
    </tr>";
    
}
?>
  </tbody>
</table>
  </div>
  </div>
<?php

footer();

?>
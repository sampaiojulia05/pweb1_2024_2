<?php

include "./aula03_funcao.php";
include "../db.class.php";

head();

$db = new db();
$db->conn();

if(!empty($_POST)){
//var_dump($_POST);
//exit;
$db->insert([
  'nome'=>$_POST['nome'],
  'telefone'=>$_POST['telefone'],
  'cpf'=>$_POST['cpf'],
]);
}

if(!empty($_GET['id'])){
  $data = $db->find($_GET['id']);
  //var_dump($data);
  //exit;
}

?>

<div class="col">

<form action="alunoform.php" method="post">

  <h3>Formulário Aluno</h3>
  
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" 
    value="<?php echo !empty($data->nome) ? $data->nome : "" ?>" 
    placeholder="Nome">
  </div>

  <div class="mb-3">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" class="form-control" name="cpf" 
    value="<?php echo !empty($data->cpf) ? $data->cpf : "" ?>"
    placeholder="000.111.222-00">
  </div>

  <div class="mb-3">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="telefone" 
    value="<?php echo !empty($data->telefone) ? $data->telefone : "" ?>"
    placeholder="(49) 99988-7744">
  </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    <a class="btn btn-primary" href="./alunolista.php">Voltar</a>
    </form>
</div>

<?php

footer();

?>



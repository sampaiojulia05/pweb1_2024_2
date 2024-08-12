  <?php 
   $notas = [5,7,8,4,10];
for( $i=0; $i<=count($notas); $i++){//retorna o tamanho do vetor
  echo $notas[$i] . "<br>";
}
  $nomes = ["Julia"=>19, "Pedro"=>22, "Maria"=>18];

foreach($nomes as $key=>$valor){
  echo "nome: " .$key . " idade: " .$valor ."<br>";//ponto é a concatenação
}
  ?> 

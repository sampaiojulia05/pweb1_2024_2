<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    $nome = "Julia";
    $anonasc = 2005;
    $ano = 2024;
    $num=0;
    echo "Olá Mundo ". $nome . "<br>" . "idade:" . $ano - $anonasc . "<br>";

    if($ano - $anonasc >= 18){
      echo $nome ." é maior de idade". "<br>";
    }
    else{
      echo $nome . " é menor de idade". "<br>";
    }
//crescente
    while($num <= 10){
      echo $num . "<br>";
      $num++;
    }
    //mesma coisa do while so que com for
    for($num=0; $num<=10; $num++)
    echo $num . "<br>";
//decrescente
    while($num >= 10){
      echo $num . "<br>";
      $num--;
    }

    for($num=10; $num>=0; $num--)
    echo $num . "<br>";

    $hoje = date('d/m/Y') . "<br>";
    echo $hoje . "<br>";

    echo date('d F Y') . "<br>";



    ?> 
  </body>
</html>
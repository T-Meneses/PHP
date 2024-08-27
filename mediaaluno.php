<!DOCTYPE html>
<html>
<header>
    
    <title>Media do Aluno</title>

</header>
<body>
<?php
    $nota1 = 7;
    $nota2 = 6;
    $nota3 = 5;
    $nota4 = 10;
    echo"nota 1". var_dump(7); echo"<br>";
    echo"nota 2". var_dump(6); echo"<br>";
    echo"nota 3". var_dump(5); echo"<br>";
    echo"nota 4". var_dump(10);echo"<br>";
    $resultado = ($nota1 + $nota2 + $nota3 + $nota4)/4;
    echo $resultado." A media é";
    if($resultado >= 7 && $resultado !=10){
        echo " O Aluno foi aprovado!";
    }else if($resultado==0){
        echo "Estude mais, você nao acertou nada.";
    }else if($resultado==10){
        echo "parabens ! Aprovado com nota máxima.";

    }else{
        echo "O aluno foi reprovado.";        
    }
    
?>
</body>
</html>
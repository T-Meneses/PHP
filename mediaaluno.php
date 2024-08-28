<!DOCTYPE html>
<html>
<header>
    
    <title>Media do Aluno</title>

</header>
<body>
<?php
    $nota1 = 10;
    $nota2 = 6;
    $nota3 = 5;
    $nota4 = 10;
    echo"nota 1". var_dump(7); echo"<br>";
    echo"nota 2". var_dump(6); echo"<br>";
    echo"nota 3". var_dump(5); echo"<br>";
    echo"nota 4". var_dump(10);echo"<br>";
    
    $resultado = ($nota1 + $nota2 + $nota3 + $nota4)/4;
    echo"<br>";
    echo $resultado." A media é:";  
    echo"<br>";  
    if($resultado >= 7 && $resultado !=10){
        echo " O Aluno foi aprovado!";
    }else if($resultado==0){
        echo "Estude mais, você nao acertou nada.";
    }else if($resultado==10){
        echo "parabens ! Aprovado com nota máxima.";

    }else{
        echo "O aluno foi reprovado.";        
    }
    echo"<br>";
    $text = "Olá ";
    $text2 = "Mundo!";
    echo $text . $text2; //Ou " echo $text.= $text2;"
    echo $text ;
    echo"<br>";
    echo"<br>";

    $color = "White";
    switch ($color){
        case "red": 
            echo "My favorite color is red";
        break;    
        case "blue":
            echo "My favorite color is blue";
        break;
        case "pink": 
            echo"My favorite color is pink";
        break;
        case "green":
            echo"My favorite color is green";
        break;
        default:
            echo "None favorite color";           
    }
    echo"<br>";
        $dia=2;
        switch($dia){
            case 6:
                echo "Hoje é Sábado";
                break;
            case 2:
                echo "Hoje é Domingo";
            break;  
            default:
                echo "Logo vem o fim de semana";  

        
        }
?>
</body>
</html>
<!DOCTYPE html>
<html>
    <header>
    </header>
    <body>
       
                  
        <?php
            $idade = 10;  /* --$(SIFRÃO) = VARIAVEL)-- */
            if($idade >=65){ /* --IF = SE-- */
                echo "Medicamento permitido com restricoes"; /* --ECHO = IMPRIMIR NA TELA-- */
            } elseif ($idade >= 16) {
                echo "Medicamento permitido";
            } else {
                echo "Proibido o uso de medicamento";
            }
        ?>
    </body>
</html>
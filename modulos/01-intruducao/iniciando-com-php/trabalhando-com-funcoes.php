<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
                       
        function Tabuada(){
            echo "<b> Tabuada do 5: </b><br>";
            for ($x = 1; $x <= 10; $x++):
                echo "5 x {$x} = " . 5 * $x . "<br>";
            endfor;
        }
        
        echo Tabuada();
        echo '<hr>';
        
        function minhaTabuada($numero){
            echo "<b> Tabuada do {$numero}: </b><br>";
            for ($x = 1; $x <= 10; $x++):
                echo "{$numero} x {$x} = " . $numero * $x . "<br>";
            endfor;
        }
        
        echo minhaTabuada(4);
        echo minhaTabuada(5);
        echo minhaTabuada(6);
        echo minhaTabuada(7);
        ?>
        
    </body>
</html>

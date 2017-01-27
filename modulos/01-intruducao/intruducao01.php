<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (phpversion() >= 5.4): 
            echo phpversion(). " Ola mundo, podemos programar.";
        else:
            echo phpversion(). "Preciso me atualizar";
        endif;
        
        echo "<hr>";
        
//        echo '<pre>';
//        print_r(ini_get_all());
//        echo '</pre>';
        
        echo ini_get('date.timezone');
        ?>
    </body>
</html>

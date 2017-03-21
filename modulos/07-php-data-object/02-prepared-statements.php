<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 20/03/17
 * Time: 22:47
 */
    require ('./_app/Config.inc.php');
    
    $PDO = new Conn;
    $nome = 'Firefox';
    $views = '125';

    try{
        $QRCreate = "INSERT INTO wsphp.ws_siteviews_agent (agent_name, agent_views) VALUES (?,?)";
        $Create = $PDO->getConn()->prepare($QRCreate);
        
//        $Create->bindValue(1, 'IE', PDO::PARAM_STR);
//        $Create->bindValue(2, '8', PDO::PARAM_INT);
        
        $Create->bindParam(1, $nome, PDO::PARAM_STR);
        $Create->bindParam(2, $views, PDO::PARAM_INT);
        
//        $Create->execute();
        
        if ($Create->rowCount()):
            echo "{$PDO->getConn()->lastInsertId()} - Cadastro com Sucesso!!!";
        endif;
        
        $QrSelect = "SELECT * FROM wsphp.ws_siteviews_agent WHERE agent_views >= :visitas";
        $Select = $PDO->getConn()->prepare($QrSelect);
        
        $Select->bindValue(':visitas','7');
        $Select->execute();
        
        if ($Select->rowCount() >= 1):
            echo "Pesquisa retornou {$Select->rowCount()} resultados(s).<hr>";
            $resultado = $Select->fetchAll(PDO::FETCH_ASSOC);
            var_dump($resultado);
        else:
            echo "Nada Ainda.";
        endif;
        
        
    }catch(PDOException $e){
        PHPErro($e->getCode(), $e->getMessage, $e->getFile(),$e->getLine());
    }
    
?>
</body>
</html>
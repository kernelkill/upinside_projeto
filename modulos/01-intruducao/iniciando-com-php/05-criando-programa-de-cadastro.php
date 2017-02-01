
<?php

header('Content-Type: text/html; charset=utf-8');

function EmailValidate($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)):
        return true;
    else:
        return false;
    endif;
}

$nome = "Joabe Kachorroski";
$email = "joao@gmail.com";

if (empty($nome) || empty($email)):
    echo "Ops: Informe seu nome e email";
elseif (!EmailValidate($email)):
    echo "Preencha seu email!!";
else:
    $Users = [
        'cursos@gmail.com',
        'joabe@gmail.com'
    ];
    if (in_array($email, $Users)):
        echo "Ops, Email ja esta cadastrado, deseja se logar? <a href='#'>Sim</a>";
    else:
        echo"Cadastrado com sucesso";

    endif;

endif;
?>
<?php

    session_start();

    $_SESSION['x'] = 'oi, sou um valor de sessão';
    print_r($_SESSION);
    echo '<hr />';

    //variavel que verifica se a autenticacao foi realizada
    $usuario_autenticado = false;    

    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'password' => 'abcd'),
        array('email' => 'user@teste.com.br', 'password' => '123'),

    );
    
    /*

    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';

    */

    foreach($usuarios_app as $user) {
        if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo 'usuario autenticado';
    } else {
        header ('location: index.php? login=erro');
    }

    /*
    print_r($_GET);

    echo $_GET['username'];
    echo'<br />';
    echo $_GET['password'];
    */
    /*
    print_r($_POST);

    echo $_POST['username'];
    echo'<br />';
    echo $_POST['password'];
    */
    
?>
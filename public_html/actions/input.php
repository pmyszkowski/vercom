<?php

$users = array();

if( ( !empty($_POST["imie"]) && !empty($_POST["test"]) ) ) {

    $users[] = array(
        'imie' => $_POST["imie"],
        'test' => $_POST["test"],
    );
}

if( !empty($_POST['json']) ) {

    $decoded = json_decode($_POST['json']);

    foreach ($decoded as $user) {

        if( ( !empty($user->imie) && !empty($user->test) ) ) {

            $users[] = array(
                'imie' => $user->imie,
                'test' => $user->test,
            );
        }
    }
}

if( count($users) ) {

    require('../../protected/views/_list.php');
}
else {

    require('../../protected/views/_form.php');
}


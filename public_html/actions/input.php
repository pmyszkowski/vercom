<?php

require_once('../../protected/db/DbConnection.php');

$users = getUsers();

if( count($users) ) {

    $db = new DbConnection();
    $db->insertUsers($users);

    require('../../protected/views/_list.php');
}
else {

    require('../../protected/views/_form.php');
}

function getUsers() : array
{
    $users = array();

    if( ( !empty($_POST["imie"]) && !empty($_POST["test"]) ) ) {

        $users[] = array(
            'imie' => $_POST["imie"],
            'test' => $_POST["test"],
        );
    }

    if( !empty($_POST['json']) ) {

        $decoded = json_decode($_POST['json']);

        if( is_array($decoded) ) {

            foreach ($decoded as $user) {

                if( ( !empty($user->imie) && !empty($user->test) ) ) {

                    $users[] = array(
                        'imie' => $user->imie,
                        'test' => $user->test,
                    );
                }
            }
        }
    }

    return $users;
}



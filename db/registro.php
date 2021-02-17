<?php
include_once "datos.class.php";
    try {
        $res = DB::execute_sql('INSERT INTO user values(?,?)', array($_POST['username'], $_POST['password']));

        if ($res && $res->rowCount() > 0) {
            echo "Registro completado, checkear la base de datos";
        }

        $res->setFetchMode(PDO::FETCH_NAMED);

        $activity = $res->fetch();
    } catch(\Throwable $th){}
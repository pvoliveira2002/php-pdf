<?php

//credendicais do acesso ao BD

define('HOST','localhost');

define('USER','Jamal');

define('PASS','2Pc@25091998');

define('DBNAME','bd_poo');



spl_autoload_register(function ($Class){

    $dirName = array(

        'classes'

    );

    foreach ($dirName as $diretorios) {

        if (file_exists("{$diretorios}/{$Class}.php")):

            require("{$diretorios}/{$Class}.php");        

        endif;

    }

    

});

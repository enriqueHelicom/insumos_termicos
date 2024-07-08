<?php

use lib\route;

try{

    require '../config/config.php';
    require PATH_ROOT . 'autoload.php';


    require PATH_ROOT . 'routes/routes.php';

    Route::dispatch();

}catch(Exception $e){
    echo $e->getMessage();
}



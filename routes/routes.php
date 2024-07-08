<?php
use lib\route;

use app\controllers\homeController;

Route::get('/',[homeController::class, 'index']);
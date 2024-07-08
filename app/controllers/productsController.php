<?php
namespace app\controllers;

use app\models\ProductModel;

class ProductsController extends Controller{

  private $model;

  public function __construct() {
    $this -> model = new ProductModel();
  }

  public function productos(){

  }
}
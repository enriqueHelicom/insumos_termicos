<?php

namespace app\models;

use lib\Database;

class ProductModel{
  private $db;

  public function __construct() {
    $this-> db = new Database();
  }
}
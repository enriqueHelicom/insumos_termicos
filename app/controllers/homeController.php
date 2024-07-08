<?php
namespace app\controllers;

class homeController extends Controller{
  public function index(){
      return $this -> views('template');
  }
}
<?php

require('model.php');
require('indexView.php');

class Controller {

    private $model;



    public function __construct(Model $model) {

        $this->model = $model;

    }

}


$model = new Model();


$controller = new Controller($model);

$view = new View($model);

echo $view->output();
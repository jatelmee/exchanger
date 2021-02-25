<?php

namespace application\controllers;

use application\core\Controller;

class ApplicationController extends Controller {

	public function calcAction(){
        $vars = [
            'tariffs' => $this->tariffs,
        ];
        $this->view->render('Калькулятор', $vars);
    }

}
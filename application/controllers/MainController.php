<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

	public function indexAction() {
		$vars = [
			'tariffs' => $this->tariffs,
		];
		$this->view->render('Главная страница', $vars);
	}
	public function calcAction(){
        $vars = [
            'tariffs' => $this->tariffs,
        ];
        $this->view->render('Калькулятор', $vars);
    }

}
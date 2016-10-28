<?php

namespace Config;

class AppRoutesProvider {

	public function register($app) {

		// Web
		$app->get('/', '\Controllers\Web\HomeController:home')->setName('home');
		$app->get('/students', '\Controllers\Web\StudentsController:studentList')->setName('students');

		// API
		$app->get('/api', '\Controllers\API\StudentsController:list');

	}

}
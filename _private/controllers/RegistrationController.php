<?php

namespace Website\Controllers;

/**
 * Class RegistrationController
 *
 * Deze handelt het registreren van gebruikers af
 *
 */
class RegistrationController {

	public function registrationForm() {

		$template_engine = get_template_engine();
		echo $template_engine->render('register_form');

	}

	public function handelRegistratieForm(){

		//Hier word de form afgehandeld
		echo "Form komt aan!";
		
	}
}
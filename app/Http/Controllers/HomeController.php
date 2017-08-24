<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function addNumber($number = 0, $othernumber = 0)
    {
		return $number + $othernumber;
	}

    public function incrementNumber($number)
    {
    	$increment = $number + 1;
		$data = array("increment" => $increment);
		return view('increment', $data);
    }


	public function rollDice($guess)
	{
		$random = rand(1, 6);
		if ($random == $guess) {
			$response = "You guessed it!".PHP_EOL;
		} else {
			$response = "Try again!".PHP_EOL;
		}
		$data = array('random' => $random, 'guess' => $guess, 'response' => $response);
		return view('roll-dice', $data);
	}

    public function showWelcome()
    {
        return view('welcome');
    }

    public function uppercase($string)
    {
	    $uppercase = strtoupper($string);
		$data = array("uppercase" => $uppercase, "string" => $string);
		return view('uppercase', $data);
    }

}
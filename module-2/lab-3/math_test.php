<?php
	$max_value = "10";
	$operator = "+";
	$first_operand = $second_operand = $user_answer = "";
	$result = "???";

	if (isset($_POST['max_value'])) {
		$operator = $_COOKIE['operator'] ?? $operator;

		// delete operands from cookies
		setcookie('first_operand', '', time() - 1);
		setcookie('second_operand', '', time() - 1);

		$max_value = $_POST['max_value'];

		saveToCookie('max_value', $max_value);
	}

	if (isset($_POST['operator'])) {
		$operator = $_POST['operator'];

		saveToCookie('operator', $operator);
	}

	if (isset($_POST['randomize_operands'])) {
		$operator = $_COOKIE['operator'] ?? saveToCookie('operator', $operator);

		$max_value = $_COOKIE['max_value'] ?? saveToCookie('max_value', $max_value);

		$first_operand = rand(0, $max_value - 1);
		$second_operand = rand(0, $max_value - 1);

		// replace operands if second operand greater than first
		if ($operator === '-' and $first_operand < $second_operand) {
			$temp = $first_operand;
			$first_operand = $second_operand;
			$second_operand = $temp;
		}

		saveToCookie('first_operand', $first_operand);
		saveToCookie('second_operand', $second_operand);
	}

	if (isset($_POST['num'])) {
		$first_operand = $_COOKIE['first_operand'] ?? '';
		$second_operand = $_COOKIE['second_operand'] ?? '';
		$operator = $_COOKIE['operator'] ?? $operator;

		if (strlen($_POST['user_answer']) < 4) {
			$user_answer = $_POST['user_answer'].$_POST['num'];
		}

	} else {
		$user_answer = '';
	}

	if (isset($_POST['check_answer'])) {
		if (!isset($_COOKIE['first_operand']) or !isset($_COOKIE['second_operand']) or !isset($_COOKIE['operator']) or !isset($_POST['user_answer'])) {
			return;
		}

		$first_operand = $_COOKIE['first_operand'];
		$second_operand = $_COOKIE['second_operand'];
		$operator = $_COOKIE['operator'];
		$user_answer = intval($_POST['user_answer']);
		$answer = 0;

		switch ($operator) {
			case '+':
				$answer = $first_operand + $second_operand;
				break;

			case '-':
				$answer = $first_operand - $second_operand;
				break;

			case '*':
				$answer = $first_operand * $second_operand;
				break;
		}

		$result = $user_answer === $answer ? 'Вірно!' : 'Спробуй ще!';
	}

	function saveToCookie($name, $value) {
		setcookie($name, $value, time() + 1 * 60);
		return $value;
	}
	
?>
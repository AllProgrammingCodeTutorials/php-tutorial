<?php 
/**
 * 
 */
class Game
{
	const BR = "<br/>"; // using constant for line break

	var $price;
	var $name;
	public function print_game()
	{
		echo $this->price.self::BR;
		echo $this->name.self::BR;

	}
}

$game = new Game; // $game is the object type of Game class
$game->price = 15;
$game->name = "Super Mario";

$game->print_game();
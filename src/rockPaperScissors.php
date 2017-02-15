<?php

  class RockPaperScissors
  {
    private $input1;
    private $input2;

    function __construct() {
        $this->input1 = $input1;
        $this->input2 = $input2;
    }

    function get($property)
        {
            if (property_exists($this, $property)) {
                return $this->$property;
            } else {
                return "That property does not exist.";
            }
        }
        function set($property, $value)
        {
            if (property_exists($this, $property)) {
                $this[$property] = $value;
            } else {
                return "That property does not exist.";
            }
        }

        function save()
        {
            array_push($_SESSION['list_of_games'], $this);
        }
        static function getAll()
        {
            return $_SESSION['list_of_games'];
        }

    function play_game($input1, $input2) {
      while (($input1 && $input2) > 0) {
        if ($input1 == $input2) {
          return "Draw.";
        }
        elseif (($input1 == "scissors" && $input2 == "rock") || ($input1 == "rock" && $input2 == "scissors")) {
            return "Rock wins!";
        }
        elseif (($input1 == "scissors") && ($input2 == "paper") || ($input1 == "paper") && ($input2 == "scissors")) {
            return "Scissors wins!";
        }
        elseif (($input1 == "paper") && ($input2 == "rock") || ($input1 == "rock") && ($input2 == "paper")) {
            return "Paper wins, weirdly.";
        }
      }
    }
  }


 ?>

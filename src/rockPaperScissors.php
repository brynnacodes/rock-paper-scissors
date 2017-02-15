<?php

  class RockPaperScissors
  {
        function play_game($input1, $input2) {
          while (($input1 && $input2) > 0) {
            if ($input1 == $input2) {
              return "Draw.";
            }
            elseif (($input1 == "Brynna" && $input2 == "Katie") || ($input1 == "Katie" && $input2 == "Brynna")) {
                $this->winner = "Katie wins, Brynna LOSES!";
                return $this->winner;
            }
            elseif (($input1 == "Brynna") && ($input2 == "Keith") || ($input1 == "Keith") && ($input2 == "Brynna")) {
                $this->winner = "Brynna wins, obviously!";
                return $this->winner;
            }
            elseif (($input1 == "Keith") && ($input2 == "Katie") || ($input1 == "Katie") && ($input2 == "Keith")) {
                $this->winner =  "Keith wins, weirdly.";
                return $this->winner;
            }
          }
        }
  }


 ?>

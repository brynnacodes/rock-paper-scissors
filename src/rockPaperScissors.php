<!--

  // class RockPaperScissors
  // {
  //       function play_game($input1, $input2) {
  //         while (($input1 && $input2) > 0) {
  //           if ($input1 == $input2) {
  //             return "Draw.";
  //           }
  //           elseif (($input1 == "Brynna" && $input2 == "Katie") || ($input1 == "Katie" && $input2 == "Brynna")) {
  //               $this->winner = "Katie wins, Brynna LOSES!";
  //               return $this->winner;
  //           }
  //           elseif (($input1 == "Brynna") && ($input2 == "Keith") || ($input1 == "Keith") && ($input2 == "Brynna")) {
  //               $this->winner = "Brynna wins, obviously!";
  //               return $this->winner;
  //           }
  //           elseif (($input1 == "Keith") && ($input2 == "Katie") || ($input1 == "Katie") && ($input2 == "Keith")) {
  //               $this->winner =  "Keith wins, weirdly.";
  //               return $this->winner;
  //           }
  //         }
  //       }
  // } -->


 <?php

    class RockPaperScissors
    {
        public $possible_wins = array(
            ['p1'=> 'keith', 'p2' =>'brynna', 'win' => 'keith wins'],
            ['p1' => 'keith','p2' => 'sean', 'win' => 'sean wins'],
            ['p1' => 'keith', 'p2' => 'katie', 'win' => 'katie wins'],
            ['p1' => 'keith', 'p2' => 'jennifer','win' => 'keith wins'],
            ['p1' => 'keith', 'p2' => 'clayton', 'win' => 'draw'],

            ['p1' => 'katie', 'p2' => 'brynna', 'win' => 'brynna wins'],
            ['p1' => 'katie', 'p2' => 'keith', 'win' => 'katie wins'],
            ['p1' => 'katie', 'p2' => 'clayton', 'win' => 'clayton wins'],
            ['p1' => 'katie', 'p2' => 'jennifer', 'win' => 'jennifer wins'],
            ['p1' => 'katie', 'p2' => 'sean', 'win' => 'katie wins'],

            ['p1' => 'sean', 'p2' => 'katie', 'win' => 'katie wins'],
            ['p1' => 'sean', 'p2' => 'clayton', 'win'=> 'clayton wins'],
            ['p1'=> 'sean', 'p2'=> 'brynna', 'win'=> 'brynna wins'],
            ['p1'=> 'sean', 'p2'=> 'jennifer', 'win'=> 'jennifer wins'],
            ['p1'=> 'sean', 'p2'=> 'keith', 'win'=> 'sean wins'],

            ['p1'=> 'brynna', 'p2' => 'katie', 'win' => 'brynna wins'],
            ['p1'=> 'brynna', 'p2' => 'keith', 'win' => 'keith wins'],
            ['p1'=> 'brynna', 'p2' => 'clayton', 'win' => 'brynna wins'],
            ['p1'=> 'brynna', 'p2' => 'sean', 'win' => 'brynna wins'],
            ['p1'=> 'brynna', 'p2' => 'jennifer', 'win' => 'jennifer wins'],

            ['p1'=> 'jennifer', 'p2' => 'katie', 'win' => 'jennifer wins'],
            ['p1'=> 'jennifer', 'p2' => 'brynna', 'win' => 'jennifer wins'],
            ['p1'=> 'jennifer', 'p2' => 'clayton', 'win' => 'jennifer wins'],
            ['p1'=> 'jennifer', 'p2' => 'sean', 'win' => 'jennifer wins'],
            ['p1'=> 'jennifer', 'p2' => 'keith', 'win' => 'keith wins'],

            ['p1'=> 'clayton', 'p2' => 'katie', 'win' => 'clayton wins'],
            ['p1'=> 'clayton', 'p2' => 'brynna', 'win' => 'brynna wins'],
            ['p1'=> 'clayton', 'p2' => 'sean', 'win' => 'clayton wins'],
            ['p1'=> 'clayton', 'p2' => 'jennifer', 'win' => 'jennifer wins'],
            ['p1'=> 'clayton', 'p2' => 'keith', 'win' => 'draw']
        );

        function play_game($input1, $input2)
        {
            foreach($this->possible_wins as $play)
            {
            if($play["p1"] == $play["p2"]) {
                return "draw";
            }
            if($play["p1"] && $play["p2"]) {
                    if(($play["p1"] == $input1) && ($play["p2"] == $input2)) {
                        return $play["win"];
                    }
                }
            }
        }
    }




  ?>

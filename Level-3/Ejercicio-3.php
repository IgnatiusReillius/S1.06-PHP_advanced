<?php
    class MagicMethods {
        
        private $queue = array();

        public function __construct(int $number) {
            for($i = 0; $i < $number; $i++) {
                $this->queue[] = $number;
            }
        }

        public function __toString() {
            $phrase = "";
            foreach($this->queue as $item) {
                $phrase .=  "And I would walk five hundred miles\nAnd I would walk five hundred more\n";
            }
            return $phrase;
        }
    }

    $task1 = new MagicMethods(5);
    echo $task1;
?>
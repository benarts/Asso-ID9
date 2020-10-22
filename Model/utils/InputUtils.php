<?php
    class InputUtils
    {
        private $input;

        public function __construct($input)
        {
            $this->input = $input;
        }
        
        function testInput()
        {
            $this->input = trim($this->input);
            $this->input = stripslashes($this->input);
            $this->input = htmlspecialchars($this->input);

            return $this->input;
        }
    }
?>
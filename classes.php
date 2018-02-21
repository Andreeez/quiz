<?php
    include 'data.php';
    class Questions{
        function __construct($question,$answer1,$answerX,$answer2,$correctAnswer){
            $this->question = $question;
            $this->answer1->$answer1;
            $this->answerX->$answerX;
            $this->answer2->$answer2;
            $this->correctAnswer->$correctAnswer;

        }
        public function writeQuestion(){

            echo "<label>$this->question</label>
            <label>$this->answer1<input type='radio' name='check_list[]' id='question1A1' value='$this->answer1'></label>
            <label>$this->answerX<input type='radio' name='check_list[]' id='question1AX' value='$this->answerX'></label>
            <label>$this->answer2<input type='radio' name='check_list[]' id='question1A2' value='$this->answer2'></label><br/><br/>";
        }

        public function getChecked() {
            if(!empty($_GET['check_list'])) {
                foreach($_GET['check_list'] as $check) {
                        echo $check;
                    }
                    }
                }

        public function checkAnswers() {
            echo "$this->correctAnswer";
        //print_r($_GET[$this->answerOne]);
        }
        
 
    }

     
    
        

   

?>

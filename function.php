<?php
            $totalCorrect = 0;
            $answer1 = $_POST['question1-answer'];
            $answer2 = $_POST['question2-answer'];
            $answer3 = $_POST['question3-answer'];
            $answer4 = $_POST['question4-answer'];
            $answer5 = $_POST['question5-answer'];
            $answer6 = $_POST['question6-answer'];
            $answer7 = $_POST['question7-answer'];
            $answer8 = $_POST['question8-answer'];
            $answer9 = $_POST['question9-answer'];
            $answer10 = $_POST['question10-answer'];

            if($answer1 == "X"){$totalCorrect ++;}
            if($answer2 == "1"){$totalCorrect ++;}
            if($answer3 == "2"){$totalCorrect ++;}
            if($answer4 == "1"){$totalCorrect ++;}
            if($answer5 == "2"){$totalCorrect ++;}
            if($answer6 == "1"){$totalCorrect ++;}
            if($answer7 == "1"){$totalCorrect ++;}
            if($answer8 == "2"){$totalCorrect ++;}
            if($answer9 == "2"){$totalCorrect ++;}
            if($answer10 == "X"){$totalCorrect ++;}
            if ($answer11){$totalCorrect ++;}
            echo "<div id='results'>$totalCorrect / 10 Correct</div>";
        ?>
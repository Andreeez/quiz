<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css">
        <?php include 'classes.php'?>
    </head>
    <body>
        <h1>Mello-quiz Vem sjöng Låten?</h1>
        
        
        
        <form method="GET">
        
            <?php
                 
                foreach($question as $key => $value){
                    $question1 = new Questions($value['question'], $value['answer1'], $value['answerX'], $value['answer2'], $value['correctAnswer']);
                    $question1->writeQuestion();

                }

                $question1->getChecked();
                $question1->checkAnswers();
               
            ?>
           
            <button type="submit" name="submit">Resultat</button>

        </form>
        <!-- <?php include 'form.php' ?> -->
        <!-- <?php include 'function.php' ?> -->
        
        
    </body>
</html>
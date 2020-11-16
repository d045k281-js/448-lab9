<?php

            
            $answer1 = $_POST["question-1-answers"];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "He") $totalCorrect++; 
            if ($answer2 == "9")  $totalCorrect++; 
            if ($answer3 == "His theory of relativity")  $totalCorrect++; 
            if ($answer4 == "Pound Sterling") $totalCorrect++; 
            if ($answer5 == "Pack") $totalCorrect++; 
          

            echo "Correct Answer " . $totalCorrect . "/5 Answers<br>";
	    echo "Percentage: " . ($totalCorrect * 20) . "%<br>";
echo "<br>";
echo "Solution:<br>";
echo "Question 1: What is the atomic sign for Helium on the periodic table?<br>";
    echo "You answered: " . $answer1 . "<br>";
    echo "Correct answer: He<br><br>";

    echo "Question 2: How many innings does a baseball game have?<br>";
    echo "You answered: " . $answer2 . "<br>";
    echo "Correct answer: 9<br><br>";

    echo "Question 3: What is Albert Einstein best known for?<br>";
    echo "You answered: " . $answer3 . "<br>";
    echo "Correct answer: His theory of relativity<br><br>";

    echo "Question 4: What is the currency of Scotland??<br>";
    echo "You answered: " . $answer4 . "<br>";
    echo "Correct answer: Pound Sterling<br><br>";

    echo "Question 5: What is the general name for a group of wolves?<br>";
    echo "You answered: " . $answer5 . "<br>";
    echo "Correct answer: Pack<br><br>";

?>

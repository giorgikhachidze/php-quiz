<?php

require_once 'questions.php';

$quiz     = new Quiz();
$questions = $quiz->questions;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $correctAnswers = 0;

    foreach ($_POST['answer'] as $questionIndex => $answerIndex)
    {
        if ($questions[$questionIndex]['correctAnswer'] == $answerIndex)
        {
            $correctAnswers++;

            echo "<p>{$questions[$questionIndex]['title']}</p>";
        }
    }

    echo "<p>სწორი პასუხების რაოდენობა: {$correctAnswers}</p>";
}
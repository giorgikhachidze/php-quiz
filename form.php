<?php
session_start();

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

            echo "<p><b>სწორია</b>: {$questions[$questionIndex]['title']}</p>";
        } else {
            echo "<p><b>არასწორია</b>: {$questions[$questionIndex]['title']}</p>";
        }
    }

    echo "<p>სწორად უპასუხეთ: {$correctAnswers} შეკითხვას</p>";
    echo "<p>შეფასება: {$correctAnswers} ქულა</p>";

    $_SESSION['points'] = $correctAnswers;

}

echo '<a href="/index.php">უკან დაბრუნება</a>';
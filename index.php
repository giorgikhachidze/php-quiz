<?php

require_once 'questions.php';

$quiz     = new Quiz();
$questions = $quiz->questions;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
</head>
<body>
    <h1>PHP ქვიზი</h1>
    <form action="/form.php" method="post">
        <?php foreach ( $questions as $questionIndex => $question) : ?>
            <p>
                <?php echo $question['title']; ?>

                <ul>
                    <?php foreach ( $question['answers'] as $answerIndex => $answer ) : ?>
                    <li>
                        <input type="radio" name="answer[<?=$questionIndex?>]" value="<?=$answerIndex?>">
                        <?php echo $answer; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </p>
        <?php endforeach; ?>

        <button type="submit" name="button">გაგზავნა</button>
    </form>

</body>
</html>

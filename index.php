<?php

require_once 'questions.php';

$quizz     = new Quizz();
$questions = $quizz->questions;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quizz</title>
</head>
<body>

    <form action="" method="post">
        <?php foreach ( $questions as $question) : ?>
            <p>
                <?php echo $question['title']; ?>

                <ul>
                    <?php foreach ( $question['answers'] as $answer ) : ?>
                    <li><?php echo $answer; ?></li>
                    <?php endforeach; ?>
                </ul>
            </p>
        <?php endforeach; ?>
    </form>

</body>
</html>

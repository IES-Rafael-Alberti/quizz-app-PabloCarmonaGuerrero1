<?php
class Quiz
{
    private $questions = array(
        1 => array('correct' => 'b', 'comment' => 'PHP significa "Procesador de hipertexto".'),
        2 => array('correct' => 'c', 'comment' => 'Caracter no es un tipo de dato de PHP.'),
        3 => array('correct' => 'b', 'comment' => 'El resultado es "Hola Mundo".'),
        4 => array('correct' => 'a', 'comment' => 'En PHP, el bucle for se utiliza para ejecutar un bloque un número especificado de veces.'),
        5 => array('correct' => 'd', 'comment' => 'Ninguna de las respuestas era correcta.'),
        6 => array('correct' => 'c', 'comment' => '$_GET se utiliza para recuperar datos de la cadena de consulta URL.'),
        7 => array('correct' => 'b', 'comment' => '__LINE__ es un ejemplo de constante mágica de PHP.'),
        8 => array('correct' => 'b', 'comment' => 'La función include se utiliza para incluir y evaluar un archivo especificado.'),
        9 => array('correct' => 'a', 'comment' => '=== comprueba igualdad y tipo de datos.'),
        10 => array('correct' => 'a', 'comment' => 'new se utiliza para crear un objeto en PHP.')
    );

    public function processAnswers($answers)
    {
        $score = 0;
        $results = array();

        foreach ($answers as $questionNumber => $userAnswer) {
            if (isset($this->questions[$questionNumber])) {
                $correctAnswer = $this->questions[$questionNumber]['correct'];

                if ($userAnswer === $correctAnswer) {
                    $score++;
                }

                $results[$questionNumber] = array(
                    'userAnswer' => $userAnswer,
                    'correctAnswer' => $correctAnswer,
                    'comment' => $this->questions[$questionNumber]['comment']
                );
            }
        }

        return array('score' => $score, 'results' => $results);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quiz = new Quiz();
    $answers = $_POST;

    foreach ($quiz->questions as $questionNumber => $data) {
        if (!isset($answers["q$questionNumber"])) {
            die("Error: Debes responder la pregunta $questionNumber.");
        }
    }

    $results = $quiz->processAnswers($answers);
    $score = $results['score'];
    $resultsData = $results['results'];
} else {
    die("Error: Se esperaba una solicitud POST.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz Results</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <h1>Resultados del Cuestionario PHP</h1>

    <p>Tu puntuación es: <?php echo $score; ?>/10</p>

    <h2>Detalles de las respuestas:</h2>
    <ul>
        <?php foreach ($resultsData as $questionNumber => $result): ?>
            <li>
                <strong>Pregunta <?php echo $questionNumber; ?>:</strong><br>
                Tu respuesta: <?php echo $result['userAnswer']; ?><br>
                Respuesta correcta: <?php echo $result['correctAnswer']; ?><br>
                Comentario: <?php echo $result['comment']; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="index.html">Repetir el cuestionario</a>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="quizz.css">
</head>
<body>
    <form method="post" action="process.php">
        <h1>PHP Quiz</h1>

        <div class="question">
            <p>1.¿Qué significa PHP?</p>
            <label><input type="radio" name="q1" value="a"> a) Página de inicio personal</label>
            <label><input type="radio" name="q1" value="b"> b) Procesador de hipertexto</label>
            <label><input type="radio" name="q1" value="c"> c) Procesador de hipervínculos privados</label>
            <label><input type="radio" name="q1" value="d"> d) Página de enlace PHP</label>
        </div>

        <div class="question">
            <p>2. ¿Cuál de los siguientes NO es un tipo de dato de PHP?</p>
            <label><input type="radio" name="q2" value="a"> a) Entero</label>
            <label><input type="radio" name="q2" value="b"> b) Booleano</label>
            <label><input type="radio" name="q2" value="c"> c) Caracter</label>
            <label><input type="radio" name="q2" value="c"> d) Flotante</label>
        </div>

        <div class="question">
            <p>3. ¿Cuál es el resultado de echo "Hola" . " " . "Mundo";?</p>
            <label><input type="radio" name="q2" value="a"> a) HelloWorld</label>
            <label><input type="radio" name="q2" value="b"> b) Hola Mundo</label>
            <label><input type="radio" name="q2" value="c"> c) HelloWorld</label>
            <label><input type="radio" name="q2" value="c"> d) "Hola Mundo"</label>
        </div>

        <div class="question">
            <p>4. En PHP, ¿qué bucle se utiliza para ejecutar un bloque de código un número especificado de veces?</p>
            <label><input type="radio" name="q2" value="a"> a) Bucle for</label>
            <label><input type="radio" name="q2" value="b"> b) Bucle while</label>
            <label><input type="radio" name="q2" value="c"> c) Bucle do...while</label>
            <label><input type="radio" name="q2" value="c"> d) Bucle foreach</label>
        </div>

        <div class="question">
            <p>5. ¿Qué función de PHP se utiliza para abrir un archivo para escritura?</p>
            <label><input type="radio" name="q2" value="a"> a) fopen</label>
            <label><input type="radio" name="q2" value="b"> b) file_open</label>
            <label><input type="radio" name="q2" value="c"> c) open_file</label>
            <label><input type="radio" name="q2" value="c"> d) Ninguna de las anteriores</label>
        </div>

        <div class="question">
            <p>6. ¿Cuál es el propósito de la superglobal $_GET en PHP?</p>
            <label><input type="radio" name="q2" value="a"> a) Recuperar datos de un formulario con el método POST</label>
            <label><input type="radio" name="q2" value="b"> b) Almacenar variables de sesión</label>
            <label><input type="radio" name="q2" value="c"> c) Recuperar datos de la cadena de consulta URL</label>
            <label><input type="radio" name="q2" value="c"> d) Definir constantes globales</label>
        </div>

        <div class="question">
            <p>7. ¿Cuál de los siguientes es un ejemplo de constante mágica de PHP?</p>
            <label><input type="radio" name="q2" value="a"> a) $this</label>
            <label><input type="radio" name="q2" value="b"> b) LINE </label>
            <label><input type="radio" name="q2" value="c"> c) $var</label>
            <label><input type="radio" name="q2" value="c"> d) functionName()</label>
        </div>

        <div class="question">
            <p>8. ¿Qué hace la función include en PHP?</p>
            <label><input type="radio" name="q2" value="a"> a) Ejecuta un bloque de código solo si una condición es verdadera</label>
            <label><input type="radio" name="q2" value="b"> b) Incluye y evalúa un archivo especificado</label>
            <label><input type="radio" name="q2" value="c"> c) Define una nueva función</label>
            <label><input type="radio" name="q2" value="c"> d) Genera un número aleatorio</label>
        </div>

        <div class="question">
            <p>9. ¿En PHP, qué comprueba el operador ===?</p>
            <label><input type="radio" name="q2" value="a"> a) Igualdad </label>
            <label><input type="radio" name="q2" value="b"> b) Asignación</label>
            <label><input type="radio" name="q2" value="c"> c) Desigualdad</label>
            <label><input type="radio" name="q2" value="c"> d) Comparación</label>
        </div>

        <div class="question">
            <p>10. ¿Cuál de los siguientes se utiliza para crear un objeto en PHP?</p>
            <label><input type="radio" name="q2" value="a"> a) new </label>
            <label><input type="radio" name="q2" value="b"> b) objeto</label>
            <label><input type="radio" name="q2" value="c"> c) crear</label>
            <label><input type="radio" name="q2" value="c"> d) instancia</label>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
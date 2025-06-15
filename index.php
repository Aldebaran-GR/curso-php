<!--Creacion de variables en PHP-->
<?php
    //true, 1, "Cadena"
    //Lenguaje de tipado dinamico, debil y gradual
    $name = "Zuriel";
    $isDev = true;
    $age = 20; 

    /*    var_dump() es una funcion que imprime el tipo de dato y el valor de la variable
    */
    //var_dump($name, $isDev, $age);
    //Retorna el tipo de dato de la variable
    //echo gettype($name)
    
    //Declaracion de constantes globales
    define("PI", 3.1416);
    //Constantes locales
    const NAME = "Zuriel";

    //Condicionales
    if ($age >= 18) {
        echo "<h2> Eres mayor de edad </h2>";
    } else {
        echo "<h2> Eres menor de edad </h2>";
    }

    //Ternaria
    $isOld = ($age >= 18) ? "Eres un adulto otra vez" : "No eres un adulto aun";
    echo "<h2> $isOld </h2>";

    //Match en php
    $output = match (true) {
        $age < 18               => "Eres un niño",
        $age >= 18 && $age < 60 => "Eres un adulto",
        $age >= 60              => "Eres un adulto mayor",
        default                 => "Edad no válida"
    };

    //Arrays en php
    $isArray = ["PHP", "JavaScript", "Python", "Mexicano", 1];
    $isArray[3] = "C++";
    $isArray[] = "Kotlin";

    $person = [
        "name" => "Zuriel",
        "age" => 20,
        "isDev" => true,
        "languages" => ["PHP", "JavaScript", "Python"]
    ];

    $person["name"] = "Zuriel Hernandez";
    $person["languages"][] = "C++";
?>

<h3>
    El mejor lenguaje de programacion es <?= $isArray[5] ?>
</h3>

<!-- Iteracion de un array -->
<ul>
    <?php foreach ($isArray as $key => $language): ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<!-- Forma alternativa de usar Condicionales -->
<?php if ($age < 18): ?>
    <h2> Eres un niño </h2>
<?php elseif ($age >= 18): ?>
    <h2> Eres un adulto </h2>
<?php elseif( $age >= 60): ?>
    <h2> Eres un adulto mayor </h2>
<?php endif; ?>

<h1>
<!--?//php echo "Mi primera app en Php";?>-->
    <?= "Mi nombre es " . NAME . " y tengo " . $age; ?>
</h1>

<a href="./miniProyecto.php">Ir al mini proyecto</a>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>

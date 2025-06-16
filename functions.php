<?php 
declare(strict_types=1); // <- a nivel de archivo y arriba de todo

function render_template (string $template, array $data = []): void
{
    extract($data); // Extrae las variables del array $data
    require "templates/$template.php"; // Carga el template 
}



?>
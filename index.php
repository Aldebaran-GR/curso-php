<?php
//require 'functions.php'; //Trae el código de functions.php
require_once 'consts.php'; //Trae el código de consts.php
require_once 'functions.php'; //Trae el código de functions.php una sola vez
//include 'functions.php'; //Si no encuentra el archivo, no se detiene la ejecución
require_once 'classes/NextMovie.php'; //Trae el código de NextMovie.php una sola vez

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();

?>

<?php render_template('head', $next_movie_data); ?>
<?php //render_template('head', ['head' => $data["title"]]); ?>
<?php render_template('main', array_merge($next_movie_data, ['until_message' => $next_movie->get_until_message()])); ?>
<?php render_template('styles'); ?>
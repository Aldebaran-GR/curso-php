<?php
declare(strict_types=1); //Habilita el tipado estricto
class SuperHero {
    //Propiedades y métodos de la clase SuperHero
    //public $name;
    //public $powers;
    //public $planet;

    //Constructor usando properties promotion
    public function __construct(
        private string $name, 
        public array $powers, 
        public string $planet) {
        //$this->name = $name;
        //$this->powers = $powers;
        //$this->planet = $planet;
    }

    public function show_all(): array {
        return get_object_vars($this); //Devuelve todas las propiedades de la clase
    }

    public function attack() {
        return "¡$this->name ataca con sus poderes!";
    }

    public function description() {
        $powers = implode(", ", $this->powers);
        return "$this->name es un superhéroe de $this->planet con los poderes:  $powers.";
    }

    public static function randomHero(): SuperHero  //Método estático que devuelve una instancia de la clase SuperHero 
    {
        $names = ["Superman", "Batman", "Wonder", "Flash", "Aquaman"];
        $powers = [
            ["super fuerza", "vuelo", "visión de rayos X"],
            ["habilidades de detective", "arte marcial", "tecnología avanzada"],
            ["fuerza sobrehumana", "invisibilidad", "telepatía"],
            ["velocidad sobrehumana", "viaje en el tiempo", "agilidad"],
            ["control del agua", "comunicación con animales marinos", "super fuerza"]
        ];
        $planets = ["Krypton", "Gotham", "Themyscira", "Central City", "Atlantis"];

        $name = $names[array_rand($names)]; //Te da la llave aleatoria de $names, no el valor
        $powersArray = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        return new self($name, $powersArray, $planet); //Devuelve una instancia de la clase SuperHero
    }
}


$hero = SuperHero::randomHero(); //Llama al método estático para crear un superhéroe aleatorio

echo $hero->description();

//$hero = new SuperHero("Superman", ["super fuerza", "vuelo", "visión de //rayos X"], "Krypton");

//echo $hero->description();
//echo "<br><br>";
//var_dump($hero->show_all()); // Muestra todas las propiedades de la clase
?>
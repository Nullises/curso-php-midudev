<?php 
declare(strict_types=1); 
class Superhero {

    // Promoted Properties
    function __construct(
        readonly public string $name,
        readonly public string $planet,
        readonly public array $powers,
        readonly private string $propiedadInvisible
    )
    {
        
    }

    public function show_all(){
        var_dump(get_object_vars($this));
    }
    
    /*
    // Propiedades y métodos
    public $name;
    public $powers;
    public $planet;

    // Constructor
    function __construct($name,  $planet, $powers) {
        $this->name = $name;
        $this->powers = $powers;
        $this->planet = $planet;
    }
    */

    
    public function attack(){
        echo $this->name . " ataca"; 
    }

    public function fly(){
        echo $this->name . " vuela";
    }

    public function description(){
        $powers = implode(", ", $this->powers);
        echo $this->name . " es un superhéroe del planeta " . $this->planet . " y tiene " . $powers;
    }

    public static function show_random(){
        $names = ['Batman', 'Hulk', 'El Chapulin Colorado'];
        $randomName = $names[array_rand($names)];
         $planet = ['Tierra', 'Kripton', 'Worti'];
        $randomPlanet = $planet[array_rand($planet)];
         $powers = ['Volar', 'Caminar', 'Hacerse miniatura'];
         $secret = ['Invisible', 'Regeneración', 'Hacerse el menso'];
        $randomSecret = $secret[array_rand($secret)];
        return new self($randomName, $randomPlanet, $powers, $randomSecret);
    }

    public function mostrarPropiedadInvisible(){
        echo $this->propiedadInvisible;
    }
}

?>
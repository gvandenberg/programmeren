<?php

class Fiets {
    public $versnellingen;

    function bellen(){}
    function fietsen(){}
}

class Personenauto {
    private $kenteken;
    public $kleur;
    protected $laadcapaciteit;
    public $aantal_deuren;
    public $aantal_versnellingen;

    function rijden(){}
    function claxxoneren(){}
}

class Vrachtwagen {
    private $kenteken;
    protected $laadcapaciteit;
    public $aantal_versnellingen;
    public $lengte;

    function rijden(){
        function pieptbijachteruitrijden(){}
    }
    
    function claxxoneren(){}
}

class Boot {
    protected $laadcapaciteit;
    public $snelheid;
    private $registratienummer;

    function varen(){}
}

class Vliegtuig {
    private $registratienummer;
    protected $laadcapaciteit;

    function vliegen(){}
}

?>
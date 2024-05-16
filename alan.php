<?php

abstract class Sekil{
    public $kenar1;
    public $kenar2;
    public $kenar3;
    public $yukseklik;
    public $cevre;
    public $alan;
    public function alanGoster(){
        echo "Alan:" . $this->alan . "<br>";
        echo "Cevre:" . $this->cevre . "<br>" . "<br>";
    }
}

class Kare extends Sekil{
    public function __construct($kenar1=1,$kenar2){
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->alan = $this->kenar1*$this->kenar2;
        $this->cevre = $this->kenar1*4;
    }
}

class Dikdortgen extends Sekil{
    public function __construct($kenar1=1,$kenar2=1){
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->alan = $this->kenar1*$this->kenar2;
        $this->cevre = 2*($this->kenar1+$this->kenar2);
    }
}

class Ucgen extends Sekil{
    public function __construct($kenar1=1,$kenar2=1,$kenar3=1,$yukseklik=1){
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->kenar3 = $kenar3;
        $this->yukseklik = $yukseklik;
        $this->alan = ($this->kenar3*$this->yukseklik)/2;
        $this->cevre = $this->kenar1+$this->kenar2+$this->kenar3;
    }
}

$Kare = new Kare(10,10);
$Kare->alanGoster();
$Dikdortgen = new Dikdortgen(10,20);
$Dikdortgen->alanGoster();
$Ucgen = new Ucgen(5,5,5,5);
$Ucgen->alanGoster();

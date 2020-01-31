<?php


namespace App;


class Cadavre
{

    private $verbes;
    private $cods;
    public $phrase;

    public function __construct() {
        $this->verbes = config('phrases.verbes');
        $this->cods = config('phrases.cods');
        $this->phrase = $this->setPhrase();
    }

    private function setPhrase() {
        return $this->verbes[rand(0, sizeof($this->verbes) - 1)] . ' ' . $this->cods[rand(0, sizeof($this->cods) - 1)];
    }

    public function getPhrase() {
        return $this->phrase;
    }

}

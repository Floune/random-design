<?php


namespace App;


class Cadavre
{

    private $phrase1;
    private $phrase2;
    public $phrase3;
    public $phrase;

    public function __construct() {
        $this->phrase = $this->setPhrase();
    }

    private function setPhrase() {
        $part1 = Phrase::find(random_int(1, Phrase::all()->count()))->text;
        $part2 = Phrasem::find(random_int(1, Phrasem::all()->count()))->text;
        $part3 = Phrasef::find(random_int(1, Phrasef::all()->count()))->text;
        return [$part1, $part2, $part3];
    }

    public function getPhrase() {
        return json_encode($this->phrase);
    }

}

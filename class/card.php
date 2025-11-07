<?php

class card {
    private $name;
    private $recto;
    private $verso;
    private int $level;
    private bool $revealed = false;
    private bool $found = false;

    public function __construct($name, $recto, $verso, $level) {
        $this->name = $name;
        $this->recto = $recto;
        $this->verso = $verso;
        $this->level = $level;
    }

    public function getName() {
        return $this->name;
    }

    public function getRecto() {
        return $this->recto;
    }

    public function getVerso() {
        return $this->verso;
    }

    public function getLevel() {
        return $this->level;
    }

    public function reveal() {
        $this->revealed = true;
    }

    public function found() {
        $this->found = true;
    }   
}

$cards_level1=[
    new card ('Abyss', '../img/level1/card_abyss.png', '../img/carto_recto.png', 1),
    new card ('Ascent', '../img/level1/card_ascent.png', '../img/carto_recto.png', 1),
    new card ('Bind', '../img/level1/card_bind.png', '../img/carto_recto.png', 1),
    new card ('Breeze', '../img/level1/card_breeze.png', '../img/carto_recto.png', 1),
    new card ('Fracture', '../img/level1/card_fracture.png', '../img/carto_recto.png', 1),
    new card ('Haven', '../img/level1/card_haven.png', '../img/carto_recto.png', 1),
    new card ('Icebox', '../img/level1/card_icebox.png', '../img/carto_recto.png', 1),
    new card ('Lotus', '../img/level1/card_lotus.png', '../img/carto_recto.png', 1),
    new card ('Pearl', '../img/level1/card_pearl.png', '../img/carto_recto.png', 1),
    new card ('Split', '../img/level1/card_split.png', '../img/carto_recto.png', 1),
    new card ('Sunset', '../img/level1/card_sunset.png', '../img/carto_recto.png', 1),
];

$cards_level2=[];

$cards_level3=[];
  
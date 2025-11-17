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
    new card ('Abyss', './assets/img/level1/card_abyss.png', './assets/img/carto_recto.png', 1),
    new card ('Ascent', './assets/img/level1/card_ascent.png', './assets/img/carto_recto.png', 1),
    new card ('Bind', './assets/img/level1/card_bind.png', './assets/img/carto_recto.png', 1),
    new card ('Breeze', './assets/img/level1/card_breeze.png', './assets/img/carto_recto.png', 1),
    new card ('Fracture', './assets/img/level1/card_fracture.png', './assets/img/carto_recto.png', 1),
    new card ('Haven', './assets/img/level1/card_haven.png', './assets/img/carto_recto.png', 1),
    new card ('Icebox', './assets/img/level1/card_icebox.png', './assets/img/carto_recto.png', 1),
    new card ('Lotus', './assets/img/level1/card_lotus.png', './assets/img/carto_recto.png', 1),
    new card ('Pearl', './assets/img/level1/card_pearl.png', './assets/img/carto_recto.png', 1),
    new card ('Split', './assets/img/level1/card_split.png', './assets/img/carto_recto.png', 1),
    new card ('Sunset', './assets/img/level1/card_sunset.png', './assets/img/carto_recto.png', 1),
];

$cards_level2=[
    new card ('Ares', './assets/img/level2/card_ares.png', './assets/img/carto_recto.png', 2),
    new card ('Bucky', './assets/img/level2/card_bucky.png', './assets/img/carto_recto.png', 2),
    new card ('Bulldog', './assets/img/level2/card_bulldog.png', './assets/img/carto_recto.png', 2),
    new card ('Classic', './assets/img/level2/card_classic.png', './assets/img/carto_recto.png', 2),
    new card ('Frenzy', './assets/img/level2/card_frenzy.png', './assets/img/carto_recto.png', 2),
    new card ('Ghost', './assets/img/level2/card_ghost.png', './assets/img/carto_recto.png', 2),
    new card ('Guardian', './assets/img/level2/card_guardian.png', './assets/img/carto_recto.png', 2),
    new card ('Judge', './assets/img/level2/card_judge.png', './assets/img/carto_recto.png', 2),
    new card ('Melee', './assets/img/level2/card_couteau.png', './assets/img/carto_recto.png', 2),
    new card ('Marshal', './assets/img/level2/card_marshal.png', './assets/img/carto_recto.png', 2),
    new card ('Outlaw', './assets/img/level2/card_outlaw.png', './assets/img/carto_recto.png', 2),
    new card ('Odin', './assets/img/level2/card_odin.png', './assets/img/carto_recto.png', 2),
    new card ('Phantom', './assets/img/level2/card_phantom.png', './assets/img/carto_recto.png', 2),
    new card ('Sheriff', './assets/img/level2/card_sheriff.png', './assets/img/carto_recto.png', 2),
    new card ('Spectre', './assets/img/level2/card_spectre.png', './assets/img/carto_recto.png', 2),
    new card ('Stinger', './assets/img/level2/card_stinger.png', './assets/img/carto_recto.png', 2),
    new card ('Shorty', './assets/img/level2/card_shorty.png', './assets/img/carto_recto.png', 2),
    new card ('Vandal', './assets/img/level2/card_vandal.png', './assets/img/carto_recto.png', 2),
];

$cards_level3=[
    new card ('Astra', './assets/img/level3/card_astra.png', './assets/img/carto_recto.png', 3),
    new card ('Breach', './assets/img/level3/card_breach.png', './assets/img/carto_recto.png', 3),
    new card ('Brimstone', './assets/img/level3/card_brimstone.png', './assets/img/carto_recto.png', 3),
    new card ('Chamber', './assets/img/level3/card_chamber.png', './assets/img/carto_recto.png', 3),
    new card ('Clove', './assets/img/level3/card_clove.png', './assets/img/carto_recto.png', 3),
    new card ('Cypher', './assets/img/level3/card_cypher.png', './assets/img/carto_recto.png', 3),
    new card ('Deadlock', './assets/img/level3/card_deadlock.png', './assets/img/carto_recto.png', 3),
    new card ('Fade', './assets/img/level3/card_fade.png', './assets/img/carto_recto.png', 3),
    new card ('Gekko', './assets/img/level3/card_gekko.png', './assets/img/carto_recto.png', 3),
    new card ('Harbor', './assets/img/level3/card_harbor.png', './assets/img/carto_recto.png', 3),
    new card ('Iso', './assets/img/level3/card_iso.png', './assets/img/carto_recto.png', 3),
    new card ('Jett', './assets/img/level3/card_jett.png', './assets/img/carto_recto.png', 3),
    new card ('KAY/O', './assets/img/level3/card_kayo.png', './assets/img/carto_recto.png', 3),
    new card ('Killjoy', './assets/img/level3/card_killjoy.png', './assets/img/carto_recto.png', 3),
    new card ('Neon', './assets/img/level3/card_neon.png', './assets/img/carto_recto.png', 3),
    new card ('Omen', './assets/img/level3/card_omen.png', './assets/img/carto_recto.png', 3),
    new card ('Phoenix', './assets/img/level3/card_phoenix.png', './assets/img/carto_recto.png', 3),
    new card ('Raze', './assets/img/level3/card_raze.png', './assets/img/carto_recto.png', 3),
    new card ('Reyna', './assets/img/level3/card_reyna.png', './assets/img/carto_recto.png', 3),
    new card ('Sage', './assets/img/level3/card_sage.png', './assets/img/carto_recto.png', 3),
    new card ('Skye', './assets/img/level3/card_skye.png', './assets/img/carto_recto.png', 3),
    new card ('Sova', './assets/img/level3/card_Sova.png', './assets/img/carto_recto.png', 3),
    new card ('Tejo', './assets/img/level3/card_tejo.png', './assets/img/carto_recto.png', 3),
    new card ('Veto', './assets/img/level3/card_veto.png', './assets/img/carto_recto.png', 3),
    new card ('Viper', './assets/img/level3/card_viper.png', './assets/img/carto_recto.png', 3),
    new card ('Vyse', './assets/img/level3/card_vyse.png', './assets/img/carto_recto.png', 3),
    new card ('Waylay', './assets/img/level3/card_waylay.png', './assets/img/carto_recto.png', 3),
    new card ('Yoru', './assets/img/level3/card_yoru.png', './assets/img/carto_recto.png', 3),
];
<?php

class person{
    private $name;
    private $dob;

    public function __construct($name,$dob){
        $this->name = $name;
        $this->dob  = $dob;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_dob(){
        return $this->dob;
    }

    public function get_age(){
        $dob   = new Datetime($this->dob);
        $today = new Datetime(date("Y-m-d"));
        $age   = $today->diff($dob);

        return $age->y;
    }
}

function compare_age($p1,$p2){
    if($p1->get_age() > $p2->get_age()){
        return $p1->get_name() . ' Is order than ' . $p2->get_name();
    }elseif($p1->get_age() < $p2->get_age()){
        return $p2->get_name() . ' Is order than ' . $p1->get_name();
    }

    return $p1->get_name() . ' and ' . $p2->get_name() . ' are same age';
}
$joy  = new person('Joe','1985-10-20');
$erin = new person('Erin','1991-08-28');
$amr  = new person('Amr','1999-06-10');
$abed  = new person('abed','1999-06-10');
echo compare_age($amr,$abed);
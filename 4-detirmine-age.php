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

$joy  = new person('Joe','1985-10-20');
$erin = new person('Erin','1991-08-28');
$amr  = new person('Amr','1999-06-10');

echo $joy->get_name() . " is " . $joy->get_age() . "<br/>";
echo $erin->get_name() . " is " . $erin->get_age() . "<br/>";
echo $amr->get_name() . " is " . $amr->get_age() . "<br/>";
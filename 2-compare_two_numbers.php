<?php
function check_capacity($capacity,$attendece = 0){
    if($attendece < $capacity){
        return "There are still thickets avaliable";
    }

    return "This event is sold out";
}



//array: key => [capacity, attendees]

$venues = array(
    'Contina' => [100,20],
    'Dorsia'  => [74,74],
    'The max' => [98,100],
    'MacLaren\'s' => [53,127],
    'The bannana Stand' => [2,0]
);

foreach ($venues as $name => $numbers) {
    echo $name ." : " . check_capacity($numbers[0],$numbers[1]) . '<br/>';
}
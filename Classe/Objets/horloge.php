<?php

$time = localtime(time(), true);

class Destruct {

    function __destruct() {
        echo "<br>Destruction effectuée";
    }
}


class Horloge extends Destruct {


    function time($time) {
        echo $time['tm_hour'].' : '.$time['tm_min'];
        header('refresh:30');
    }
}



$tic = new Horloge;

$tic->time($time);

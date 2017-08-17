<?php
$h = date('g');
$m = date('i');
$s = date('s');

function heure($h) {
    return 360/12*$h;
}

function minute($m) {
    return 360/60*$m;
}

function seconde($s) {
    return 360/60*$s;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .clock {
            border-radius: 50%;
            background: #fff url(ios_clock.svg) no-repeat center;
            background-size: 88%;
            height: 30em;
            padding-bottom: 31%;
            position: relative;
            width: 30em;
        }

        .clock.simple:after {
            background: #000;
            border-radius: 50%;
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 5%;
            height: 5%;
            z-index: 10;
        }

        .minutes-container, .hours-container, .seconds-container {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .hours {
            background: #000;
            height: 20%;
            left: 48.75%;
            position: absolute;
            top: 30%;
            transform-origin: 50% 100%;
            width: 2.5%;
            transform: rotate(<?php echo heure($h).'deg';?>);
        }

        .minutes {
            background: #000;
            height: 40%;
            left: 49%;
            position: absolute;
            top: 10%;
            transform-origin: 50% 100%;
            width: 2%;
            transform: rotate(<?php echo minute($m).'deg';?>);
        }

        .seconds {
            background: #000;
            height: 45%;
            left: 49.5%;
            position: absolute;
            top: 14%;
            transform-origin: 50% 80%;
            width: 1%;
            z-index: 8;
            transform: rotate(<?php echo seconde($s).'deg'; ?>);
        }

        @keyframes rotate {
            100% {
                transform: rotateZ(360deg);
            }
        }

        .hours-container {
            animation: rotate 43200s infinite linear;
        }
        .minutes-container {
            animation: rotate 3600s infinite linear;
        }
        .seconds-container {
            animation: rotate 60s infinite steps(60);
        }


    </style>
</head>
<body>
    <article class="clock">
        <div class="hours-container">
            <div class="hours"></div>
        </div>
        <div class="minutes-container">
            <div class="minutes"></div>
        </div>
        <div class="seconds-container">
            <div class="seconds"></div>
        </div>
    </article>
</body>
</html>

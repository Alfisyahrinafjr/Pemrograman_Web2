<?php
    $radius = 4.2;
    $volume = 4/3 * pi() * pow($radius, 3);
    $formatted_volume = number_format($volume, 3);

    echo "$formatted_volume"?>
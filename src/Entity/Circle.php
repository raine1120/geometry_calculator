<?php

namespace App\Entity;

class Circle {

    public function getSurface($radius){

        $result = pi() * pow($radius, 2);
        return $result;

    }

    public function getCircumference($radius){

        $result = (2 * pi() * $radius);
        return $result;

    }
}
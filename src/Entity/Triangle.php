<?php

namespace App\Entity;

class Triangle {

    public function getSurface($size1,$size2,$size3){

        $sumAllSizes = ($size1+$size2+$size3);
        $surface = ($sumAllSizes/2);
        return $surface;

    }

    public function getCircumference($size1,$size2,$size3){

        $sumAllSizes = ($size1+$size2+$size3);
        return $sumAllSizes;

    }

}
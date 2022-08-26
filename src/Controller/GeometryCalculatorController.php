<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Circle;
use App\Entity\Triangle;


class GeometryCalculatorController extends AbstractController
{
    /**
     * @Route("/triangle/{size1}/{size2}/{size3}", name="triangle", methods={"GET"})
     */

    public function getTriangleInformation($size1,$size2,$size3): Response
    {

        if (!is_numeric($size1) || !is_numeric($size2) || !is_numeric($size3)){
            return $this->json('All the values need to be numeric. Please verify');
        }

        $triangle  = new Triangle();
        $triangleSurface        = $triangle->getSurface($size1,$size2,$size3);
        $triangleCircumference  = $triangle->getCircumference($size1,$size2,$size3);

        $result =[
                    'type'          => 'triangle',
                    'a'             => number_format($size1,1),
                    'b'             => number_format($size2,1),
                    'c'             => number_format($size3,1),
                    'surface'       => number_format($triangleSurface,1),
                    'circumference' => number_format($triangleCircumference,1),
        ];

        return $this->json($result);
    }

    /**
     * @Route("/circle/{radius}", name="radius", methods={"GET"})
     */

    public function getCircleInformation($radius): Response
    {
        if (!is_numeric($radius)){
            return $this->json('All the values need to be numeric. Please verify');
        }

        $circle                 = new Circle();
        $circleSurface          = $circle->getSurface($radius);
        $circleCircumference    = $circle->getCircumference($radius);

        $result = [
                    'type'          => 'circle',
                    'radius'        => number_format($radius,1),
                    'surface'       => number_format($circleSurface,1),
                    'circumference' => number_format($circleCircumference,1),
        ];

        return $this->json($result);

    }

}
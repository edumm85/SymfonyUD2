<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProductosController extends AbstractController
{
    public function index()
    {
        return $this->render('productos/index.html.twig', [
            'controller_name' => 'ProductosController',
        ]);
    }

    public function altaProducto()
    {
        return $this->render('productos/altaProducto.html.twig');
    }

    public function bajaProducto()
    {
        return $this->render('productos/bajaProducto.html.twig');
    }

    public function listadoProducto()
    {
        $inventario=array(
            ['codigo'=>'001',
            'nombre'=>'sudaderaX',
            'stock'=>'99',
            'precio'=>'41€'],
            ['codigo'=>'002',
            'nombre'=>'camisetaY',
            'stock'=>'31',
            'precio'=>'22€']
        );
        return $this->render('productos/listadoProducto.html.twig', [
            'inventario' => $inventario,
        ]);
    }

    public function modificaProducto()
    {
        return $this->render('productos/modificaProducto.html.twig');
    }

}

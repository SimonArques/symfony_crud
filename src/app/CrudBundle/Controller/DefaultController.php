<?php

namespace app\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('appCrudBundle:Default:index.html.twig');
    }
}

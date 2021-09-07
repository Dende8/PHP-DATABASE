<?php

namespace App\Controller;

use App\Entity\Gladiator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController{

    /**
     * @Route("/", name="homepage")
     */
    public function index(){

        return $this->render(
            'base.html.twig',
            [
                'name' => "guiller"
            ]
            );

    }

    /**
     * @Route("/gladiators", name="list_gladiators")
     */
    public function listGladiators(EntityManagerInterface $emi){

        $repository = $emi->getRepository(Gladiator::class);
        $gladiators = $repository->findAll();

        return $this->render(
            'gladiators/list.html.twig',
            [
                'gladiators' => $gladiators
            ]
        );
    }

}


?>
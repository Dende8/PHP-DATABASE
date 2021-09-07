<?php

namespace App\Controller;

use App\Entity\Gladiator;
use App\Form\GladiatorForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class GladiatorController extends AbstractController{


    /**
     * @Route("/gladiators/insert", name="insert_gladiator")
     */
    public function insertGladiator(Request $request, EntityManagerInterface $emi){

        $form = $this->createForm(GladiatorForm::class);
        $form->handleRequest($request);

        
        if ($form->isSubmitted() && $form->isValid()){
            $gladiator = $form->getData();

            $emi->persist($gladiator);
            $emi->flush();
            
            return $this->redirectToRoute('list_gladiators');
        }
         
        return $this->render(
            'gladiators/insert.html.twig',
            [
                'form' => $form->createView()
            ]
        );

    }

    /**
     * @Route("/gladiators/edit{id}", name="edit_gladiator")
     */
    public function editGladiator(Gladiator $gladiator, Request $request, EntityManagerInterface $emi){


        $form = $this->createForm(GladiatorForm::class, $gladiator);
        $form->handleRequest($request);

        
        if ($form->isSubmitted() && $form->isValid()){
            $gladiator = $form->getData();

            $emi->persist($gladiator);
            $emi->flush();
            
            return $this->redirectToRoute('list_gladiators');
        }
         
        return $this->render(
            'gladiators/insert.html.twig',
            [
                'form' => $form->createView()
            ]
        );

    }

}


?>
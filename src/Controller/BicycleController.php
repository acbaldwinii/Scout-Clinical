<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Bicycle;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class BicycleController extends AbstractController
{
    #[Route('/bicycle/add', name: 'app_bicycle_add')] //Define my route
    public function add(Request $request): Response
    {
        $bicycle = new Bicycle();

        $form = $this->createFormBuilder($bicycle)
            ->add('seat', ChoiceType::class, [
                'choices'  => [
                    'Banana' => 'Banana',
                    'Competition' => 'Competition',
                    'Standard' => 'Standard',
                ],
                ])
            ->add('frame', ChoiceType::class, [
                'choices'  => [
                    'BMX' => 'BMX',
                    'Mountain' => 'Mountain',
                    'Dirt Bike' => 'Dirt Bike',
                ],
                ])
            ->add('brakes', ChoiceType::class, [
                'choices'  => [
                    'Pedal' => 'Pedal',
                    'Hand' => 'Hand',
                ],
                ])
            ->add('tires', ChoiceType::class, [
                'choices'  => [
                    '20inch' => '20inch',
                    '24inch' => '24inch',
                ],
                ])
            ->add('color')
            ->add('submit', SubmitType::class, ['label' => 'submit'])
            ->getForm();

            // Get data from request
            $form->handleRequest($request);

            // Validation
            if ($form->isSubmitted() && $form->isValid())
            {
                $post = $form->getData();

                // Add a flash message
                $this->addFlash('success','Your Bicycle have been addded. Thank you for your selection');
                
                return $this->renderForm(
                    'bicycle/index.html.twig',
                    [
                        'post' => $post
                    ]
                    );
            }

        return $this->renderForm(
            'bicycle/bikeBuilder.html.twig',
            [
                'form' => $form
            ]
            );
    }
}
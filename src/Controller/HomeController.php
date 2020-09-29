<?php

namespace App\Controller;

use App\Repository\EntrepriseRepository;
use App\Repository\EtudiantRepository;
use App\Repository\TuteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/Accueil", name="home")
     */
    public function index(EtudiantRepository $etudiants, TuteurRepository $tuteurs, EntrepriseRepository $entreprises)
    {


        $nbEtudiants = $etudiants->countAll();
        $nbTuteurs = $tuteurs->countAll();
        $nbEntreprises = $entreprises->countAll();

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'nbEtudiants' => $nbEtudiants,
            'nbTuteurs' => $nbTuteurs,
            'nbEntreprises' => $nbEntreprises,

        ]);
    }
}

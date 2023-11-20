<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    
    /**
     * @Route("/connexion", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        //$this->getUser() permet de savoir si utilsiateur connecte ou pas
        if ($this->getUser()) {
            return $this->redirectToRoute('target_path');
        }

        // message derreur
        $error = $authenticationUtils->getLastAuthenticationError();
        // preremplir le formulaire
        $lastUsername = $authenticationUtils->getLastUsername();
// on charge le twig
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     * la root qui permet de se reloguer elle sert arein elle rese vide et géré par symfony
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
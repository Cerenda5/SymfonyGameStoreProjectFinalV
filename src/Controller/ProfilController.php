<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Doctrine\ORM\EntityManagerInterface;

/** 
 * @IsGranted("ROLE_USER")
*/
class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index(EntityManagerInterface $em)
    {
        $user = $this->getUser();

        return $this->render('profil/index.html.twig', [
            'user' => $user,
        ]);
    }
}

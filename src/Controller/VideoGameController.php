<?php

namespace App\Controller;

use App\Entity\VideoGame;
use App\Form\VideoGameType;
use App\Repository\VideoGameRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VideoGameController extends AbstractController
{
    /**
     * @Route("/videogame/", name="videogame")
     */
    public function index(VideoGameRepository $videogameRepository)
    {
        $videogames = $videogameRepository->findAll();

        return $this->render('videogame/index.html.twig', [
            'videogames' => $videogames,
        ]);
    }

    /**
     * @Route("/videogame/new", name="videogame_add")
     */
    public function add(Request $request, EntityManagerInterface $manager)
    {
        $videogame = new Videogame();

        $form = $this->createForm(VideoGameType::class, $videogame);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($videogame);
            $manager->flush();
        }

        return $this->render('videogame/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/videogame/edit/{id}", name="videogame_edit")
     * @ParamConverter("videogame", options={"id"="id"})
     */
    public function edit(Request $request, EntityManagerInterface $manager, VideoGame $videogame)
    {
        $form = $this->createForm(VideoGameType::class, $videogame);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($videogame);
            $manager->flush();
        }

        return $this->render('videogame/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/videogame/delete/{id}", name="videogame_delete")
     * @ParamConverter("videogame", options={"id"="id"})
     */
    public function delete(Request $request, EntityManagerInterface $manager, VideoGame $videogame)
    {
        $manager->remove($videogame);
        $manager->flush();

        return $this->redirectToRoute('videogame');
    }
}

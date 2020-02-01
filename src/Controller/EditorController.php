<?php

namespace App\Controller;

use App\Repository\EditorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EditorController extends AbstractController
{
    /**
     * @Route("/editor/list", name="editor_list")
     */
    public function index(EditorRepository $editorRepository)
    {
        $editors = $editorRepository->findAll();

        return $this->render('editor/index.html.twig', [
            'editors' => $editors,
        ]);
    }
}

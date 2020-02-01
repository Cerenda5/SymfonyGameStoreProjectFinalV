<?php

namespace App\Controller;

use App\Entity\Editor;
use App\Form\EditorType;
use App\Repository\EditorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EditorController extends AbstractController
{
    /**
     * @Route("/editor/", name="editor")
     */
    public function index(EditorRepository $editorRepository)
    {
        $editors = $editorRepository->findAll();

        return $this->render('editor/index.html.twig', [
            'editors' => $editors,
        ]);
    }

    /**
     * @Route("/editor/new", name="editor_add")
     */
    public function add(Request $request, EntityManagerInterface $manager)
    {
        $editor = new Editor();

        $form = $this->createForm(EditorType::class, $editor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($editor);
            $manager->flush();
        }

        return $this->render('editor/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/editor/edit/{id}", name="editor_edit")
     * @ParamConverter("editor", options={"id"="id"})
     */
    public function edit(Request $request, EntityManagerInterface $manager, Editor $editor)
    {
        $form = $this->createForm(EditorType::class, $editor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($editor);
            $manager->flush();
        }

        return $this->render('editor/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/editor/delete/{id}", name="editor_delete")
     * @ParamConverter("editor", options={"id"="id"})
     */
    public function delete(Request $request, EntityManagerInterface $manager, Editor $editor)
    {
        $manager->remove($editor);
        $manager->flush();

        return $this->redirectToRoute('editor');
    }
}

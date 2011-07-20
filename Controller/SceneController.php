<?php

namespace Anh\SwgManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Anh\SwgManagerBundle\Entity\Scene;
use Anh\SwgManagerBundle\Form\SceneType;

/**
 * Scene controller.
 *
 * @Route("/scene")
 */
class SceneController extends Controller
{
    /**
     * Lists all Scene entities.
     *
     * @Route("/", name="scene")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AnhSwgManagerBundle:Scene')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Scene entity.
     *
     * @Route("/{id}/show", name="scene_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:Scene')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Scene entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Scene entity.
     *
     * @Route("/new", name="scene_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Scene();
        $form   = $this->createForm(new SceneType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Scene entity.
     *
     * @Route("/create", name="scene_create")
     * @Method("post")
     * @Template("AnhSwgManagerBundle:Scene:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Scene();
        $request = $this->getRequest();
        $form    = $this->createForm(new SceneType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('scene_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Scene entity.
     *
     * @Route("/{id}/edit", name="scene_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:Scene')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Scene entity.');
        }

        $editForm = $this->createForm(new SceneType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Scene entity.
     *
     * @Route("/{id}/update", name="scene_update")
     * @Method("post")
     * @Template("AnhSwgManagerBundle:Scene:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:Scene')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Scene entity.');
        }

        $editForm   = $this->createForm(new SceneType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('scene_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Scene entity.
     *
     * @Route("/{id}/delete", name="scene_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AnhSwgManagerBundle:Scene')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Scene entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('scene'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

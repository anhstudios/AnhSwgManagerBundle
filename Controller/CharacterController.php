<?php

namespace Anh\SwgManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Anh\SwgManagerBundle\Entity\Character;
use Anh\SwgManagerBundle\Form\CharacterType;

/**
 * Character controller.
 *
 * @Route("/character")
 */
class CharacterController extends Controller
{
    /**
     * Lists all Character entities.
     *
     * @Route("/", name="character")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AnhSwgManagerBundle:Character')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Character entity.
     *
     * @Route("/{id}/show", name="character_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:Character')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Character entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Character entity.
     *
     * @Route("/new", name="character_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Character();
        $form   = $this->createForm(new CharacterType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Character entity.
     *
     * @Route("/create", name="character_create")
     * @Method("post")
     * @Template("AnhSwgManagerBundle:Character:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Character();
        $request = $this->getRequest();
        $form    = $this->createForm(new CharacterType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('character_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Character entity.
     *
     * @Route("/{id}/edit", name="character_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:Character')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Character entity.');
        }

        $editForm = $this->createForm(new CharacterType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Character entity.
     *
     * @Route("/{id}/update", name="character_update")
     * @Method("post")
     * @Template("AnhSwgManagerBundle:Character:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:Character')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Character entity.');
        }

        $editForm   = $this->createForm(new CharacterType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('character_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Character entity.
     *
     * @Route("/{id}/delete", name="character_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AnhSwgManagerBundle:Character')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Character entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('character'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

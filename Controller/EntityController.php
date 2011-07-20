<?php

namespace Anh\SwgManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Anh\SwgManagerBundle\Entity\Entity;
use Anh\SwgManagerBundle\Form\EntityType;

/**
 * Entity controller.
 *
 * @Route("/entity")
 */
class EntityController extends Controller
{
    /**
     * Lists all Entity entities.
     *
     * @Route("/", name="entity")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AnhSwgManagerBundle:Entity')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Entity entity.
     *
     * @Route("/{id}/show", name="entity_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:Entity')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entity entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Entity entity.
     *
     * @Route("/new", name="entity_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Entity();
        $form   = $this->createForm(new EntityType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Entity entity.
     *
     * @Route("/create", name="entity_create")
     * @Method("post")
     * @Template("AnhSwgManagerBundle:Entity:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Entity();
        $request = $this->getRequest();
        $form    = $this->createForm(new EntityType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entity_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Entity entity.
     *
     * @Route("/{id}/edit", name="entity_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:Entity')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entity entity.');
        }

        $editForm = $this->createForm(new EntityType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Entity entity.
     *
     * @Route("/{id}/update", name="entity_update")
     * @Method("post")
     * @Template("AnhSwgManagerBundle:Entity:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:Entity')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entity entity.');
        }

        $editForm   = $this->createForm(new EntityType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entity_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Entity entity.
     *
     * @Route("/{id}/delete", name="entity_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AnhSwgManagerBundle:Entity')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Entity entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('entity'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

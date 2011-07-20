<?php

namespace Anh\SwgManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Anh\SwgManagerBundle\Entity\EntityTemplate;
use Anh\SwgManagerBundle\Form\EntityTemplateType;

/**
 * EntityTemplate controller.
 *
 * @Route("/entitytemplate")
 */
class EntityTemplateController extends Controller
{
    /**
     * Lists all EntityTemplate entities.
     *
     * @Route("/", name="entitytemplate")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AnhSwgManagerBundle:EntityTemplate')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a EntityTemplate entity.
     *
     * @Route("/{id}/show", name="entitytemplate_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:EntityTemplate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EntityTemplate entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new EntityTemplate entity.
     *
     * @Route("/new", name="entitytemplate_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new EntityTemplate();
        $form   = $this->createForm(new EntityTemplateType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new EntityTemplate entity.
     *
     * @Route("/create", name="entitytemplate_create")
     * @Method("post")
     * @Template("AnhSwgManagerBundle:EntityTemplate:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new EntityTemplate();
        $request = $this->getRequest();
        $form    = $this->createForm(new EntityTemplateType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entitytemplate_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing EntityTemplate entity.
     *
     * @Route("/{id}/edit", name="entitytemplate_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:EntityTemplate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EntityTemplate entity.');
        }

        $editForm = $this->createForm(new EntityTemplateType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing EntityTemplate entity.
     *
     * @Route("/{id}/update", name="entitytemplate_update")
     * @Method("post")
     * @Template("AnhSwgManagerBundle:EntityTemplate:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:EntityTemplate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EntityTemplate entity.');
        }

        $editForm   = $this->createForm(new EntityTemplateType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entitytemplate_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a EntityTemplate entity.
     *
     * @Route("/{id}/delete", name="entitytemplate_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AnhSwgManagerBundle:EntityTemplate')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EntityTemplate entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('entitytemplate'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

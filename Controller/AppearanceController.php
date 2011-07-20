<?php

namespace Anh\SwgManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Anh\SwgManagerBundle\Entity\Appearance;
use Anh\SwgManagerBundle\Form\AppearanceType;

/**
 * Appearance controller.
 *
 * @Route("/appearance")
 */
class AppearanceController extends Controller
{
    /**
     * Lists all Appearance entities.
     *
     * @Route("/", name="appearance")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AnhSwgManagerBundle:Appearance')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Appearance entity.
     *
     * @Route("/{id}/show", name="appearance_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:Appearance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Appearance entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Appearance entity.
     *
     * @Route("/new", name="appearance_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Appearance();
        $form   = $this->createForm(new AppearanceType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Appearance entity.
     *
     * @Route("/create", name="appearance_create")
     * @Method("post")
     * @Template("AnhSwgManagerBundle:Appearance:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Appearance();
        $request = $this->getRequest();
        $form    = $this->createForm(new AppearanceType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('appearance_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Appearance entity.
     *
     * @Route("/{id}/edit", name="appearance_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:Appearance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Appearance entity.');
        }

        $editForm = $this->createForm(new AppearanceType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Appearance entity.
     *
     * @Route("/{id}/update", name="appearance_update")
     * @Method("post")
     * @Template("AnhSwgManagerBundle:Appearance:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AnhSwgManagerBundle:Appearance')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Appearance entity.');
        }

        $editForm   = $this->createForm(new AppearanceType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('appearance_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Appearance entity.
     *
     * @Route("/{id}/delete", name="appearance_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AnhSwgManagerBundle:Appearance')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Appearance entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('appearance'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

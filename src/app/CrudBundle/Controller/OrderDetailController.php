<?php

namespace app\CrudBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use app\CrudBundle\Entity\OrderDetail;
use app\CrudBundle\Form\OrderDetailType;

/**
 * OrderDetail controller.
 *
 * @Route("/command")
 */
class OrderDetailController extends Controller
{

    /**
     * Lists all OrderDetail entities.
     *
     * @Route("/", name="command")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('appCrudBundle:OrderDetail')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new OrderDetail entity.
     *
     * @Route("/", name="command_create")
     * @Method("POST")
     * @Template("appCrudBundle:OrderDetail:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new OrderDetail();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('command_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a OrderDetail entity.
     *
     * @param OrderDetail $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(OrderDetail $entity)
    {
        $form = $this->createForm(new OrderDetailType(), $entity, array(
            'action' => $this->generateUrl('command_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new OrderDetail entity.
     *
     * @Route("/new", name="command_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new OrderDetail();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a OrderDetail entity.
     *
     * @Route("/{id}", name="command_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('appCrudBundle:OrderDetail')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrderDetail entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing OrderDetail entity.
     *
     * @Route("/{id}/edit", name="command_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('appCrudBundle:OrderDetail')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrderDetail entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a OrderDetail entity.
    *
    * @param OrderDetail $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(OrderDetail $entity)
    {
        $form = $this->createForm(new OrderDetailType(), $entity, array(
            'action' => $this->generateUrl('command_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing OrderDetail entity.
     *
     * @Route("/{id}", name="command_update")
     * @Method("PUT")
     * @Template("appCrudBundle:OrderDetail:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('appCrudBundle:OrderDetail')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find OrderDetail entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('command_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a OrderDetail entity.
     *
     * @Route("/{id}", name="command_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('appCrudBundle:OrderDetail')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find OrderDetail entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('command'));
    }

    /**
     * Creates a form to delete a OrderDetail entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('command_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}

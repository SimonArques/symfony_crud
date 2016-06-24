<?php

namespace app\CrudBundle\Entity;

/**
 * Delivery
 */
class Delivery
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $ref;

    /**
     * @var string
     */
    private $dateDelivery;

    /**
     * @var \app\CrudBundle\Entity\Command
     */
    private $command;

    /**
     * @var \app\CrudBundle\Entity\Invoice
     */
    private $invoice;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return Delivery
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set dateDelivery
     *
     * @param string $dateDelivery
     *
     * @return Delivery
     */
    public function setDateDelivery($dateDelivery)
    {
        $this->dateDelivery = $dateDelivery;

        return $this;
    }

    /**
     * Get dateDelivery
     *
     * @return string
     */
    public function getDateDelivery()
    {
        return $this->dateDelivery;
    }

    /**
     * Set command
     *
     * @param \app\CrudBundle\Entity\Command $command
     *
     * @return Delivery
     */
    public function setCommand(\app\CrudBundle\Entity\Command $command = null)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Get command
     *
     * @return \app\CrudBundle\Entity\Command
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Set invoice
     *
     * @param \app\CrudBundle\Entity\Invoice $invoice
     *
     * @return Delivery
     */
    public function setInvoice(\app\CrudBundle\Entity\Invoice $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return \app\CrudBundle\Entity\Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }
}

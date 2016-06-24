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
     * @var \DateTime
     */
    private $dateDelivery;

    /**
     * @var \app\CrudBundle\Entity\Command
     */
    private $commands;

    /**
     * @var \app\CrudBundle\Entity\Invoice
     */
    private $invoices;


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
     * @param \DateTime $dateDelivery
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
     * @return \DateTime
     */
    public function getDateDelivery()
    {
        return $this->dateDelivery;
    }

    /**
     * Set commands
     *
     * @param \app\CrudBundle\Entity\Command $commands
     *
     * @return Delivery
     */
    public function setCommands(\app\CrudBundle\Entity\Command $commands = null)
    {
        $this->commands = $commands;

        return $this;
    }

    /**
     * Get commands
     *
     * @return \app\CrudBundle\Entity\Command
     */
    public function getCommands()
    {
        return $this->commands;
    }

    /**
     * Set invoices
     *
     * @param \app\CrudBundle\Entity\Invoice $invoices
     *
     * @return Delivery
     */
    public function setInvoices(\app\CrudBundle\Entity\Invoice $invoices = null)
    {
        $this->invoices = $invoices;

        return $this;
    }

    /**
     * Get invoices
     *
     * @return \app\CrudBundle\Entity\Invoice
     */
    public function getInvoices()
    {
        return $this->invoices;
    }
}


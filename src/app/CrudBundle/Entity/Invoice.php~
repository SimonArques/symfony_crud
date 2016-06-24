<?php

namespace app\CrudBundle\Entity;

/**
 * Invoice
 */
class Invoice
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
    private $dateInvoice;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $delivery;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->delivery = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Invoice
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
     * Set dateInvoice
     *
     * @param string $dateInvoice
     *
     * @return Invoice
     */
    public function setDateInvoice($dateInvoice)
    {
        $this->dateInvoice = $dateInvoice;

        return $this;
    }

    /**
     * Get dateInvoice
     *
     * @return string
     */
    public function getDateInvoice()
    {
        return $this->dateInvoice;
    }

    /**
     * Add delivery
     *
     * @param \app\CrudBundle\Entity\Delivery $delivery
     *
     * @return Invoice
     */
    public function addDelivery(\app\CrudBundle\Entity\Delivery $delivery)
    {
        $this->delivery[] = $delivery;

        return $this;
    }

    /**
     * Remove delivery
     *
     * @param \app\CrudBundle\Entity\Delivery $delivery
     */
    public function removeDelivery(\app\CrudBundle\Entity\Delivery $delivery)
    {
        $this->delivery->removeElement($delivery);
    }

    /**
     * Get delivery
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDelivery()
    {
        return $this->delivery;
    }
}

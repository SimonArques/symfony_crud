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
     * @var \DateTime
     */
    private $dateInvoice;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $deliveries;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->deliveries = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param \DateTime $dateInvoice
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
     * @return \DateTime
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
        $this->deliveries[] = $delivery;

        return $this;
    }

    /**
     * Remove delivery
     *
     * @param \app\CrudBundle\Entity\Delivery $delivery
     */
    public function removeDelivery(\app\CrudBundle\Entity\Delivery $delivery)
    {
        $this->deliveries->removeElement($delivery);
    }

    /**
     * Get deliveries
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDeliveries()
    {
        return $this->deliveries;
    }
}

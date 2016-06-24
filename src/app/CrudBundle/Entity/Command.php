<?php

namespace app\CrudBundle\Entity;

/**
 * Command
 */
class Command
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
    private $dateCreated;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orderDetail;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $delivery;

    /**
     * @var \app\CrudBundle\Entity\Customer
     */
    private $customers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderDetail = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Command
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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Command
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Add orderDetail
     *
     * @param \app\CrudBundle\Entity\OrderDetail $orderDetail
     *
     * @return Command
     */
    public function addOrderDetail(\app\CrudBundle\Entity\OrderDetail $orderDetail)
    {
        $this->orderDetail[] = $orderDetail;

        return $this;
    }

    /**
     * Remove orderDetail
     *
     * @param \app\CrudBundle\Entity\OrderDetail $orderDetail
     */
    public function removeOrderDetail(\app\CrudBundle\Entity\OrderDetail $orderDetail)
    {
        $this->orderDetail->removeElement($orderDetail);
    }

    /**
     * Get orderDetail
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrderDetail()
    {
        return $this->orderDetail;
    }

    /**
     * Add delivery
     *
     * @param \app\CrudBundle\Entity\Delivery $delivery
     *
     * @return Command
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

    /**
     * Set customers
     *
     * @param \app\CrudBundle\Entity\Customer $customers
     *
     * @return Command
     */
    public function setCustomers(\app\CrudBundle\Entity\Customer $customers = null)
    {
        $this->customers = $customers;

        return $this;
    }

    /**
     * Get customers
     *
     * @return \app\CrudBundle\Entity\Customer
     */
    public function getCustomers()
    {
        return $this->customers;
    }
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->dateCreated = new \DateTime();
    }
}


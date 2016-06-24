<?php

namespace app\CrudBundle\Entity;

/**
 * OrderDetail
 */
class OrderDetail
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $qte;

    /**
     * @var \app\CrudBundle\Entity\Product
     */
    private $product;

    /**
     * @var \app\CrudBundle\Entity\Command
     */
    private $command;


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
     * Set qte
     *
     * @param float $qte
     *
     * @return OrderDetail
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return float
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set product
     *
     * @param \app\CrudBundle\Entity\Product $product
     *
     * @return OrderDetail
     */
    public function setProduct(\app\CrudBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \app\CrudBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set command
     *
     * @param \app\CrudBundle\Entity\Command $command
     *
     * @return OrderDetail
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
}


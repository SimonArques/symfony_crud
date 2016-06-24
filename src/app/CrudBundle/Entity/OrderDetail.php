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
    private $products;

    /**
     * @var \app\CrudBundle\Entity\Command
     */
    private $commands;


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
     * Set products
     *
     * @param \app\CrudBundle\Entity\Product $products
     *
     * @return OrderDetail
     */
    public function setProducts(\app\CrudBundle\Entity\Product $products = null)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return \app\CrudBundle\Entity\Product
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set commands
     *
     * @param \app\CrudBundle\Entity\Command $commands
     *
     * @return OrderDetail
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
}


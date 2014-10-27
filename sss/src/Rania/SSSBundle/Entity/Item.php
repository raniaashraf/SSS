<?php

namespace Rania\SSSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 */
class Item
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $stockQuantity;

    /**
     * @var string
     */
    private $ownerId;
    
    private $cart;


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
     * Set name
     *
     * @param string $name
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set stockQuantity
     *
     * @param integer $stockQuantity
     * @return Item
     */
    public function setStockQuantity($stockQuantity)
    {
        $this->stockQuantity = $stockQuantity;

        return $this;
    }

    /**
     * Get stockQuantity
     *
     * @return integer 
     */
    public function getStockQuantity()
    {
        return $this->stockQuantity;
    }

    /**
     * Set ownerId
     *
     * @param string $ownerId
     * @return Item
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return string 
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }
}

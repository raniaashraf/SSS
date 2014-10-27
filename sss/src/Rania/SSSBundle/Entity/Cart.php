<?php

namespace Rania\SSSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Cart
 */
class Cart
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var ArrayCollection
     */
    private $items;

    /**
     * @var integer
     */
    private $userId;

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
     * 
     */
    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    /**
     * 
     * @return type
     */
    function getItems()
    {
        return $this->items;
    }

    /**
     * 
     * @param ArrayCollection $items
     */
    function setItems(ArrayCollection $items)
    {
        $this->items = $items;
    }

    /**
     * Set userId
     *
     * @param string $userId
     * @return Cart
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }

}

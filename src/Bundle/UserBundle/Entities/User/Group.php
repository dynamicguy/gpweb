<?php

namespace Bundle\UserBundle\Entities\User;

/**
 * @Entity
 * @Table(name="groups")
 *
 *
 *
 */
class Group
{

    /**
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * Get id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * Get name
     */
    public function getName()
    {
        return $this->name;
    }


}
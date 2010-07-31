<?php

namespace Bundle\UserBundle\Entities;

use Symfony\Components\Validator\Mapping\ClassMetadata;
use Symfony\Components\Validator\Constraints;

/**
 * @Entity(repositoryClass="Bundle\UserBundle\Entities\UserRepository")
 * @Table(name="users")
 * @HasLifecycleCallbacks
 */
class User
{

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('login', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('login', new Constraints\MinLength(3));
        $metadata->addGetterConstraint('password', new Constraints\NotNull());
    }

    /**
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @Column(name="login", type="string", length=50, nullable=false, unique=true)
     */
    private $login;
    /**
     * @Column(name="password", type="string", length=32, nullable=false)
     */
    private $password;
    /**
     * @Column(name="firstName", type="string", length=50, nullable=false)
     */
    private $firstName;
    /**
     * @Column(name="lastName", type="string", length=50, nullable=true)
     */
    private $lastName;
    /**
     * @Column(name="emailAddress", type="string", length=50, nullable=true)
     */
    private $emailAddress;
    /**
     * @ManyToMany(targetEntity="Bundle\UserBundle\Entities\User\Group")
     * @JoinTable(name="users_having_groups",
     *   joinColumns={
     *     @JoinColumn(name="User_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @JoinColumn(name="Group_id", referencedColumnName="id")
     *   }
     * )
     */
    private $group = array();
    /**
     * @Column(name="gender", type="string", length=13, nullable=true)
     */
    private $gender;

    /**
     * Constructor
     *
     */
    public function __construct()
    {
        $this->group = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set login
     */
    public function setLogin($value)
    {
        $this->login = $value;
    }

    /**
     * Get login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     */
    public function setPassword($value)
    {
        $this->password = md5($value);
    }

    /**
     * Get password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set firstName
     */
    public function setFirstName($value)
    {
        $this->firstName = $value;
    }

    /**
     * Get firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     */
    public function setLastName($value)
    {
        $this->lastName = $value;
    }

    /**
     * Get lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set emailAddress
     */
    public function setEmailAddress($value)
    {
        $this->emailAddress = $value;
    }

    /**
     * Get emailAddress
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Returns the full name of the user
     *
     * @return string
     */
    public function getFullName()
    {
        return implode(' ',
            array($this->getFirstName(), $this->getLastName()));
    }

    /**
     * Add group
     */
    public function addGroup($value)
    {
        $this->group[] = $value;
    }

    /**
     * Get group
     */
    public function getGroup()
    {
        return $this->group;
    }




}
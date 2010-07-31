<?php

namespace Bundle\UserBundle\Dao;

class DoctrineUserDao implements UserDao
{

    /**
     *
     * @var Doctrine\ORM\EntityManager $entityManager
     */
    private $entityManager;

    /**
     * Retrieve User by login and password
     *
     * @param string $login
     * @param string $password
     *
     * @return Bundle\UserBundle\Entities\User
     */
    public function findByLoginAndPassword($login, $password)
    {
        $query = $this->entityManager->createQuery(
            'SELECT u FROM Bundle\UserBundle\Entities\User u WHERE'
            . ' u.login = :login AND u.password = :password'
        );

        $query->setParameter('login', $login);
        $query->setParameter('password', $password);

        $result = $query->getResult();

        if (0 === count($result)) {
            return false;
        }
        return $result[0];
    }

    /**
     * Sets the EntityManager to use when looking up users
     *
     * @param EntityManager $em
     */
    public function setEntityManager(\Doctrine\ORM\EntityManager $em)
    {
        $this->entityManager = $em;
    }

    /**
     * Returns the used entityManager
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

}

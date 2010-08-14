<?php

namespace Bundle\UserBundle\Dao;

use Bundle\UserBundle\Entities\User;

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
     * @param string $data
     *
     * @return Bundle\UserBundle\Entities\User
     */
    public function findByLoginAndPassword($data)
    {
        $query = $this->entityManager->createQuery(
                'SELECT u FROM Bundle\UserBundle\Entities\User u WHERE'
                . ' u.login = :login AND u.password = :password'
        );

        $query->setParameter('login', $data['login']);
        $query->setParameter('password', md5($data['password']));

        $result = $query->getResult();

        if (0 === count($result)) {
            return false;
        }
        
        return $result[0];
    }

    /**
     * register a new user data
     *
     * @param array $data
     * @return bool
     */
    public function registerUser($data)
    {
        $user = new User();

        $query = $this->entityManager->createQuery(
                'SELECT u FROM Bundle\UserBundle\Entities\User u WHERE'
                . ' u.login = :login'
        );
        $query->setParameter('login', $data['login']);
        $result = $query->getResult();

        if (count($result)) {
            return false;
        }


        $user->setLogin($data['login']);
        $user->setPassword($data['password']);
        $user->setEmailAddress($data['emailAddress']);
        $user->setFirstName($data['firstName']);
        $user->setLastName($data['lastName']);
        $user->setGender($data['gender']);

        $this->entityManager->persist($user);
        $this->entityManager->flush();
        return true;
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
     * @return Doctrine\ORM\EntityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

}

<?php

namespace Bundle\UserBundle\Dao;

interface UserDao
{

    /**
     * Retrieve User by login and password
     *
     * @param string $login
     * @param string $password
     *
     * @return Bundle\UserBundle\Entities\User
     */
    public function findByLoginAndPassword($login, $password);
}

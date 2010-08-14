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
    public function findByLoginAndPassword($data);

    /**
     * register a new user
     *
     * @param array $data
     * @return Bundle\UserBundle\Entities\User
     */
    public function registerUser($data);

}

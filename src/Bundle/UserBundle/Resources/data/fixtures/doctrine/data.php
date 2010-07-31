<?php

use Bundle\UserBundle\Entities\User as User;
use Bundle\UserBundle\Entities\User\Group as Group;

/**

 * @var  \Doctrine\ORM\EntityManager
 */
$em = $this->container->getDoctrine_ORM_DefaultEntityManagerService();

$guests = new Group();
$guests->setName('guests');

$members = new Group();
$members->setName('members');

$admins = new Group();
$admins->setName('admins');


$user = new User();
$user->setFirstName('Nurul');
$user->setLastName('Ferdous');
$user->setPassword(md5('hello'));
$user->setLogin('ferdous');
$user->setGender('male');
$user->setEmailAddress('ferdous@dynamicguy.com');
$user->addGroup($guests);
$user->addGroup($members);
$user->addGroup($admins);

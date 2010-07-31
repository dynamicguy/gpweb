<?php

namespace Bundle\UserBundle\Controller;

use Symfony\Framework\DoctrineBundle\Controller\DoctrineController as Controller;

class UserController extends Controller
{

    public function registerAction()
    {
        return $this->render('UserBundle:User:register', array());
    }

    public function loginAction()
    {
        if ($this->getUser()->getAttribute('identity')) {
            $this->getUser()->setFlash('notice', 'You are already logged in. Please logout first!');

            return $this->redirect($this->generateUrl('userHome'));
        }

        $request = $this->getRequest();
        $username = $request->request->get('username');
        $password = $request->request->get('password');

        $isLoginError = false;

        if (null != $username && null != $password) {
            $userDao = $this->container->getService('user.userDao');
            $user = $userDao->findByLoginAndPassword($username, md5($password));

            if (false === $user) {
                $isLoginError = true;
            } else {
                $this->getUser()->setAttribute('identity', $user);
                $this->getUser()->setFlash('notice', 'Congratulations, your login succeeded!');

                return $this->redirect($this->generateUrl('userHome'));
            }
        }
        return $this->render('UserBundle:User:login', array(
            'username' => $username,
            'isLoginError' => $isLoginError
        ));
    }

    public function homeAction()
    {
        $identity = $this->getUser()->getAttribute('identity');
        if (!$identity) {
            $this->getUser()->setFlash('error', 'Login Required! Please login now.');

            return $this->redirect($this->generateUrl('login'));
        }

        return $this->render('UserBundle:User:success', array(
            'identity' => $identity,
        ));
    }

    public function logoutAction()
    {
        $this->getUser()->setAttribute('identity', false);
        $this->getUser()->setFlash('notice', 'Logged out successfully.');

        return $this->redirect($this->generateUrl('login'));
    }

}
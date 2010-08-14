<?php

namespace Bundle\UserBundle\Controller;

//use Symfony\Framework\DoctrineBundle\Controller\DoctrineController as Controller;
use Symfony\Framework\FoundationBundle\Controller;
use Symfony\Components\Form\Form;
use Bundle\UserBundle\Form\RegisterForm;
use Bundle\UserBundle\Form\LoginForm;

class UserController extends Controller
{

    public function registerAction()
    {
        $registerForm = new RegisterForm();

        $form = new Form('registerForm', $registerForm, $this->container->getValidatorService());
        $form->add(new \Symfony\Components\Form\TextField('login'));
        $form->add(new \Symfony\Components\Form\PasswordField('password'));
        $form->add(new \Symfony\Components\Form\TextField('firstName'));
        $form->add(new \Symfony\Components\Form\TextField('lastName'));
        $form->add(new \Symfony\Components\Form\TextField('emailAddress'));
        $form->add(new \Symfony\Components\Form\ChoiceField('gender', array('choices' => array('male' => 'Male', 'female' => 'Female'))));

        if ($this->getRequest()->getMethod() == 'POST') {
            $form->bind($this->getRequest()->request->get('registerForm'));

            if ($form->isValid()) {
                $userDao = $this->container->getService('user.userDao');
                $data = $this->getRequest()->request->get('registerForm');
                if ($userDao->registerUser($data)) {
                    // get the mailer first (mandatory to initialize Swift Mailer)
                    $mailer = $this->container->getService('mailer');
                    $message = \Swift_Message::newInstance()
                            ->setSubject('Complete Registration at GPWeb')
                            ->setFrom('test@dynamicguy.com')
                            ->setTo($data['emailAddress'])
                            ->setBody($this->renderView('UserBundle:User:email', array('name' => $data['login'])))
                    ;
                    $mailer->send($message);



                    $this->getUser()->setFlash('success', 'You have registered successfully!');
                    return $this->redirect($this->generateUrl('login'));
                } else {
                    $form['login']->addError('Username already exists. Please choose a different username');
                }
            }
        }

        return $this->render('UserBundle:User:register', array('form' => $form));
    }

    public function loginAction()
    {

        if ($this->getUser()->getAttribute('identity')) {
            $this->getUser()->setFlash('notice', 'You are already logged in. Please logout first!');

            return $this->redirect($this->generateUrl('userHome'));
        }

        $loginForm = new LoginForm();
        $isLoginError = false;

        $form = new Form('loginForm', $loginForm, $this->container->getValidatorService());
        $form->add(new \Symfony\Components\Form\TextField('login'));
        $form->add(new \Symfony\Components\Form\PasswordField('password'));
        if ($this->getRequest()->getMethod() == 'POST') {
            $form->bind($this->getRequest()->request->get('loginForm'));

            if ($form->isValid()) {
                $userDao = $this->container->getService('user.userDao');
                $user = $userDao->findByLoginAndPassword($this->getRequest()->request->get('loginForm'));

                if (false === $user) {
                    $isLoginError = true;
                } else {
                    $this->getUser()->setAttribute('identity', $user);
                    $this->getUser()->setFlash('success', 'Your login succeeded!');

                    return $this->redirect($this->generateUrl('homepage'));
                }
            }
        }

        return $this->render('UserBundle:User:login', array('form' => $form, 'isLoginError' => $isLoginError));
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
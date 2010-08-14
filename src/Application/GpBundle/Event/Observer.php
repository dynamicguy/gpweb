<?php

namespace Application\GpBundle\Event;

use Doctrine\ORM\EntityManager;
use Symfony\Components\EventDispatcher\EventDispatcher;
use Symfony\Components\EventDispatcher\Event;
use Symfony\Components\HttpFoundation\Session;

class Observer
{

    /**
     * @var EntityManager
     */
    protected $em;
    /**
     * @var EventDispatcher
     */
    protected $dispatcher;
    /**
     * @var Session
     */
    protected $session;

    public function __construct(EntityManager $em, EventDispatcher $dispatcher, Session $session)
    {
        $this->em = $em;
        $this->dispatcher = $dispatcher;
        $this->session = $session;
    }

    public function connect()
    {
        $observer = $this;

//        $this->dispatcher->connect('miam.story.reestimate', function(Event $event) use ($observer) {
//            $observer->addStoryEntry($event->getSubject(), TimelineEntry::ACTION_REESTIMATE);
//        });
    }

    public function addStoryEntry(Story $story, $action)
    {
//        try
//        {
//            $this->session->start();
//            $identity = $this->session->getAttribute('identity');
//
//            if(!$identity) {
//                throw new \Exception('No user logged in');
//            }
//            $doctrineUser = $this->em->getRepository('Bundle\DoctrineUserBundle\Entities\User')->find($identity->getId());
//
//            $tentry = new TimelineEntry();
//            $tentry->setUser($doctrineUser);
//            $tentry->setStory($story);
//            $tentry->setPoints($story->getPoints());
//            $tentry->setAction($action);
//
//            $this->em->persist($tentry);
//            $this->em->flush();
//        }
//        catch(Exception $e) {
//            error_log(sprintf('Fail to add a timeline entry: '.$e->getMessage()));
//        }
    }

}

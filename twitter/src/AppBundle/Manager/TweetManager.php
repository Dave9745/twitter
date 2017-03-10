<?php

namespace AppBundle\Manager;

use AppBundle\Entity\Tweet;


class TweetManager{

    private $entityManager;
    private $nbLast;

    public function __construct($entityManager, $nbLast)
    {
        $this->entityManager = $entityManager;
        $this->nbLast = $nbLast;
    }

    public function createTweet()
    {

        new Tweet();

    }

    public function saveTweet($tweet){

            $em = $this->entityManager;
            $em->persist($tweet);
            $em->flush();

    }


   public function getLastsTweets(){

        $tweets = $this->entityManager->getRepository(Tweet::class)->getLastsTweets($this->nbLast);

        return $tweets;

   }

}
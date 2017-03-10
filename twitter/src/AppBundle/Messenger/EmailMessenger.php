<?php

namespace AppBundle\Messenger;

use AppBundle\Entity\Tweet;

class EmailMessenger{

    private $mailer;

    public function __construct($mailer)
    {
        $this->mailer = $mailer;

    }

    public function sendTweetCreated(){

        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('twitter.td@formation.com')
            ->setTo('dtirnan@hotmail.com')
            ->setBody('A tweet has been posted');

        $this->mailer->send($message);

    }
}
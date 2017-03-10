<?php

namespace AppBundle\Controller;

use AppBundle\Form\TweetType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Tweet;

class TweetController extends Controller
{

    /**
     * @Route("/tweet/new", name="app_new_tweet", methods={"GET", "POST"})
     */

    public function newTweetaction(Request $request){

        $tweet = $this->container->get('app.tweet.manager')->createTweet();

        //créer et enregistrer un nouveau tweet
        $form = $this->createForm(TweetType::class, $tweet);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $tweet = $form->getData();
            $save = $this->container->get('app.tweet.manager')->saveTweet($tweet);

            return $this->redirectToRoute('app_tweet_list');
        }

        return $this->render(':tweet:newTweet.html.twig', ['form' => $form->createView(),]);
    }

    /**
     * @Route("/", name="app_tweet_list")
     */
    public function getLastTweets($maxResults = 10){

        $tweets = $this->container->get('app.tweet.manager')->getLastsTweets();

        return $this->render(':tweet:list.html.twig', ['tweets' => $tweets,]);

    }


}

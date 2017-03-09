<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Tweet;

class TweetController extends Controller
{
    /**
     * @Route("/", name="app_tweet_list")
     */
    public function listAction()
    {
        $tweets = $this->getDoctrine()->getRepository(Tweet::class)->findAll();

        return $this->render(':tweet:list.html.twig', ['tweets' => $tweets,]);
    }

    /**
     * @Route("/tweet/{id}", name="app_tweet_detail")
     */

    public function detailAction($id)
    {
        $tweet = $this->getDoctrine()->getRepository(Tweet::class)->recupTweet($id);

        return $this->render(':tweet:detail.html.twig', ['tweet' =>  $tweet,]);

    }

    public function getLastTweets($maxResults = 10){

        return $this->createQueryBuilder('t')
                    ->select('t')
                    ->orderBy('t.createAt', 'DESC')
                    ->setMaxResults($maxResults)
                    ->getQuery()
                    ->getResult();

    }
}

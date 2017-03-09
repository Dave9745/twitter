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

        if(!$tweet instanceof Tweet){
            throw $this->createNotFoundException(sprintf('Le tweet n° %d n\'existe pas', $id));
        }

        return $this->render(':tweet:detail.html.twig', ['tweet' =>  $tweet,]);

    }

    /**
     * @Route("/tweet/new", name="app_new_tweet", methods={"GET", "POST"})
     */

    public function newTweetaction(Request $request){
        
        $form = $this->createForm(TweetType::class, new Tweet());
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $tweet = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($tweet);
            $em->flush();

            return $this->redirectToRoute('app_tweet_list');
        }

        return $this->render(':tweet:newTweet.html.twig', ['form' => $form->createView(),]);
    }

    /*/**
     * @Route("/tweet/{id}", name="app_tweet_detail")
     */
    /*public function getLastTweets($maxResults = 10){

        return $this->createQueryBuilder('t')
                    ->select('t')
                    ->orderBy('t.createAt', 'DESC')
                    ->setMaxResults($maxResults)
                    ->getQuery()
                    ->getResult();

    }*/
}

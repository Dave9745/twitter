<?php

namespace AppBundle\Repository;

/**
 * TweetRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TweetRepository extends \Doctrine\ORM\EntityRepository
{
    public function recupTweet($id)
    {
        return $this->createQueryBuilder('i')
                    ->select('i')
                    ->andWhere('i.id = :id')
                    ->setParameter('id', $id)
                    ->getQuery()
                    ->getOneOrNullResult();

    }

    public function getLastsTweets($maxResults = 10){

        return $this->createQueryBuilder('t')
            ->select('t')
            ->orderBy('t.createdAt', 'DESC')
            ->setMaxResults($maxResults)
            ->getQuery()
            ->getResult();

    }
}

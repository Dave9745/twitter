<?php
namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use AppBundle\Entity\Tweet;
class LoadTweetData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $messages = [
            'hello world',
            'symfony is cool',
            'i\'m the king',
            'Zig & Sharko',
            'Where is Mathias',
            'No one knows',

        ];
        foreach ($messages as $i => $message) {
            $tweet = new Tweet();
            $tweet->setMessage($message);
            $manager->persist($tweet);
            $this->addReference('tweet-'.$i, $tweet);
        }
        $manager->flush();
    }
    public function getOrder()
    {
        return 10;
    }
}
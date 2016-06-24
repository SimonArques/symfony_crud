<?php
/**
 * Created by PhpStorm.
 * User: EVER
 * Date: 24/06/2016
 * Time: 10:41
 */

namespace CrudBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use app\CrudBundle\Entity\Command;

class LoadCommandData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $em){

        for($i = 1; $i <= 10; $i++)
        {
            $command  = new Command();
            $command->setRef("1234567890" . $i);
            $command->setDateCreated(new \DateTime());
            $command->setCustomer($this->getReference('1234567890' . $i));

            $em->persist($command);
        }

        $em->flush($command);

    }
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
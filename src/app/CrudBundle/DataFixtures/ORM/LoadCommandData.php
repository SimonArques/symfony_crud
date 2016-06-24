<?php
/**
 * Created by PhpStorm.
 * User: EVER
 * Date: 24/06/2016
 * Time: 10:41
 */

namespace CrudBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use app\CrudBundle\Entity\Command;

class LoadCommandData implements FixtureInterface
{

    public function load(ObjectManager $em){

        for($i = 1; $i <= 10; $i++)
        {
            $command  = new Command();
            $command->setRef("1234567890" . $i);
            $command->setDateCreated(new \DateTime('2016-10-10'));


            $this->setCustomer($this->getReference ('1234567890' . $i));

            $em->persist($customer);
        }

        $em->flush($command);

    }
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
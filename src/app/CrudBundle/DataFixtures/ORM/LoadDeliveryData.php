<?php
/**
 * Created by PhpStorm.
 * User: EVER
 * Date: 24/06/2016
 * Time: 11:37
 */

namespace CrudBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use app\CrudBundle\Entity\Delivery;

class LoadDeliveryData extends AbstractFixture implements FixtureInterface
{

    public function load(ObjectManager $em){

        for($i = 1; $i <= 10; $i++) {

            $delivery = new Delivery();
            $delivery->setRef('Delivery n' . $i);
            $delivery->setDateDelivery(new \DateTime());
            $delivery->setCommands($this->getReference('Command n' . $i));
            $delivery->setInvoices($this->getReference('Invoice n' . $i));
        }

        $em->flush($delivery);
    }

    public function getOrder()
    {
        return 5; // the order in which fixtures will be loaded
    }

}
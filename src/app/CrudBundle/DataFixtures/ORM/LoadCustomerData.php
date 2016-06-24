<?php
/**
 * Created by PhpStorm.
 * User: EVER
 * Date: 24/06/2016
 * Time: 10:04
 */

namespace CrudBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use app\CrudBundle\Entity\Customer;


class LoadCustomerData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $em){

        for($i = 1; $i <= 10; $i++)
        {
            $customer = new Customer();
            $customer->setRef("1234567890" . $i);
            $customer->setName('Francis');
            $customer->setEmail('francis@fixture.com');
            $customer->setAddress("rue de l'IMIE");
            $customer->setPostalCode("35000");
            $customer->setCity("Rennes");
            $customer->setTelephone("0299647501");

            $this->setReference('1234567890' . $i, $customer);

            $em->persist($customer);
        }

        $em->flush($customer);

    }
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
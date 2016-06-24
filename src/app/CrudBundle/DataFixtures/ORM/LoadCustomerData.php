<?php
/**
 * Created by PhpStorm.
 * User: EVER
 * Date: 24/06/2016
 * Time: 10:04
 */

namespace CrudBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use app\CrudBundle\Entity\Customer;


class LoadCustomerData
{

    public function load(ObjectManager $em){

        for($i = 1; $i <= 15; $i++){

            $customer = new Customer();
            $customer->setRef('12345') . $i);
            $customer->setName('boulbi' . $i);
            $customer->setAddress($i . "Rue du test");
            $customer->setPostalCode('35000');
            $customer->setCity('Rennes');
            $customer->setTelephone('0234567890');
            $customer->setEmail('test@gromail.com');

            $manager->persist($customer);
            $manager->flush();
        }

    }

}
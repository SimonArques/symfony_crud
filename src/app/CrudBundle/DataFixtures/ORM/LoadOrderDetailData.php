<?php
/**
 * Created by PhpStorm.
 * User: EVER
 * Date: 24/06/2016
 * Time: 11:19
 */

namespace CrudBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use app\CrudBundle\Entity\OrderDetail;

class LoadOrderDetailData implements FixtureInterface
{

    public function load(ObjectManager $em){

        for($i = 1; $i <= 10; $i++)
        {
            $orderDetail  = new OrderDetail();
            $orderDetail->setQte('20' . $i);



            $this->setName($this->getName ('produit1' . $i));

            $em->persist($orderDetail);
        }

        $em->flush($orderDetail);

    }
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
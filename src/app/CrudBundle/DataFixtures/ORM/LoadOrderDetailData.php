<?php
/**
 * Created by PhpStorm.
 * User: EVER
 * Date: 24/06/2016
 * Time: 11:19
 */

namespace CrudBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use app\CrudBundle\Entity\OrderDetail;

class LoadOrderDetailData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $em){

        for($i = 1; $i <= 10; $i++)
        {
            $orderDetail  = new OrderDetail();
            $orderDetail->setQte('20' . $i);

            $orderDetail->setProduct($this->getReference ('produit' . $i));

            $em->persist($orderDetail);
        }

        $em->flush($orderDetail);

    }
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
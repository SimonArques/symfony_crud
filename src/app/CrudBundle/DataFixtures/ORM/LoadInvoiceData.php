<?php
/**
 * Created by PhpStorm.
 * User: EVER
 * Date: 24/06/2016
 * Time: 11:37
 */

namespace CrudBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use app\CrudBundle\Entity\Invoice;

class LoadInvoiceData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $em){

        for($i = 1; $i <= 10; $i++) {

            $invoice = new Invoice();
            $invoice->setRef('Invoice n' . $i);
            $invoice->setDateInvoice(new \DateTime());

            $this->setReference('Invoice n' . $i, $invoice);

            $em->persist($invoice);
        }

        $em->flush($invoice);
    }

    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }

}
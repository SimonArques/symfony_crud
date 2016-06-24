<?php
/**
 * Created by PhpStorm.
 * User: EVER
 * Date: 24/06/2016
 * Time: 11:37
 */

namespace CrudBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use app\CrudBundle\Entity\Invoice;

class LoadInvoiceData implements FixtureInterface
{

    public function load(ObjectManager $em){

        for($i = 1; $i <= 10; $i++) {

            $invoice = new Invoice();
            $invoice->setRef('1234567890' . $i);
            $invoice->setDateInvoice(new \DateTime('2016-10-10'));
        }

        $em->flush($invoice);
    }

    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }

}
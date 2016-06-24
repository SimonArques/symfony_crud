<?php
/**
 * Created by PhpStorm.
 * User: EVER
 * Date: 24/06/2016
 * Time: 10:57
 */

namespace CrudBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use app\CrudBundle\Entity\Product;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em){

        for($i = 1; $i <= 10; $i++)
        {
            $product = new Product();
            $product->setName('produit'. $i);
            $product->setDescription('Un produit cool');
            $product->setPrice("20");

            $this->setReference('produit' . $i, $product);


            $em->persist($product);
        }

        $em->flush($product);

    }
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
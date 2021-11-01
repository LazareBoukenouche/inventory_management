<?php 

namespace App\Http\Service;

class OrderLine
{
    /**
     * @var int
     */
    protected id; 

    /**
     * @var string
     */
    protected product;

    /**
     * @var int
     */
    protected nb_products_ordered;

    /**
     * @var int
     */
    protected nb_products_received;

    /**
     * @var float
     */
    protected price;
}

?>
